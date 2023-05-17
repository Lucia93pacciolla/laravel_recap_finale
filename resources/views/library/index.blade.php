<x-layout headerTitle="Librerie inserite">

    <div class="container my-5">
        <div class="row justify-content-center">

            @forelse($libraries as $library)
            <div class="col-12 col-md-3">

                <div class="card">
                    <img src="{{Storage::url($library->image)}}" class="card-img-top" alt="Foto di {{$library->name}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$library->name}}</h5>
                      <p class="card-text fst-italic text-muted">{{$library->address}}</p>
                      <a href="{{route('library.show', compact('library'))}}" class="btn btn-dark mt-3">Scopri</a>
                    </div>
                  </div>

            </div>
            @empty

                <div class="col-12 text-center">
                    <p>non sono state inserite librerie. Inserisci la tua</p>
                    <a href="{{route('library.index')}}" class="btn-btn-dark">Inserisci libreria</a>
                </div>
            @endforelse
        </div>
    </div>

</x-layout>