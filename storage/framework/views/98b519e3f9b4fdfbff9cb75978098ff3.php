<?php 
    $basePath = base_path();
    require($basePath."/app/Http/Controllers/connexion.php");

    $ERROR = "";

    if (isset($_GET['nom'], $_GET['email'], $_GET['message'])) {
        $nom = $_GET['nom'];
        $email = $_GET['email'];
        $message = $_GET['message'];


        $sql = "INSERT INTO messages (NOM, EMAIL, MESSAGE)  
                VALUES (:nom, :email, :message)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {
            header("Location: messages");
            exit();
        } else {
            $ERROR =  "Erreur lors de l'ajout du livre.";
        }
    } else {
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <title>Contactez-nous</title>
</head>
<body>
    <header>
        <nav  class="nav-bar">
            <ul>
                <li><a href="accueil">Accueil</a></li>
                <li><a href="nouveautes">Nouveautés</a></li>
                <li><a class="active" href="contactez-nous">Contactez-nous</a></li>
                <li><a href="messages">Mes messages</a></li>
                <li><a href="recherche">Rechercher un livre</a></li>
            </ul>
        </nav>
    </header>
        <h1 class="titre">Contactez Nous</h1>
        <form class="form" action="">
            
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" placeholder="Écrivez votre nom"><br>

            <label for="email">Adresse courriel:</label>
            <input type="email" id="email" name="email" placeholder="Votre adresse courriel"><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Écrivez votre message ici"></textarea><br>

            <button type="submit">Envoyer</button>
        </form>
        <footer>
        <p>© 2024 Charles Beauchamp et Étiene Gagnon</p>
    </footer>
</body>
</html><?php /**PATH C:\Users\etienne gagnon\Desktop\Ahuntsic\App-transactionnel\projet-1\resources\views/contactez-nous.blade.php ENDPATH**/ ?>