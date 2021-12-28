<!DOCTYPE html>
<html lang="pt-br">
<head>
<script src="../public/js/app.js" ></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | Loja</title>
    <link rel="stylesheet" href="../public/css/app.css">
</head>
<body>

    <?php
    
    include '../components/header.php';
    if (!empty($_SESSION['message'])){
        echo "
            <section id='message' class='message'>
                <p>{$_SESSION['message']}</p>
            </section>
        ";
        unset($_SESSION['message']);
    }
    echo '<main>';
    echo $slot;
    echo '</main>';

    ?>
    
</body>
</html>