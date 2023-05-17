<x-layout headerTitle="{{$library->name}}">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="-col-12 col-md-8">
                <img src="{{Storage::url($library->image)}}" alt="Foto di{{$library->name}}" class="img-fluid">
                <figcaption class="text-center small text-muted">{{$library->address}}</figcaption>
                <p class="fs-3">{{$library->description}}</p>
                <hr>
                <p class="small">Inserito il <span class="fts-italic"></span>{{$library->created_at}}</p>
                <p class="small">Inserito da <span class="fts-italic"></span>{{$library->user->name}}</p>
                <hr>
                <a href="{{route('library.index')}}" class="btn btn-dark">Torna indietro</a>
                @if(Auth::user() && Auth::user()->id == $library->user_id)
                <a href="{{route('library.edit', compact('library'))}}" class="btn btn-warning">Modifica</a>

                @endif
            </div>
        </div>
    </div>

</x-layout>