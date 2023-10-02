<x-layout>

    <div class="container my-5">
            <div class="rounded-3 py-5 px-4 px-md-5 mb-5 shadow rounded snow-background">
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
                        <form action="{{route('authors.store')}}" method="POST">
                            @method('POST')
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="firstname" name="firstname" required type="text"
                                    value="{{old('firstname')}}" placeholder="Inserisci nome autore">
                                <label for="firstname">NOME AUTORE</label>
                                @error('firstname')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="lastname" name="lastname" type="text"
                                    value="{{old('lastname')}}" placeholder="Inserisci cognome autore">
                                <label for="lastname">COGNOME AUTORE</label>
                                @error('lastname')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>
                           
                            <div class="form-floating mb-3">
                                <input class="form-control" id="birthday" name="birthday" type="date"
                                    value="{{old('birthday')}}" placeholder="Inserisci compleanno autore">
                                <label for="birthday">ETÁ AUTORE</label>
                                @error('birthday')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>

                            <div class="d-grid gap-3">
                                <button class="btn btn-primary btn-lg p-2" type="submit">Salva</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</x-layout>