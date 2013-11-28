<?php
include ("template/hd/nav/H1_idx2.php");
?>

<div class="SCR1">

<!-- CONNECTION -->

<section id="SC_idx" class="CLR">

	<div class="AN_OP3">

		<?php

$smarty = new Smarty;
$smarty->setTemplateDir('template/mails');

$formCorrect = true;
$msg = "";

if (isset($_POST) && !empty($_POST) && !empty($_POST["src"])) {

    $k = RandomString();

    if ($_POST["cnx_pass"] != $_POST["cnx_pass2"]) {
        $formCorrect = false;
        $msg = "Mot de passe incorrect";
    }


    $insertData = array("fname" => $_POST["fname"],
        "name" => $_POST["name"],
        "pwd" => md5($_POST["cnx_pass"]),
        "email" => $_POST["cnx_id"],
        "date_inscription" => date("Y-m-d"),
        "cle_securite" => $k,
        "ip_inscription" => $_SERVER["REMOTE_ADDR"],
        "is_actif" => 0,
    );
    if ($formCorrect) {
        if ($db->insert('md_comptes', $insertData)) {
            include("include/all/log/reg_conf.php");

            //Create a new PHPMailer instance
            $mail = new PHPMailer();
            $mail->CharSet = 'UTF-8';
            //Set who the message is to be sent from
            $mail->SetFrom($smtp_from, $smtp_from_name);
            //Set who the message is to be sent to
            $mail->AddAddress($_POST["cnx_id"], $_POST["name"] . " " . $_POST["fname"]);
            //Set the subject line
            $mail->Subject = $mail_confirmation_subject;

            $smarty->assign("conf_link", "http://" . $_SERVER["HTTP_HOST"] . $mdfolder . "index.php?page=registrer_finished&key=" . $k);
            $smarty->assign("user", array("name" => $_POST["name"], "fname" => $_POST["fname"], "email" => $_POST["cnx_id"], "pwd" => $_POST["cnx_pass"]));

            $mail_body = $smarty->fetch('welcome.tpl');

            //Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
            $mail->MsgHTML($mail_body);

            //Send the message, check for errors
            if (!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
        } else {
            $formCorrect = false;
            $msg = "Adresse mail existante";
            include("include/all/log/reg_form.php");
        }
    }
} else {
    include("include/all/log/reg_form.php");
}
?>

	</div>

</section>

</div>

<?php
include ("template/ft/F1_wht.php");
?>