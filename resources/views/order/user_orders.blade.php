@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>My orders</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/order/create') }}" class="btn btn-success btn-sm" title="Add New Car">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Order
                        </a>
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
                                <th>Actions</th>
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

                                <td>
                                    <a href="{{ url('/order/' . $row->id) }}" title="View Order"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                    </form>
                                </td>
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
