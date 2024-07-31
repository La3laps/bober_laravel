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
<h1>Welcome to BobAir!</h1>
    <img id="planeHome" src="{{asset('images/plane-removebg-preview.png')}}" alt="plane">
    <p>Discover the whimsical world of Miyazaki-inspired aircraft. Our exclusive collection of meticulously crafted, fictive planes captures the enchanting spirit of Studio Ghibli’s masterpieces. Each model is a tribute to the imagination and artistry of Hayao Miyazaki, perfect for collectors and dreamers alike. Explore our unique selection and let your adventures take flight!</p>
</div>
@include('composents.footer')
</body>
</html>
