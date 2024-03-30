<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 3</title>
</head>
<body>
<div id="form">
    <form action="save.php" method="POST">
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <label for="category">Category</label>
        <select name="category" required>
            <?php
            $files=scandir('./categories');
            foreach($files as $item)
            {
                if('.' === $item || '..' === $item) continue;
                if (is_dir('categories/'.$item))
                {
                    echo "<option value=$item> $item" . "</option>";
                }
            }
            ?>
        </select>
        <label for="title">Title</label>
        <input type="text" name="title" required>

        <label for="description">Description</label>
        <textarea rows="3" name="description"></textarea>

        <input type="submit" value="Save">

    </form>
</div>
<div id="table">
    <table>
        <thead>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        </thead>
        <tbody>

        <?php
        $categoriesDir = 'categories';
        $dir = opendir($categoriesDir);

        while ($category = readdir($dir)) {
            $categoryPath = $categoriesDir . '/' . $category;

            if ($category === '.' || $category === '..')
                continue;

            if (is_dir($categoryPath)) {
                $subdir = opendir($categoryPath);

                while ($item = readdir($subdir)) {
                    $itemPath = $categoryPath . '/' . $item;

                    if ($item === '.' || $item === '..')
                        continue;

                    if (is_file($itemPath)) {
                        $description = file_get_contents($itemPath);

                        echo '<tr>';
                        echo "<td>$category</td>";
                        echo "<td>" . substr($item, 0, -4) . "</td>";
                        echo "<td>$description</td>";
                        echo '</tr>';
                    }
                }

                closedir($subdir);
            }
        }

        closedir($dir);
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
