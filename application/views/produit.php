<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit</title>
    <link rel="stylesheet" href="http://localhost/Dicathlon/CSS/style.css">
</head>
<header>

    <h1 class='TitleName'>Dicathlon</h1>
   
    <input id="searchbar" onkeyup="search_animal()" type="text"
    name="search" placeholder="Rechercher...">

    <div class='icones'>
        <div class='connexion_icone'>
            <img id='img_connexion' src="<?= base_url('IMG/connexion (1).png') ?>" alt="">
            <p class='img_texte_connexion'> Connexion</p>
        </div>
        <div class='shop_icone'>
        <img id='img_connexion' src="<?= base_url('IMG/panier (1).png') ?>" alt="">
            <p class='img_texte_connexion'>Panier</p>
        </div>

    </div>
</header>

<div id='TypeOfSport'>
            <div id='Mutlisport'>Équipement Mutlisport</div>
            <div id='Collectifs'>Sport Collectifs</div>
            <div id='Raquette'>Sport de Raquettes</div>
            <div id='Muscu'>Musculation et Fitness</div>
            <div id='Autres'>Autres</div>
            <div id='BonPlan'>Bon Plan</div>
        </div>
    
        <div id='BlackLine'></div>

<body>

<h2>Détail du produit</h2>
<p>Type: <?= $productId['type'] ?></p>
<p>Description: <?= $$productId['description'] ?></p>
<p>Model: <?= $$productId['modele'] ?></p>
<p>Price: <?= $$productId['prix_location'] ?> €/jour</p>
<p>Condition: <?= $$productId['etat'] ?></p>


</body>
</html>

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
