<?php
session_start();
$fichiercatchat='../db_catchat/'.$_SESSION['spipcatchatprivecode'].'/'.$_SESSION['spipcatchatprivecode'].'.catchat';
$count=false; 
$i = 1; $prev = 0; 
$text[] = '		*****  '.$_GET['nomsite']. '  ***** ';
$text[] = "\n";
$text[] = $_GET['desc'];
$text[] = "\n";
			if($_SESSION['catchathistorique']==trim($_GET['historique']))
				{ $historique=$_SESSION['catchathistorique'];}
			else
				{unset( $historique,$_SESSION['catchathistorique']);}
	if(false!=($data_base=fopen($fichiercatchat,'r')))
	{while (!feof($data_base)) {
		$data=json_decode(fgets($data_base),true);
		$date_message=$data[2];
		if($_SESSION['catchatprivetime'] <= $date_message+$historique)
		{ 
			if($prev != $data[0]) // Si le dernier message est du même membre, on écrit pas de nouveau son pseudo
		{// contenu du message	
			$text[] = "\n";
			$text[]= ' | TIME-CODE : '.date('H:i', $date_message); // l'heure du message
			$text[]= ' | NAME -> '.$data[1]; // Le nom de l'auteur
			$text[] = '  --->';
		}		
		$text[]= '	MESSAGE : '.htmlspecialchars($data[3]);  // On supprime les balises HTML et on ajoute le message
	     $i++; 
		$prev = $data[0];
$count=true;}	
	  } fclose($data_base);
	}
if(!$count)
	{// Il n'y a aucun messages
	$text['messages'] ="\n"; 
	$text['messages'] .= '			************************************';
	$text['messages'] .="\n"; 
	$text['messages'] .='			************ NO MESSAGE ************';
	$text['messages'] .="\n"; 
	$text['messages'] .= '			************************************';
	$text['messages'] .="\n"; 
	}
$text[] = '________________________________________________________________________';
$text[]=' *** '.$_GET['url'].' ***';
header('Content-Type: application/msword; charset=utf-8 application/force-download');
header('Content-Disposition: attachment; filename="historique.txt"');
echo implode("\n",$text);// affichage
?>