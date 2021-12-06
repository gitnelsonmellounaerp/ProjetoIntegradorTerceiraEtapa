<?php 

    include('./config.php');

    if($con->connect_error){
        die("Erro na conexão: ".$con->connect_error);
    }

    
if(isset($_GET['deleteid'])){

    $id = $_GET['deleteid'];

    $sql = "delete * from pacientes where id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "deletado com sucesso";
    }
    
}






?>