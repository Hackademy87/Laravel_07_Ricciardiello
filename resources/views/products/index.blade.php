<x-layout>
    <div class="container">
<h1>TUTTI I PRODOTTI</h1>
        <div class="row">
            @foreach($products as $product)
            <div class="col-12 col-md-3">
            <a href="{{route('product.show',$product)}}"><x-cards :Product='$product'></x-cards></a>
            </div>
            @endforeach
        </div>
       

<h1>UOMO</h1>
        <div class="row">
    @foreach($productsMan as $product)
    <div class="col-12 col-md-3">
    <a href="{{route('product.show',$product)}}"><x-cards :Product='$product'></x-cards></a>
    </div>
    @endforeach
</div>
<h1>DONNA</h1>
<div class="row">
    @foreach($productsWoman as $product)
    <div class="col-12 col-md-3">
    <a href="{{route('product.show',$product)}}"><x-cards :Product='$product'></x-cards></a>
    </div>
    @endforeach
</div>



    </div>
    
    





</x-layout>