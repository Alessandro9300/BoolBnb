@extends('layouts.app')

@section('content')

  @if (session("success"))
    <p>{{session("success")}}</p>
  @endif

  <h2>Dettagli</h2>

  <ul>
    <b>title: </b>{{$apartments -> title }} <br>
    <b>rooms: </b>{{$apartments -> rooms }} <br>
    <b>bathrooms: </b>{{$apartments -> bathrooms }} <br>
    <b>meters: </b>{{$apartments -> meters }} <br>
    <b>address: </b>{{$apartments -> address }} <br>
    <b>number: </b>{{$apartments -> number }} <br>
    <b>latitude: </b>{{$apartments -> latitude }} <br>
    <b>longitude: </b>{{$apartments -> longitude }} <br>
    <b>image: </b>{{$apartments -> image }} <br>
    <b>user_id: </b>{{$apartments -> user_id }} <br>
    <br>
    <ul>

      @foreach ($apartments -> services as $service)
      <li>
        {{$service -> name}}
      </li>
      @endforeach
    </ul>

  </ul>


  <form  action="{{route('store-messagge', $apartments -> id)}}" method="post">
    @csrf
    @method('POST')

    <label for="mail">Inserire email: </label>
    <input type="text" name="mail" value="" placeholder="Inserire mail">
    <br>
    <label for="text">Inserisci messaggio</label>
    <input type="text" name="text" value="" placeholder="Inserire messaggio..">
    <button type="submit" name="submit">Invia Messaggio</button>

  </form>



  {{-- controllo per far vedere i comandi --}}
@auth

  @if (Auth::user() -> id === $apartments -> user -> id)

    <a href="{{ route('edit-apartment', $apartments -> id ) }}"><button type="button" name="button">Modifica</button></a>

    <a href="{{route("delete-apartment", $apartments["id"])}}"><button type="button" name="button">Elimina</button></a>



  @endif
@endauth

  

    <a href="{{ url()->previous()}}"><button type="button" name="button">Indietro</button></a>



@endsection
