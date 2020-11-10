@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (auth()->user()->role === 'admin')
                <div class="card">
                    <div class="card-header">Selamat Datang {{Auth::user()->name}}</div>

                    <div class="card-body">
                        <a href="{{route('dashboardAdmin')}}" class="btn btn-primary">Masuk Dashboard</a>
                        {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }} --}}
                    </div>
                </div>
            @endif

            @if (auth()->user()->role === 'kasir')
                <div class="card">
                    <div class="card-header">Selamat Datang {{Auth::user()->name}}</div>

                    <div class="card-body">
                        <a href="{{route('dashboardKasir')}}" class="btn btn-primary">Masuk Dashboard</a>
                        {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }} --}}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
