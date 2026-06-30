<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
</head>
<body>
    <h2>Modification utilisateur</h2>

    <form action="<?= 'index.php?controller=user&action=edit' ?>" method="post">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($user['nom']) ?>">
        <label for="email">email</label>
        <input type="email" name="email" id="email" value="<?= htmlspecialchars($user['email']) ?>">
        <input type="hidden" value="<?= htmlspecialchars($user['id']) ?>" name="id">
        <button id="send" type="submit">Envoyer</button>

    </form>
    
</body>
</html>