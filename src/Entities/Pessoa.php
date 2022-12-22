<?php

namespace App\Entities;

class Pessoa
{
    private int $id;

    private string $nome;

    private string $rg;

    private string $cpf;

    private string $dataDeNascimento;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Pessoa
     */
    public function setId(int $id): Pessoa
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     * @return Pessoa
     */
    public function setNome(string $nome): Pessoa
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string
     */
    public function getRg(): string
    {
        return $this->rg;
    }

    /**
     * @param string $rg
     * @return Pessoa
     */
    public function setRg(string $rg): Pessoa
    {
        $this->rg = $rg;
        return $this;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     * @return Pessoa
     */
    public function setCpf(string $cpf): Pessoa
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataDeNascimento(): string
    {
        return $this->dataDeNascimento;
    }

    /**
     * @param string $dataDeNascimento
     * @return Pessoa
     */
    public function setDataDeNascimento(string $dataDeNascimento): Pessoa
    {
        $this->dataDeNascimento = $dataDeNascimento;
        return $this;
    }
}