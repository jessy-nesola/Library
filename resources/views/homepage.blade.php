<x-layout>
    <!-- Header-->
    <header class="bg-dark ">
      <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
          <div class="col-lg-8 col-xl-7 col-xxl-6">
            <div class="my-5 text-center text-xl-start">
              <h1 class="display-5 fw-bolder text-white">Biblioteca di Jessy
              </h1>
            </div>
          </div>
          <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
            <img class="img-fluid rounded-3 my-5" src="/assets/images/hero-image.webp" alt="..." />
          </div>
        </div>
      </div>
    </header>
  
    <div class="container" style="margin-top: 5rem;margin-bottom: 5rem;">
      <div class="list-group w-auto">
        <a href="{{route('books.index')}}" class="list-group-item list-group-item-action d-flex gap-3 py-3"
          aria-current="true">
          <img src="{{asset('/assets/images/book.png')}}" alt="twbs" width="32" height="32"
            class="rounded-circle flex-shrink-0">
          <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
              <h6 class="mb-0">Libri</h6>
              <p class="mb-0 opacity-75">Gestione della risorsa Libri</p>
            </div>
  
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
          <img src="{{asset('/assets/images/category.png')}}" alt="twbs" width="32" height="32"
            class="rounded-circle flex-shrink-0">
          <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
              <h6 class="mb-0">Categorie</h6>
              <p class="mb-0 opacity-75">Gestione della risorsa Categorie</p>
            </div>
  
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
          <img src="{{asset('/assets/images/author.png')}}" alt="twbs" width="32" height="32"
            class="rounded-circle flex-shrink-0">
          <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
              <h6 class="mb-0">Autori</h6>
              <p class="mb-0 opacity-75">Gestione della risorsa Autori</p>
            </div>
  
          </div>
        </a>
      </div>
    </div>
  </x-layout>