<x-layout>
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-4 mb-5">
                    <div class="snow-background card h-100 shadow border-0">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-3"><strong>{{ $book->name }}</strong></h5>
                            <p class="card-text mb-0">Numero Pagine: {{ $book->pages }}</p>
                            <p class="card-text mb-0">Anno: {{ $book->year }}</p>
                            <p class="card-text mb-0">Autore: {{ $book->author->firstname . ' ' . $book->author->lastname }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 d-none d-xl-block text-center">
                    <img class="card-img-top shadow rounded" src="{{empty($book->image) ? '/assets/images/default.jpg' : Storage::url($book->image)}}" alt="..." />
                </div>
            </div>
        </div>
    </section>
    
</x-layout>


