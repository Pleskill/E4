<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Passerelle Professionnelle</title>
        <meta  charset = " utf-8 " />
        <link rel="stylesheet"  href="../css/styles.css " />
        <link rel="stylesheet" href="../css/passerelle.css "/>
        <link rel="shortcut icon" type="image/png" href="../images/Logo-CD-GRAND-SANSFOND.png">
        <script src="new1.js"></script>
    </head>
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
        <section>
            <h2>PASSERELLE PROFESSIONNELLE</h2>
        </section>
        <div id="corps" name='corps' > 
            <nav class="menu_pro">
                <ul>
                    <li class="cv" onClick="f(1)">Consulter la liste des CV</li>
                    <li class="stage" onClick="f(2)">proposer des offres</li>
                </ul>
            </nav>
            <div  name="offres">
                <form>
                    <fieldset>
                        <div class="int_offre"><label>intitulé de l'offre</label><br/>
                            <input type="text" name="intitule"></div>
                         <div class="offre"><label>intitulé de l'offre</label><br/>
                            <input type="text" name="intitule"></div>
                        
                    </fieldset>
                </form>
            </div>
            
            <section name='cv'  class='pdf'>
                <embed src='Berdy_NDION Developpeur FullStack.pdf' width=1000em height=1050em type='application/pdf'/>
            </section> 
        </div>
        
        <footer>
            <nav>
                <ul>
                    <li id='lien4'><a href="offreStage.php">STAGE</a></li>
                    <li><a href="passerelleProfessionnelle.php">PASSERELLE PROFESSIONNELLE</a></li>
                </ul>
            </nav>
            <p>Etablissement d'Enseigement Supérieur Privé</p>
        </footer>
 
    </body>
</html>
