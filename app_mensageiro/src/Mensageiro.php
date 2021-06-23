<?php

namespace src;

use src\IMensagemToken;

class Mensageiro
{
	private IMensagemToken $canal;

	public function __construct(IMensagemToken $canal)
	{
		$this->setCanal($canal);
	}

	public function getCanal(): IMensagemToken
	{
		return $this->canal;
	}

	public function setCanal(IMensagemToken $canal): void
	{
		$this->canal = $canal;
	}

	public function enviarToken(): void
	{
		$this->getCanal()->enviar();
	}
}
