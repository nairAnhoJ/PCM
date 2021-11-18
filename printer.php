<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css?v=<?php echo time(); ?>">
    <script src="./jquery/jquery-3.6.0.js"></script>
    <title>Printers</title>
</head>
<body onload="navsel()">
    
    <!-- ========================= Side Bar ========================= -->

    <?php include 'nav.php' ?>

    <!-- ========================= Buttons ========================= -->

    

    <!-- ========================= Buttons ========================= -->

    <script>
        function navsel() {
            document.getElementById('acp').className = 'active';
        }
    </script>

</body>
</html>