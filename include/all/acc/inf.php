<?php
include ("template/hd/acc/H_acc.php");

$user = $_SESSION["user"];
$adresse = @$_SESSION["adresse"][0];
$formCorrect = true;
$msg = "";


if (isset($_POST) && (!empty($_POST))) {

    if (md5($_POST["cPW"]) != $user["pwd"]) {
        $msg = "Mauvais mot de passe";
        $formCorrect = false;
    }

    if (isset($_POST["cpwd"]) && $_POST["pwd"] && $_POST["cpwd"] != $_POST["pwd"]) {
        $msg = "Mot de passe incorrect";
        $formCorrect = false;
    }

    if ($formCorrect) {
        $userFields = array("genre" => $_POST["genre"],
            "fname" => $_POST["fname"],
            "name" => $_POST["name"],
            "pwd" => md5($_POST["pwd"]),
        );

        $adresseFields = array("ville" => $_POST["ville"],
            "adresse1" => $_POST["adresse1"],
            "adresse2" => $_POST["adresse2"],
            "cp" => $_POST["cp"],
            "compte_id" => $user["compte_id"],
            "is_actif" => 1,
        );

        //update comptes
        $r = $db->where("compte_id", $user["compte_id"])
                ->update("md_comptes", $userFields);

        if ($r) {
            $user = $db->where("compte_id", $user["compte_id"])
                    ->get("md_comptes");
            $user = $user[0];
            $_SESSION["user"] = $user;
        }

        //Update adresses
        $r = $db->where("adresse_id", $adresse["adresse_id"])
                ->where("compte_id", $user["compte_id"])
                ->where("is_actif", 1)
                ->update("md_adresses", $adresseFields);

        if (!$r) {

            $adresse = $db->where("compte_id", $user["compte_id"])
                    ->get("md_adresses");

            if (count($adresse) == 0)
                $r = $db->insert("md_adresses", $adresseFields);
        }


        $adresse = $db->where("compte_id", $user["compte_id"])
                ->get("md_adresses");
        $adresse = $adresse[0];
        $_SESSION["adresse"][0] = $adresse;
    }
}
?>

    <!-- INF -->

    <div class="SH M20">
        <h3 class="BK0 R4t">MES INFORMATIONS PERSONNELLES</h3>	
    </div>

    <section class="SH">
        <div id="SC_reg" class="BK0 R4b CLR">

            <article class="SHl">

                <h2>Modifier vos informations MDcreatis</h2>
                <p>Appuyez sur le bouton valider pour confirmer les changements effectués.</p>

            </article>

            <article class="SHr">

                <h2>Veuillez saisir vos informations correctes.</h2>
                <?
                if (!$formCorrect) {
                    ?>
                    <div style="background-color: coral"> <?= $msg ?></div> 
                    <?
                }
                ?>
                <form action="index.php?page=inf" method="post">

                    <div class="CLR">
                        <label><input type="radio" name="genre" value="1" <? if ($user["genre"] == 1) echo "checked" ?> id="regMR">Monsieur</label>
                        <label><input type="radio" name="genre" value="2" <? if ($user["genre"] == 2) echo "checked" ?> id="regMME">Madame</label>
                        <label><input type="radio" name="genre" value="3" <? if ($user["genre"] == 3) echo "checked" ?> id="regMLLE">Mademoiselle</label>
                    </div>

                    <div>
                        <input type="text" name="fname" id="fname" placeholder="Prénom" required="required" value="<?= $user["fname"] ?>">
                        <input type="text" name="name" id="name" placeholder="Nom" required="required" value="<?= $user["name"] ?>">
                    </div>
                    <div>
                        <input type="email"	name="email" id="regID" placeholder="Adresse Email" required="required" value="<?= $user["email"] ?>" disabled="true">
                        <input type="password" name="cPW" id="curPW" placeholder="Mot de passe actuel" required="required">
                        <input type="password" name="pwd" id="regPW" placeholder="Nouveau mot de passe">
                        <input type="password" name="cpwd" id="regCPW" placeholder="Confirmation du mot de passe">
                    </div>
                    <div>

                        <input type="text" name="adresse1" id="regAdresse1" placeholder="Adresse 1" value="<?= @$adresse["adresse1"] ?>">
                        <input type="text" name="adresse2" id="regAdresse2" placeholder="Adresse 2" value="<?= @$adresse["adresse2"] ?>">
                    </div>
                    <div class="CLR">
                        <input type="text" name="ville" id="regCITY" placeholder="Ville" value="<?= @$adresse["ville"] ?>">
                        <input type="text" name="cp" id="regCP" placeholder="Code Postal" value="<?= @$adresse["cp"] ?>">
                    </div>
                    <div>
                        <input type="checkbox" value="yes" name="regTM" id="regTM" required="true">
                        <span>
                            J'accepte les <a target="_blank" href="#">Conditions générales</a> MDcreatis.com
                        </span>
                    </div>
                    <div>
                        <button type="submit" class="BT2 BLUE2 R4" name="valid" title="Valider">Enregistrer</button>
                    </div>

                </form>

            </article>

        </div>
    </section>

    <?php
    include ("template/ft/F1_wht.php");
    ?>