@extends("layouts.app")

@section("page-title")

@section("main-content")

<div class="container">
      <div class="row justify-content-center">
        @if($errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
        @endif

        <form class="col-12  card p-4" method="POST" action="{{route("guitar.store")}}">
            @csrf
            <h1>Guitar Create:</h1>
    
             
                {{--? "title","description","thumb","price","series","release_date","type","genre","artist"--}}
    
                <div class="mb-3">
                    <label for="guitar-title" class="form-label">Modello:</label>
                    <input type="text" class="form-control" id="guitar-title" name="title" value="{{old('title')}}">
                </div>
                <div class="mb-3">
                    <label for="guitar-description" class="form-label">Descrizione:</label>
                    <input type="text" class="form-control" id="guitar-description" name="description" value="{{old('description')}}">
                </div>
                <div class="mb-3">
                    <label for="guitar-thumb" class="form-label">Link Url Img</label>
                    <input type="text" class="form-control" id="guitar-thumb" name="thumb"value="{{old('thumb')}}">
                </div>
                <div class="mb-3">
                    <label for="guitar-price" class="form-label">Prezzo:</label>
                    <input type="text" class="form-control" id="guitar-price" name="price" value="{{old('price')}}">
                </div>
                <div class="mb-3">
                    <label for="guitar-series" class="form-label">Serie:</label>
                    <input type="text" class="form-control" id="guitar-series" name="series" value="{{old('series')}}">
                </div>
                <div class="mb-3">
                    <label for="guitar-release_date" class="form-label">Data Rilascio:</label>
                    <input type="text" class="form-control" id="guitar-release_date" name="release_date" value="{{old('release_date')}}">
                </div>
                <div class="mb-3">
                    <label for="guitar-type" class="form-label">Tipo:</label>
                    <input type="text" class="form-control" id="guitar-type" name="type" value="{{old('type')}}">
                </div>
                <div class="mb-3">
                    <label for="guitar-genre" class="form-label">Genere:</label>
                    <input type="text" class="form-control" id="guitar-genre" name="genre" value="{{old('genre')}}">
                </div>
                <div class="mb-3">
                    <label for="guitar-artist" class="form-label">Artista:</label>
                    <input type="text" class="form-control" id="guitar-artist" name="artist" value="{{old('artist')}}">
                </div>
           <div class="mb-3 d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-primary">Crea la tua nuova chitarra!</button>
            <button type="reset" class="btn btn-danger">Pulisci i campi</button>

           </div>
        </form>
          

    </div>

</div>

@endsection