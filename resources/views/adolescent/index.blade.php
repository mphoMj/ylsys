@extends('layouts.default')
@section('title', 'Adolescents Home')
@section('content')

    <div class="container row">
        <h2>Adolescent Home</h2>
        <button type="button" class="btn btn-primary "><a href="/adolescent/create"> Add Adolescents</a> <span
                    class="glyphicon glyphicon-plus"></span></button>
        <div>

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Adolescents</div>

                <!-- Table -->
                <div class="table-responsive table-striped">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Nickname</th>
                            <th>Gender</th>
                            <th>Date Of Birth</th>
                            <th>Date Added</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($adolescents)>0)
                            @foreach($adolescents as $adolescent)
                                <tr>
                                    <td>{{$adolescent->id}}</td>
                                    <td>{{$adolescent->firstname}}</td>
                                    <td>{{$adolescent->lastname}}</td>
                                    <td>{{$adolescent->nickname}}</td>
                                    <td>{{$adolescent->gender}}</td>
                                    <td>{{$adolescent->dateofbirth}}</td>
                                    <td>{{$adolescent->created_at->toFormattedDateString()}}</td>

                                </tr>
                            @endforeach

                        @else
                            <tr>
                                <td colspan="5" class="alert alert-danger">No Adolescents in System</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>

@endsection