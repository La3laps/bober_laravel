<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>Homepage</title>
</head>
<body>
@include('composents.header')
<div class="container">
<h1>Homepage</h1>
    <ul>
        <li><a href="/products">Produits</a> </li>
        <li><a href="/cart">Panier</a> </li>
    </ul>
</div>
</body>
@include('composents.footer')
</html>
