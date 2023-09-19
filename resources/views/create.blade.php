<x-layout>
    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center">

            <div class="col-lg-8 col-xl-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-floating mb-3">
                        <input class="form-control @error('name') is-invalid @enderror" id="name"
                            value="{{ old('name') }}" name="name" type="text">
                        <label for="name">Name</label>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="page" name="pages" value="{{ old('page') }}"
                            type="text">
                        <label for="email">Pagine</label>
                        @error('page')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="image" name="image" type="file">

                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="page" name="year" value="{{ old('year') }}"
                            type="text">
                        <label for="email">Anno</label>
                        @error('page')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
