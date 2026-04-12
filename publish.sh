#!/bin/bash
# Initialize and push garden-planner-2026 to GitHub
# Prereqs: git + GitHub CLI (gh) installed and authenticated (`gh auth login`)
# Usage: bash publish.sh [public|private]

set -e
VISIBILITY="${1:-public}"

git init -b main
git add .
git commit -m "Merge current garden plan into repo — April 2026 snapshot

- Add lukes_complete_garden_plan.html as index.html (tabbed interactive plan)
- Update README with current beds, hydro systems, varieties, and key dates
- Add reference/ directory with season layouts, dot maps, and checklists"

gh repo create garden-planner-2026 --"$VISIBILITY" --source=. --remote=origin --push

# Enable GitHub Pages (serves index.html from main branch root)
echo ""
echo "Enabling GitHub Pages..."
gh api -X POST "repos/$(gh api user -q .login)/garden-planner-2026/pages" \
  -f "source[branch]=main" -f "source[path]=/" 2>/dev/null || \
  echo "(Pages may already be enabled, or enable manually: Settings → Pages)"

echo ""
echo "✅ Pushed. Repo: https://github.com/$(gh api user -q .login)/garden-planner-2026"
echo "🌐 Pages:  https://$(gh api user -q .login).github.io/garden-planner-2026/"
echo "   (Pages site takes ~1 min to go live on first deploy)"
