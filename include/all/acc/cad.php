<?php
include ("template/hd/acc/H_acc.php");

$smarty = new Smarty;
$smarty->setTemplateDir('template/mails');

$cart = new Panier();

if (isset($_POST) && !empty($_POST["opt"])) {
    foreach ($_POST["opt"] as $k => $opts) {
        foreach ($opts as $option_id) {

            //echo $option_id . "<br>";
            $pid = getItemIdByOption($option_id);

            $cart->addItem($pid, 1, 0, getItemTitre($pid));

            $cart->addItemOption($pid, $option_id, 1, getOptionPrice($option_id), getOptionTitre($option_id));

            //ajout des fichiers retouches
            if (!empty($_SESSION["pics"])) {
                $fileInfo = array("produit_id" => $pid,
                    "compte_id" => $_SESSION["user"]["compte_id"],
                    "option_id" => $option_id,
                    "option_name" => getOptionTitre($option_id),
                    "filename" => $_SESSION["pics"][$k]["filename"],
                    "filesize" => $_SESSION["pics"][$k]["filesize"]);
                $cart->addItemFiles($pid, $fileInfo);
            }
        }
    }
    $_SESSION["pics"] = array();
}
if (isset($_POST) && !empty($_POST["tec"])) {
    foreach ($_POST["tec"] as $k => $tecs) {
        foreach ($tecs as $technique_id) {
            $pid = 44; //formation internet
            $cart->addItem($pid, 1, 0, getItemTitre($pid));
            $cart->addItemOption($pid, $technique_id, 1, getTechniquePrice($technique_id), getTechniqueTitre($technique_id));
        }
    }
}

if (isset($_POST) && !empty($_POST["item_id"])) {

    // quantité
    $nb = 1;
    $pid = $_POST["item_id"];

    $r = $db->where("produit_id", $pid)
            ->get("md_produits");

    if (!empty($_POST["nb"]))
        $nb = $_POST["nb"];

    $cart->addItem($pid, $nb, $r[0]["prix_ht"], getItemTitre($pid));

    //partie contact
    $contactInfo = array("type" => @$_POST["type_demande"],
        "endroit" => @$_POST["place"],
        "lieu" => @$_POST["namecity"],
        "nom_lieu" => @$_POST["namelocation"],
        "det_projet" => @$_POST["det_projet"],
        "budget" => @$_POST["budget"],
        "commentaire" => @$_POST["comshoot"],
        "duree_seance" => @$_POST["duree_seance"],
        "duree_film" => @$_POST["duree_film"],
        "nb_musiques" => @$_POST["nb_musiques"],
        "nb_phrases" => @$_POST["nb_phrases"],
        "nb_photos" => @$_POST["nb_photos"],
        "nb_retouches" => @$_POST["nb_retouches"],
        "date_souhaite" => @$_POST["date_souhaite"],
        "nb_jours" => @$_POST["nb_jours"],
        "nb_duree_cours" => @$_POST["nb_duree_cours"],
        "produit_id" => @$_POST["item_id"],
        "compte_id" => $_SESSION["user"]["compte_id"]
    );

    //$cart->addContact($contactInfo);
    $cart->addItemContact($pid, $contactInfo);

    // ajout des options
    if (!empty($_POST["options"])) {
        foreach ($_POST["options"]as $optId) {
            $opts = $db->where("option_id", $optId)
                    ->get("md_options");

            $cart->addItemOption($pid, $optId, 1, $opts[0]["prix_ht"], getOptionTitre($optId));
        }
    }

    //ajout fichier depuis formulaire
    if (!empty($_FILES['project_file'])) {
        $handle = new Upload($_FILES['project_file']);
        if ($handle->uploaded) {
            $handle->Process($dir_dest);
            // we check if everything went OK
            if ($handle->processed) {
                $fileInfo = array("produit_id" => $pid, "compte_id" => $_SESSION["user"]["compte_id"], "filename" => $handle->file_dst_name, "filesize" => round(filesize($handle->file_dst_pathname) / 256) / 4);
                $cart->addItemFiles($pid, $fileInfo);

                $_SESSION["pics"] = array();
            } else {
                // one error occured
                echo '<p class="result">';
                echo '  <b>File not uploaded to the wanted location</b><br />';
                echo '  Error: ' . $handle->error . '';
                echo '</p>';
            }

            // we delete the temporary files
            $handle->Clean();
        } /* else {
          // if we're here, the upload file failed for some reasons
          // i.e. the server didn't receive the file
          echo '<p class="result">';
          echo '  <b>File not uploaded on the server</b><br />';
          echo '  Error: ' . $handle->error . '';
          echo '</p>';
          } */
    }

    //ajout des fichiers retouches
    if (!empty($_SESSION["pics"])) {
        foreach ($_SESSION["pics"] as $file) {
            $fileInfo = array("produit_id" => $pid,
                "compte_id" => $_SESSION["user"]["compte_id"],
                "option_id" => @$_POST["options"][0],
                "filename" => $file["filename"],
                "filesize" => $file["filesize"]);
            $cart->addItemFiles($pid, $fileInfo);
            $_SESSION["pics"] = array();
        }
    }
}


if (!empty($_POST["action"]) && !empty($_POST["i"])) {

    $cart->removeItem($_POST["i"]);
}

$items = $cart->showCart();

/*
  if (empty($_SESSION["user"]["is_actif"])) {
  //header('Location: index.php?#ID_idx_rg');
  //include ("include/idx/registrer.php");
  ?>
  <SCRIPT LANGUAGE = "JavaScript">
  document.location.href = "index.php?#ID_idx_rg"
  </SCRIPT>
  <?
  }
 */

//print_r($items);

/* $smarty->assign("items", $items);
  $smarty->assign("user_information", $_SESSION["user"]);
  $smarty->assign("user_adresse", $_SESSION["adresse"][0]);

  //$smarty->display('user_mail_order_conf.tpl');

  $new_order =$smarty->fetch('admin_mail_order_conf.tpl');
 */
?>

<!-- CM1 -->
<section id="SC_acc_cad" class="F1 R4 M20">

    <div class="SH">
        <h3 class="BK0 R4t">CONTENU DE VOTRE PANIER</h3>	
    </div>

    <!--COMMAND-->

    <?
    if (!empty($items)) {
        ?>

        <div class="FM_CAD LSt">

            <?
            $total_caddie = 0;
            foreach ($items as $i => $item) {
                $option = array();
                $pid = $item["id"];
                $produits = $db->where("produit_id", $pid)
                        ->get("md_produits");

                if (!empty($item["options"])) {
                    $opt_tot = 0;
                    foreach ($item["options"] as $option) {
                        $opt_tot += $option["o_prix"];
                    }
                }

                $total_caddie += round($item["prix"] + $opt_tot, 2)
                ?>
                <aside>
                    <div class="CLR">
                        <h1><?= $produits[0]["nom"] ?><span> - <?= $produits[0]["prestation"] ?></span></h1>
                        <ul class="CLR">
                            <li>Quantité : <?= $item["qte"] ?></li>
                            <li><?= number_format(round($item["prix"] + $opt_tot, 2), 2) ?> €</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="CLR">
                            <li>
                                <?
                                if (!empty($item["options"])) {
                                    $opt_tot = 0;
                                    foreach ($item["options"] as $option) {
                                        $opt_tot += $option["o_prix"];

                                        $opt = $db->where("option_id", $option["o_id"])
                                                ->get("md_options");
                                        ?>
                                        <?= $option["o_nom"] ?> 
                                        <?
                                    }
                                } else {
                                    echo 'Aucune Options';
                                }
                                ?>
                            </li>
                            <li>
                                <form action="index.php?page=cad" method="post">
                                    <input type="hidden" name="i" value="<?= $item["id"] ?>">
                                    <input type="hidden" name="action" value="del">
                                    <input type="submit" value="Supprimer">
                                </form>
                            </li>
                        </ul>

                    </div>


                </aside>

                <?
            }
            ?>
            <div>
                Total : <?= number_format($total_caddie, 2) ?> €

            </div>
        </div>
        <?
    } else {
        ?>
        <div class="T_BK1 LSt">
            <p>Votre panier ne contient aucun article</p>
        </div>
        <?
    }
    ?>

</section>

<!-- STP -->

<section class="FM_AC1 M20 CLR">

    <article class="F1 R4">

        <h1>Etape 1</h1>
        <h2>Envoi commande</h2>
        <p>Vérifiez puis confirmez votre commande en appuyant sur "Envoyer ma Commande".</p>

    </article>

    <article class="F1 R4">

        <h1>Etape 2</h1>
        <h2>Paiement</h2>
        <p>Le paiement de votre commande s'effectue directement avec nous par mail.</p>

    </article>

    <article class="F1 R4">

        <h1>Etape Finale</h1>
        <h2>Validation</h2>
        <?
        if (empty($_SESSION["user"]["is_actif"])) {
            ?>
            <form action = "#" method = "post">
                <a href="index.php?page=registrer" class = "B1 B_BL1 R4">Créer un compte</a>
            </form>
            <?
        } else {
            ?>
            <form action = "#" method = "post">
                <a href = "index.php?page=order_validate" class = "B1 B_BL1 R4">Envoyer ma Commande</a>
            </form>
            <?
        }
        ?>

    </article>

</section>

<?php
include ("template/ft/F1_wht.php");
?>