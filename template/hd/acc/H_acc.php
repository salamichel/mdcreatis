<!-- BODY REGISTRER -->

<body id="bdy_reg">

    <!-- HEADER -->

    <header id="hdr_rel">

        <!-- MENU -->

        <div id="nav_W">

            <nav id="nav_all" class="CLR">
                <?php include ("template/menu.php"); ?>
            </nav>

        </div>

        <!-- SUB-MENU -->

        <nav id="tit_all" class="SUB_M CLR">

		<h1>Mon Espace personnel</h1>
		<ul>
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

		</nav>
       
    </header>

    <!-- CONTENT -->

    <div id="CT_reg">