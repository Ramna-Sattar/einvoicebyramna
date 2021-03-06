@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        @include('layouts.sidebar')
        </div>
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading">Add Contact</div>

                <div class="panel-body" style="height: 480px">
                    <form class="form-horizontal" method="POST" action="">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Select Label</label>

                            <div class="col-md-6">
                                <select id="name" type="dropdown" class="form-control" name="label"  required autofocus>
                                    <option></option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  required autofocus>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="businessname" class="col-md-4 control-label">Business Name</label>

                            <div class="col-md-6">
                                <input id="businessname" type="text" class="form-control" name="businessname"  required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact" class="col-md-4 control-label">Contact</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control" name="contact" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="address" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="select status" class="col-md-4 control-label">Select Status</label>

                            <div class="col-md-6">
                                <select  type="dropdown" class="form-control" name="status" required autofocus>
                                    <option></option>
                                   
                                </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
