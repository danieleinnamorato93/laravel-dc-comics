@extends("layouts.app")

@section("page-title")

@section("main-content")
<h1>Guitars List:</h1>
<div class="container">

<div class="row">
    <div class="col-12">
        <div class="mb-3">
            <a href="{{route("guitar.create")}}" class="btn btn-sm btn-primary me-1 m-1">Create new Guitar!</a>

        </div>
    
<table class="table table-dark"> 
    {{--? "title","description","thumb","price","series","release_date","type","genre","artist"--}}
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Url_Immagine</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Serie</th>
        <th scope="col">Data rilascio</th>
        <th scope="col">Tipo</th>
        <th scope="col">Genere</th>
        <th scope="col">Artista</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($guitars as $index => $guitar)
            
       
      <tr>
        <td>{{$guitar->id}}</td>
        <td>{{$guitar->title}}</td>
        <td>{{$guitar->description}}</td>
        <td>{{$guitar->thumb}}</td>
        <td>{{$guitar->price}}</td>
        <td>{{$guitar->series}}</td>
        <td>{{$guitar->release_date}}</td>
        <td>{{$guitar->type}}</td>
        <td>{{$guitar->genre}}</td>
        <td>{{$guitar->artist}}</td>
        <td>
            <a href="{{route("guitar.show", $guitar->id)}}" class="btn btn-sm btn-primary m-2 me-1 m-1">Show</a>
            <a href="{{route("guitar.edit", $guitar->id)}}" class="btn btn-sm btn-success m-2 me-1">Edit</a>
            <form action="{{route("guitar.delete", $guitar->id)}}" method="POST" class="guitar-destroyer" custom-data-name="{{$guitar->title}}">
              @csrf
              @method("DELETE")

            <button type="submit" class="btn btn-sm btn-warning m-2">DELETE</button>
            </form>
          </td>
      </tr>
    
      @empty
      <tr>
        <td colspan="11">Non ci sono Chitarre disponibili al momento..
        </td>
      </tr>
            
      @endforelse
    </tbody>
  </table>
</div>
</div>
</div>
@endsection

@section("additional-scripts")
@vite("resources/js/guitars/delete-confirm.js")
@endsection