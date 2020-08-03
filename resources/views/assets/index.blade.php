@extends('layout/main')
@section('title', '.: Assets')

@section('custStyles')
    <style>
        thead th {
            background-color: #006DCC;
            color: white;
        }

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h2 class="mt-2">Your Assets..!!!</h1>
                    <table class="table">
                        <thead class="thead-">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category</th>
                                <th scope="col">Asset Code</th>
                                <th scope="col">Asset Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- CONTENT --}}
                            @foreach ($dt_asset as $dt)
                                <tr>
                                    <td>{{ $dt->id }}</td>
                                    <td>{{ $dt->category_id }}</td>
                                    <td>{{ $dt->asset_code }}</td>
                                    <td>{{ $dt->asset_name }}</td>
                                    <td>{{ $dt->status }}</td>
                                    <td>
                                        <a href="#" class="badge badge-success">edit</a>
                                        <a href="#" class="badge badge-danger">delete</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
