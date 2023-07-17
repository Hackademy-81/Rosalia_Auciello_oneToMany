<div class="card my-5">
    <img src="{{Storage::url($product['img'])}}" class="card-img-top" alt="...">
    <div class="card-body d-flex flex-column justify-content-center align-items-center">
      <h5 class="card-title fw-bold">{{$product['name']}}</h5>
      <h5 class="card-title fw-bold">Creato da: <a href="{{route('product.user', $product->user)}}">{{$product->user->name}}</a></h5>
      <p class="card-text">{{$product->getdescriptionSubstring()}}...</p>
      <p class="card-text">Creato il: {{$product->formatData()}}</p>
      <p class="card-text">{{$product['price']}}€</p>
      <a href="{{route('product.show', compact('product'))}}" class="btn btn-primary">Dettaglio</a>
    </div>
</div>