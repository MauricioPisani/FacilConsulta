<?php

class Medico{
private $id;
private $email;
private $nome;
private $senha;
private $dt_criacao;
private $dt_alteracao;

public function __construct() {

}

function getId() {
    return $this->id;
}

function getEmail() {
    return $this->email;
}

function getNome() {
    return $this->nome;
}

function getSenha() {
    return $this->senha;
}

function getDt_criacao() {
    return $this->dt_criacao;
}

function getDt_alteracao() {
    return $this->dt_alteracao;
}

function setId($id) {
    $this->id = $id;
}

function setEmail($email) {
    $this->email = $email;
}

function setNome($nome) {
    $this->nome = $nome;
}

function setSenha($senha) {
    $this->senha = $senha;
}

function setDt_criacao($dt_criacao) {
    $this->dt_criacao = $dt_criacao;
}

function setDt_alteracao($dt_alteracao) {
    $this->dt_alteracao = $dt_alteracao;
}



}
;