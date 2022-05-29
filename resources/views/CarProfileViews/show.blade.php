@extends('layouts.app')
@section('content')


    <div class="card">
        <div class="card-header">Car Profile Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Make : {{ $carProfiles->make }}</h5>
                <p class="card-text">Model : {{ $carProfiles->model }}</p>
                <p class="card-text">Fuel type : {{ $carProfiles->fuel_type }}</p>
                <p class="card-text">Year : {{ $carProfiles->year }}</p>
                <p class="card-text">Number plate : {{ $carProfiles->number_plate }}</p>
            </div>

        </div>
    </div>
