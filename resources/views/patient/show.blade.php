@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Patient details</div>

                <div class="card-body">
                    <table>
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td>{{ $patient->id }}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $patient->name }}</td>
                            </tr>
                            <tr>
                                <td>Postal Address</td>
                                <td>{{ $patient->postal_address }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{ $patient->phone }}</td>
                            </tr>
                            <tr>
                                <td>Insurance</td>
                                <td>{{ $patient->insurance }}</td>
                            </tr>
                            <tr>
                                <td>Insurer</td>
                                <td>{{ $patient->insurer }}</td>
                            </tr>
                            <tr>
                                <td>Policy Number</td>
                                <td>{{ $patient->policy }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
