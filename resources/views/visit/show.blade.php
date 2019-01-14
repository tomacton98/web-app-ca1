@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Visit details</div>

                <div class="card-body">
                    <table>
                        <tbody>
                            <tr>
                                <td>Visit ID</td>
                                <td>{{ $visit->id }}</td>
                            </tr>
                            <tr>
                                <td>Doctor ID</td>
                                <td>{{ $visit->doctor_id }}</td>
                            </tr>
                            <tr>
                                <td>Patient ID</td>
                                <td>{{ $visit->patient_id }}</td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td>{{ $visit->date }}</td>
                            </tr>
                            <tr>
                                <td>Time</td>
                                <td>{{ $visit->time }}</td>
                            </tr>
                            <tr>
                                <td>Duration</td>
                                <td>{{ $visit->duration }}</td>
                            </tr>
                            <tr>
                                <td>Cost</td>
                                <td>{{ $visit->cost }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
