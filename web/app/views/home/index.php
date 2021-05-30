<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="/public/css/index.css">
</head>
<body>
    <header>
        Ana are <?php echo ' '.$data[0]?>
    </header>

    <main>
        <?php 

            for($i = 1; $i<= 10; $i = $i + 1){
                echo 'Desigur ca are '.$data[0].'<br>';
            }

        ?>
    </main>

    <footer>
        <?php  
            echo $data[1].' ok '.$data[1];
        ?>
    </footer>
</body>
</html>