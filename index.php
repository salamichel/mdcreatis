<?php

session_start();
include ("config/settings.php");
require_once('classes/MysqliDb.php');
require_once('classes/phpmailer.php');
require_once('classes/panier.php');
require_once('classes/class.MDOrder.php');
require_once('classes/class.MDCreatis.php');
require_once('classes/class.MDProduct.php');
require_once('classes/class.upload.php');
require_once('libs/Smarty.class.php');
require_once("scripts/functions.php");


$cart = new Panier();
$items = $cart->showCart();
$p = count($items);



//connexion base de données
$db = new Mysqlidb($bdd_host, $bdd_user, $bdd_pwd, $bdd_name);

$formCorrect = TRUE;
$msg = "";

if (isset($_COOKIE['user']) && isset($_COOKIE['adresse'])) {
    $user = $db->where('email', $_COOKIE['user'])
            ->get('md_comptes');

    $adresse = $db
            ->where('compte_id', $user[0]["compte_id"])
            ->where('is_actif', 1)
            ->get('md_adresses');

    $_SESSION["adresse"] = $adresse;
    $_SESSION["user"] = $user[0];
}

if (isset($_POST) && !empty($_POST)) {
    if (!empty($_POST["src"]) && $_POST["src"] == "connection") {
        $user = $db->where('email', $_POST["cnx_id"])
                ->where('pwd', md5($_POST["cnx_pass"]))
                ->get('md_comptes');

        if (count($user) == 1) {
            $_SESSION["user"] = $user[0];

            $adresse = $db
                    ->where('compte_id', $user[0]["compte_id"])
                    ->where('is_actif', 1)
                    ->get('md_adresses');

            $_SESSION["adresse"] = $adresse;

            //echo "OK";

            if ($_POST["remember_me"] == 1) {
                setcookie("user", $_POST["cnx_id"], 0, "/");
            }
        } else {
            $formCorrect = FALSE;
            $msg = "Mauvais mot de passe";
        }
    }

    if (!empty($_POST["src"]) && $_POST["src"] == "contact") {

        //Create a new PHPMailer instance
        $mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';
        //Set who the message is to be sent from
        $mail->SetFrom($_POST["email"]);
        //Set who the message is to be sent to
        $mail->AddAddress($admin_to);
        //Set the subject line
        $mail->Subject = $_POST["cont_req"];

        $mail_body = $_POST["comment"];

        //Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
        $mail->MsgHTML($mail_body);

        //Send the message, check for errors
        $mail->Send();
    }
}


include ("template/head.php");


if (isset($_GET) && !empty($_GET['page'])) {
    switch ($_GET['page']) {
        case "registrer":
            include("include/all/log/reg.php");
            break;
        case "registrer_confirm":
            include("include/all/log/reg_conf.php");
            break;
        case "registrer_finished":
            include("include/all/log/reg_ok.php");
            break;
        case "connection":
            include("include/all/log/cnt.php");
            break;
        case "lostpass":
            include("include/all/log/lpw.php");
            break;
        case "lostpass_send":
            include("include/all/log/lpw_send.php");
            break;
        case "lostpass_finish":
            include("include/all/log/lpw_finish.php");
            break;
        case "cad":
            include("include/all/acc/cad.php");
            break;
        case "cm1":
            include("include/all/acc/cm1.php");
            break;
        case "cm2":
            include("include/all/acc/cm2.php");
            break;
        case "inf":
            include("include/all/acc/inf.php");
            break;
        case "pts":
            include("include/all/acc/pts.php");
            break;
        case "store":
            include("include/str.php");
            break;
        case "retouch":
            include("include/ret.php");
            break;
        case "advice1":
            include("include/ret/ad/ad1.php");
            break;
        case "advice2":
            include("include/ret/ad/ad2.php");
            break;
        case "advice3":
            include("include/ret/ad/ad3.php");
            break;
        case "advice4":
            include("include/ret/ad/ad4.php");
            break;
        case "advice5":
            include("include/ret/ad/ad5.php");
            break;
        case "advice6":
            include("include/ret/ad/ad6.php");
            break;
        case "retouch_time":
            include("include/ret/tm.php");
            break;
        case "retouch_dl":
            include("include/ret/sp/sp0.php");
            break;
        case "retouch_sp1":
            include("include/ret/sp/sp1.php");
            break;
        case "retouch_sp2":
            include("include/ret/sp/sp2.php");
            break;
        case "retouch_sp3":
            include("include/ret/sp/sp3.php");
            break;
        case "retouch_sp4":
            include("include/ret/sp/sp4.php");
            break;
        case "retouch_A1":
            include("include/ret/tk/A1.php");
            break;
        case "retouch_A2":
            include("include/ret/tk/A2.php");
            break;
        case "retouch_B1":
            include("include/ret/tk/B1.php");
            break;
        case "retouch_B2":
            include("include/ret/tk/B2.php");
            break;
        case "retouch_B3":
            include("include/ret/tk/B3.php");
            break;
        case "retouch_B4":
            include("include/ret/tk/B4.php");
            break;
        case "retouch_C1":
            include("include/ret/tk/C1.php");
            break;
        case "retouch_C2":
            include("include/ret/tk/C2.php");
            break;
        case "retouch_C3":
            include("include/ret/tk/C3.php");
            break;
        case "retouch_C4":
            include("include/ret/tk/C4.php");
            break;
        case "retouch_D1":
            include("include/ret/tk/D1.php");
            break;
        case "retouch_D2":
            include("include/ret/tk/D2.php");
            break;
        case "retouch_D3":
            include("include/ret/tk/D3.php");
            break;
        case "retouch_D4":
            include("include/ret/tk/D4.php");
            break;
        case "retouch_D5":
            include("include/ret/tk/D5.php");
            break;
        case "retouch_D6":
            include("include/ret/tk/D6.php");
            break;
        case "retouch_D7":
            include("include/ret/tk/D7.php");
            break;
        case "retouch_E1":
            include("include/ret/tk/E1.php");
            break;
        case "retouch_E2":
            include("include/ret/tk/E2.php");
            break;
        case "retouch_E3":
            include("include/ret/tk/E3.php");
            break;
        case "retouch_E4":
            include("include/ret/tk/E4.php");
            break;
        case "retouch_F1":
            include("include/ret/tk/F1.php");
            break;
        case "retouch_F2":
            include("include/ret/tk/F2.php");
            break;
        case "retouch_F3":
            include("include/ret/tk/F3.php");
            break;
        case "retouch_F4":
            include("include/ret/tk/F4.php");
            break;
        case "retouch_F5":
            include("include/ret/tk/F5.php");
            break;
        case "retouch_F6":
            include("include/ret/tk/F6.php");
            break;
        case "retouch_F7":
            include("include/ret/tk/F7.php");
            break;
        case "retouch_G1":
            include("include/ret/tk/G1.php");
            break;
        case "retouch_G2":
            include("include/ret/tk/G2.php");
            break;
        case "retouch_G3":
            include("include/ret/tk/G3.php");
            break;
        case "pack_step":
            include("include/ret/pk/pk0.php");
            break;
        case "pack_professionnel":
            include("include/ret/pk/pk1.php");
            break;
        case "pack_diamond":
            include("include/ret/pk/pk2.php");
            break;
        case "beauty_box":
            include("include/ret/pk/pk3.php");
            break;
        case "b_white_1":
            include("include/ret/pk/pk4.php");
            break;
        case "b_white_2":
            include("include/ret/pk/pk5.php");
            break;
        case "b_white_3":
            include("include/ret/pk/pk6.php");
            break;
        case "restaure_lite":
            include("include/ret/pk/pk7.php");
            break;
        case "full_restaure":
            include("include/ret/pk/pk8.php");
            break;
        case "pack_paint":
            include("include/ret/pk/pk9.php");
            break;
        case "picture":
            include("include/pic.php");
            break;
        case "picture1":
            include("include/pic/pic1.php");
            break;
        case "picture2":
            include("include/pic/pic2.php");
            break;
        case "picture3":
            include("include/pic/pic3.php");
            break;
        case "picture_devis":
            include("include/pic/picDV.php");
            break;
        case "design":
            include("include/des.php");
            break;
        case "design_sv1":
            include("include/des/des_sv1.php");
            break;
        case "design_sv2":
            include("include/des/des_sv2.php");
            break;
        case "design_sv3":
            include("include/des/des_sv3.php");
            break;
        case "design_devis":
            include("include/des/desDV.php");
            break;
        case "movie":
            include("include/mov.php");
            break;
        case "movie_family":
            include("include/mov/mov_A.php");
            break;
        case "movie_event":
            include("include/mov/mov_B.php");
            break;
        case "movie_devis":
            include("include/mov/movDV.php");
            break;
        case "formation":
            include("include/for.php");
            break;
        case "formation_home":
            include("include/for/for_A.php");
            break;
        case "formation_web":
            include("include/for/for_B.php");
            break;
        case "formation_devis":
            include("include/for/forDV.php");
            break;
        case "help":
            include("include/all/inf/aid.php");
            break;
        case "covenant":
            include("include/all/inf/cov.php");
            break;
        case "condition":
            include("include/all/inf/cod.php");
            break;
        case "contact":
            include("include/all/inf/cot.php");
            break;
        case "order_validate":
            include("template/forms/order_validate.php");
            break;
        case "test":
            include("include/test.php");
            break;
        case "compare":
            include("include/compare.php");
            break;
        case "logout":
            unset($_SESSION);
            unset($_COOKIE["user"]);
            session_destroy();
        default:
            include ("template/hd/nav/H1_idx.php");
            include ("include/idx.php");
            include ("template/ft/F1_wht.php");
            break;
    }
} else {

    include ("template/hd/nav/H1_idx.php");
    include ("include/idx.php");
    include ("template/ft/F1_wht.php");
}

//print_r($_SESSION);
//print_r($_POST);
?>
