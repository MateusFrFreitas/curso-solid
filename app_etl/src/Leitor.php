<?php

namespace src;

use src\Arquivo;
use Exception;

class Leitor
{
	private $diretorio;
	private $arquivo;

	public function getDiretorio(): string
	{
		return $this->diretorio;
	}

	public function getArquivo(): string
	{
		return $this->arquivo;
	}

	public function setDiretorio(string $diretorio): void
	{
		$this->diretorio = $diretorio;
	}

	public function setArquivo(string $arquivo): void
	{
		$this->arquivo = $arquivo;
	}

	public function lerArquivo(): array
	{
		$caminho = $this->getDiretorio() . '\\' . $this->getArquivo();

		$arquivo = new Arquivo();

		$extensao = explode('.', $this->getArquivo())[1];

		switch($extensao) {
			case 'csv': 
				$arquivo->lerArquivoCSV($caminho); 
				break;
			case 'txt': 
				$arquivo->lerArquivoTXT($caminho); 
				break;
			case 'xlsx':
				$arquivo->lerArquivoXLSX($caminho);
				break;
			default:
				throw new Exception('Extensão não suportada!');
		}		

		return $arquivo->getDados();
	}
}
