@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Car Profiles Page</div>
        <div class="card-body">

            <form  method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <label>Make</label></br>
                <input type="text" name="make" id="make" class="form-control"></br>
                <label>Model</label></br>
                <input type="text" name="model" id="model" class="form-control"></br>
                <label>Fuel type</label></br>
                <input type="text" name="fuel_type" id="fuel_type" class="form-control"></br>
                <label>Year</label></br>
                <input type="text" name="year" id="year" class="form-control"></br>
                <label>Number plate</label></br>
                <input type="text" name="number_plate" id="number_plate" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
