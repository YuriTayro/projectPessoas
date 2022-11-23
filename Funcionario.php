<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa{
    //Atributos
    private $setor;
    private $trabalhando;

    //Metodos
    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }

    public function getSetor(){
        return $this-> setor;
    }

    public function getTrabalhando(){
        return $this->trabalhando;
    }

    public function setSetor($setor){
        $this->setor=$setor;
    }

    public function setTrabalhando($trabalhando){
        $this->trabalhando=$trabalhando;
    }

    
}