<?php
class Pessoa {
    public $nome;
    public $idade;  
    public $cpf;
    public $email;

    public function __construct($nome, $idade, $cpf, $email) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
        $this->email = $email;
    }

    public function saudar() { 
        return "<h2>Olá, meu nome é " . $this->nome . " e é um prazer estar aqui.</h2>";
    }

    public function exibirCartaoDeVisita() {
        return "<h2>Segue o meu cartão de visitas:</h2>
                <b>Nome:</b> {$this->nome}<br>
                <b>Idade:</b> {$this->idade} anos<br>
                <b>CPF:</b> {$this->cpf}<br>
                <b>Email:</b> {$this->email}<br>";
    }
}
?>
