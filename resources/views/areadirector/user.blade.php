@extends('layouts.default')
@section('content')
    <div class="container">
        @include('layouts.partials.areadirector.nav')
        <div class="row">


                <div class="panel panel-default">
                    <div class="panel-heading">Add Users</div>

                    <div class="panel-body">
                        <div class="form-group-md row">
                            <label for="lastname" class="sr-only">First Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="firstname" placeholder="First Name"
                                       required>
                            </div>

                            <label for="lastname" class="sr-only">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="lastname" placeholder="Last Name"
                                       required>
                            </div>

                            <label for="email" class="sr-only">Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="email" placeholder="Email Address"
                                       required/>
                            </div>

                            <label for="password" class="sr-only">Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="password" placeholder="Password"
                                       required/>
                            </div>

                            <label for="gender" class="sr-only">Gender</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="gender">
                                    <option selected class="text-muted">-Gender-</option>
                                    <option value="male">Male</option>
                                    <option value="female">female</option>
                                </select>
                            </div>

                            <label for="usertype" class="sr-only">User Type</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="usertype">
                                    <option selected class="text-muted">-User Type-</option>
                                    <option value="3">Team Leader</option>
                                    <option value="4">Volunteer Leader</option>
                                </select>
                            </div>



                            <input class="btn btn-primary btn-md pull-right" name="Add" type="submit" value="Add User"/>
                        </div>
                    </div>
                </div>



        </div>
    </div>
@endsection