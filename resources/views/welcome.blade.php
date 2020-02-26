<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vue Carousel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    </head>
    <body>
        <div id="app" class="mt-3">

            <carousel>
                <img src="https://placeimg.com/640/480/any">
                <img src="https://placeimg.com/640/480/any?2">
                <img src="https://placeimg.com/640/480/any?3">
                <img src="https://placeimg.com/640/480/any?4">
                <img src="https://placeimg.com/640/480/any?5">
            </carousel>

        </div>


        <script src="/js/app.js"></script>
    </body>
</html>
