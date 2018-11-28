@extends('layouts.panel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboards</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Available Dashboards</h3>
                        @if(Auth::user()->isAdmin())
                            <a href="{{route('admin')}}" class="btn btn-primary btn-block" role="button">Site Administration</a>
                        @endif
                        @if(Auth::user()->isAdmin() || Auth::user()->isContentManager() || Auth::user()->isContentEditor())
                            <a href="#" class="btn btn-secondary btn-block" role="button">Conentent Management</a>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
