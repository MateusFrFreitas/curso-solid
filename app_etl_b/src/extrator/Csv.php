<?php

namespace src\extrator;

class Csv extends Arquivo
{
	public function lerArquivo(string $caminho): array
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

		return $this->getDados();
	}
}
