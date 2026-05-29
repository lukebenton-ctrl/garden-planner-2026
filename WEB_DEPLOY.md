# Web Deployment — SiteGround Git Auto-Pull

This document covers wiring the repo to `garden.lukebenton.com` on SiteGround so every `git push` auto-deploys.

## What gets deployed

The entire repo is pulled to `public_html`. `.htaccess` denies direct web access to sensitive files (`config.php`, `.sql`, `.sh`, `.md`). The PHP backend (`api/`, `bootstrap.php`) provides the persistence layer; the static planner (`index.html`) is served as-is.

## One-time SiteGround setup

### 1. Confirm SSL is live

**Site Tools → Security → SSL Manager** — confirm Let's Encrypt is installed for `garden.lukebenton.com`. Then **HTTPS Enforce** → ON.

### 2. Wire SiteGround Git to this repo

**Site Tools → Devs → Git**

1. Click **Create**.
2. Choose **"Create from external"** (or "Add" → "From remote URL").
3. **Repository URL**: `https://github.com/lukebenton-ctrl/garden-planner-2026.git`
4. **Branch**: `claude/add-garden-web-view-MxQNT` (or `main` once merged)
5. **Path on server**: `garden.lukebenton.com/public_html`
6. **Authentication**: GitHub PAT (Personal Access Token) with `repo` read scope, since the repo is private. Create at https://github.com/settings/tokens.
7. Save. SiteGround does the initial clone.

### 3. Enable auto-deploy on push

In the same Git panel for the new repo, find **"Automatic deployment"** and toggle ON. SiteGround uses a webhook on the GitHub side; it'll prompt you to add the webhook URL to GitHub (Settings → Webhooks → Add webhook → paste URL, content type JSON, event: push).

### 4. Run the bootstrap installer

Visit **https://garden.lukebenton.com/bootstrap.php** in a browser.

Fill in the form with the SiteGround MySQL credentials:
- **DB host**: `localhost`
- **DB name**: `dbjnxwauotrgiv`
- **DB user**: `uyp86ufa3xguf`
- **DB password**: (the one you rotated — see security note below)

Click **Install**. The script creates the schema, writes `config.php` (with `0600` permissions), and shows a success page.

### 5. Delete `bootstrap.php` immediately

**Site Tools → File Manager → garden.lukebenton.com → public_html → bootstrap.php → Delete**

⚠️ This file is unauthenticated. Leaving it on the server lets anyone re-trigger setup. Delete it.

(Note: it's still in the git repo, so future pulls would re-create it. Either delete it from the repo too once setup is permanent, or accept that you re-delete it after future deploys until then.)

### 6. (Recommended) Protect the URL

**Site Tools → Security → Protected URLs** — add HTTP basic auth in front of the whole subdomain. Pick a username + password. This keeps the planner private without needing in-app login.

## After setup

- Visit `https://garden.lukebenton.com/` — the planner loads, checkbox state is now persisted to MySQL.
- Toggle some checkboxes, reload the page — state survives. From any device.
- GitHub Pages version (`https://lukebenton-ctrl.github.io/garden-planner-2026/`) still works as a static fallback with localStorage-only state.

## Ongoing development

1. Claude (or you) commits + pushes to `claude/add-garden-web-view-MxQNT` (or `main`).
2. GitHub webhook fires → SiteGround pulls → site updates within seconds.
3. No DB schema changes needed for routine content edits. For schema changes, update `db/schema.sql` and run the new statements via **Site Tools → MySQL → phpMyAdmin**.

## Security notes

- **`config.php` lives at the web root** but is denied via `.htaccess`. Verify by visiting `https://garden.lukebenton.com/config.php` — you should get **403 Forbidden**.
- **Rotate the DB password** before running the bootstrap installer (the original was pasted in chat). Site Tools → MySQL → Users → change password → use the new one in bootstrap.
- **No in-app auth yet.** Rely on Protected URLs (step 6) for privacy.
- **No CSRF protection yet** on the API. Acceptable because the API only accepts `application/json` Content-Type, which a CSRF form can't send cross-origin. Add a token to `config.php` + check on every API request when you add features.

## Troubleshooting

| Symptom | Likely cause | Fix |
|---|---|---|
| `503 Not installed` on `/api/state.php` | bootstrap not run | run `/bootstrap.php` |
| `500 DB connection failed` | wrong creds in `config.php` | delete `config.php`, re-run bootstrap |
| Checkboxes don't persist across devices | API unreachable, app fell back to localStorage | open DevTools Network tab, check `/api/state.php` request |
| Auto-deploy not firing on push | webhook not registered or token expired | re-add webhook in GitHub repo settings |
