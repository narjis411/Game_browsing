<?php

function getGames($term){
$db = new SQLite3('azgames.db');
$results = $db->query("SELECT game, genre, rating, developer FROM games where meta like '%$term%'");
return $results;

}
?>