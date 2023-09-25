<x-layout>

  <div class="container mt-5">
    @if (session('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg>
        <div>
            {{session('success')}}
        </div>
    </div>
    @endif
    <div class="align-middle gap-2 d-flex justify-content-between">
        <h3>Elenco Autori inseriti</h3>
        <a href="{{route('authors.create')}}" class="btn btn-success">Crea Nuovo Autore</a>
    </div>
    <table class="table border mt-2">
        <thead>
            <tr>
                <th scope="col" class="snow-background">#</th>
                <th scope="col" class="snow-background">Nome</th>
                <th scope="col" class="snow-background">Cognome</th>
                <th scope="col" class="snow-background"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($authors as $author)
            <tr>
                <th scope="row" class="snow-background">{{$author->id}}</th>
                <td class="snow-background">{{$author->firstname}}</td>
                <td class="snow-background">{{$author->lastname}}</td>
                <td class="snow-background">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{route('authors.show', $author)}}" class="btn btn-primary me-md-2">Visualizza</a>

                        @auth
                        <a href="{{route('authors.edit', $author)}}" class="btn btn-warning me-md-2">Modifica</a>
                        <form action="{{route('authors.destroy', compact('author'))}}" method="POST">
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