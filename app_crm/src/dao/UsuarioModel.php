<?php

namespace src\dao;

use src\BD;

use src\interfaces\ICadastro;
use src\interfaces\ILog;
use src\interfaces\INotificacao;

use src\componentes\Log;
use src\componentes\Notificacao;

class UsuarioModel extends BD implements ICadastro, ILog, INotificacao
{
	public function salvar()
	{
	}

	public function registrarLog(Log $log)
	{
	}

	public function enviarNotificacao(Notificacao $notificacao)
	{
	}
}
