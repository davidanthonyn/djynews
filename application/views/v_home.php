<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="<?php echo base_url() ?>/public/css/bootstrap.css"></script>
    <title>DJY News</title>
</head>

<?php include 'templates/header.php' ?>

<body>

    <?php
    $url = 'https://newsapi.org/v2/top-headlines?sources=google-news&apiKey=4a3d81b73e3e4cfbaac57c3e390a1c5d';
    ?>

    <div class="jumbotron">
        <h1> DJY News</h1>
    </div>
</body>

</html>