<html>
<head>
    <title>AddProduct</title>
    <link href="../style.css" rel="stylesheet"/>
</head>
<body>
<?php
include './Model/ProductModel.php';

function SellectAll(){
    $conn = new mysqli("localhost","root","","mydb1");
    if($conn->connect_error){
        echo 'Error';
    }
    else{
        echo 'Ok';
    }
    $sql_code = "SELECT * FROM products";
    if($results=$conn->query($sql_code)){
        //$results = $conn->query($sql_code);
        foreach ($results as $res){
            $prod = new ProductModel($res["id"],$res["name"],$res["price"],$res["header"],$res["description"],$res["imagepath"]);
            echo "<div class='div__product'>";
            echo $prod->ShowProduct();
            echo "<button>Dell</button>";
            echo "<button>Edit</button>";
            echo  "</div>";

        }
        $results->free();
        $conn->close();
        //return $results;
    }
}
function AddProduct($name,$price,$header,$description,$imagepath){
    $conn = new mysqli("localhost","root","","mydb1");
    if($conn->connect_error){
        echo 'Error';
    }
    else{
        echo 'Ok';
    }
    $sql_code = 'INSERT INTO `products`(`name`,`price`,`header`,`description`,`imagepath`) VALUES ("'.$name.'" , "'.$price.'", "'.$header.'", "'.$description.'", "'.$imagepath.'")';
    if($results=$conn->query($sql_code)){
        echo '<p>Data added</p>';
        //echo "<script> location.href='../View/index3.php'; </script>";
    }
    else{
//            $err = mysqli_errno();
//            echo 'Error code:'.$err.'<br>';
        echo '<p>Data not added</p>';
    }
    //$results->free();
    $conn->close();
}
?>
</body></html>