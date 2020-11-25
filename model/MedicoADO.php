<?php
require_once 'Medico.php';
class MedicoADO extends Medico{
    
    protected function cadastrar(Medico $m){
        $m1=new Medico();
        $m1->setNome($m->getNome());
        $m1->setEmail($m->getEmail());
        $m1->setSenha($m->getSenha());
        $m1->setDt_criacao(date('d/m/Y H:i'));
        $m1->setDt_alteracao(date('d/m/Y H:i'));
    }
}

