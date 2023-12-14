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



<img src="<?= base_url('IMG/IMG/placeholder.png') ?>" alt="">

<section id="array_location">
        <h2 id="reservation">Formulaire de réservation</h2>
        <form action="#" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="dateDebut">Date de début :</label>
            <input type="date" id="dateDebut" name="dateDebut" required>

            <label for="dateFin">Date de fin :</label>
            <input type="date" id="dateFin" name="dateFin" required>





            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>

</head>
<body>
    <header>
    </header>

    <h1>Liste des Produits</h1>
    <div id='AllProduct'>
        <?php foreach ($page as $product) : ?>
            <div id='NameProduct'>
                <a href="<?= site_url('produit/' . $product['type']) ?>">
                    <p><?= $product['type'] ?></p>
                    <img src="<?= base_url('IMG/PhotoProduit/'. $product['id']) ?>" alt="">
                </a>
                <p id='ProductPrice'>
                    <?= $product['prix_location'] ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>


</body>
</html>


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
            © 202 Dicathlon - Tous droits réservés
        </div>
    </footer>
</html>
