<?php

namespace src\extrator;

class Txt extends Arquivo
{
	public function lerArquivo(string $caminho): array
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

		return $this->getDados();
	}
}
