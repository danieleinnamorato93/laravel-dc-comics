@extends("layouts.app")

@section("page-title")

@section("main-content")
<h1>Guitar Show:</h1>
<div class="container">
    <div class="row justify-content-center">
     
    
        <div class="card col-2  m-3">
                {{--? "title","description","thumb","price","series","release_date","type","genre","artist"--}}
            <div class="card-body">
              <h5 class="card-title">Modello: {{$guitar->title}}</h5>
              <h5 class="card-title">Descrizione: {{$guitar->description}}</h5>
              <h5 class="card-title">Link Url: {{$guitar->thumb}}</h5>
              <h5 class="card-title">Prezzo: {{$guitar->price}}</h5>
              <h5 class="card-title">Serie: {{$guitar->series}}</h5>
              <h5 class="card-title">Data di Rilascio: {{$guitar->release_date}}</h5>
              <h5 class="card-title">Tipo di chitarra: {{$guitar->type}}</h5>
              <h5 class="card-title">Genere: {{$guitar->genre}}</h5>
              <h5 class="card-title">Artista: {{$guitar->artist}}</h5>

          

            </div>
          </div>
      
        </div>
    </div>
</div>

@endsection
