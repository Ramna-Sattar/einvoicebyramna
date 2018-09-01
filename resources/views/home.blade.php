@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
        @include('layouts.sidebar')
        </div>
       <div class="col-md-10 " >
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body" style="height: 480px">
                   @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
