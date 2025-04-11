<?php

class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    public function_construct(){
        $dns = "mysql:dbname=Usuario;host=localhost";
        $dbUser = "root";
        $dbPass = "";

        try{
            $this->pdo = new PDO($dns, $dbUser, $dbPass);
            return true;
        }
         catch(\throwable $th) {
            return false;
         }
    }

    public function cadastrar(private $nome, $email, $senha){

        $sql = "INSERT INTO usuarios SET nome = :n, email = :e, senha = :s ";

        $stmt = $this->pdo->prepare($sql);

        $stmt ->bindValue(":n", $nome);
        $stmt ->bindValue(":e", $email);
        $stmt ->bindValue(":s", $senha);

        return $stmt->execute();
    }
}