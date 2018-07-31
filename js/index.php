<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JS</title>
</head>
<body>
<ol>
    <?php 
        if ($handle = opendir('.')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    echo "<li><a href='$entry'>$entry</a></li>";
                }
            }
            closedir($handle);
        }
    ?>
</ol>
</body>
</html>
