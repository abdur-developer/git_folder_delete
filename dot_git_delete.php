<?php
// .git/objects এর path (প্রয়োজনে adjust করুন)
$basePath = __DIR__ . '/.git/objects';

// Check if the path exists
if (!is_dir($basePath)) {
    die("❌ .git/objects directory not found.\n");
}

// Recursive file delete function
function deleteGitObjects($dir) {
    $count = 0;
    foreach (scandir($dir) as $folder) {
        if ($folder === '.' || $folder === '..') continue;

        $folderPath = $dir . '/' . $folder;

        if (is_dir($folderPath)) {
            foreach (scandir($folderPath) as $file) {
                if ($file === '.' || $file === '..') continue;

                $filePath = $folderPath . '/' . $file;
                if (is_file($filePath)) {
                    if (unlink($filePath)) {
                        echo "✅ Deleted: $filePath<br>";
                        $count++;
                    } else {
                        echo "❌ Failed to delete: $filePath<br>";
                    }
                }
            }
        }
    }
    echo "<br>✅ Total files deleted: $count";
}

// Run the deletion
deleteGitObjects($basePath);
?>
