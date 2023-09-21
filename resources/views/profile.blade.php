<x-layout>

    <section class="py-5">
      <div class="container px-5 my-5">
        <div class="row gx-5">
          <div class="col-lg-4 mb-5">
            <div class="card h-100 shadow border-0">
  
              <div class="card-body p-4">
                <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
  
                <p class="card-text mb-0">Nome: {{Auth::user()->name}}</p>
                <p class="card-text mb-0">Email: {{Auth::user()->email}}</p>
                <p class="card-text mb-0">Registrato il: {{Auth::user()->created_at->diffForHumans()}}</p>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </section>
  </x-layout>