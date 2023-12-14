<html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/Dicathlon/CSS/style.css">
    </head>
        <title>Document</title>
    </head>
    
    <header>

<a href="http://localhost/Dicathlon/index.php/Welcome/"><h1 class='TitleName'>Dicathlon</h1></a>

<input id="searchbar" onkeyup="search_animal()" type="text"
name="search" placeholder="Rechercher...">

<div class='icones'>
    <div class='connexion_icone'>
    <a href="http://localhost/Dicathlon/index.php/connexion">
    <img id='img_connexion' src="<?= base_url('IMG/connexion (1).png') ?>" alt="">
        <p class='img_texte_connexion'> Connexion</p>
    </a>
    </div>
    <div class='shop_icone'>
    <img id='img_connexion' src="<?= base_url('IMG/panier (1).png') ?>" alt="">
        <p class='img_texte_connexion'>Panier</p>
    </div>

</div>

</header>


<body>
<div id='TypeOfSport'>
        <a href="http://localhost/Dicathlon/index.php/Welcome/catalogue"><div id='Autres'>Tout notre catalogue</div></a>
        <div id='Mutlisport'>Équipement Mutlisport</div>
        <div id='Collectifs'>Sport Collectifs</div>
        <div id='Raquette'>Sport de Raquettes</div>
        <div id='Muscu'>Musculation et Fitness</div>
        <div id='BonPlan'>Bon Plan</div>
    </div>

    <div id='BlackLine'></div>
    <h1 class='moments'>OFFRES DU MOMENTS </h1>

    <div class='offres'>
    <img id='haltere' src="<?= base_url('IMG/haltere.jpg') ?>" alt="">
        <img id='Sport_raquette' src="<?= base_url('IMG/raquette.jpg') ?>" alt="">
        <img id='velo' src="<?= base_url('IMG/velo.jpg') ?>" alt="">

    <div class="promo">

      <div class="promo1">
          <p>PROMO</p>
      </div>
      <div class="promo2">
          <p>PROMO</p>
      </div>
      <div class="promo3">
          <p>PROMO</p>
      </div>
    </div>

    <div class="prix">

      <div class="prix1">
          <p>56€</p>
      </div>
      <div class="prix2">
          <p>89€</p>
      </div>
      <div class="prix3">
          <p>859€</p>
      </div>
    </div>


        <div class="description1">
            <p>Bodytrading Set 20 Haltères <br> hexagonales HEXDUI-10</p>
        </div>
        <div class="description2">
            <p>Vélo lectrique Le Vélo <br> MadL'Urbain 2250 W Blanc</p>
        </div>
        <div class="description3">
            <p>Vermont Colt raquette de <br> Tennis (Senior 69cm) </p>
        </div>
      </div>


      <div class="barre"></div>
    
    <h2>TARIFS DE LOCATION</h2>

    <div class='escalade'>
        
        <img id='escaladeimg' src="<?= base_url('IMG/escalade.PNG') ?>" alt="">

    </div>

    <h3>NOS MEILLEURS LOCATIONS</h3>

    <div class='best'>

        <div class="titre1">
        <img id='nakamura' src="<?= base_url('IMG/nakamura.png') ?>" alt="">
        <p>NAKAMURA 35€</p>
        <article>RÉSERVER</article>
        </div>

        <div class="titre2">
        <img id='snow' src="<?= base_url('IMG/snow.png') ?>" alt="">
        <p>SALOMON 35€</p>
        <article>RÉSERVER</article>
        </div>

        <div class="titre3">
        <img id='ski' src="<?= base_url('IMG/ski.PNG') ?>" alt="">
        <p>ROSSIGNOL 35€</p>
        <article>RÉSERVER</article>
        </div>

        <div class="titre4">
        <img id='panier' src="<?= base_url('IMG/panier (2).png') ?>" alt="">
        <p>PRO TOUCH 35€</p>
        <article>RÉSERVER</article> 
        </div>

    </div>

    </body>


    <footer>
        <div class="FootContainer">
            <div class='FooterLeft'>
                <h4>Notre entreprise</h4>
                <p>Recrutement</p>
                <p>Qui sommes nous</p>
                <p>Engagement durable</p>
                <p>Nos partenaires</p>
                <p>Presse et actualité</p>
            </div>

            <div class='FooterLeft'>
                <h4>Besoin d'aide ?</h4>
                <p>Mode de livraison</p>
                <p>Moyen de paiement</p>
                <p>Programme de fidélité</p>
                <p>Tendances sportives</p>
                <p>Question</p>
            </div>

            <div class='FooterLeft'>
                <h4>Nos services</h4>
                <p>Carte cadeau</p>
                <p>Louez votre matériel</p>
                <p>Assurance</p>
                <p>Financement</p>
            </div>

            <div class='FooterLeft'>
                <h4>Nos réseaux</h4>
                <p>Instagram</p>
                <p>Twitter</p>
                <p>Facebook</p>
                <p>TikTok</p>
            </div>
        </div>

        <div class='droit'>
            © 2023 Dicathlon - Tous droits réservés
        </div>
    </footer>
    </html>
</html>
