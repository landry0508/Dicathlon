
    <h1>Liste des Produits</h1>
    <div id='AllProduct'>
        
            <?php foreach ($page as $product) : ?>
                <div id='NameProduct'>
                <a href="<?php= site_url('produit/' . $product['type'])?>">
                    <?= $product['type'] ?>
                    <img src="IMG/haltere.jpg" alt="">
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



