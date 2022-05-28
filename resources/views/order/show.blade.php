<?php
$url = "order/";
$url .= "{$order->id}";
$url .= "/edit";
?>

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

        button {
            width:8%;
        }
    </style>

@section('content')
@if(\Session::has('success'))
<div class="alert alert-success">
    <p>{{ \Session::get('success') }}</p>
</div>
@endif
</br>
    <div class="flex-container">
        <div class="flex-child">
            <h5><b>Date</b></h5>
            <br />
            <h5> {{ $order->apsilankymo_data }} </h5>
        </div>

        <div class="flex-child">
            <div>
                <h5>State</h5>
                <p> {{ $order->busena }} </p>
            </div>
            <div>
                <h5>Description</h5>
                <p> {{ $order->gedimo_aprasymas }} </p>
            </div>
            <div>
                <h5>Service</h5>
                <p> {{ $order->autoserviso_id }} </p>
            </div>
            <div>
                <h5>Make</h5>
                <p> {{ $order->marke }} </p>
            </div>
            <div>
                <h5>License plate number</h5>
                <p> {{ $order->valstybinis_numeris }} </p>
            </div>
            <div>
                <h5>Mileage</h5>
                <p> {{ $order->rida }} </p>
            </div>
        </div>
    </div>
    @if($order->busena == 'priimtas' && Auth::user()->role == 'user')
    <div class="button">
        <button style="margin-left:20px" onclick="location.href='{{ url($url) }}'">Edit</button>
        <form method="post" class="cancel_form" action="/order/{{$order->id}}/cancel">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="GET"/>
            <button style="margin-left:20px; margin-top:10px" type="submit" class="btn btn-danger">Cancel</button>
        </form>
    </div>
    @endif
    <script>
    $(document).ready(function(){
    $('.cancel_form').on('submit', function(){
    if(confirm("Ar tikrai norite atšaukti?"))
    {
    return true;
    }
    else
    {
    return false;
    }
    });
    });
    </script>

    @endsection
