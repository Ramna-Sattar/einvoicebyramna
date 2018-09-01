@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        @include('layouts.sidebar')
        </div>
       <div class="col-md-10  " >
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body" style="height: 480px">
                    <div style="padding: 15%" >
                   <button type="button" class="btn btn-default btn-lg">Total Clients</button>
                   <button type="button" class="btn btn-default btn-lg">Total Amount</button>
                   <button type="button" class="btn btn-default btn-lg">Pending Amount</button><br><Br><br><br> <br>
                   <button type="button" class="btn btn-default btn-lg">Paid Amount</button>
                   <button type="button" class="btn btn-default btn-lg">Due Amount</button>
                   <button type="button" class="btn btn-default btn-lg">Total lables</button>
                   </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection