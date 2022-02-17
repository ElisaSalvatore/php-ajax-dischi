<?php
    include __DIR__ . "/database/dischiDb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Php</title>

    <link rel="stylesheet" href="./css/dischi.css">
</head>
<body>
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/768px-Spotify_logo_without_text.svg.png" alt="">
    </header>

    <main class="container">
        <div class="container-cards">
            <?php foreach ($dischi as $disco) { ?>
                <div class="card">
                    <img src="<?php echo $disco['poster']?>" alt="immagine album disco">
                    <span class="title"> <?php echo $disco['title']?> </span>
                    <span class="author"> <?php echo $disco['author']?> </span>
                    <span class="year"> <?php echo $disco['year']?> </span>
                </div>
            <?php } ?>
        </div>
    </main>
    
</body>
</html>
