<?php

class Titular
{
    private string $cpf;
    private string $nome;


    public function __construct(string $cpf, string $nome)
    {

        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter mais que 5 caracteres";
            exit();
        }
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }


    public function recuperaNome(): string
    {
        return $this->nome;
    }


}