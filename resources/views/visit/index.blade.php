@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Visits</div>

                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Visit ID</th>
                                <th>Doctor ID</th>
                                <th>Patient ID</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Duration</th>
                                <th>Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($visits as $visit)
                            <tr>
                                <td>{{ $visit->id }}</td>
                                <td>{{ $visit->doctor_id }}</td>
                                <td>{{ $visit->patient_id }}</td>
                                <td>{{ $visit->date }}</td>
                                <td>{{ $visit->time }}</td>
                                <td>{{ $visit->duration }}</td>
                                <td>{{ $visit->cost }}</td>
                                <td>
                                    <a href="{{ route('visit.show', $visit ) }}">View</a>
                                    @if (Auth::user() == null || Auth::user()->hasRole('user'))
                                    <form action="{{ route('cart.add')}}" method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="visit_id" value="{{ $visit->id }}">
                                        <button>Add to cart</button>
                                    </form>
                                    @endif
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
@endsection
