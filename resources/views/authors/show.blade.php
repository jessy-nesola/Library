<x-layout>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <div class="p-5 shadow rounded snow-background">
                    <h5 class="badge bg-secondary text-light bg-gradient">PROFILO</h5>
                    <p>NOME: {{$author->firstname}} </p>
                    <p>COGNOME: {{$author->lastname}} </p>
                    <p>ETÁ: {{$author->birthday}} </p>
                </div>
            </div>
        </div>
    </div>

</x-layout>