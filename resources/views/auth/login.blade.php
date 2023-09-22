<x-layout>
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <form class="p-5 shadow rounded bg-dark" action="{{route('login')}}" method="POST">
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
              <label for="email" class="form-label text-light">Email utente</label>
              <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label text-light">Password</label>
              <input type="password" name="password" class="form-control" id="password" required>
            </div>
  
            <button type="submit" class="btn btn-primary text-light bg-gradient">Accedi</button>
            <a href="{{route('register')}}" class="btn btn-outline-light">Non sei registrato?</a>
          </form>
        </div>
      </div>
    </div>
  </x-layout>