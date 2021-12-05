<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include('./config.php');

        //verificar a conexão
        $conn = new mysqli($host, $user, $password, $dbname);
    
        if($conn->connect_error){
            die("Erro na conexão: ".$conn->connect_error);
        }
        else {
          $funcionario_id = $_POST['funcionario_id'];
          $nome_funcionario = $_POST['nome_funcionario'];
          $contato_funcionario = $_POST['contato_funcionario'];
          $funcao_funcionario = $_POST['funcao_funcionario'];
          $salario_funcionario = $_POST['salario_funcionario'];

          $sql = "insert into cadastros (funcionario_id, nome_funcionario, contato_funcionario, funcao_funcionario, salario_funcionario) values ('$funcionario_id', '$nome_funcionario', '$contato_funcionario', '$funcao_funcionario', '$salario_funcionario')";
          if($conn->query($sql) === FALSE ){
            echo "Falha: ".$sql."\n".$conn->error;
          }
        }
    }
?>

<script>
  var senha = document.getElementById("senha")
  , confirmaSenha = document.getElementById("confirmaSenha");

  function validatePassword() {
    if(senha.value != confirmaSenha.value) {
      confirmaSenha.setCustomValidity("Senhas não compativeis");
    } else {
      confirmaSenha.setCustomValidity('');
    }
  }

  senha.onchange = validatePassword;
  confirmaSenha.onkeyup = validatePassword;
</script>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Novo Usuário</h1>
</div>
<form class="body row" method="post" action="" onsubmit="validatePassword()">
  <div class="col-md-12 mb-3">
    <label class="form-label"><b>Dados do usuário</b></label>
  </div>
  <div class="col-md-6 mb-3">
    <label for="" class="form-label">Nome do usuário</label>
    <input type="text" required="" class="form-control" id="" name="">
  </div>
  <div class="col-md-6 mb-3">
    <label for="" class="form-label">E-mail do usuário</label>
    <input type="email" required="" class="form-control" id="" name="">
  </div>
  <div class="col-md-4 mb-3">
    <label for="" class="form-label">Data de nascimento</label>
    <input type="date" required="" class="form-control" id="" name="">
  </div>
  <div class="col-md-4 mb-3">
    <label for="" class="form-label">Curso do usuário</label>
    <input type="text" required="" class="form-control" id="" name="">
  </div>
  <div class="col-md-4 mb-3">
    <label for="" class="form-label">Status do usuário</label>
    <input type="text" required="" class="form-control" list="sts" id="" name="">
    <datalist id="sts">
      <option value="Ativado">
      <option value="Desativado">
    </datalist>
  </div>
  <div class="col-md-6 mb-3">
    <label for="" class="form-label">Senha</label>
    <input type="password" required="" value="" class="form-control" id="senha" name="">
  </div>
  <div class="col-md-6 mb-3">
    <label for="" class="form-label">Confirme sua senha</label>
    <input type="password" required="" value="" class="form-control" id="confirmaSenha" name="">
  </div>
  <div class="col-md-3 mb-3">
    <button type="submit" class="btn btn-primary">Salvar</button>
    <button type="submit" class="btn btn-secondary">Voltar</button>
  </div>
</form>