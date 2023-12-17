<!DOCTYPE html>
<html>
<head>
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="http://localhost/Dicathlon/CSS/style.css">
</head>
<body>
    <h2>Connexion</h2>
    <?php echo form_open('connexion/authentifier'); ?>
        <label>Utilisateur :</label>
        <input type="text" name="login" required>
        <br>
        <label>Mot de passe :</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Se connecter">
    <?php echo form_close(); ?>
</body>
</html>
