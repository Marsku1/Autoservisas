@extends('layouts.app')

<style>
        .disabled {
            pointer-events: none;
        }
        .header {
            text-align:center;           
        }
        tr {
            text-align:center;      
        }
        tr:hover {
            background-color: #D3D3D3;
        }
</style>

@section('content')
<div class="row">
    <div class="col-md-12">
        <br />
        <h3 align="center">Užsakymų sąrašas</h3>
        <br />
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
        @endif
        @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
        @endif
        <br />
        <br />
        <table class="table table-bordered">
            <tr class="disabled">
                <th class="header">Apsilankymo data</th>
                <th class="header">Būsena</th>
                <th class="header">Gedimas</th>
                <th class="header">Autoservisas</th>
                <th class="header">Marke</th>
                <th class="header">Valstybinis numeris</th>
                <th class="header">Rida</th>
            </tr>
            @foreach($orders as $row)
            <tr>
                <td>{{$row['apsilankymo_data']}}</td>
                <td>{{$row['busena']}}</td>
                <td>{{$row['gedimo_aprasymas']}}</td>
                <td>{{$row['autoserviso_id']}}</td>
                <td>{{$row['marke']}}</td>
                <td>{{$row['valstybinis_numeris']}}</td>
                <td>{{$row['rida']}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection