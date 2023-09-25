<x-layout>

    <div class="container my-5">
        <div class="rounded-3 py-5 px-4 px-md-5 mb-5 shadow rounded snow-background">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label text-dark">Nome</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name"
                                value="{{$book->name}}" name="name" type="text">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="page" class="form-label text-dark">Pagine</label>
                            <input class="form-control" id="page" name="pages" value="{{$book->pages}}"
                                type="text">
                            @error('pages')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <img class="card-img-top" style="max-width: 100px; height: auto;" src="{{Storage::url($book->image)}}" alt="..." />
                            <input class="form-control" id="image" name="image" type="file">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="year" class="form-label text-dark">Anno</label>
                            <input class="form-control" id="year" name="year" value="{{$book->year}}"
                                type="text">
                            @error('year')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="year" class="form-label text-dark">Seleziona Autore</label>
                            <select class="form-control" name="author_id">
                                @foreach ($authors as $author)
                                <option value="{{$author->id}}" @if($author->id == $book->author_id) selected @endif>{{$author->firstname . ' ' . $author->lastname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg bg-gradient" type="submit">Aggiorna</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>
