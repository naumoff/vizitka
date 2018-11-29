@extends('layouts.panel')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 h-100">
                <div class="card text-white bg-secondary mb-3">
                    <div class="card-header">Side Bar</div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary btn-sm btn-block">Invite new user</button>
                        <button type="button" class="btn btn-default btn-sm btn-block">Button 2</button>
                    </div>
                </div>
            </div>
            <div class="col-md-8" style="padding-left: 0px">
                <div class="card">
                    <div class="card-header">Administration Panel</div>
                    <div class="card-body">
                        <h3>kuku</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection