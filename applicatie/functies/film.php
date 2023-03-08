<?php
function film($filmID)
{
    if (filter_var($filmID, FILTER_VALIDATE_INT)) {
        require 'db_connectie.php';
        $filmInfo = "SELECT movie_id as id, URL as url
    FROM Movie
    WHERE movie_id = ?";
        $filmCheck = $verbinding->prepare($filmInfo);
        $filmCheck->execute([$filmID]);
        $filmInfo = $filmCheck->fetchAll();
        if (empty($filmInfo['url'])) {
            $filmInfo['url'] = '../fletnix/video/trailer_wildcard.mp4';
        }
        $html = '<main>';
        $html .= '<video controls>';
        $html .= '<source src="' . $filmInfo['url'] . '">';
        $html .= '</video>';
        $html .= '</main>';
        return $html;
    } else {
        return '<main><h1>Er is een fout opgetreden.</h1></main>';
    }
}
?>