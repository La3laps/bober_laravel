
@include('composents.header')

<body>

<h1 class="title">Our Wonderful PLANES</h1>
<h3 class="title"><em>Take your pick!</em></h3>
<br>
<div class="container">
    <div class="product">
        <a href="/products/porco-rosso">
            <img src="{{asset('images/porco-rosso.jpg')}}" alt="Porco Rosso plane">
            <h2>Red plane</h2>
            <p><em>Functional and very authentic (not a replica!) plane belonging to Porco Rosso, a god amongst porks.</em></p>
        </a>

    </div>
    <div class="product">
        <a href="/products/french-plane">
        <img src="{{asset('images/french-plane.jpg')}}" alt="French Plane">
        <h2>French-colored plane</h2>
        <p><em>If you look at the plane from the left-hand side, it looks like the French flag.  Cocorico!</em></p>
        </a>
    </div>
    <div class="product">
        <a href="/products/kiki-broom">
        <img src="{{asset('images/kiki-broom.jpg')}}" alt="Kiki Broom">
        <h2>Kiki's magic broom</h2>
        <p><em>It's not a plane, but you get the idea.  It floats in the air.  Neko not included.</em></p>
        </a>
    </div>
    <div class="product">
        <a href="/products/nausica-glider">
        <img src="{{asset('images/nausica-glider.jpg')}}">
        <h2>Nausicaä's glider</h2>
        <p><em>It is powered by some strange magic; the smallest gust of wind will send this baby into the stratosphere *slaps hood of glider*</em></p>
        </a>
    </div>
</div>
</body>

@include('composents.footer')

</html>
