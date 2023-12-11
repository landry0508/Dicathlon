
    <h1>Liste des Produits</h1>
    <table border="1">
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
    </table>



