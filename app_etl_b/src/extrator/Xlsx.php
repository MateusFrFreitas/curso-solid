<?php

namespace src\extrator;

class Xlsx extends Arquivo
{
	public function lerArquivo(string $caminho): array
	{
		$handle = fopen($caminho, 'r');
		try {
			// implementar lógica
		} finally {
			fclose($handle);
		}

		return $this->getDados();
	}
}
