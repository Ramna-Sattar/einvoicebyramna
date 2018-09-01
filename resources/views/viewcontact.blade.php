@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        @include('layouts.sidebar')
        </div>
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">View Contacts</div>

                <div class="panel-body" style="height: 480px">
                    
                    <table class="table">
                        <thead>
                            <tr>
                               <th>Name</th>
                               <th>Business Name</th>
                               <th>label Name</th>
                               <th>Contact</th>
                               <th>Email</th>
                               <th>Status</th>
                               <th>Receive payments</th>
                               <th>Action</th>
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
