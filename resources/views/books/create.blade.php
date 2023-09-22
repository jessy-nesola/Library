<x-layout>

    <div class="container my-5">
        <div class="rounded-3 py-5 px-4 px-md-5 mb-5 shadow rounded bg-dark">
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
                    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="name" class="form-label text-light">Nome</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name"
                                value="{{ old('name') }}" name="name" type="text">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="page" class="form-label text-light">Pagine</label>
                            <input class="form-control" id="page" name="pages" value="{{ old('pages') }}"
                                type="text">
                            @error('pages')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label text-light">Immagine</label>
                            <input class="form-control" id="image" name="image" type="file">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="year" class="form-label text-light">Anno</label>
                            <input class="form-control" id="year" name="year" value="{{ old('year') }}"
                                type="text">
                            @error('year')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg bg-gradient" type="submit">Salva</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>
