<?php
require_once("connexion.php");

$sql = "SELECT * FROM livres ";
$stmt = $pdo->prepare($sql);
$stmt->execute();
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
        echo "Aucun livre trouvé.";
}

?>