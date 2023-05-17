<div>
    <form class="p-5 border" wire:submit.prevent="store">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>

            @endif
        
        @csrf

        <div class="mb-3">
          <label for="name" class="form-label">Nome libreria</label>
          <input type="text" wire:model="name" class="form-control" id="name">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Indirizzo libreria</label>
            <input type="text" wire:model="address" class="form-control" id="address">
        </div>

        @if ($image)
        <div class="mt-3">

        </div>
        Anteprima immagine:
        <img src="{{ $image->temporaryUrl() }}">
        @endif

        <div class="mb-3">
            <label for="image" class="form-label">Foto libreria</label>
            <input type="file" wire:model="image" class="form-control" id="image">
        </div>

          <div class="mb-3">
            <label for="description" class="form-label">Descrizione libreria</label>
            <textarea wire:model="description" id="description" cols="30" rows="7" class="form-control"></textarea>
        </div>

       

        <button type="submit" class="btn btn-dark">Inserisci libreria</button>
        <a href="{{route('library.index')}}" class="btn btn-outline-dark">Torna indietro</a>
      </form>
</div>
