

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
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

  <div class="text-box">
    <h1>Search for games here!</h1>
    <br>
    <p>Directions: Searh for a name of a popular game listed in the <a href="https://sportsbrowser.net/most-popular-online-games/">"top 10 popular games in 2022"</a>,  and you will be given a list of games similar to the game you chose!</p>
  </div> 
<form action="results2.php" method="get">
   <input type="text" name="name" placeholder="Enter name of game" class="inputbox-search"/>
   <input type="submit" class="button-search">

</form>

</body> 

</html>