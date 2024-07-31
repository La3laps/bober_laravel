@include('composents.header')


<body>
<div class="container">
        <h1>Product : {{$id}} </h1>
        <img src="{{asset('images/' . $id . '.jpg')}}" alt="img-product" style="max-width: 600px;">
    <p>Ici la description du produit "{{$id}}"</p>
</div>

</body>

@include('composents.footer')
