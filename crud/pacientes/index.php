<html lang="pt-br">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>

<body>

<?php
session_start();
    include('./config.php');

    if($con->connect_error){
        die("Erro na conexão: ".$con->connect_error);
    }

    $query = "select * from pacientes order by paciente_id";
    $result = mysqli_query($con, $query);
    $linha = mysqli_fetch_assoc($result);
    $num_rows = mysqli_num_rows($result);
    
    $paciente_id = $_GET['paciente_id'];
    $paciente_nome = $_GET['paciente_nome'];
    $dt_nasc = $_GET['dt_nasc'];
    $sexo = $_GET['sexo'];
    $endereco = $_GET['endereco'];
    $numero = $_GET['numero'];
    $complemento = $_GET['complemento'];
    $bairro = $_GET['bairro'];
    $cidade = $_GET['complemento'];
    $cep = $_GET['cep'];
    $email = $_GET['email'];
    $celular = $_GET['celular'];
    $telefone = $_GET['telefone'];
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];
    $hipertensao = $_GET['hipertensao'];
    $diabetes = $_GET['diabetes'];
    $fumante = $_GET['fumante'];
    $cardiaco = $_GET['cardiaco'];
    $observacoes = $_GET['observacoes'];
    $medicacao = $_GET['medicacao'];
    
?>

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
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <div class="body row">
                <div class="col-md-4 mb-3">
                    <input class="form-control" id="myInput" type="text" placeholder="Busca por nome">
                </div>
                <div class="col-md-2 mb-3">
                    <label class="form-check-label" for="">Hipertensão</label>
                    <input type="checkbox" class="form-check-input" type="checkbox" role="switch" id="" name="">
                </div>
                <div class="col-md-2 mb-3">
                    <label class="form-check-label" for="">Diabetes</label>
                    <input type="checkbox" class="form-check-input" type="checkbox" role="switch" id="" name="">
                </div>
                <div class="col-md-2 mb-3">
                    <label class="form-check-label" for="">Fumante</label>
                    <input type="checkbox" class="form-check-input" type="checkbox" role="switch" id="" name="">
                </div>
                <div class="col-md-2 mb-3">
                    <label class="form-check-label" for="">Doença Cardíaca</label>
                    <input type="checkbox" class="form-check-input" type="checkbox" role="switch" id="" name="">
                </div>
            </div>
            <thead class="thead-dark">
                <tr>
                    
                    <th><i></i> NOME</th>
                    <th><i></i> DATA DE NASCIMENTO</th>
                    <th><i></i> SEXO</th>
                    <th><i></i></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "
                        <tr>
                            <td>".$row['paciente_nome']."</td>
                            <td>".$row['dt_nasc']."</td>
                            <td>".$row['sexo']."</td>
                            <td class='text-right'>
                                <button type='submit' color='grey' title='Visualizar' data-feather='eye' data-bs-toggle='modal' data-bs-target='#staticBackdrop' id=".$row['paciente_id']."></button>
                                ⠀⠀
                                <button type='submit' color='blue' title='Editar' data-feather='edit'></button>
                                ⠀⠀
                                <button type='delete' color='red' title='Remover' data-feather='trash'></button>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "";
                }
                ?>
            </tbody>
        </table>
    </div>
<?php
    $con->close();
?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>


</html>