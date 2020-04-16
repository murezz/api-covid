<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 Indonesia</title>
</head>
<body>
    <h1>Sebaran Covid-19 di Indonesia</h1>

    {!! $chart->container()!!}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

    {!! $chart->script()!!}
</body>
</html>