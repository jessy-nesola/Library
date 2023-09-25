<x-layout>
  <div class="container mt-5">

    @if (session('success'))
    <div class="alert alert-success d-flex align-items-center " role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
        <use xlink:href="#check-circle-fill" />
      </svg>
      <div>
        {{session('success')}}
      </div>
    </div>
    @endif
    <div class="align-middle gap-2 d-flex justify-content-between ">
      <h3>Elenco Libri inseriti</h3>
      <a href="{{route('books.create')}}" class="btn btn-success " type="button">Crea Nuovo Libro</a>
    </div>
    <table class="table border mt-2">
      <thead>
        <tr>
          <th scope="col" class="snow-background">#</th>
          <th scope="col" class="snow-background">Cover</th>
          <th scope="col" class="snow-background">Nome</th>
          <th scope="col" class="snow-background">Pagine</th>
          <th scope="col" class="snow-background">Anno</th>
          <th scope="col" class="snow-background"></th>
        </tr>
      </thead>
      <tbody>
        @forelse ($books as $book)
        <tr>
          <th scope="row" class="snow-background">{{$book->id}}</th>
          <td class="snow-background">
            <img class="card-img-top" style="width:3rem"
              src="{{empty($book->image) ? '/assets/images/default.jpg' : Storage::url($book->image)}}" alt="..." />
          </td>
          <td class="snow-background">{{$book['name']}}</td>
          <td class="snow-background">{{$book['pages']}}</td>
          <td class="snow-background">{{$book['year']}}</td>
          <td class="snow-background">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="{{route('books.show', compact('book'))}}" class="btn btn-primary me-md-2">Visualizza</a>
              @auth
              <a href="{{route('books.edit', compact('book'))}}" class="btn btn-warning me-md-2">Modifica</a>
              <form action="{{route('books.destroy', compact('book'))}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger ">Cancella</button>
              </form>
              @endauth
            </div>
          </td>
        </tr>
        @empty
        <tr colspan="4"> </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</x-layout>