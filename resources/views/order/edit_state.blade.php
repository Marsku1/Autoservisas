@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <br />
        <h3>State editing</h3>
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
            <input type="radio" id="priimtas" name="busena" value="priimtas">
            <label for="priimtas">Priimtas</label><br>
            <input type="radio" id="vykdomas" name="busena" value="vykdomas">
            <label for="vykdomas">Vykdomas</label><br>
            <input type="radio" id="uzbaigtas" name="busena" value="užbaigtas">
            <label for="uzbaigtas">Užbaigtas</label><br>
            <input type="radio" id="atsauktas" name="busena" value="atšauktas">
            <label for="atsauktas">Atšauktas</label> 
        </div>
        <br>
        <div class="form-group">
            <input type="text" name="message" class="form-control" placeholder="Message" />
        </div>

        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Confirm" />
        </div>
        </form>
        </div>
    </div>
</div>
@endsection
