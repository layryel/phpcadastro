<?php

require_once("pessoa.class.php");

class Teste{
    private $nome;
    private $telefone;
    private $origem;
    private $datadecont;


    public function __construct(){
        $pessoa = new Pessoa();

        $pessoa->setNome($_POST['nome']);
        echo $pessoa->getNome();

    }


    public function __construct(){
        $pessoa = new Pessoa();

        $pessoa->setTelefone($_POST['telefone']);
        echo $pessoa->getTelefone();

    }

    public function __construct(){
        $pessoa = new Pessoa();

        $pessoa->setDatadecont($_POST['datadecont']);
        echo $pessoa->getDatadecont();

    }

    public function __construct(){
        $pessoa = new Pessoa();

        $pessoa->setOrigem($_POST['origem']);
        echo $pessoa->getOrigem();

    }

}new Teste();

?>