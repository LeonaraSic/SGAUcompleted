<?php
class Database {
	protected static $db;
	private function __construct() {
		$db_host = "localhost";
		$db_nome = "sgau_projet";
		$db_usuario = "root";
		$db_senha = "";
		$db_driver = "mysql";

		//Criando Conexão
		try {
			self::$db = new PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha);
			self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$db->exec('SET NAMES utf8');

			//Exibindo Menssagem de erro
		} catch (PDOException $e) {
			mail($sistema_email, "PDOException em $sistema_titulo", $e->getMessage());
			die("Connection Error: " . $e->getMessage());
		}
	}

	public static function conexao() {
		if (!self::$db) {
			new Database();
		}
		return self::$db;
	}
}

function EntrarCidadao($cpf, $email, $senha, &$total) {
	$pdo = Database::conexao();
	$con = $pdo->prepare("SELECT * FROM cidadao WHERE  email = :EMAIL and senha = md5(:SENHA) AND cpf = :CPF AND senha = md5(:SENHA)");
	#$con->bindValue(":CPF", $cpf, PDO::PARAM_STR);
	$con->bindValue(":EMAIL", $email, PDO::PARAM_STR);
	$con->bindValue(":SENHA", $senha, PDO::PARAM_STR);
	$con->bindValue(":CPF", $cpf, PDO::PARAM_STR);
	$con->execute();
	$total = $con->rowCount();
	$r_con = $con->fetchAll(PDO::FETCH_OBJ);
	return $r_con;
}
function EntarColaborador($email, $senha, &$admin) {
	$pdo = Database::conexao();
	$conex = $pdo->prepare("SELECT * FROM colaborador WHERE  email = :EMAIL and senha = md5(:SENHA)");
	$conex->bindValue(":EMAIL", $email, PDO::PARAM_STR);
	$conex->bindValue(":SENHA", $senha, PDO::PARAM_STR);
	$conex->execute();
	$admin = $conex->rowCount();
	$r_conex = $conex->fetchAll(PDO::FETCH_OBJ);
	return $r_conex;
}
function CadastrarCidadao($nomeCadastro, $sobrenomeCadastro, $cpfCadastro, $telefoneCadastro, $emailCadastro, $senhaCadastro) {
	$pdo = Database::conexao();
	$i = $pdo->prepare("INSERT INTO cidadao VALUES (null, :NOME, :SOBRENOME, :CPF, :TELEFONE, :EMAIL, :SENHA)");
	$i->bindValue(":NOME", $nomeCadastro, PDO::PARAM_STR);
	$i->bindValue(":SOBRENOME", $sobrenomeCadastro, PDO::PARAM_STR);
	$i->bindValue(":CPF", $cpfCadastro, PDO::PARAM_INT);
	$i->bindValue(":TELEFONE", $telefoneCadastro, PDO::PARAM_INT);
	$i->bindValue(":EMAIL", $emailCadastro, PDO::PARAM_STR);
	$i->bindValue(":SENHA", $senhaCadastro, PDO::PARAM_STR);
	$i->execute();
}
function TipoRequerimento() {
	$pdo = Database::conexao();
	$tipo = $pdo->prepare("SELECT * FROM tipo_requerimento");
	$tipo->execute();
	$r_tipo = $tipo->fetchAll();
	return $r_tipo;
}
function Requerimento($tipoRequerimento, $nomeArvoreRequeriemnto, $logradouroRequerimento, $numeroRequerimento, $bairroRequerimento, $observacaoRequerimento, $idCidadao) {
	$pdo = Database::conexao();
	$GravarRequerimento = $pdo->prepare("INSERT INTO requerimento (id_requerimento, nome_arvore, logradouro, numero, bairro, observacao, fk_cidadao, fk_tipo_requerimento) VALUES (NULL, :ARVORE, :LOGRADOURO, :NUMERO, :BAIRRO, :OBSERVACAO, :FK_CIDADAO, :FK_TIPO_REQUERIMENTO);");
	$GravarRequerimento->bindValue(":ARVORE", $nomeArvoreRequeriemnto, PDO::PARAM_STR);
	$GravarRequerimento->bindValue(":LOGRADOURO", $logradouroRequerimento, PDO::PARAM_STR);
	$GravarRequerimento->bindValue(":NUMERO", $numeroRequerimento, PDO::PARAM_STR);
	$GravarRequerimento->bindValue(":BAIRRO", $bairroRequerimento, PDO::PARAM_STR);
	$GravarRequerimento->bindValue(":OBSERVACAO", $observacaoRequerimento, PDO::PARAM_STR);
	$GravarRequerimento->bindValue(":FK_CIDADAO", $idCidadao, PDO::PARAM_STR);
	$GravarRequerimento->bindValue(":FK_TIPO_REQUERIMENTO", $tipoRequerimento, PDO::PARAM_STR);
	$GravarRequerimento->execute();
}
function CadastrarColaborador($nomeColaborador, $sobrenomeColaborador, $Cargo, $emailColaborador, $senhaColaborador) {
	$pdo = Database::conexao();
	$CadastrarColaborador = $pdo->prepare("INSERT INTO colaborador (id_colaborador, nome, sobrenome, email, cargo, senha) VALUES (NULL, :NOME, :SOBRENOME, :EMAIL, :CARGO, :SENHA)");
	$CadastrarColaborador->bindValue(":NOME", $nomeColaborador, PDO::PARAM_STR);
	$CadastrarColaborador->bindValue(":SOBRENOME", $sobrenomeColaborador, PDO::PARAM_STR);
	$CadastrarColaborador->bindValue(":EMAIL", $emailColaborador, PDO::PARAM_STR);
	$CadastrarColaborador->bindValue(":CARGO", $Cargo, PDO::PARAM_STR);
	$CadastrarColaborador->bindValue(":SENHA", $senhaColaborador, PDO::PARAM_STR);
	$CadastrarColaborador->execute();
}

function AreaVerde($tipoArea, $logradouroAreaVerde, $NumeroAreaVerde, $BairroVerde, $MetrosAreaVerde, $IdColaborador) {
	$pdo = Database::conexao();
	$CadastroAreaVerde = $pdo->prepare("INSERT INTO area_verde (id_area_verde, area, logradouro, numero, bairro, fk_colaborador, fk_tipo_area_verde) VALUES (NULL, :AREA, :LOGRADOURO, :NUMERO, :BAIRRO, :FK_COLABORADOR, :FK_T_VERDE)");
	$CadastroAreaVerde->bindValue(":AREA", $MetrosAreaVerde);
	$CadastroAreaVerde->bindValue(":LOGRADOURO", $logradouroAreaVerde, PDO::PARAM_STR);
	$CadastroAreaVerde->bindValue(":NUMERO", $NumeroAreaVerde, PDO::PARAM_STR);
	$CadastroAreaVerde->bindValue(":BAIRRO", $BairroVerde, PDO::PARAM_STR);
	$CadastroAreaVerde->bindValue(":FK_T_VERDE", $tipoArea, PDO::PARAM_INT);
	$CadastroAreaVerde->bindValue(":FK_COLABORADOR", $IdColaborador, PDO::PARAM_INT);
	$CadastroAreaVerde->execute();
}
function CadastrarMuda($NomePopularMuda, $NomeCientificoMuda, $NativaMuda, $FrutiferaMuda, $QuantidadeMuda, $CadastrouMuda) {
	$pdo = Database::conexao();
	$CadastroMuda = $pdo->prepare("INSERT INTO muda (id_muda, nome_cientifico, nome_popular, nativa, frutifera, quantidade, fk_colaborador, fk_cidadao) VALUES (NULL, :CIENTIFICO, :POPULAR, :NATIVA, :FRUTIFERA, :QUANT, :FK_COLABORADOR, NULL)");
	$CadastroMuda->bindValue(":CIENTIFICO", $NomeCientificoMuda, PDO::PARAM_STR);
	$CadastroMuda->bindValue(":POPULAR", $NomePopularMuda, PDO::PARAM_STR);
	$CadastroMuda->bindValue(":NATIVA", $NativaMuda, PDO::PARAM_STR);
	$CadastroMuda->bindValue(":FRUTIFERA", $FrutiferaMuda, PDO::PARAM_STR);
	$CadastroMuda->bindValue(":QUANT", $QuantidadeMuda, PDO::PARAM_STR);
	$CadastroMuda->bindValue(":FK_COLABORADOR", $CadastrouMuda, PDO::PARAM_STR);
	$CadastroMuda->execute();
}
function CadastroProjeto($tituloProjeto, $logradouroProjeto, $NumeroProjeto, $BairroProjeto, $DescProjeto, $TempoExec, $linceAmbietal, $RespTec, $idClbradror) {
	$pdo = Database::conexao();
	$CadastroProjeto = $pdo->prepare("INSERT INTO projeto (id_projeto, titulo, logradouro, numero, bairro, tempo, descricao, licenca, responsavel, fk_colaborador) VALUES (NULL, :TITULO, :LOGRADOURO, :NUMERO, :BAIRRO, :TEMPO, :DESCICAO, :LICENCA, :RESPONSAVEL, :COLABORADORFK)");
	$CadastroProjeto->bindValue(":TITULO", $tituloProjeto, PDO::PARAM_STR);
	$CadastroProjeto->bindValue(":LOGRADOURO", $logradouroProjeto, PDO::PARAM_STR);
	$CadastroProjeto->bindValue(":NUMERO", $NumeroProjeto, PDO::PARAM_INT);
	$CadastroProjeto->bindValue(":BAIRRO", $BairroProjeto, PDO::PARAM_STR);
	$CadastroProjeto->bindValue(":TEMPO", $TempoExec, PDO::PARAM_STR);
	$CadastroProjeto->bindValue(":DESCICAO", $DescProjeto, PDO::PARAM_STR);
	$CadastroProjeto->bindValue(":LICENCA", $linceAmbietal, PDO::PARAM_STR);
	$CadastroProjeto->bindValue(":RESPONSAVEL", $RespTec, PDO::PARAM_STR);
	$CadastroProjeto->bindValue(":COLABORADORFK", $idClbradror, PDO::PARAM_INT);
	$CadastroProjeto->execute();
}
function CadastraInfracao($nomeInfracao, $CpfCnpj, $emailInfracao, $FoneInfra, $LograInfracao, $NumInfracao, $BairroInfracao, $infracao, $DataInfracao, $IdClbrador) {
	$pdo = Database::conexao();
	$Cadastro = $pdo->prepare("INSERT INTO infracao (id_infracao, nome_razao_social, cpf_cnpj, telefone, email, logradouro, numero, bairro, infracao, data_infracao, fk_colaborador) VALUES (NULL, :NOME, :CPF, :FONE, :EMAIL, :RUA, :NUM, :BAIRRO, :INFRA, :DATA, :FKCOLABORADOR)");
	$Cadastro->bindValue(":NOME", $nomeInfracao, PDO::PARAM_STR);
	$Cadastro->bindValue(":CPF", $CpfCnpj, PDO::PARAM_STR);
	$Cadastro->bindValue(":FONE", $FoneInfra, PDO::PARAM_STR);
	$Cadastro->bindValue(":EMAIL", $emailInfracao, PDO::PARAM_STR);
	$Cadastro->bindValue(":RUA", $LograInfracao, PDO::PARAM_STR);
	$Cadastro->bindValue(":NUM", $NumInfracao, PDO::PARAM_INT);
	$Cadastro->bindValue(":BAIRRO", $BairroInfracao, PDO::PARAM_STR);
	$Cadastro->bindValue(":INFRA", $infracao, PDO::PARAM_STR);
	$Cadastro->bindValue(":DATA", $DataInfracao, PDO::PARAM_STR);
	$Cadastro->bindValue(":FKCOLABORADOR", $IdClbrador, PDO::PARAM_STR);
	$Cadastro->execute();
}
function LocalArvore() {
	$pdo = Database::conexao();
	$rua = $pdo->prepare("SELECT area_verde.id_area_verde, tipo_area_verde.tipo_area_verde, area_verde.logradouro, area_verde.numero FROM area_verde JOIN tipo_area_verde ON tipo_area_verde.id_tipo_area_verde = area_verde.fk_tipo_area_verde");
	$rua->execute();
	$r_local = $rua->fetchAll();
	return $r_local;
}
function CadastrarArvore($CientificoArvore, $PopularArvore, $localArvore, $dataPlatio, $NativaArvore, $Frutifera, $MatrizArvore, $RaizArvore, $idedeArvore, $alturaArvore, $laguraArvore, $dataPoda, $EliminacaoArvore, $fitossanidade, $observacaoArvore, $logadorAdm) {
	$pdo = Database::conexao();
	$Arvore = $pdo->prepare("INSERT INTO arvore (id_arvore, nome_cientifico, nome_popular, local, data_plantio, nativa, frutifera, matriz, raiz, idade, altura, largura_copa, data_poda, elimininacao, fitossanidade, observacao, fk_colaborador, fk_area_verde) VALUES (NULL, :CIENTIFICO, :POPULAR, 'NULL', :DATAPLATIO, :NATIVA, :FRUTIFERA, :MATRIZ, :RAIZ, :IDADE, :ALTURA, :LARGURA, :DATAPODA, :ELIMINACAO, :FITOSSANIDADE, :OBSERVACAO, :FKCOLABORADOR, :FKAREALOCAL)");
	$Arvore->bindValue(":CIENTIFICO", $CientificoArvore, PDO::PARAM_STR);
	$Arvore->bindValue(":POPULAR", $PopularArvore, PDO::PARAM_STR);
	$Arvore->bindValue(":DATAPLATIO", $dataPlatio);
	$Arvore->bindValue(":NATIVA", $NativaArvore, PDO::PARAM_STR);
	$Arvore->bindValue(":FRUTIFERA", $Frutifera, PDO::PARAM_STR);
	$Arvore->bindValue(":MATRIZ", $MatrizArvore, PDO::PARAM_STR);
	$Arvore->bindValue(":RAIZ", $RaizArvore, PDO::PARAM_STR);
	$Arvore->bindValue(":IDADE", $idedeArvore, PDO::PARAM_STR);
	$Arvore->bindValue(":ALTURA", $alturaArvore, PDO::PARAM_STR);
	$Arvore->bindValue(":LARGURA", $laguraArvore, PDO::PARAM_STR);
	$Arvore->bindValue(":DATAPODA", $dataPoda, PDO::PARAM_STR);
	$Arvore->bindValue(":ELIMINACAO", $EliminacaoArvore, PDO::PARAM_STR);
	$Arvore->bindValue(":FITOSSANIDADE", $fitossanidade, PDO::PARAM_STR);
	$Arvore->bindValue(":OBSERVACAO", $observacaoArvore, PDO::PARAM_STR);
	$Arvore->bindValue(":FKCOLABORADOR", $logadorAdm, PDO::PARAM_STR);
	$Arvore->bindValue(":FKAREALOCAL", $localArvore, PDO::PARAM_STR);
	$Arvore->execute();
}
function tipoArea() {
	$pdo = Database::conexao();
	$tipo = $pdo->prepare("SELECT * FROM tipo_area_verde");
	$tipo->execute();
	$r_tipo = $tipo->fetchAll();
	return $r_tipo;
}
function consRequerimento() {
	$pdo = Database::conexao();
	$conreq = $pdo->prepare("SELECT tipo_requerimento.tipo_requerimento, requerimento.id_requerimento, requerimento.nome_arvore,requerimento.logradouro,requerimento.numero,requerimento.bairro, requerimento.observacao, cidadao.nome, cidadao.sobrenome,cidadao.telefone FROM requerimento JOIN tipo_requerimento on requerimento.fk_tipo_requerimento=tipo_requerimento.id_tipo_requerimento JOIN cidadao on requerimento.fk_cidadao= cidadao.id_cidadao order by requerimento.id_requerimento ");
	$conreq->execute();
	$r_dados = $conreq->fetchAll();
	return $r_dados;
}

?>