@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        @include('layouts.sidebar')
        </div>
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading">Create New User</div>

                <div class="panel-body" style="height: 480px">
                    <form class="form-horizontal" method="POST" action="">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  required autofocus>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="designation" class="col-md-4 control-label">Designation</label>

                            <div class="col-md-6">
                                <input id="designation" type="text" class="form-control" name="user_designation"  required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="type" class="col-md-4 control-label">Select Type</label>

                            <div class="col-md-6">
                                <select id="type" type="dropdown" class="form-control" name="user_type"  required autofocus>
                                    <option></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
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
