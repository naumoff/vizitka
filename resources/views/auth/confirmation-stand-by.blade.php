@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Your account has too be approved by administrator.') }}</div>

                    <div class="card-body">
                        {{ __('Please wait until your account will be approved by our administrator.') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection