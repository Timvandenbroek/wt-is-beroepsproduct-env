<?php
function filmInfo($film_ID)
{
    if (filter_var($film_ID, FILTER_VALIDATE_INT)) {
        require 'db_connectie.php';
        $filmQuery = "SELECT M.movie_id as filmID, M.title as titel, M.Duration as lengte, M.description as beschrijving, M.publication_year as jaar, M.cover_image as plaatje, M.previous_part as vorige, MG.genre_name as genre
        FROM Movie M LEFT OUTER JOIN Movie_Genre MG on M.movie_id = MG.movie_id
        WHERE M.movie_id = ?";
        $filmCheck = $verbinding->prepare($filmQuery);
        $filmCheck->execute([$film_ID]);
        $filmInformatie = $filmCheck->fetch();
        $regisseurQuery = "SELECT P.lastname as achternaam, P.firstname as voornaam, MD.movie_id as filmID
        FROM Movie_Director MD 
        INNER JOIN Person P on MD.person_id = P.person_id 
        WHERE MD.movie_id = ?";
        $regisseurCheck = $verbinding->prepare($regisseurQuery);
        $regisseurCheck->execute([$film_ID]);
        $regisseur = $regisseurCheck->fetch();
        $acteurQuery = 'SELECT P.lastname as achternaam, P.firstname as voornaam, MC.movie_id as filmID, MC.role as rol  
        FROM Movie_Cast MC 
        INNER JOIN Person P on MC.person_id = P.person_id 
        WHERE MC.movie_id = ?';
        $acteurCheck = $verbinding->prepare($acteurQuery);
        $acteurCheck->execute([$film_ID]);
        $acteur = $acteurCheck->fetchAll();
        if (empty($filmInformatie)) {
            $filmInformatie['titel'] = 'Onbekende titel';
            $filmInformatie['lengte'] = 'een onbekend aantal';
        }
        if (empty($regisseur)) {
            $regisseur['voornaam'] = 'een onbekende';
            $regisseur['achternaam'] = 'regisseur';
        }
        if (empty($filmInformatie['genre'])) {
            $genre = $filmInformatie['titel'] . ' is een film met een onbekend genre ';
        } else {
            $genre = $filmInformatie['titel'] . ' is een ' . $filmInformatie['genre'] . ' film ';
        }
        if (empty($filmInformatie['plaatje'])) {
            $filmInformatie['plaatje'] = 'databaseplaatje';
        }
        $html = '<main>';
        $html .= '<h1>' . $filmInformatie['titel'] . '</h1>';
        $html .= '<a class="button" href="../fletnix/wildcard.php?film=' . $film_ID . '">Film kijken</a>';
        $html .= '<h2>Filmposter</h2>';
        $html .= '<a class="poster" href="' . $filmInformatie['plaatje'] . '"><img  src="' . $filmInformatie['plaatje'] . '" alt="' . $filmInformatie['titel'] . '" ></a>';
        $html .= '<h2>Film informatie</h2>';
        $html .= '<p>De film duurt' . ' ' . $filmInformatie['lengte'] . ' ' . 'minuten en is geregisseerd door' . ' ' . $regisseur['voornaam'] . ' ' . $regisseur['achternaam'] . '.</p>';
        $html .= '<h2>Samenvatting</h2>';
        $html .= '<p>' . $genre . $filmInformatie['beschrijving'] . '</p>';
        $html .= '<h2>Acteurs</h2>';
        if (!empty($acteur)) {
            $html .= '<ul>';
            foreach ($acteur as $persoon) {
                $html .= '<li>' . $persoon['rol'] . ' ' . 'gespeeld door' . ' ' . $persoon['voornaam'] . ' ' .  $persoon['achternaam'] . '.</li>';
            }
            $html .= '</ul>';
        } else {
            $html .= 'Er zijn geen acteurs bij ons bekend';
        }
        $html .= '</main>';
        return $html;
    } else {
        return '<main><h1>Er is een fout opgetreden.</h1></main>';
    }
}
?>