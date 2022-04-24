@extends('CarProfileViews.layout')
@section('content')

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('CarProfileViews/' .$carProfiles->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$carProfiles->id}}" id="id" />
                <label>Make</label></br>
                <input type="text" name="make" id="make" value="{{$carProfiles->make}}" class="form-control"></br>
                <label>Model</label></br>
                <input type="text" name="model" id="model" value="{{$carProfiles->model}}" class="form-control"></br>
                <label>Fuel type</label></br>
                <input type="text" name="fuel_type" id="fuel_type" value="{{$carProfiles->fuel_type}}" class="form-control"></br>
                <label>Year</label></br>
                <input type="text" name="year" id="year" value="{{$carProfiles->year}}" class="form-control"></br>
                <label>Number plate</label></br>
                <input type="text" name="number_plate" id="number_plate" value="{{$carProfiles->number_plate}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
