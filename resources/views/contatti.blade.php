<x-layout>
<x-slot name='title'>
contatti
</x-slot>
<div class="container">
<div class="row">
<div class="col-12 col-md-6 my-4">
<h3>Contattaci</h3>
<h4>Esponi il tuo problema</h4>

<form action="{{route('contatti.nuovo')}}" method="POST">
@csrf
<div class="mb-3">
<label class="form-label">Nome Prodotto</label>
<input type="text" name="name" class="form-control">
</div>
<div class="mb-3">
<label class="form-label">Categoria</label>
<input type="text" name="category" class="form-control">
</div>
<div class="mb-3">
<label class="form-label">Problema</label>
<textarea class="form-control" name="problem" cols="30" rows="10"></textarea>
</div>
<button type="submit" class="btn btn-success">invia</button>
</form>

</div>
</div>
</div>





</x-layout>