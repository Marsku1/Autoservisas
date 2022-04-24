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
        <form method="post" action="{{action('ItemController@update', $id)}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PATCH" />
        <div class="form-group">
            <input type="text" name="pavadinimas" class="form-control" value="{{$item->pavadinimas}}" placeholder="Pavadinimas" />
        </div>
        <div class="form-group">
            <input type="text" name="trumpas_aprasymas" class="form-control" value="{{$item->trumpas_aprasymas}}" placeholder="Trumpas aprašymas" />
        </div>
        <div class="form-group">
            <input type="text" name="ilgas_aprasymas" class="form-control" value="{{$item->ilgas_aprasymas}}" placeholder="Ilgas aprašymas" />
        </div>
        <div class="form-group">
            <label for="bukle">Būklė:</label>
            <select id="bukle" name="bukle">
                <option>{{$item->bukle}}</option>
                <option>Kaip naujas</option>
                <option>Puiki</option>
                <option>Gera</option>
                <option>Patenkinama</option>
                <option>Bloga</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" name="pristatymas" class="form-control" value="{{$item->pristatymas}}" placeholder="Pristatymas" />
        </div>
        <div class="form-group">
            <label for="file">Nuotrauka:</label>
            <input type="file" name="file" id="file" class="form-control" value="{{$item->nuotrauka}}"/>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Patvirtinti" />
        </div>
        </form>
        </div>
    </div>
</div>
@endsection
