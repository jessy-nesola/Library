<x-layout>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <div class="p-5 shadow rounded snow-background">
                    <p>Nome Autore: {{$author->firstname}} </p>
                    <p>Cognome Autore: {{$author->lastname}} </p>
                    <p>Età Autore: {{$author->birthday}} </p>
                </div>
            </div>
        </div>
    </div>

</x-layout>