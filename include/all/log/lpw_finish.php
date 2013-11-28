<?php
include ("template/hd/log/H_lpw.php");

$updateData = array(
    'is_actif' => '1',
    'date_activation' => date("Y-m-d h:i:s")
);


$db->where('cle_securite', $_GET["key"]);
$results = $db->update('md_comptes', $updateData);

$user = $db
        ->where('cle_securite', $_GET["key"])
        ->get('md_comptes');

if (count($user) == 1) {
    $_SESSION["user"] = $user[0];
    //echo "OK";
    ?>
    <!-- REGISTRER -->

    <section class="SH">
        <div id="SC_reg" class="BK0 R4 M20 CLR">

            <article class="SHl">

                <h2>Mot de passe activé</h2>
                <p><?= strtoupper($user[0]["fname"]) ?> <?= ucfirst($user[0]["name"]) ?>, nous venons de confirmer l'activation de votre nouveau mot de passe.</p>

            </article>

            <article class="SHr">

                <h2>Félicitations, votre compte a été ré-initialisé.</h2>
                <p>Nous vous invitons dès à présent à modifier <a href="index.php?page=inf" style="font-size:14px; color:#6699CC; text-decoration:underline">votre mot de passe</a>.</p>
                
            </article>

        </div>
    </section>

    <?
} else {
    echo "KO";
}
?>

<?php
include ("template/ft/F1_wht.php");
?>