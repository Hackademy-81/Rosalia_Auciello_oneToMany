<x-layout>
    <section class="container-fluid bg-dark">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white display-1">OneToMany</h1>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data" class="my-5">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Nome Prodotto</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                      @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione Prodotto</label>
                        <textarea name="body" class="form-control @error('body') is-invalid @enderror" cols="30" rows="10">{{old('body')}}</textarea>
                        @error('body')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prezzo</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{old('price')}}">
                        @error('price')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Immagine</label>
                        <input type="file" class="form-control @error('img') is-invalid @enderror" name="img">
                        @error('img')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form> 
            </div>
        </div>
    </section>

</x-layout>    