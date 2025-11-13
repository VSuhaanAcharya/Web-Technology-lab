<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor count</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h1{
            color:#333;
        }
        p{
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <?php
    $file='counter.txt';
    $count=file_exists($file)?(int)file_get_contents($file):0;
    file_put_contents($file,++$count);
    ?>
    <h1>V Suhaan Acharya-4MW23CS178</h1>
    <h1>Visitor counter</h1>
    <p>Number of visitor <strong><?php echo $count;?></strong></p>

</body>
</html>
