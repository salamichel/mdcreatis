<div class="LSt">
    <ul class="CLR">
        <li><a href="index.php?page=cad">Mon Panier</a></li>
        <?
        if (empty($_SESSION["user"]["is_actif"])) {
            ?>
            <li><a href="index.php?page=registrer">Mes Commandes</a></li>
            <li><a href="index.php?page=registrer">Mes Informations</a></li>
            <?
        } else {
            ?>
            <li><a href="index.php?page=cm1">Mes Commandes</a></li>
            <li><a href="index.php?page=inf">Mes Informations</a></li>
            <?
        }
        ?>
        <li><a href="index.php?page=pts">Mes Points fidélités</a></li>
     </ul>
</div>