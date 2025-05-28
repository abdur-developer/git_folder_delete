# 🔥 Git Object Cleaner (PHP Based)

This is a simple PHP script to **clean all Git object files** from the `.git/objects/` directory — especially helpful when you're unable to delete files via cPanel's File Manager due to permission issues.

> ⚠️ Use with caution: this will permanently delete internal Git data.

---

## 📌 Features

- Deletes all files inside `.git/objects/[subfolders]`
- Recursively traverses subdirectories
- Works via browser (no terminal/SSH needed)
- Ideal for shared hosting environments (like cPanel)
- No external dependency

---

## 📂 Folder Structure (What It Targets)

public_html/
└── .git/
└── objects/
├── 00/
│ └── a1b2c3...
├── 1a/
├── d4/
└── ...


✅ This script will delete all files inside those subfolders, but leave the folder structure intact.

---

## 🚀 How to Use

1. Copy the script from [`delete_git_files.php`](delete_git_files.php)
2. Upload it to your hosting account under `public_html/`
3. Open the file in your browser:

https://yourdomain.com/dot_git_delete.php


4. Watch the file deletion output in the browser
5. ✅ Done! Now delete this script for security.

---

## 🛑 Warning

- Do **not** use this on active Git repositories you rely on.
- This script is meant for cleaning up accidentally uploaded `.git` folders on live servers.
- Always back up if you're unsure.

---

## ✅ License

MIT — use freely with proper caution and attribution.
