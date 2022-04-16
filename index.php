<?php include_once __DIR__ . '/database/data.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DISCHI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./frontend/style.css">
</head>

<body>
    <header class="sticky-top">
        <div class="logo p-1">
            <img src="https://logospng.org/download/spotify/logo-spotify-icon-4096.png" alt="" srcset="">
        </div>
    </header>
    <main class="p-5">
        <div class="container"></div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xxl-5 g-3">
            <?php foreach ($albums as $album) : ?>
                <div class="col">
                    <div class="album p-4 text-center">
                        <div class="album-poster">
                            <img src="<?= $album['poster'] ?>" alt="<?= $album['title'] ?>" class="img-fluid">
                        </div>
                        <div class="d-flex flex-column album-info justify-content-between">
                            <h3 class="m-4"><?= $album['title'] ?></h3>
                            <div class="">
                                <h5 class=" m-0"><?= $album['author'] ?></h5>
                                <p class=" m-0"><?= $album['year'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        </div>
    </main>
</body>

</html>