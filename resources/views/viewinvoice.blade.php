@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        @include('layouts.sidebar')
        </div>
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">View Invoice</div>

                <div class="panel-body" style="height: 480px">
                    
                    <table class="table">
                        <thead>
                            <tr>
                               <th>Lable</th>
                               <th>Customer</th>
                               <th>Invoice Date</th>
                               <th>Due Date</th>
                               <th>Subject</th>
                               <th>item</th>
                               <th>Quantity</th>
                               <th>unit Price</th>
                               <th>total</th>
                               <th>Discount</th>
                               <th>net Total</th>
                               <th>Terms&Conditions</th>
                               <th>Status</th>
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