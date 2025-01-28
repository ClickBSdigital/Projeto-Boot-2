<?php

require './App/Classes/Usuario.php';
// require './App/DB/Database.php';


$objUser = new Usuario();
print_r($objUser);

if(isset($_POST["cadastrar"])){

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $objUser = new Usuario();
    $objUser->nome = $nome;
    $objUser->cpf = $cpf;
    $objUser->senha = $senha;
    $objUser->email = $nome;
    $objUser->id_perfil = $id_perfil;


    echo $nome;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <h1>
        Cadastro de Usuário
    </h1>


    <form>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!-- <div>
    <form method="POST">
  <fieldset disabled>
    <legend>Cadastro de Usuário</legend>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">nome</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Cpf</label>
      <select id="disabledSelect" class="form-select">
        <option>Dijite o cpf</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">email</label>
      <select id="disabledSelect" class="form-select">
        <option>Dijite o email</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">senha</label>
      <select id="disabledSelect" class="form-select">
        <option>Dijite o sennha</option>
      </select>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
        <label class="form-check-label" for="disabledFieldsetCheck">
          Mamão com Acucar!!!!
        </label>
      </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Cancelar</button>
    <button type="submit" name="cadastrar">Cadastrar</button>

  </fieldset>
</form> -->

    </div>
    
</body>
</html>











<!-- // $obj = new Usuario();

// $obj->id_usuario = 15;
// $obj->nome = "ELIANDRO SILVA 16 ";
// $obj->email = "eliandro@eliandro";
// $obj->cpf = "1235466";
// $obj->senha = "65487";
// $obj->id_perfil = 1;

// // echo '<pre>';
// // print_r($obj);
// // echo '</pre>';

// // $obj2 = new Usuario();
// // $obj2->nome = "ELIANDRO SILVA VOLTOU";

// // print_r($obj2);


// // $retorno = $obj->cadastrar();

// // if($retorno){
// //     echo 'USUÁRIO CADASTRADO COM SUCESSOO!!!';
// // }else{
// //     echo 'DEUUUU RUIMMM!!!!';
// // }


// // $busca = $obj->buscar();
// // echo '<pre>';
// // print_r($busca);
// // echo '</pre>';

// // $obj2 = new Usuario();
// // $obj2->id_usuario = 15;

// // echo '<pre>';
// // print_r($obj2);
// // echo '</pre>';

// // $retorno = $obj2->excluir();
// // echo '<br>';
// // echo $retorno;

// $eliandro = $obj->buscar_por_id(17);

// echo '<pre>';
// print_r($eliandro);
// echo '</pre>';
// // formulário pegar os dados via post
// $eliandro->nome = "Alvin novo03 Silva";
// $eliandro->cpf = "65478787";
// $eliandro->email = "alvim@gmmm.com";
// $eliandro->senha = "5454547";

// echo '<pre>';
// print_r($eliandro);
// echo '</pre>';

// $resposta_do_banco = $eliandro->atualizar(); /// retorna 1 ou zero.....

// echo '<pre>';
// // print_r($resposta_do_banco);
// if($resposta_do_banco == 1){
//     echo ' ATULALIZADO COM SUCESSO!!!!';
// }else{
//     echo ' ATUALIZAÇÃO DEU RUIMMM!!!!!';
// }
// echo '</pre>'; -->
