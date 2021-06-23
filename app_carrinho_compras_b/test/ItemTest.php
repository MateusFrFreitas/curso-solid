<?php

use PHPUnit\Framework\TestCase;

use App\Item;

class ItemTest extends TestCase
{
	public function testEstadoInicialItem() {
		$item = new Item();

		// asserções do PHPUnit
		$this->assertEquals('', $item->getDescricao());
		$this->assertEquals(0, $item->getValor());
	}	

	public function testGetESetDescricao() {
		$descricao = 'Cadeira de Plástico';

		$item = new Item();
		$item->setDescricao($descricao);
		$this->assertEquals($descricao, $item->getDescricao());
	}

	/**
	 * @dataProvider dataValores
	 */
	public function testGetESetValor($valor) {	
		$item = new Item();
		$item->setvalor($valor);
		$this->assertEquals($valor, $item->getValor());
	}

	public function testItemValido() {
		$item = new Item();

		// seria submeter um item válido para o teste e retornar ok
		$item->setValor(55);
		$item->setDescricao('Cadeira de Plástico');

		$this->assertEquals(true, $item->itemValido());

		// seria submeter um item inválido para o teste e retornar false (descrição)
		$item->setValor(0);
		$item->setDescricao('');

		$this->assertEquals(false, $item->itemValido());

		// seria submeter um item inválido para o teste e retornar false (valor)
	}

	public function dataValores() {
		return [
			[100],
			[-2],
			[0]
		];
	}
}
