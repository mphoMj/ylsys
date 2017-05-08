@extends('layouts.default')
@section('content')

    <div class="container">
        @include('layouts.partials.admin.nav')
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4> Leaders </h4>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                @include('layouts.partials.admin.adduser')
            </div>

            <!-- Default panel contents -->
            <div class="panel-heading">Leaders</div>
            <div class="panel-body">
                <!-- Table -->
                <div class="table-responsive table-striped">
                    <table class="table">
                        <thead>
                        <tr>

                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>User Name</th>
                            <th>email Address</th>
                            <th>Gender</th>
                            <th>User Type</th>
                            <th>Date Joined YL</th>
                            <th>Date Added</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($users)>0)
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->firstname}}</td>
                                    <td>{{$user->lastname}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->gender}}</td>
                                    <td>{{$user->usertypename}}</td>
                                    <td>{{$user->datejoined}}</td>
                                    <td>{{$user->created_at->toFormattedDateString()}}</td>
                                </tr>
                            @endforeach

                        @else
                            <tr>
                                <td colspan="5" class="alert alert-danger">No Leaders in System</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
