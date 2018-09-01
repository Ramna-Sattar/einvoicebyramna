@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        @include('layouts.sidebar')
        </div>
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">View payment</div>

                <div class="panel-body" style="height: 480px">
                    
                    <table class="table">
                        <thead>
                            <tr>
                               <th>Payment Type</th>
                               <th>Amount</th>
                               <th>Received</th>
                               <th>Remaining</th>
                               <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr></tr> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection