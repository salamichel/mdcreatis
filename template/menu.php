<h1><a href="index.php?page=index">mdcreatis<span>.com</span></a></h1>

<ul>
    <li><a href="index.php?page=store" title="Store">Store</a></li>
    <li><a href="index.php?page=retouch" title="Retouche">Retouche</a></li>
    <li><a href="index.php?page=picture" title="Photographie">Photo</a></li>
    <li><a href="index.php?page=design" title="Design">Design</a></li>
    <li><a href="index.php?page=movie" title="Montage Video">Video</a></li>
    <li><a href="index.php?page=formation" title="Formation">Formation</a></li>
    <li><a href="index.php?page=cad" title="Mon Panier"><img src="css/all/ico.gif"> <?= $p ?></a></li>
    <?
    if (empty($_SESSION["user"]["is_actif"])) {
        ?>
        <li><a href="index.php?page=registrer" title="Mon Compte"><img src="css/all/ico.gif"></a></li>
        <?
    }else{
        ?>
        <li><a href="index.php?page=cm1" title="Mon Compte"><img src="css/all/ico.gif"></a></li>
        <?
    }
    ?>
    <?
    if (!empty($_SESSION["user"]["is_actif"])) {
        ?>
        <li><a href="index.php?page=logout" title="Déconnexion"><img src="css/all/ico.gif"></a></li>
        <?
    }
    ?>

</ul>

