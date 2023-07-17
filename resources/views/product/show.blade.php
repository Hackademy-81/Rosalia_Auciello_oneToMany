<x-layout>
    <section class="container-fluid bg-dark">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white display-1">Dettaglio</h1>
            </div>
        </div>
    </section>
    <section class="container my-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-6">
                <img src="{{Storage::url($product['img'])}}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <h5>{{$product['name']}}</h5>
                <p>{{$product['body']}}</p>
                <p>{{$product['price']}}€</p>
                <p>Inserito da: {{$product->user->name}}</p>
                @if (Auth::user()->name==$product->user->name)
                    <a href="{{route('product.edit', compact('product'))}}" class="btn btn-warning my-1 ">Modifica</a>
                    <form action="{{route('product.destroy', compact('product'))}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger my-1">Elimina</button>
                    </form>
                @endif
                <a href="{{route('homePage')}}" class="btn btn-primary my-1 bg-primary">Torna alla home</a>
            </div>
        </div>
    </section>

</x-layout>    