<?php

/*
	* O Controller é responsável por receber as requisições do usuário.
	* Além disso o Controller também faz as comunicações com o Model e a View
*/

require_once 'model/modelo.php'; // Carrega o arquivo modelo.php

class Controlador {
	
	// Normalmente o método padrão dos controladores é chamado de index
	public function home() {
		$modelo = new Modelo(); // Cria um objeto Modelo
		$mensagem = $modelo->getMensagem(); // Chama o método getMensagem() do modelo
		require_once 'view/home.php'; // Carrega o arquivo view.php
	}
}
?>