@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Patients</div>

                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Postal Address</th>
                                <th>Phone Number</th>
                                <th>Insurance</th>
                                <th>Insurer</th>
                                <th>Policy Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                            <tr>
                                <td>{{ $patient->id }}</td>
                                <td>{{ $patient->name }}</td>
                                <td>{{ $patient->postal_address }}</td>
                                <td>{{ $patient->insurance }}</td>
                                <td>{{ $patient->insurer }}</td>
                                <td>{{ $patient->policy }}</td>
                                <td><img src="{{ asset('storage/' . $patient->image->path) }}" width="150" /></td>
                                <td>
                                    <a href="{{ route('patient.show', $patient ) }}">View</a>
                                    @if (Auth::user() == null || Auth::user()->hasRole('user'))
                                    <form action="{{ route('cart.add')}}" method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="patient_id" value="{{ $patient->id }}">
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
