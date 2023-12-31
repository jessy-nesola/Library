<x-layout>
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-4 mb-5 text-center">
                    <img class="card-img-top shadow rounded" src="{{empty($book->image) ? '/assets/images/default.jpg' : Storage::url($book->image)}}" alt="..." />
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="snow-background card h-100 shadow border-0">
                        <div class="card-body p-4">
                            <h5 class="title"><strong>{{ $book->name }}</strong></h5>
                            <p class="card-text mb-0">N. PAGINE: {{ $book->pages }}</p>
                            <p class="card-text mb-0">ANNO: {{ $book->year }}</p>
                            <p class="card-text mb-0">AUTORE: {{ $book->author->firstname . ' ' . $book->author->lastname }}</p>
                            <p class="card-text mb-0">CATEGORIA: @foreach ($book->categories as $category) {{ $category->name }} @endforeach</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>