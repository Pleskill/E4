<!DOCTYPE html>
<html>
    <head>
        <title> inscription </title>
        <meta  charset = " utf-8 " />
        <link rel="stylesheet"  href="../css/styles.css " />
        <link rel="shortcut icon" type="image/png" href="../images/Logo-CD-GRAND-SANSFOND.png">
        <link rel="stylesheet" href="../css/formulaire.css">
        <script src="../scripts/script.js"></script>
    </head >
    <body>
        <header> 
            <section id='insrech'>
                <img src='../images/icônes/image_pour_cv.png' alt='user icon'/>
                <a href="inscription">S'inscire/S'identifier</a><br> 
                <img src='../images/icônes/loupe.png' alt='search icon' />
                <input type='search' value='search'>
            </section>
            <img src=" ../images/Logo.jpeg "  alt = " logo diderot "  align = "left" width="300px" height="250px" />
            <a href="../index.php"><h2>BTS <span>SIO</span><br/>XCHANGE<span> &</span> CONSULT</h2></a>           
        </header>
        <nav>
            <ul>
                <li id='lien1'><a href="../index.php">ACCUEIL</a></li>
                <li id='lien2'><a href="information.php">FORMATION</a></li>
                <li id='lien3'><a href="forum.php">FORUM</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </nav>
        <div class="separateur"></div>
		<div class="formulaire">
			<form action="" method="post" name="formulaire_etudiant" >
				<nav class="nav">
					<ul class="ul">
						<li class="li" onClick=f(1)>Etudiant/professeur</li>
						<li class="li" onClick=f(2)>Entreprise</li>
					</ul>
				</nav>
				<fieldset >
					<div><label for='i_nom'>Nom :</label></br> <input type="text" name="nom"></div><br/>
					<div><label for='i_prenom'>Prenom :</label><br/><input type="text" name=""></div><br/>
					<div><label for='i_email'>E-mail :</label><br/><input type="text" name="email"></div><br/>
					<div><label for='i_mot_de_passe'>Mot de passe :</label><br/><input type="text" name=""></div><br/>
					<div><label for='i_conf_mot_de_passe'>Confirmer votre mot de passe :</label><br/><input type="text" name="conf_mot_de_passe"></div><br/>
					<div><label for='i_CV'>Déposer un CV:</label><br/><input type="file" name="cv" ></div><br/>
					<button value="valider"> valider</button>
				</fieldset>
		
			</form>
			<form action="" method="post" name="formulaire_entreprise" hidden>
				<nav class="nav">
					<ul class="ul">
						<li class="li" onClick=f(1)>Etudiant/professeur</li>
						<li class="li" onClick=f(2)>Entreprise</li>
					</ul>
                                    <fieldset >
					<div><label for='i_nom'>Nom de l'entreprise :</label></br> <input type="text" name="nom"></div><br/>
					<div><label for='i_email'>E-mail :</label><br/><input type="text" name="email"></div><br/>
					<div><label for='i_mot_de_passe'>Mot de passe :</label><br/><input type="text" name=""></div><br/>
					<div><label for='i_conf_mot_de_passe'>Confirmer votre mot de passe :</label><br/><input type="text" name="conf_mot_de_passe"></div><br/>
					<button value="valider"> valider</button>
				</fieldset>
		
			<img src="../images/logo1.png" align="right">
		</div>
	</body>
        <footer>
            <nav>
                <ul>
                    <li id='lien4'><a href="offreStage.php">STAGE</a></li>
                    <li><a href="passerelleProfessionnelle.php">PASSERELLE PROFESSIONNELLE</a></li>
                </ul>
            </nav>
            <p>Etablissement d'Enseigement Supérieur Privé</p>
        </footer>
		
    </body >
</html >