<x-layout>

    <header class=" text-light py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start text-dark">
                        <h1 class="display-5 fw-bold">Benvenuto nella biblioteca</h1>
                        <p class="lead">Esplora un mondo di conoscenza e fanta</p>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                    <img class="img-fluid rounded-3 my-5 shadow"
                        src="{{ asset('/assets/images/libreria.jpg') }}"
                        alt="Library" />
                </div>
            </div>
        </div>
    </header>


    <div class="container my-5 ">
        <div class="list-group">
            <a href="{{ route('books.index') }}"
                class="list-group-item list-group-item-action d-flex align-items-center snow-background">
                <img src="{{ asset('/assets/images/book.png') }}" alt="none" width="32" height="32"
                    class="rounded-circle flex-shrink-0 me-3">
                <div class="flex-grow-1">
                    <h6 class="mb-0 text-dark">Libri</h6>
                    <p class="mb-0 text-dark">Gestione della risorsa Libri</p>
                </div>
            </a>
            <a href="{{route('categories.index')}}" class="list-group-item list-group-item-action d-flex align-items-center snow-background">
                <img src="{{ asset('/assets/images/category.png') }}" alt="none" width="32" height="32"
                    class="rounded-circle flex-shrink-0 me-3">
                <div class="flex-grow-1">
                    <h6 class="mb-0 text-dark">Categorie</h6>
                    <p class="mb-0 text-dark">Gestione della risorsa Categorie</p>
                </div>
            </a>
            <a href="{{route('authors.index')}}" class="list-group-item list-group-item-action d-flex align-items-center snow-background">
                <img src="{{ asset('/assets/images/author.png') }}" alt="none" width="32" height="32"
                    class="rounded-circle flex-shrink-0 me-3">
                <div class="flex-grow-1">
                    <h6 class="mb-0 text-dark">Autori</h6>
                    <p class="mb-0 text-dark">Gestione della risorsa Autori</p>
                </div>
            </a>
        </div>
    </div>

</x-layout>
