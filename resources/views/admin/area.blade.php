@extends('layouts.default')
@section('title',' Area')
@section('content')

    <div class="container">
        @include('layouts.partials.admin.nav')

        <div class="panel panel-default">
            @include('layouts.partials.admin.addarea')

            <div class="panel-heading">
                <h4> Established Area</h4>

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="">
                    <table class="table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Started On</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <!--start php for each-->
                        <tr>
                            <td>
                                {{$area->name}}
                            </td>
                            <td>
                                {{$area->description}}
                            </td>
                            <td>
                                {{$area->startedon}}
                            </td>

                            <td><a href="#" class="btn btn-outline-primary" alt="click to view teams in this area">View
                                    Area Teams</a></td>
                        </tr>
                        <tr>
                            <td>
                                Zomba
                            </td>
                            <td>
                                January 2008
                            </td>
                            <td>
                                started second
                            </td>

                            <td></td>
                        </tr>
                        <!--end php for each-->


                        </tbody>

                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection