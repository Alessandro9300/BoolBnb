<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv='X-UA-Compatible' content='IE=Edge' />
    <meta charset="utf-8">
    <title>Classe11_Team7</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital@1&family=Fondamento&display=swap" rel="stylesheet">
    <script src="{{ asset('js/search.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/18da76cc27.js" crossorigin="anonymous"></script>
  </head>
  <body>

    @include ('header')


    @include('searchbar')


    @include('welcome-section')


    @include('footer')

  </body>
</html>
