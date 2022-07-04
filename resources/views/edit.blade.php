@extends('layout')

@section('content')
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{asset('css/offcanvas.css')}}" rel="stylesheet">
<style>
  .uper {
    margin-top: 40px;
  }

  h3{
    text-align: center;
    font-weight: bold;
    font-size: 30px; 
    text-transform: uppercase;
  }

  form{
    width: 50%;
    margin-left: 20%;
  }

  .btn{
    margin-left: 45%;
    margin-top: 20px;
    margin-bottom: 20px;
  }

  .uper{
    background-image: url("{{asset('images/c3.jpg')}}");
  }
</style>

<div class="uper">
  <div class="card-header" style=" color:white; margin-top:-80px" >
    <h3>Modifier le Vol</h3>
  </div>

  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('vols.update', $vol->id ) }}" style="padding-top: 5px ;">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="code_vol">Code_vol :</label>
              <input type="text" class="form-control" name="code_vol" value="{{ $vol->code_vol }}"/>
          </div>

          <div class="form-group">
              <label for="date_heure">Date_depart :</label>
              <input type="date" class="form-control" name="date_depart" value="{{ $vol->date_depart }}"/>
          </div>

          <div class="form-group">
              <label for="heure_heure">Heure_depart :</label>
              <input type="time" class="form-control" name="heure_depart" value="{{ $vol->heure_depart }}"/>
          </div>

          <div class="form-group">
              <label for="classe_A">Classe_A :</label>
              <input type="text" class="form-control" name="classe_A" value="{{ $vol->classe_A }}"/>
          </div>

          <div class="form-group">
              <label for="classe_B">Classe_B :</label>
              <input type="text" class="form-control" name="classe_B" value="{{ $vol->classe_B }}"/>
          </div>

          <div class="form-group">
              <label for="prix_classe_A">Prix_Classe_A :</label>
              <input type="integer" class="form-control" name="prix_classe_A" value="{{ $vol->prix_classe_A }}"/>
          </div>

          <div class="form-group">
              <label for="prix_classe_B">Prix_Classe_B :</label>
              <input type="integer" class="form-control" name="prix_classe_B" value="{{ $vol->prix_classe_B }}"/>
          </div>

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas.js')}}"></script>
@endsection
 