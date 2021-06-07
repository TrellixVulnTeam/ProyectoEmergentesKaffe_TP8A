@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Reservas') }}</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('reservas.store') }}">
                            @csrf
                            @include('reservas.formresv')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
