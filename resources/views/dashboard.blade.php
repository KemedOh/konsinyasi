@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <h1>Hello, {{ auth()->user()->fullname }}</h1>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="row" id="dashboard">
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h2 class="card-title">Total User</h2>
                                    <h3>
                                        <p class="card-subtitle mb-2 text-body-secondary">{{$user}}</p>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h2 class="card-title">Total Transaksi</h2>
                                        <h3>
                                            <p class="card-subtitle mb-2 text-body-secondary">10</p>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 m-20 bg-white rounded shadow">
                        {!! $chart->container() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
    @endsection