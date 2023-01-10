<?php
include '../Controller/ProductController.php';
include '../Model/ProductModel.php';
?>
<html>
<head>
    <title>TEST PHP</title>
    <link href="./style.css" rel="stylesheet"/>
</head>
<body>
<form method="post">
    <div class="main__div">
        <label>Conection to db:</label>
        <?php

        $results = SellectAll();



        echo '<p><button name="add">Add New Note</button>  </p>';
        if(isset($_POST['add'])){
            //echo "<script> location.href='../View/index1.php'; </script>";
            exit;
        }

        ?>
    </div>
</form>

</body></html>
