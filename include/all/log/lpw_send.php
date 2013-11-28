<?php
include ("template/hd/log/H_lpw.php");
$smarty = new Smarty;
$smarty->setTemplateDir('template/mails');
?>

<?
if (isset($_POST)) {

    $user = $db->where('email', $_POST["lpw_id"])
            ->get('md_comptes');

    $k = RandomString();
    $new_pwd = RandomString();


    if (count($user) == 1) {

        //Create a new PHPMailer instance
        $mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';
        //Set who the message is to be sent from
        $mail->SetFrom($smtp_from, $smtp_from_name);
        //Set who the message is to be sent to
        $mail->AddAddress($_POST["lpw_id"], $user[0]["name"] . " " . $user[0]["fname"]);
        //Set the subject line
        $mail->Subject = $mail_lpw_subject;

        $updateData = array("is_actif" => 0,
            "pwd" => md5($new_pwd),
            "cle_securite" => $k
        );

        $results = $db->where('compte_id', $user[0]["compte_id"])
                ->update('md_comptes', $updateData);

        if ($results) {

            $smarty->assign("link", "http://" . $_SERVER["HTTP_HOST"] . $mdfolder . "index.php?page=lostpass_finish&key=" . $k);
            $smarty->assign("new_pwd", $new_pwd);
            $smarty->assign("user", array("name" =>  $user[0]["name"], "fname" => $user[0]["fname"]));

            $mail_body = $smarty->fetch('lpw.tpl');

            //Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
            $mail->MsgHTML($mail_body);

            if (!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
        }
        ?>

        <!-- LOSTPASS -->

        <section class="SH">
            <div id="SC_reg" class="BK0 R4 M20 CLR">

                <article class="SHl">

                    <h2>Mot de passe envoyé</h2>
                    <p>Un e-mail vient de vous être envoyé contenant votre mot de passe.</p>

                </article>

                <article class="SHr">

                    <h2>Votre demande de mot de passe est effectuée.</h2>
                    <p>Vous recevrez sur votre messagerie d'ici quelques minutes, les coordonnées de votre compte MDcreatis et votre mot de passe affilié.</p>

                </article>

            </div>
        </section>

        <?
    }
}
?>

<?php
include ("template/ft/F1_wht.php");
?>