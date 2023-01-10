<html>
<head>
    <title>DZ_Z1</title>
    <link href="../style.css" rel="stylesheet"/>
</head>
<body>
<form method="post" action="#">

<h3>Add Note:</h3>
    <p><input type="text" name="note" placeholder="Add Note" /></p>

    <p><input type="datetime-local" name="dat" placeholder="Add Date" /></p>

    <p><button type="submit" name="addNote"> Add </button></p>
</form>
<div id="myDiv">
</body>
</html>
<?php
if(isset($_POST['addNote'])){
    //echo '<p>Thank you for subscribing</p>';
   $nt = trim(htmlspecialchars($_POST['note']));
   $dt = $_POST['dat'];
    if($nt==""||$dt=="") exit();
    //echo 'Date:'.$dt.'<br>';
    $conn = new mysqli("localhost","root","","mydb1");
    $sql_code = 'INSERT INTO `noets`( `note`, `date`) VALUES ("'.$nt.'" , "'.$dt.'")';
    //$sql_code = "INSERT INTO `noets`(`note`,`date`) VALUES (\'".$_POST['note']."\',".$_POST['dat'].")";
//        $res=$conn->query($sql_code);
//        $err = mysqli_errno();
//        if($err){
//            echo 'Error code:'.$err.'<br>';
//        }


    if($results=$conn->query($sql_code)){
        echo '<p>Data added</p>';
        echo "<script> location.href='../View/index3.php'; </script>";
    }
    else{
//            $err = mysqli_errno();
//            echo 'Error code:'.$err.'<br>';
        echo '<p>Data not added</p>';
    }
    //mysql_free_result()
    $results->free();
    $conn->close();

}

?>