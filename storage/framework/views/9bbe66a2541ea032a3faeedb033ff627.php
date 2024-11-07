<?php 

    $basePath = base_path();

    require($basePath."/app/Http/Controllers/connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/livres.css')); ?>">
    <title>Nouveautés</title>
</head>
<body>
    <header>
        <nav  class="nav-bar">
            <ul>
                <li><a href="accueil">Accueil</a></li>
                <li><a class="active" href="nouveautes">Nouveautés</a></li>
                <li><a href="contactez-nous">Contactez-nous</a></li>
                <li><a href="messages">Mes messages</a></li>
                <li><a href="recherche">Rechercher un livre</a></li>
            </ul>
        </nav>
    </header>

    <h1 class="titre">Voici nos nouveautes</h1>

    <section class="books-container">
        <?php  include($basePath."/app/Http/Controllers/fetch_nouveaute.php");?>
    </section>
    <footer>
        <p>© 2024 Charles Beauchamp et Étiene Gagnon</p>
    </footer>
</body>
</html>

<?php /**PATH C:\Users\etienne gagnon\Desktop\Ahuntsic\App-transactionnel\projet-1\resources\views/nouveautes.blade.php ENDPATH**/ ?>