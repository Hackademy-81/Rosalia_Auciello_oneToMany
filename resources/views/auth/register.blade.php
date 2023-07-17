<x-layout>
    <section class="container bg-dark">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white display-1">Registrati</h1>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('register')}}" class="my-5">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome e cognome</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </section>

</x-layout> 