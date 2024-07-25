<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $nome = htmlspecialchars($_POST['nome']);
	    $email = htmlspecialchars($_POST['email']);
	    $senha = htmlspecialchars($_POST['senha']);
	    $genero = htmlspecialchars($_POST['genero']);
	    $termos = isset($_POST['termos']) ? 'Aceito' : 'Não aceito';

	    sleep(5);
	    $mensagem = "Dados recebidos: Nome - $nome, E-mail - $email, Gênero - $genero, Termos - $termos";
	    
	    echo "<h1>Dados Recebidos</h1>";
	    echo "<p>$mensagem</p>";
	}
	else {
	    echo "Erro: método inválido.";
	}