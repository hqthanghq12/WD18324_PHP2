<!doctype html>
<html lang="4">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Chao mung den binh nguyen vo tan</h1>
    <table>
        <tr>
            <td>ID</td>
            <td>Ten san pham</td>
            <td>Gia</td>
        </tr>
        <?php foreach ($product as $key => $value){ ?>
        <tr>
            <td><?php echo $value["id"]?></td>
            <td>Ten san pham</td>
            <td>Gia</td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>