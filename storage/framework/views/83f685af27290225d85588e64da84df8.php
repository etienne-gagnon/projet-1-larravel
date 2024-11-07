
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <title>Recherche</title>
</head>
<body>
    <header>
        <nav  class="nav-bar">
            <ul>
                <li><a href="accueil">Accueil</a></li>
                <li><a href="nouveautes">Nouveautés</a></li>
                <li><a href="contactez-nous">Contactez-nous</a></li>
                <li><a href="messages">Mes messages</a></li>
                <li><a class="active" href="recherche">Rechercher un livre</a></li>
            </ul>
        </nav>
    </header>
        <h1 class="titre">Rechercher un livre</h1>
        
        <form id="recherche-form" method="GET" action="">
            <input type="text" name="query" placeholder="Rechercher un livre...">
            <button type="submit">Rechercher</button>
        </form>

        <section class="books-container">
        <?php
            require_once("../app/Http/Controllers/connexion.php");

            $search = isset($_GET['query']) ? trim($_GET['query']) : '';


            if (!empty($search)) {
                $sql = "SELECT * FROM livres WHERE TITRE LIKE :search OR AUTEUR LIKE :search";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['search' => '%' . $search . '%']);
            } else {
                $sql = "SELECT * FROM livres";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
            }

            $livres = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($livres) {
                foreach ($livres as $livre) {
                    $IMG_SRC = htmlspecialchars($livre["IMG_SRC"]);
                    $TITRE = htmlspecialchars($livre["TITRE"]);
                    $AUTEUR = htmlspecialchars($livre["AUTEUR"]);
                    $ANNEE_PUBLICATION = htmlspecialchars($livre["ANNEE_PUBLICATION"]);
                    $RESUME = htmlspecialchars($livre["RESUME"]);
                    $PRIX = htmlspecialchars($livre["PRIX"]);

                    $ID = htmlspecialchars($livre["ID"]);
                    echo "<div id='book-card-$ID' class='book-card' onclick='openDetails($ID)'>
                                    <img src='" . url('/img/' . $IMG_SRC . '') . "' alt='$TITRE'>
                                    <p>$TITRE</p>
                                 </div> 
                                 <div id='book-card-detail-$ID' class='book-card-detail'>
                                    <div class='info'>
                                            <img src='" . url('/img/' . $IMG_SRC . '') . "' alt='$TITRE'>
                                            <hr>
                                            <p>Titre : $TITRE</p>
                                            <p>Auteur : $AUTEUR</p>
                                            <p>Date de publication : $ANNEE_PUBLICATION</p>
                                            <p>Résumé : $RESUME</p>
                                            <p>Prix : $PRIX $</p>
                                            <div>
                                                    <button onclick='closeDetails($ID)'>Revenir</button>
                                                    <a>Supprimer le livre</a>
                                            </div>
                                    </div>
    
                            </div>";
                }
            } else {
                echo "<p>Aucun livre trouvé.</p>";
            }
        ?>
        </section>
        <footer>
        <p>© 2024 Charles Beauchamp et Étiene Gagnon</p>
    </footer>
</body>
</html><?php /**PATH C:\Users\etienne gagnon\Desktop\Ahuntsic\App-transactionnel\projet-1\resources\views/recherche.blade.php ENDPATH**/ ?>