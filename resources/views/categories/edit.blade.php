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
                    <form action="{{ route('categories.update', $category) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label text-dark">NOME CATEGORIA</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name"
                                value="{{$category->name}}" name="name" type="text" placeholder="Inserisci Nome Categoria">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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
