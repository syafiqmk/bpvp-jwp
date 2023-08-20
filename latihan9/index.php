<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 9</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table tr td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <table border="1" cellSpacing="0">
        <?php 
            for ($i=1; $i <= 4; $i++) { ?>
                <tr>
                <?php for($j = 1; $j <= 4; $j++) { ?>
                    <td><?= "$i,$j" ?></td>
                <?php } ?>
                </tr>
            <?php }
        ?>
    </table>
</body>
</html>