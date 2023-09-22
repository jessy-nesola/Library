<x-layout>

    <header class="bg-dark text-white py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bold">Biblioteca di Jessy</h1>
                        <p class="lead">Esplora un mondo di conoscenza</p>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                    <img class="img-fluid rounded-3 my-5 shadow"
                        src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/3/1-stuttgart-library-beautiful-modern-white-futuristic-library-in-germany-luis-pina.jpg"
                        alt="Library" />
                </div>
            </div>
        </div>
    </header>


    <div class="container my-5 ">
        <div class="list-group">
            <a href="{{ route('books.index') }}"
                class="list-group-item list-group-item-action d-flex align-items-center bg-dark">
                <img src="{{ asset('/assets/images/book.png') }}" alt="none" width="32" height="32"
                    class="rounded-circle flex-shrink-0 me-3">
                <div class="flex-grow-1">
                    <h6 class="mb-0 text-light">Libri</h6>
                    <p class="mb-0 text-light">Gestione della risorsa Libri</p>
                </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center bg-dark">
                <img src="{{ asset('/assets/images/category.png') }}" alt="none" width="32" height="32"
                    class="rounded-circle flex-shrink-0 me-3">
                <div class="flex-grow-1">
                    <h6 class="mb-0 text-light">Categorie</h6>
                    <p class="mb-0 text-light">Gestione della risorsa Categorie</p>
                </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center bg-dark">
                <img src="{{ asset('/assets/images/author.png') }}" alt="none" width="32" height="32"
                    class="rounded-circle flex-shrink-0 me-3">
                <div class="flex-grow-1">
                    <h6 class="mb-0 text-light">Autori</h6>
                    <p class="mb-0 text-light">Gestione della risorsa Autori</p>
                </div>
            </a>
        </div>
    </div>

</x-layout>
