<?php
session_start();

require_once "../../database/database.php";
if (isset($_POST['Enviar']) && $_POST['Enviar'] === 'Enviar') {

	$cpf = $_POST['cpfLogin'];
	$email = $_POST['emailLogin'];
    $senha = $_POST['senhaLogin'];
    echo "sdas";

	$session_cidadao = EntrarCidadao($cpf, $email, $senha, $total);
	if ($total == 0) {
          #Se não for encontrado o usuário como cidadão pesquisar no colaborador;
		$session_colaborador = EntarColaborador($email, $senha, $admin);
		if ($admin == 0) {
               #se não achar o colaborador voltar para tela de login
			header("Location: ../../usuario.php?v=bG9naW4=");
			exit;
		} else {
               #Se encontrar o colaborador faz o login e mandar para tela de colaborador
			foreach ($session_colaborador as $login_colaborador) {
				$_SESSION['nome'] = $login_colaborador->nome;
				$_SESSION['sobrenome'] = $login_colaborador->sobrenome;
				$_SESSION['id_cidadao'] = $login_colaborador->id_colaborador;
				header("location: ../../painelAdm.php");
			}
		}
		exit;
	} else {
          #Se encontrar o cidadão, faz login e mandar para tela do cidadão 
		foreach ($session_cidadao as $login_cidadao) {
			$_SESSION['nome'] = $login_cidadao->nome;
			$_SESSION['sobrenome'] = $login_cidadao->sobrenome;
			$_SESSION['id_cidadao'] = $login_cidadao->id_cidadao;
			header("location: ../../painelUsuario.php");

		}
	}
}

?>