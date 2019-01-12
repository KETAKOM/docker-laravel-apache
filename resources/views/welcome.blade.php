<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Laravel</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<main>
  <div id="app">
    <example-component></example-component>
  </div>
</main>
<script src="/js/app.js"></script>
<script src="{{ mix('js/helloworld.js') }}"></script>
</body>
</html>