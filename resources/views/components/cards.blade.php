



<section class="container mt-5" >
<div class="row" >
<div class="col-12 col-md-3 my-3 bordi">
<div class="card" style="width: 18rem;height: 28rem;">
<img class="px-2 py-2" style="height:250px; width:285px;" src="{{ Storage::url($product->img)}}" alt="">
<div class="card-body text-center">
<h5 class="card-title">{{$product->name}}</h5>
<p class="card-text">{{$product->category}}</p>
<p class="card-text">{{$product->price}}€</p>
<p class="card-text">{{$product->gender}}</p>


</div>
</div>
</div>
</div>
</section>