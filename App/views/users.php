<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
</head>
<body>
    <h1>Liste des utilisateurs</h1>

    <?php if (empty($users)) :?>
        <p>Aucun utilisateur inscrit</p>
    <?php endif; ?>
    <ul>
    <?php foreach($users as $user): ?>
    
        <li><?= htmlspecialchars($user['nom']) ?> <?= htmlspecialchars($user['email']) ?> <a href="<?= 'index.php?controller=user&action=edit&id=' . $user['id'] ?>">Modifier</a><a href="<?= 'index.php?controller=user&action=delete&id=' . $user['id'] ?>">Supprimer</a></li>
    
    <?php endforeach; ?>
    </ul>
    
</body>
</html>