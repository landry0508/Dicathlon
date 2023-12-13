<head>
<link rel="stylesheet" href="http://localhost/Dicathlon/CSS/style.css">
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

    <h1>Liste des Produits</h1>
    <div id='AllProduct'>
        
            <?php foreach ($page as $product) : ?>
                <div id='NameProduct'>
                <a href="<?php= site_url('produit/' . $product['type'])?>">
                    <?= $product['type'] ?>
                    <img src="../IMG/<?php ?>" alt="">
             </a> 
            </h2>
            <p id='ProductPrice'>
                <?= $product['prix_location'] ?></p>
                </div>
                <?php endforeach; ?>
            
        
    </div>
   <!--  <table border="1">
        <tr>
            <th>Type</th>
            <th>Marque</th>
            <th>Prix de Location</th>
            <th>État</th>
        </tr>
        <?php foreach ($page as $product) : ?>
            <tr>
                <td><?= $product['type'] ?></td>
                <td><?= $product['marque'] ?></td>
                <td><?= $product['prix_location'] ?></td>
                <td><?= $product['etat'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table> -->



