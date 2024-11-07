<?php 
    $basePath = base_path();
    require($basePath."/app/Http/Controllers/connexion.php");

    $ERROR = "";

    if (isset($_GET['titre'], $_GET['auteur'], $_GET['annee_publication'], $_GET['resume'], $_GET['prix'])) {
        $titre = $_GET['titre'];
        $auteur = $_GET['auteur'];
        $annee_publication = $_GET['annee_publication'];
        $resume = $_GET['resume'];
        $prix = $_GET['prix'];
        $img_src = "default.webp";


        $sql = "INSERT INTO livres (TITRE, AUTEUR, ANNEE_PUBLICATION, RESUME, PRIX, IMG_SRC)  
                VALUES (:titre, :auteur, :annee_publication, :resume, :prix, :img_src)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':auteur', $auteur);
        $stmt->bindParam(':annee_publication', $annee_publication);
        $stmt->bindParam(':resume', $resume);
        $stmt->bindParam(':prix', $prix);
        $stmt->bindParam(':img_src', $img_src);

        if ($stmt->execute()) {
            header("Location: accueil");
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
    <title>Ajouter un livre</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <script src="{{asset('js/script.js') }}" defer></script>
</head>
<body>
    <header>
        <nav  class="nav-bar">
            <ul>
                <li><a class="active" href="accueil">Accueil</a></li>
                <li><a href="nouveautes">Nouveautés</a></li>
                <li><a href="contactez-nous">Contactez-nous</a></li>
                <li><a href="messages">Mes messages</a></li>
                <li><a href="recherche">Rechercher un livre</a></li>
            </ul>
        </nav>
    </header>
    <h1 class="titre">Ajouter un livre</h1>
    <form class="form" method="GET" action="" enctype="multipart/form-data">
        <label for="titre">Titre:</label>
        <input type="text" id="titre" name="titre" placeholder="Titre du livre" required><br>

        <label for="auteur">Auteur:</label>
        <input type="text" id="auteur" name="auteur" placeholder="Nom de l'auteur" required><br>

        <label for="annee_publication">Année de publication:</label>
        <input type="text" id="annee_publication" placeholder="Année de publication du livre" name="annee_publication" required><br>

        <label for="resume">Résumé:</label>
        <textarea id="resume" name="resume" placeholder="Résumé du livre" required></textarea><br>

        <label for="prix">Prix:</label>
        <input type="float" id="prix" name="prix" placeholder="Le prix du livre" required><br>

        <button type="submit">Ajouter le livre</button>
        <a class="center" href="accueil">Revenir en arrière</a>
    </form>

    <footer>
        <p>© 2024 Charles Beauchamp et Étiene Gagnon</p>
    </footer>
</body>
</html>