@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>My vehicles</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('CarProfileViews/create') }}" class="btn btn-success btn-sm" title="Add New Car">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Car
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Fuel type</th>
                                    <th>Year</th>
                                    <th>Number plate</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($carProfiles as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->make }}</td>
                                        <td>{{ $item->model }}</td>
                                        <td>{{ $item->fuel_type }}</td>
                                        <td>{{ $item->year }}</td>
                                        <td>{{ $item->number_plate}}</td>

                                        <td>
                                            <a href="{{ url('/CarProfileViews/' . $item->id) }}" title="View Car Profile"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/CarProfileViews/' . $item->id . '/edit') }}" title="Edit Car Profile"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/CarProfileViews' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Car Profile" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
