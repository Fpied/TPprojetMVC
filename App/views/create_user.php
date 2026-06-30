<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Créer utilisateur</title>
</head>
<body class="body">
    <h1 class="body__h1">Créer utilisateur</h1>
    <div class="body__list">
    <form class="ul__li" action="index.php?controller=user&action=create" method="post">
        <label for="nom">Nom</label>
        <input class="form__input" type="text" id="nom" name="nom">
        <label for="email">email</label>
        <input class="form__input" type="email" name="email" id="email">
        <button class="form__envoyer" id="send" type="submit">Envoyer</button>

    </form>
    </div>
</body>
</html>