@extends('layouts.app')

    <style>
        .flex-container {
            display: flex;
            align-items:center;
            text-align:center;
        }

        .flex-child {
            flex: 2;    
            align-self: center;       
        }  

        .flex-child:first-child {
            margin-right: 20px;
        } 

        p {
            font-weight:bold;
        }
    </style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <br />
        <h3>Redagavimas</h3>
        <br />
        @if(count($errors) > 0)
        <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
                </ul>
        @endif
        <form method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="POST" />
        <div class="form-group">
            <input type="date" name="apsilankymo_data" class="form-control" value="{{$order->apsilankymo_data}}" placeholder="Apsilankymo data" />
        </div>
        <br />
        <div class="form-group">
            <input type="text" name="gedimo_aprasymas" class="form-control" value="{{$order->gedimo_aprasymas}}" placeholder="Gedimo aprašymas" />
        </div>
        <br />
        <div class="form-group">
            <input type="text" name="marke" class="form-control" value="{{$order->marke}}" placeholder="Automobilio markė" />
        </div>
        <br />
        <div class="form-group">
            <input type="text" name="valstybinis_numeris" class="form-control" value="{{$order->valstybinis_numeris}}" placeholder="Automobilio valstybinis numeris" />
        </div>
        <br />
        <div class="form-group">
            <input type="number" name="rida" class="form-control" value="{{$order->rida}}" placeholder="Automobilio rida" />
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
            <input type="submit" class="btn btn-primary" value="Patvirtinti" />
        </div>
        </form>
        </div>
    </div>
</div>
@endsection
