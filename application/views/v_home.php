<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="<?php echo base_url() ?>/public/css/bootstrap.css"></script>
    <script src="<?php echo base_url() ?>/public/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>/public/css/index.css"></script>
    <title>DJY News - Give You The Best News Everyday</title>
</head>

<?php include 'templates/header.php' ?>
<br>

<body>

    <?php
    $url = 'https://newsapi.org/v2/top-headlines?country=id&apiKey=4a3d81b73e3e4cfbaac57c3e390a1c5d';
    $response = file_get_contents($url);
    $NewsData = json_decode($response);
    ?>

    <div class="jumbotron">
        <h1> Hot Topics</h1>
    </div>

    <div class="container-fluid">
        <?php
        foreach ($NewsData->articles as $News) {
        ?>
            <div class="row NewsGrid">
                <div class="col-md-3">
                    <img src="<?php echo $News->urlToImage ?>" alt="News thumbnail" class="rounded">
                </div>
                <div class="col-md-9">
                    <h2><?php echo $News->title ?></h2>
                    <h5><?php echo $News->description ?></h5>
                    <p><?php echo $News->content ?> </p>
                    <h6>Author: <?php echo $News->author ?> </h6>
                    <h6><?php echo $News->publishedAt ?></h6>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

</body>

</html>