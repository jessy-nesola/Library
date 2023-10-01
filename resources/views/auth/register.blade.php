<x-layout>
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <form class="p-5 shadow rounded snow-background" action="{{route('register')}}" method="POST">
            @method('POST')
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <div class="mb-3">
              <label for="name" class="form-label text-dark">Nome utente</label>
              <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label text-dark">Email utente</label>
              <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label text-dark">Password</label>
              <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
              <label for="password_confirmation" class="form-label text-dark">Conferma password</label>
              <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                required>
            </div>
  
            <button type="submit" class="btn btn-primary text-light bg-gradient">Registrati</button>
            <a href="{{route('login')}}" class="btn btn-secondary text-light bg-gradienty">Gia' iscritto?</a>
          </form>
        </div>
      </div>
    </div>
  </x-layout>