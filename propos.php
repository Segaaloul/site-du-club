<!DOCTYPE html>
<!--  
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Clubequus Hammamet</title>

    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

    <h1 class="bienvenue">A Propos de nous !</h1>
    <nav>
        <ul>
            <li>
                <a href="index.html">
                    Accueil
                </a>
            </li>
            <li>
                <a href="actualite.html">
                    Actualité
                </a>
                
            </li>
            <li>
                <a href="#">
                    A propos
                </a>
            </li>
        </ul>
    </nav>


 


    

</body>

</html>
-->
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <title>A Propos</title>
    
        <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
    </head>
    
    <body>
    
        <!-- Header -->
        <header>
            <div id="head">
    
            
                <div class="img">
                    <img src="img/téléchargement.jpg" width="150">
                </div>
                     
                <div class="ktiba">
                    <h1 class="bienvenue">A Propos </h1> 
                </div>
                    
            
            </div>
        </header>
    
    
    
    <!-- Menu de navigation -->
    <div id="barre">
    
        <nav class="menu-nav">
            <ul>
                <li class="btn">
                    <a href="index.html">

                        Accueil
                    </a>
                </li>
                <li class="btn">
                    <a href="actualite.html">

                        Actualité
                    </a>
                    
                </li>
                <li class="btn">
                    <a href="#">
                        A propos
                    </a>
                </li>
                <li class="dragon">
                    <a href="dragon.html">
                        Les Dragons
                    </a>
                </li>
                <li class="btn" style="float:right">
                    <a href="shop.html">
                        Shop
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    
    <!-- Contenue sous forme de boite-->
    
    <div id="content-p">

        <div class="top1">

        </div>
        
    

        

        
        <div class="leftbox">
            <p>
                    
            </p>
            <h2 class="titremap">
                Le Club equestre est basé dans une ville tres connue et adorée en Tunisie,Hammamet.
                <h2>
                    Notre emplacement est strategique car i nous permet d'acceder a plusieur parcours, Montagne,plage...
                </h2>
            </h2>


         
        </div>





        <div class="box2">
            <div class="president">
                
                <img class="papa" src="img/papa.png" width="200px">
             <div class="desc">
                    Sami Gaaloul
             </div>


            </div>
            <div class="president">
               
                <img class="mom" src="img/mom.png" width="200px">
       
            <div class="desc2">
                   Sylviane Gaaloul
            </div>

        </div>

        <div class="boxtext">

            <h4>
                ici on parle wesh
            </h4>
            <h4>
                ici on parle wesh
            </h4>

        </div>


        <div class="box3">
            <div class="map">

              
                <a href="https://www.google.com/maps/place/club+equus+hammamet/@36.4138972,10.5879017,15z/data=!4m5!3m4!1s0x0:0xf835a260c734c87a!8m2!3d36.4139144!4d10.5879238?hl=fr" target="_blank">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12843.22260061764!2d10.5879017!3d36.4138972!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf835a260c734c87a!2sclub%20equus%20hammamet!5e0!3m2!1sfr!2sch!4v1656619850351!5m2!1sfr!2sch" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                 </a>
                 <p>
                    Localisation
                 </p>
            </div>

        </div>

        <div class="espace1">
            <div class="pac1">

            </div>
            <div class="pac2">

            </div>
            <div class="pac3">
                
            </div>
            <div class="pac4">
                
            </div>
        </div>

        <div class="reseaux">
            <p>
                Réseaux
            </p>
        </div>


        

        
        <div class="rightbox">
        
            <div class="qrcode1">
                <a href="https://www.facebook.com/Club-Equus-Hammamet-220580241416022/" target="_blank">
                    <img src="img/qr-code (1).png" width="200px" >

                </a>
               
            </div>
            <div class="qrcode2">
                <a href="https://www.instagram.com/club_equus_hammamet/?hl=fr" target="_blank">
                    <img src="img/qr-code (2).png" width="200px">

                </a>
            </div>

        </div>



        <div class="formulaire">
            <h1>Contactez-nous</h1>
         <h3>Pour Toute demande, remplissez le formulaire ci-dessous</h3>

            <form method="post">
                <label >Email</label>
                <input type="email" name="email" required >
                <label>Sujet</label>
                <input type="text" name="sujet" required>
                <textarea name="message" required></textarea>
                <input type="submit" value="Envoyer le message"></input>


            </form>


            <?php
            $message = "ce message vien du site clubequus hammamet 
            mail de la personne : " . $_POST["email"] ."
            sont message : " . $_POST["message"];

            if(isset($_POST["message"]))
            {

            $result = mail("selim03gaaloul@gmail.com",$_POST["sujet"],$message,"");
            if($result)
            {
                echo "<p> mail envoyer </p>" ;
            }


            }



            ?>

        </div>









        <div class="top2">

        </div>
        
    
        
    </div>
    
    <!-- Pied de la page -->
    
    <footer>
        <div class="contact">
            <p>
                Numero: +216 50 111 079
            </p>
            <p>
                Numero: +216 55 848 890
            </p>
            <p>
                Email: clubequus@gmail.com
            </p>
        </div>
    
        <div class="copy">
            <p>
                Copyright &copy; Selim Gaaloul - 2022 - All Right Reseved
            </p>
        </div>
    
        <div class="QR" style="float:right">
            <img src="img/qr_instagram_selim.png" width="120px">
            
        </div>
    
    </footer>
    
    
    
        
    
    </body>
    
    </html>