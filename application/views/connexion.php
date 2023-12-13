<!DOCTYPE html>
<html>
<head>
    <title>Page de Connexion</title>
</head>
<style>

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 300px;
    margin: 100px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

label {
    display: block;
    margin: 10px 0 5px;
    color: #555;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #C6B4D1;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: violet;
}

</style>
<body>
    <h2>Connexion</h2>
    <?php echo form_open('connexion/authentifier'); ?>
        <label>Login :</label>
        <input type="text" name="login" required>
        <br>
        <label>Mot de passe :</label>
        <input type="password" name="pass" required>
        <br>
        <input type="submit" value="Se connecter">
    <?php echo form_close(); ?>
</body>
</html>
