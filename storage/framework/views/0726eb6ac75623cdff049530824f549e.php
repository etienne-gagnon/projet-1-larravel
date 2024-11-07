<?php 

    $basePath = base_path();

require($basePath . "/app/Http/Controllers/connexion.php");
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <script src="<?php echo e(asset('js/script.js')); ?>" defer></script>
    <title>Message</title>
</head>

<body>
    <header>
        <nav class="nav-bar">
            <img onclick='openNavbar()' id="menu-logo" src="<?php echo e(asset('img/menu.png')); ?>">
            <img onclick='openNavbar()' id="close-logo" src="<?php echo e(asset('img/logoX.png')); ?>">
            <ul id="open_navbar">
                <li><a href="accueil">Accueil</a></li>
                <li><a href="nouveautes">Nouveautés</a></li>
                <li><a href="contactez-nous">Contactez-nous</a></li>
                <li><a class="active" href="messages">Mes messages</a></li>
                <li><a href="recherche">Rechercher un livre</a></li>
            </ul>
        </nav>
    </header>
    <h1 class="titre">Messages de contact envoyés</h1>
    <section class="messages-container">
        <?php  include($basePath . "/app/Http/Controllers/fetch_messages.php");?>
    </section>
    <footer>
        <p>© 2024 Charles Beauchamp et Étiene Gagnon</p>
    </footer>
</body>

</html><?php /**PATH C:\Users\etienne gagnon\Desktop\Ahuntsic\App-transactionnel\projet-1\resources\views/messages.blade.php ENDPATH**/ ?>