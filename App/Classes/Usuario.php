<?php

require './App/DB/Database.php';


class Usuario{

    public int $id_usuario;
    public string $nome;
    public string $email;
    public string $cpf;
    public string $senha;
    public int $id_perfil;


    public function cadastrar(){

        $db = new Database('usuario');

        $res = $db->insert(
                [
                    'nome'=> $this->nome,
                    'email'=> $this->email,
                    'cpf'=> $this->cpf,
                    'senha'=> $this->senha,
                    'id_perfil'=> $this->id_perfil,
                ]
            );
        return $res;
    }

    public function buscar($where=null,$order=null,$limit=null){
        $db = new Database('usuario');
        $res = $db->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
        return $res;
    }

    public function buscar_por_id($id){
        $db = new Database('usuario');
        $obj = $db->select('id_usuario ='.$id)->fetchObject(self::class);
        return $obj;     //RETORNA UM OBIJETO DA CLASSE USUARIO!!!
    }

    public function atualizar(){
        $db = new Database('usuario');

        $res = $db->update('id_usuario ='.$this->id_usuario,
                            [
                                "nome" => $this->nome,
                                "email" => $this->email,
                                "cpf" => $this->cpf,
                                "senha" => $this->senha,
                                "id_perfil" => $this->id_perfil
                            ]
                        );

        return $res;
    }

    public function excluir(){
        $db = new Database('usuario');
        $res = $db->delete('id_usuario ='.$this->id_usuario);
        return $res;
    }
}

// $obj = new Usuario();

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
// echo '</pre>';
