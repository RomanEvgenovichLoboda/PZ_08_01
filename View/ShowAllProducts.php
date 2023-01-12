<?php
include '../Controller/ProductController.php';
include '../Model/ProductModel.php';
?>
<html>
<head>
    <title>TEST PHP</title>
<!--    <link href="./style.css" rel="stylesheet"/>-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">
<form method="post" action="#">
    <div class="row" >
        <div class=" col-sm-3 border border-light p-2">
            <div class="input-group">
                <input class="form-control" name="sinp" placeholder="search" </input>
                <button type="submit" name="sbtn" class="btn btn-outline-primary">Search</button>
            </div>

           <button class="btn btn-info m-3" name="add">Add New Product</button>
            <p></p>
            <?php
            if(isset($_POST['sbtn'])){
                $searcP = trim(htmlspecialchars($_POST['sinp']));
                SearchProduct($searcP);
            }
            if(isset($_POST['edbut'])){
                $edid = intval($_POST['edbut']);
                EditProduct($edid);
            }
            if(isset($_POST['edok'])){
                $okid = intval($_POST['edok']);
                $okname = trim(htmlspecialchars($_POST['okname']));
                $okprice = intval($_POST['okprc']);
                $okhdr = trim(htmlspecialchars($_POST['okhdr']));
                $okdscr = trim(htmlspecialchars($_POST['okdscr']));
                SaveChanges($okid,$okname,$okprice,$okhdr,$okdscr);
            }
            ?>

        </div>
        <div class=" col-sm-9" >

            <?php

            //SellectAll();
            if(isset($_POST['delbut'])){
                $delid = intval($_POST['delbut']);
                DelleteProduct($delid);
            }
            if(isset($_POST['add'])){
                echo "<script> location.href='../View/AddProduct.php'; </script>";

            }
            else{
                SellectAll();
            }

            ?>
        </div>
    </div>
</form>

</body></html>
