<style>
        .disabled {
            pointer-events: none;
        }
        th {
            text-align:center;           
        }
        tr {
            text-align:center;         
        }
        tr:hover {
            background-color: #D3D3D3;
        }
</style>

@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">

    <div class="col-md-12">
    <br />
    <h3 aling="center">Užsakymo kūrimas</h3>
    <br />
    <form method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
    <label for="data">Data</label>
        <input type="date" name="apsilankymo_data" class="form-control"/>
    </div>

    <br />

    <div class="form-group">
    <label for="autoserviso_id">Autoservisas</label>
    <select class="form-control" name="autoserviso_id">
      @foreach($services as $service)
        <option value="{{$service->id}}">{{$service->pavadinimas}}</option>
      @endforeach
    </select>
    </div>

    <br />

    <div class="form-group">
    <input type="text" name="gedimo_aprasymas" class="form-control" placeholder="Gedimo aprašymas" />
    </div>

    <br />

    <div class="form-group">
    <input type="text" name="marke" class="form-control" placeholder="Automobilio markė" />
    </div>

    <br />

    <div class="form-group">
    <input type="text" name="valstybinis_numeris" class="form-control" placeholder="Automobilio valstybinis numeris" />
    </div>

    <br />

    <div class="form-group">
    <input type="text" name="rida" class="form-control" placeholder="Automobilio rida" />
    </div>

    <br />

    <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Sukurti" />
   </div>

  </form>
 </div>
</div>
</div>
 
</body>
</html>
@endsection