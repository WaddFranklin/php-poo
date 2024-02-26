<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaCpf();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular): void
    {
        if (strlen($nomeTitular) < 5) {
            throw new Exception("O nome precisa ter mais do que 5 caracteres!");
        }
    }
}
