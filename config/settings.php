<?php
$bdd_host = "localhost";
$bdd_user = "root";
$bdd_pwd = "";
$bdd_name = "mdcreatis2";

$smtp_from = "stephane.alamichel@gmail.com";
$smtp_from_name = "Stéphane Alamichel";
$smtp_host = "smtp.orange.fr";
$smtp_port = 25;
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$smtp_debug = 0;

//mails

$admin_to = "stephane.alamichel@gmail.com";
$admin_too = "alamichel.s@free.fr";
        
$mail_confirmation_subject = "Bienvenue";
        
$mail_lpw_subject = "Nouveau mot de passe";

$mail_order_conf_subject= "Merci";

$mdfolder="/mdcreatis/";

// set variables
$dir_dest = (isset($_GET['dir']) ? $_GET['dir'] : 'upload');
$dir_pics = (isset($_GET['pics']) ? $_GET['pics'] : $dir_dest);
?>