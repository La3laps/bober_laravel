<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product list</title>
</head>

@include('composents.header')

<style>

    .title {
        text-align: center;
    }

    .product {
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 20px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .product img {
        max-width: 600px;
        height: auto;
    }
</style>

<body>

<h1 class="title">Our Wonderful PLANES</h1>
<h3 class="title"><em>Take your pick!</em></h3>
<br>
<div class="container">
    <div class="product">
        <img src="https://onsefaituncine.com/wp-content/uploads/2020/06/porco-rosso1.jpg" alt="Porco Rosso plane">
        <h2>Red plane</h2>
        <p><em>Functional and very authentic (not a replica!) plane belonging to Porco Rosso, a god amongst porks.</em></p>
    </div>
    <div class="product">
        <img src="produit2.jpg" alt="Medium plane">
        <h2>Produit 2</h2>
        <p><em>Voici une description du produit 2. Ce produit est de haute qualité.</em></p>
    </div>
    <div class="product">
        <img src="produit3.jpg" alt="Big plane">
        <h2>Produit 3</h2>
        <p><em>Voici une description du produit 3. Il répondra à toutes vos attentes.</em></p>
    </div>
    <div class="product">
        <img src="produit4.jpg" alt="Huge plane">
        <h2>Produit 4</h2>
        <p>Voici une description du produit 4. Un produit indispensable pour vous.</p>
    </div>
</div>
</body>

@include('composents.footer')

</html>
