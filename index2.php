<?php
include 'Model/Note.php';
include 'Controller/Functions.php';
?>

<html>
<head>
    <title>TEST PHP</title>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
<form method="post">
    <div class="main__div">
        <label>Conection to db:</label>
        <?php
//        $conn = new mysqli("localhost","root","","mydb1");
//        if($conn->connect_error){
//            echo 'Error';
//        }
//        else{
//            echo 'Ok';
//        }
//
//        $sql_code = "SELECT * FROM noets";


        //if($results = $conn->query($sql_code)) {
            $results = SellectAll();
            foreach ($results as $res){
                $n = new Note($res["note"],$res["date"]);
                echo $n->Show();}
            //}

//            echo '<table border="1">';
//            echo '<tr>';
//            echo '<td>';
//            echo  'Note';
//            echo '</td>';
//            echo '<td>';
//            echo  'Date';
//            echo '</td>';
//            echo '</tr>';
//            foreach ($results as $res){
//                echo '<tr>';
//                echo '<td>';
//                echo  $res["note"];
//                echo '</td>';
//                echo '<td>';
//                echo  $res["date"];
//                echo '</td>';
//
//                echo '</tr>';
//            }
//            echo '</table>';
            //$results->free();
//        }
//        else {
//            echo '<p>Error!</p>';
//        }

        echo '<p><button name="add">Add New Note</button>  </p>';
        if(isset($_POST['add'])){
            echo "<script> location.href='index1.php'; </script>";
            exit;
        }
//        if(isset($_POST['dell'])){
//            foreach ($_POST as $k => $v){
//                if (substr($k,0,2) == "cb"){
//                    $idVeg = substr($k,2);
//                    $del = "DELETE FROM vegetables WHERE id = $idVeg";
//                    if($results=$conn->query($del)){
//                        echo '<p>Delleted :'.$idVeg.'</p>';
//
//                        echo "<script> location.href='index.php'; </script>";
//                    }
//                    else{
//                        echo '<p>Error</p>';
//                        exit;
//                    }
//                }
//            }
//
//            //$results->free();
//        }
        //$conn->close();
        ?>
    </div>
</form>

</body></html>