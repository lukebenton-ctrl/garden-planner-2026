# Web Deployment — GitHub Actions → SiteGround

Every `git push` to `main` triggers a GitHub Action that rsyncs the repo to
`garden.lukebenton.com/public_html` over SSH. SiteGround's built-in Git tool
doesn't support pulling from external GitHub repos, so we use this instead.

## One-time setup

### 1. Confirm SSL is live
**Site Tools → Security → SSL Manager** — confirm Let's Encrypt is active for `garden.lukebenton.com`. Then **HTTPS Enforce** → ON.

### 2. Replace the SSH key in SiteGround
The earlier `garden` key was in a format the Action's rsync can't load. Replace it.

1. **Site Tools → Devs → SSH Keys Manager** → delete the existing `garden` key
2. Click **Import Public Key** → name it `github-actions` → paste the new public key (see chat)

### 3. Add four secrets to GitHub
**GitHub repo → Settings → Secrets and variables → Actions → New repository secret**, four times:

| Secret name | Value |
|---|---|
| `SITEGROUND_HOST` | `gvam1301.siteground.biz` |
| `SITEGROUND_PORT` | `18765` |
| `SITEGROUND_USER` | `u2060-ndz1sldvhgts` |
| `SITEGROUND_PATH` | `/home/customer/www/garden.lukebenton.com/public_html/` |
| `SITEGROUND_SSH_KEY` | the full private key (begins `-----BEGIN OPENSSH PRIVATE KEY-----`) |

### 4. Trigger the first deploy
Either:
- Push any small commit to `main`, OR
- **GitHub → Actions tab → "Deploy to SiteGround" workflow → Run workflow → main**

Watch the run. Green check = files are on the server.

### 5. Run the installer
Visit **`https://garden.lukebenton.com/bootstrap.php`** in a browser.

Fill in MySQL creds:
- **DB host**: `localhost`
- **DB name**: `dbjnxwauotrgiv`
- **DB user**: `uyp86ufa3xguf`
- **DB password**: the freshly-rotated one

Click **Install**. The script creates the schema, writes `config.php` (0600 perms), and shows a success page.

### 6. Delete `bootstrap.php` from the server
**Site Tools → File Manager → garden.lukebenton.com → public_html → bootstrap.php → Delete**

(`bootstrap.php` is still in the repo. After you confirm install worked, ask Claude to remove it from the repo so it doesn't reappear on the next deploy. Even if it does, it refuses to run setup again once `config.php` exists.)

### 7. (Recommended) Lock the URL
**Site Tools → Security → Protected URLs** — basic auth on `garden.lukebenton.com/` keeps the planner private.

## After setup

- Visit `https://garden.lukebenton.com/`. Checkbox state persists across all devices.
- Every push to `main` redeploys via GitHub Actions (~30 seconds).

## Security notes

- **`config.php` denied at the web root** via `.htaccess`. Visit `https://garden.lukebenton.com/config.php` → expect **403**.
- **Rotate the DB password** before bootstrap (old one was pasted in chat).
- **No in-app auth.** Rely on Protected URLs for privacy.
- **No CSRF protection yet** on the API. Acceptable because the API only accepts `application/json` Content-Type (CSRF forms can't send it cross-origin). Add a token-based check when more endpoints are added.

## Troubleshooting

| Symptom | Likely cause | Fix |
|---|---|---|
| Action fails: `Permission denied (publickey)` | Wrong key in `SITEGROUND_SSH_KEY` or public key not in SiteGround | Re-paste exact private key into secret; re-import public key in SG SSH Keys |
| Action fails: `Connection timed out` | Wrong host/port | Verify against SG → Devs → SSH Credentials |
| `503 Not installed` on `/api/state.php` | bootstrap not run yet | Run `/bootstrap.php` |
| `500 DB connection failed` | wrong creds in `config.php` | delete `config.php` via File Manager, re-run bootstrap |
| Checkboxes don't persist across devices | API unreachable, app fell back to localStorage | DevTools Network tab → check `/api/state.php` request status |
