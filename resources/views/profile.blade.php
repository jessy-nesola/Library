<x-layout>
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0 snow-background">
                        <div class="card-body p-4">
                            <h5 class="badge bg-secondary text-light bg-gradient">PROFILO</h5>
                            <ul>
                                <li class="card-text text-dark mb-0">NOME: {{ Auth::user()->name }}</li>
                                <li class="card-text text-dark mb-0">EMAIL: {{ Auth::user()->email }}</li>
                                <li class="card-text text-dark mb-0">DATA ISCRIZIONE: {{ Auth::user()->created_at->diffForHumans() }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
