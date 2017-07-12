<?php
//avvio sessione
	session_start();
	if($_SESSION['loginlev'] !== 1 && $_SESSION['loginlev'] !== 2)
		header('location: missAutentication.php');
        require('csrfpphplibrary/libs/csrf/csrfprotector.php');
csrfProtector::init();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	//dichiarazione variabili
	//Si fanno dei controlli per assicurarsi che nel caso in cui non sia stato inserito nulla si possa mettere il valore NULL nel database
	if($_POST['nome'] === '')
		header(('location: addOpera.php?err=1'));
	else
		$nome = $_POST['nome'];
	
	if($_POST['anno'] === '')
		$anno = 'NULL';
	else
		$anno = "'.".$_POST['anno']."'";
		
	if($_POST['autore'] === '')
		$autore = 'NULL';
	else
		$autore = "'.".$_POST['autore']."'";
		
	if($_POST['proprietario'] === '')
		header(('location: addOpera.php?err=1'));
	else
		$proprietario = $_POST['proprietario'];
	
	if($_POST['numPass'] === '')
		$numPass = 'NULL';
	else
		$numPass = "'.".$_POST['numPass']."'";
		
	if($_POST['location'] === '')
		$location = 'NULL';
	else
		$location = "'.".$_POST['location']."'";
	
	if($_POST['materiale'] === '')
		header(('location: addOpera.php?err=1'));
	else
		$materiale = $_POST['materiale'];
	
	if($_POST['categoria'] === '')
		header(('location: addOpera.php?err=1'));
	else
		$categoria = $_POST['categoria'];
	
	if($_POST['urlVideo'] === '')
		$urlVideo = 'NULL';
	else
		$urlVideo = "'.".$_POST['urlVideo']."'";
		
	if($_POST['dataRicezione'] === '')
		$dataRicezione = 'NULL';
	else
		$dataRicezione = "'".$_POST['dataRicezione']."'";
		
	if($_POST['tecnica'] === '')
		header(('location: addOpera.php?err=1'));
	else
		$tecnica = $_POST['tecnica'];
	
	if($_POST['periodoStorico'] === '')
		$periodoStorico = 'NULL';
	else
		$periodoStorico = "'.".$_POST['periodoStorico']."'";
		
	if($_POST['dimensioni'] === '')
		$dimensioni = 'NULL';
	else
		$dimensioni = "'.".$_POST['dimensioni']."'";
		
	if($_POST['peso'] === '')
		header(('location: addOpera.php?err=1'));
	else
		$peso = $_POST['peso'];
	
	if($_POST['valore'] === '')
		header(('location: addOpera.php?err=1'));
	else
		$valore = $_POST['valore'];
	
	if($_POST['dittaConsegna'] === '')
		$dittaConsegna = 'NULL';
	else
		$dittaConsegna = "'.".$_POST['dittaConsegna']."'";
		
	if($_POST['integrita'] === '')
		header(('location: addOpera.php?err=1'));
	else
		$integrita = $_POST['integrita'];
	
	if(isset($_POST['original']) === false)
		header(('location: addOpera.php?err=1'));
	else
		$original = $_POST['original'];
	
	if($_POST['luogoOrigine'] === '')
		$luogoOrigine = 'NULL';
	else
		$luogoOrigine = "'.".$_POST['luogoOrigine']."'";
		
	if($_POST['infoStoriche'] === '')
		$infoStoriche = 'NULL';
	else
		$infoStoriche = "'.".$_POST['infoStoriche']."'";
		
	if($_POST['descrizione'] === '')
		$descrizione = 'NULL';
	else
		$descrizione = "'.".$_POST['descrizione']."'";
		
	if($_POST['restauriEffettuati'] === '')
		$restauriEffettuati = 'NULL';
	else
		$restauriEffettuati = "'.".$_POST['restauriEffettuati']."'";
		
	if(isset($_POST['pubblicata']) === false)
		header(('location: addOpera.php?err=1'));
	else
		$pubblicata = $_POST['pubblicata'];
	
	if($_POST['dataPubblicazione'] === '')
		$dataPubblicazione = 'NULL';
	else
		$dataPubblicazione = "'".$_POST['dataPubblicazione']."'";
		
	if($_POST['sede_id'] === '')
		header(('location: addOpera.php?err=1'));
	else
		$sede_id = $_POST['sede_id'];


?>
</body>
</html>