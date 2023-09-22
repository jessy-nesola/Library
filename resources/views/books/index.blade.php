<x-layout>

    <section class="py-5">
      <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
          <div class="col-lg-8 col-xl-6">
            <div class="text-center">
              <h2 class="fw-bolder text-light">Libri caricati</h2>
              <p class="lead fw-normal text-light mb-5">Troverai qui tutto ció che é stato caricato:</p>
            </div>
          </div>
        </div>
        <div class="row gx-5">
          @foreach ($books as $book)
  
          <div class="col-lg-4 mb-5">
            <div class="card h-100 shadow border-0 bg-dark">
              <img class="card-img-top" style="" src="{{Storage::url($book->image)}}" alt="..." />
              <div class="card-body p-4">
                <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                <a class="text-decoration-none link-light stretched-link text-light"
                  href="{{route('books.show',['book' =>$book->id ])}}">
                  <h5 class="card-title mb-3">{{$book->name}}</h5>
                </a>
                <p class="card-text mb-0 text-light">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
              </div>
              <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                <div class="d-flex align-items-end justify-content-between">
                  <div class="d-flex align-items-center">
                    <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                    <div class="small">
                      <div class="fw-bold text-light">Kelly Rowan</div>
                      <div class="text-light">March 12, 2023 &middot; 6 min read</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
  
  
  
        </div>
  
      </div>
    </section>
  </x-layout>