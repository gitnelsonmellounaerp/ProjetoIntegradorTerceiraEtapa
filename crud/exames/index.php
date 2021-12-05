<?php
session_start();
    include('./config.php');

    if($con->connect_error){
        die("Erro na conexão: ".$con->connect_error);
    }

    $query = "select * from cadastros order by nome_funcionario";
    $result = mysqli_query($con, $query);
    $num_rows = mysqli_num_rows($result);
?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Exames</h1>
        <a href="?p=exames/new" type="button" class="btn btn-primary">Cadastrar</a>
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
                    <th><i></i> Nome do Paciente</th>
                    <th><i></i> Data do Exame</th>
                    <th><i></i></th>
                </tr>
            </thead>
            <tbody>

                <?php
                if($num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<tr>
                            <td>".$row['funcionario_id']."</td>
                            <td>".$row['nome_funcionario']."</td>
                            <td class='text-right'>
                                <button type='submit' color='grey' title='Visualizar' data-feather='eye'></button>
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

</body>
</html>