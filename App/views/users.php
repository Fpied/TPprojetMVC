<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Liste des utilisateurs</title>
</head>
<body class="body">
    <h1 class="body__h1">Liste des utilisateurs</h1>
    <div class="body__list">
        <?php if (empty($users)) :?>
        <p class="list__p">Aucun utilisateur inscrit</p>
        <?php endif; ?>
        <ul class="list__ul">
        <?php foreach($users as $user): ?>
        
            <li class="ul__li"><div class="list__nom"><?= htmlspecialchars($user['nom']) ?></div><div class="list__email"><?= htmlspecialchars($user['email']) ?></div><div class="list__modifier"><a href="<?= 'index.php?controller=user&action=edit&id=' . $user['id'] ?>">Modifier</a></div><div class="list__delete"><a href="<?= 'index.php?controller=user&action=delete&id=' . $user['id'] ?>">Supprimer</a></div></li>
        
        <?php endforeach; ?>
        </ul>
        
    </div>
    <a class="a__sorti__deboite" href="index.php?controller=user&action=create">Creation de profils</a>
    
</body>
</html>