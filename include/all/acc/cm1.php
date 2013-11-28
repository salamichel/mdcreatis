<?php
include ("template/hd/acc/H_acc.php");

$user = $_SESSION["user"];
?>

    <!-- CM1 -->

    <section id="SC_acc_cm1" class="F1 R4 M20">

        <div class="SH">
            <h3 class="BK0 R4t">MES COMMANDES</h3>	
        </div>

        <!-- COMMAND -->
        <div class="T_CMD1">
            <article>
                <div>Référence</div>
                <div>Date</div>
                <div>Statut</div>
                <div>Points</div>
                <div>Prix TTC</div>
                <div></div>
            </article>  
            <?
            $r = $db->rawQuery("SELECT * FROM md_commandes a, md_status b WHERE a.status_id = b.status_id and a.compte_id = ? and a.status_id = ? ", array($user["compte_id"], "1"));

            foreach ($r as $commande) {
                ?>

                <a href="index.php?page=cm2&id=<?= $commande["commande_id"] ?>">
                    <div><?= $commande["reference"] ?></div>
                    <div><?= date("d M Y", strtotime($commande["date_ajout"])) ?></div>
                    <div><?= $commande["label"] ?></div>
                    <div><?= $commande["point_fidelite"] ?></div>
                    <div><?= round($commande["total_ht"], 2) ?> €</div>
                    <div>voir</div>
                </a>
                <?
            }
            ?>
        </div>
    </section>

    <section id="SC_acc_hi" class="F1 R4 M20">

        <div class="SH">
            <h3 class="BK0 R4t">HISTORIQUE</h3>	
        </div>

        <!-- HISTORY -->

        <div class="T_CMD3">

            <article>
                <div>Référence</div>
                <div>Prestation</div>
                <div>Date</div>
                <div>Statut</div>
                <div>Points</div>
                <div>Prix TTC</div>
                <div></div>
            </article>

            <?
            $r = $db->rawQuery("SELECT * FROM md_commandes a, md_status b WHERE a.status_id = b.status_id and a.compte_id = ? and a.status_id > ? ", array($user["compte_id"], "1"));

            foreach ($r as $commande) {
                ?>

                <a href="index.php?page=cm2&id=<?= $commande["commande_id"] ?>">
                    <div><?= $commande["reference"] ?></div>
                    <div>Retouche</div>
                    <div><?= date("d M Y", strtotime($commande["date_ajout"])) ?></div>
                    <div><?= $commande["label"] ?></div>
                    <div><?= $commande["point_fidelite"] ?></div>
                    <div><?=  round($commande["total_ht"], 2) ?> €</div>
                    <div>voir</div>
                </a>
                <?
            }
            ?>

        </div>

    </section>

    <?php
    include ("template/ft/F1_wht.php");
    ?>