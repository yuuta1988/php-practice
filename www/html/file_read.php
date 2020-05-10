<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>HTML5サンプル</title>
</head>
<body>
    <table border="1">
    <tr>
        <th>文章</th>
    </tr>
    <?php
    $file = fopen('index.php', 'rb');
    flock($file, LOCK_SH);
    while ($line = fgets($file)) {
        //var_dump($line);exit;
        print '<tr>';
            print '<td>' . $line . '</td>';
        print '</tr>';
    }
    flock($file, LOCK_UN);
    fclose($file);
    ?>
    </table>
</body>
</html>
