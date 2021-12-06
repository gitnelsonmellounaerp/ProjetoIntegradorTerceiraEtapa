<?php
session_start();
    include('./config.php');

    if($con->connect_error){
        die("Erro na conexão: ".$con->connect_error);
    }

    
?>

<html lang="pt-br">



<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="/crud/css/datatables.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="/crud/js/datatables.js"></script>

<script>
    $(document).ready( function () {
    $('#example').DataTable();
} );
</script>
</head>

<body>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pacientes</h1>
        <a href="?p=pacientes/new" type="button" class="btn btn-primary">Cadastrar</a>
    </div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">INFORMAÇÕES PACIENTE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> <!-- Informações corpo do modal -->
        <?php 
 
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
    <div class="table-responsive" >
        <table class="table table-striped table-sm display" id="example">
            <thead class="thead-dark">
                <tr>
                    <th>NOME</th>
                    <th>DATA DE NASCIMENTO</th>
                    <th>SEXO</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
                $query = "select * from pacientes order by paciente_id";
                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_assoc($result);
                
                if($result) {
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['paciente_id'];
                        $paciente_nome = $row['paciente_nome'];
                        $dt_nasc = $row['dt_nasc'];
                        $sexo = $row['sexo'];
                        echo '
                        <tr>
                        <td>'.$paciente_nome.'</td>
                        <td>'.$dt_nasc.'</td>
                        <td>'.$sexo.'</td>

                        <td>
                        <button color="grey" title="Visualizar" data-feather="eye" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><a href=""></a></button>
                        ⠀⠀
                        <button class="btn btn-primary" title="Editar" ><a href="pacientes/editar.php?editarid='.$id.'" class="text-light">EDITAR</a></button>
                        ⠀⠀
                        <button color="red" title="Remover" ><a href="?p=pacientes/delete?deleteid='.$id.'" class="text-light">DELETAR</a></button>
                        </td>

                        </tr>';
                    }
                } 
            ?>



            </tbody>
            <tfoot>
            <tr>
                <th>NOME</th>
                <th>DATA DE NASCIMENTO</th>
                <th>SEXO</th>
                <th></th>
            </tr>
            </tfoot>
        </table>
    </div>
<?php
    $con->close();
?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>


</html>