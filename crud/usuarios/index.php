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
        <h1 class="h2">Usuários</h1>
        <a href="?p=usuarios/new" type="button" class="btn btn-primary">Cadastrar</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead class="thead-dark">
                <tr>
                    <th><i></i> Nome do Usuário</th>
                    <th><i></i> Curso do Usuário</th>
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