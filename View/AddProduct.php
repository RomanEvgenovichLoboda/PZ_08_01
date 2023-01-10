<?php
include '../Controller/ProductController.php';
?>
<html>
<head>
    <title>AddProduct</title>
    <link href="../style.css" rel="stylesheet"/>
</head>
<body>
<form action="#" method="post" enctype="multipart/form-data">

    <h3>Add Product:</h3>
    <input type="file" name="image" />
    <p><input type="text" name="name" placeholder="Name" /></p>
    <p><input type="number" name="price" placeholder="Price" /></p>
    <p><input type="text" name="header" placeholder="Header" /></p>
    <p><input type="text" name="description" placeholder="Description" /></p>
    <p></p>
    <p><button type="submit" name="add"> Add </button></p>
</form>
<div id="myDiv">
</body>
</html>
<?php
//$target_dir = "../Images/";
//$target_file = $target_dir.basename($_FILES["image"]["name"]);
//$uploadOk = 1;
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST['add'])) {


    $name = trim(htmlspecialchars($_POST['name']));
    $price = intval($_POST['price']);
    $header = trim(htmlspecialchars($_POST['header']));
    $description = trim(htmlspecialchars($_POST['description']));
    //$imagepath = trim(htmlspecialchars($_POST['image']));

    if($name =="" || $price == "" || $header == "" || $description == ""){
        echo "Fill in all the fields";
        exit();
    }
        if(move_uploaded_file($_FILES['image']['tmp_name'], '../Images/'.$_FILES['image']['name'])){
            echo $_FILES['image']['size'];
            $imagepath = $_FILES['image']['name'];
            AddProduct($name, $price, $header, $description, $imagepath);
        }



}
    //if($nt==""||$dt=="") exit();
    //echo 'Date:'.$dt.'<br>';
//    $conn = new mysqli("localhost","root","","mydb1");
//    $sql_code = 'INSERT INTO `noets`( `note`, `date`) VALUES ("'.$nt.'" , "'.$dt.'")';
//
//    if($results=$conn->query($sql_code)){
//        echo '<p>Data added</p>';
//        //echo "<script> location.href='../View/index3.php'; </script>";
//    }
//    else{
////            $err = mysqli_errno();
////            echo 'Error code:'.$err.'<br>';
//        echo '<p>Data not added</p>';
//    }
//    //mysql_free_result()
//    $results->free();
//    $conn->close();

//}

?>