<?php

namespace src;

class Arquivo
{
	private $dados = array();

	private function setDados(string $nome, string $cpf, string $email): void
	{
		array_push($this->dados, ['nome' => iconv('iso-8859-1', 'utf-8', $nome), 'cpf' => $cpf, 'email' => $email]);
	}

	public function getDados(): array
	{
		return $this->dados;
	}

	public function lerArquivoCSV(string $caminho)
	{
		$handle = fopen($caminho, 'r');
		try {
			while (($linha = fgetcsv($handle, 10000, ';')) !== false) {
				$this->setDados(
					$linha[0],
					$linha[1],
					$linha[2]
				);
			}
		} finally {
			fclose($handle);
		}
	}

	public function lerArquivoTXT(string $caminho)
	{
		$handle = fopen($caminho, 'r');
		try {
			while (!feof($handle)) {
				$linha = fgets($handle);

				$this->setDados(
					trim(substr($linha, 11, 30)),
					substr($linha, 0, 11),
					trim(substr($linha, 41, 50))
				);
			}
		} finally {
			fclose($handle);
		}
	}

	public function lerArquivoXLSX($caminho)
	{
		// implementar código
	}
}
