
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <nav>
            <a href="homepage.php"><img src="img/logo logo.png" alt="logo"></a>
            <div class="nav-links">
                <ul>
                <li><a href="homepage.php">HOME</a></li>
                    <li><a href="news.php">NEWS</a></li>
                    <li><a href="trivia.php">TRIVIA</a></li>
                    <li><a href="search.php">SEARCH</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
        </nav>


  <?php
require_once('connection.php');

$r = $_GET["name"];
$results = getGames($r);
$first = true;
echo '<div class="table-responsive"><table class="table">';
while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
    if ($first) {
        echo '<thead><tr>';
        foreach ($row as $k => $v) {
            echo '<th>'.$k.'</th>';
        }
        echo '</tr></thead>';
        echo '<tbody>';
        $first = false;
    }

    echo '<tr>';
    foreach ($row as $v) {
        echo '<td>'.$v.'</td>';
    }
    echo '</tr>';
}
echo '</tbody>';
echo '</table></div>';

?>
  
</body> 

</html>
