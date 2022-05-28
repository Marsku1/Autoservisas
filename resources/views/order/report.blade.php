@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Order report</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('search')}}" method="POST">
                            @csrf
                            <br>
                            <div class="container-fluid">
                                <div class="form-group row">
                                    <label for="date" class="col-form-label col-sm-1" style="font-weight:bold"> Date From</label>
                                    <div class ="col-sm-2">
                                        <input type="date" class="form-control input-sm" id="fromDate" name="fromDate" required/>
                                    </div>
                                    <label for="date" class="col-form-label col-sm-1" style="font-weight:bold"> Date To</label>
                                    <div class ="col-sm-2">
                                        <input type="date" class="form-control input-sm" id="toDate" name="toDate" required/>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="submit" class="btn btn-primary" name="search" title="Search">Search</button>
                                    </div>
                                    <div class="col-sm-1">
                                        <button onclick="location.href='{{ url('order/report') }}'" class="btn btn-danger" name="clear" title="Clear">Clear</button>
                                    </div>
                                    
                                </div>                         
                            </div>
                        </form>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>State</th>
                                <th>Description</th>
                                <th>Service</th>
                                <th>Make</th>
                                <th>License plate number</th>
                                <th>Mileage</th>
                            </tr>
                            </thead>
                            <tbody>
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
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
