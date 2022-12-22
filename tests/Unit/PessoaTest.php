<?php

namespace Tests\Unit;

use App\Entities\Pessoa;
use App\Repositories\Pessoa AS PessoaRepository;
use PHPUnit\Framework\TestCase;

class PessoaTest extends TestCase
{
    /**
     * @dataProvider pessoaProvider
     */
    public function testGetFromDatabase(int $id, string $nome, string $cpf, string $rg, string $dataDeNascimento)
    {
        $repositoryMock = $this
            ->getMockBuilder(PessoaRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $pessoaEntity = new Pessoa();
        $pessoaEntity->setId($id)
            ->setNome($nome)
            ->setCpf($cpf)
            ->setRg($rg)
            ->setDataDeNascimento($dataDeNascimento);

        $repositoryMock->method('getById')
            ->withAnyParameters()
            ->willReturn($pessoaEntity);

        $pessoa = $repositoryMock->getById($id);

        $this->assertEquals($id, $pessoa->getId());
        $this->assertEquals($nome, $pessoa->getNome());
        $this->assertEquals($cpf, $pessoa->getCpf());
        $this->assertEquals($rg, $pessoa->getRg());
        $this->assertEquals($dataDeNascimento, $pessoa->getDataDeNascimento());
    }

    public function pessoaProvider(): array
    {
        return [
            [
                1,
                'Maria da Silva',
                '12345678901',
                '123456789',
                '2000-01-01'
            ]
        ];
    }
}