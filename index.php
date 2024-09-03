<?php 

require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/data/db.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <div class="container">
        <h1>Lista Film:</h1>
        <div class="lista">
            <?php foreach($db as $movie): ?>
                <div><strong>Titolo: </strong> <?php echo $movie->title ?></div>
                <div><strong>Regista: </strong> <?php echo $movie->director ?></div>
                <div><strong>Anno: </strong> <?php echo $movie->year ?></div>
                <div><strong>Generi: </strong> <?php echo implode(', ', $movie->genres) ?></div>
                <hr>
                
            <?php endforeach; ?>
        </div>
    </div>
    
</body>
</html>