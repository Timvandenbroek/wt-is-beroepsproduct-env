<?php
  
  if(strpos($url, 'movie') !== false) {
    $movie_id = $_GET['movie'];

    $movie_title = get_movie_data("select ", 'title', " from movie where movie_id = $movie_id");
    $dirname = 'images/posters/';
    $movie_image = ($dirname . $movie_id . '.jpg');

    $movie_movie = get_movie_data("select ", 'url', " from movie where movie_id = $movie_id");
    $movie_year = get_movie_data("select ", 'year', " from movie where movie_id = $movie_id");
    $movie_genre = get_movie_data("select ", 'genre', " from movie_genre where movie_id = $movie_id");
    $movie_duration = get_movie_data("select ", 'duration', " from movie where movie_id = $movie_id");
    $movie_directors = get_movie_data("select ", 'name', " from movie_directors MD join person P on MD.person_id = P.person_id where movie_id = $movie_id");
    $movie_cast = get_movie_data("select ", 'name', " from movie_cast MC join person P on MC.person_id = P.person_id where movie_id = $movie_id");
    $movie_description = get_movie_data("select ", 'description', " from movie where movie_id = $movie_id");
  }

  function get_movie_data($s1, $col, $s2) {
    global $dbh, $connection;
    $data = array();          
    $query = $s1 . $col . $s2;

    $result = $dbh->query($query);

    if($result) {
      if($connection == 2) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
          array_push($data, $row[$col]);
        }
      } else {
        while ($row = $result->fetch_assoc()) {
          array_push($data, $row[$col]);
        }
      }
    } else {
      array_push($data, "0 resultaten zijn gevonden");
    }

    return $data;
  }
?>