<x-layout>
    <section class="container-fluid bg-dark">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white display-1">OneToMany</h1>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row justify-content-around">
            @foreach ($products as $product)
                <div class="col-12 col-md-4">
                    <x-cardProduct :product="$product"></x-cardProduct>
                </div>
            @endforeach
        </div>
    </section>

</x-layout>    