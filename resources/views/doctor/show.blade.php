@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Doctor details</div>

                <div class="card-body">
                    <table>
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td>{{ $doctor->id }}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $doctor->name }}</td>
                            </tr>
                            <tr>
                                <td>Postal Address</td>
                                <td>{{ $doctor->postal_address }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{ $doctor->phone }}</td>
                            </tr>
                            <tr>
                                <td>Start Date</td>
                                <td>{{ $doctor->date_started }}</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
