<!DOCTYPE html>
<html>
    <head>        
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <meta charset="UTF-8">
        <title>Previcência</title>
    </head>
    <body class="backgroud-color">
        <div class="container-fluid header-gradient"> 
            <?php require './pages/defaults/header.php'; ?>
        </div>
        <div class="container-fluid">
        <?php require './pages/defaults/main.php'; ?>
        </div>
        <div class="container-fluid">
        <?php require './pages/defaults/footer.php';
        echo "Teste de Git"; ?>
        </div>
        <script src="assets/js/jquery-3.4.1.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.js"></script> 
    </body>
</html>
