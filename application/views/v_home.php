<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="<?php echo base_url() ?>/public/css/bootstrap.css"></script>
    <script src="<?php echo base_url() ?>/public/js/bootstrap.js"></script>
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    </link>
    <title>DJY News - Give You The Best News Everyday</title>
</head>

<?php include 'templates/header.php' ?>
<br>

<style type="text/css">
    .jumbotron {
        background-color: #153449;
    }

    .jumbotron h1 {
        color: white;
    }

    body {
        background-color: whitesmoke;
    }

    img {
        width: calc(100% - 20px);
        height: 250px;
        margin: 10px;
    }

    .NewsGrid {
        margin: 10px;
        border: 1px solid lightgray;
        padding: 10px;
    }

    .container-fluid {
        width: 90%;
    }
</style>

<body>



    <?php
    $url = 'https://newsapi.org/v2/top-headlines?country=id&apiKey=4a3d81b73e3e4cfbaac57c3e390a1c5d';
    $response = file_get_contents($url);
    $NewsData = json_decode($response);
    ?>

    <?php

    $city_name = 'Karawaci';
    $api_key = 'ed5e25c5a5f417a3ca5979c29453cbe4';
    //$koordinatkampus = '-6.228303, 106.610486';
    $koorx = '-6.228303';
    $koory = '106.610486';

    //$api_url = 'http://api.openweathermap.org/data/2.5/weather?q=' . $city_name . '&appid=' . $api_key;

    //Nama kota
    //$api_url = 'http://api.openweathermap.org/data/2.5/weather?q=' . $city_name . '&appid=' . $api_key;


    //Koordinat
    $api_url = 'http://api.openweathermap.org/data/2.5/weather?lat=' . $koorx . '&lon=' . $koory . '&appid=' . $api_key;

    $weather_data = json_decode(file_get_contents($api_url), true);

    $temperature = $weather_data['main']['temp'];

    $temperature_in_celcius = round($temperature - 273.15);

    $temperature_current_weahter = $weather_data['weather'][0]['main'];

    $temperature_current_weather_description = $weather_data['weather'][0]['description'];

    $temperature_current_weather_icon = $weather_data['weather'][0]['icon'];

    echo "<img src='https://openweathermap.org/img/w/" . $temperature_current_weather_icon . ".png' />";

    echo "$temperature_in_celcius";

    ?>
    <img src='https://openweathermap.org/img/w/" . $temperature_current_weather_icon . ".png' alt="News thumbnail" class="rounded">

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
                    <h2><?php echo $News->title ?></h2><br>
                    <!---<h5><?php echo $News->description ?></h5>---->
                    <p><?php echo $News->content ?> </p><br>
                    <a href=<?php echo htmlentities($News->url) ?> class="btn btn-primary" target="_blank">Read More &rarr;</a><br><br>
                    <!---<h6>Author: <?php echo $News->author ?> </h6>---->
                    <h6><?php echo $News->publishedAt ?></h6>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

</body>

</html>