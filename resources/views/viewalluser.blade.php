@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        @include('layouts.sidebar')
        </div>
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">View All Users</div>

                <div class="panel-body" style="height: 480px">
                    
                    <table class="table">
                        <thead>
                            <tr>
                               <th>Name</th> 
                               <th>Designation</th>
                               <th>Email</th>
                               <th>Password</th>
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