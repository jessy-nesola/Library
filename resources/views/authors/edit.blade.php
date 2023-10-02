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
                    <form action="{{ route('authors.update', $author) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label text-dark">NOME</label>
                            <input class="form-control @error('firstname') is-invalid @enderror" id="firstname"
                                value="{{$author->firstname}}" name="firstname" type="text" placeholder="Inserisci nome autore">
                            @error('firstname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label text-dark">COGNOME</label>
                            <input class="form-control @error('lastname') is-invalid @enderror" id="lastname"
                                value="{{$author->lastname}}" name="lastname" type="text" placeholder="Inserisci cognome autore">
                            @error('lastname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label text-dark">DATA DI NASCITA</label>
                            <input class="form-control @error('birthday') is-invalid @enderror" id="birthday"
                            value="{{ isset($author->birthday) ? $author->birthday->format('d-m-yy') : ''}}" placeholder="Inserisci compleanno autore">
                            @error('birthday')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                       
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg bg-gradient" type="submit">AGGIORNA</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>
