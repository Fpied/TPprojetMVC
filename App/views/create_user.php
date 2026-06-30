<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer utilisateur</title>
</head>
<body>
    <h2>Créer utilisateur</h2>

    <form action="index.php?controller=user&action=create" method="post">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">
        <label for="email">email</label>
        <input type="email" name="email" id="email">
        <button id="send" type="submit">Envoyer</button>

    </form>
    
</body>
</html>