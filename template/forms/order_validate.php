<?php

include ("template/hd/acc/H_acc.php");

$smarty = new Smarty;
$smarty->setTemplateDir('template/mails');

//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';
//Set who the message is to be sent from
$mail->SetFrom($smtp_from, $smtp_from_name);
//Set who the message is to be sent to
$mail->AddAddress($_SESSION["user"]["email"], $_SESSION["user"]["name"] . " " . $_SESSION["user"]["fname"]);
//Set the subject line
$mail->Subject = $mail_order_conf_subject;


$cart = new Panier();
$items = $cart->showCart();

$order = new MDOrder($db);

if (!empty($items)) {
    foreach ($items as $i => $item) {
        $order->addProduits(array("produit_id" => $item["id"], "nb_item" => $item["qte"], "prix_ht" => $item["prix"]));

        //pour chaque item on ajoute les options choisies
        if (!empty($item["options"])) {
            foreach ($item["options"] as $option) {
                $opt = $db->where("option_id", $option["o_id"])
                        ->get("md_options");

                $order->addOptions(array("produit_id" => $item["id"], "option_id" => $option["o_id"], "prix_ht" => $option["o_prix"], "o_name" => $option["o_nom"]));
            }
        }

        // on ajoute les contacts
        if (!empty($item["contact"])) {
            $order->addContact($item["contact"]);
        }

        // on ajoute les fichiers
        if (!empty($item["files"])) {
            $order->addFiles($item["files"]);
        }
    }



    $id = $order->saveOrder();

    $order->validate();

    $smarty->assign("items", $items);
    $smarty->assign("user_information", $_SESSION["user"]);
    $smarty->assign("user_adresse", $_SESSION["adresse"][0]);
    $smarty->assign("user_information", $_SESSION["user"]);
    $smarty->assign("user_adresse", $_SESSION["adresse"][0]);
    $smarty->assign("reference", $order->reference);
    $smarty->assign("link", "http://mdcreatis.com/index.php?page=cm1");
    $smarty->assign("date", date("d/m/Y"));

//$smarty->display('user_mail_order_conf.tpl'); 

    $admin_mail_body = $smarty->fetch('admin_mail_order_conf.tpl');
    $user_mail_body = $smarty->fetch('user_mail_order_conf.tpl');


    sendNotification("commande : " . $order->reference, $admin_mail_body);

    $mail->MsgHTML($user_mail_body);


    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $order->flush();
        $cart->flush();
    }
}
?>

<section id="SC_ret_ac4" class="F1 R4 M20">

    <div class="SH">
        <h3 class="BK0 R4t">Merci</h3>	
    </div>
    <div class="T_BK1">
        <h3>Commande Terminée<p>Nous vous remercions d’avoir choisi mdcreatis.com.</p></h3>
        <a class="BT2 GREY R4" href="index.php?page=store">Retour Accueil</a>
    </div>

</section>

<?

include ("template/ft/F1_wht.php");

?>