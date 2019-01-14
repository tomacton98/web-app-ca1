@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Doctors</div>

                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Postal Address</th>
                                <th>Phone Number</th>
                                <th>Start Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->id }}</td>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->postal_address }}</td>
                                <td>{{ $doctor->phone }}</td>
                                <td>{{ $doctor->date_started }}</td>
                                <td>
                                    <a href="{{ route('doctor.show', $doctor ) }}">View</a>
                                    @if (Auth::user() == null || Auth::user()->hasRole('user'))
                                    <form action="{{ route('cart.add')}}" method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
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
