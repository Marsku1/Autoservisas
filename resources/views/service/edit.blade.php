@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Service edit</div>
        <div class="card-body">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
                </ul>
        @endif
            <form action="{{ url('service/' .$service->id .'/edit') }}" method="post">
                {!! csrf_field() !!}
                <input type="hidden" name="id" id="id" value="{{$service->id}}" id="id" />
                <label>City</label></br>
                <input type="text" name="miestas" id="miestas" value="{{$service->miestas}}" class="form-control"></br>
                <label>Name</label></br>
                <input type="text" name="pavadinimas" id="pavadinimas" value="{{$service->pavadinimas}}" class="form-control"></br>
                <label>Street</label></br>
                <input type="text" name="gatve" id="gatve" value="{{$service->gatve}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
        </div>
    </div>
@endsection
