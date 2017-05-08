@extends('layouts.default')

@section('content')
    <div class="container">
        @include('layouts.partials.areadirector.nav')

        <div class="row-fluid">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4> Recruitment</h4>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="card-group">
                        <div class="card">
                            number of teamsss
                        </div>
                        <div class="card">
                            number
                        </div>
                    </div>
                </div>

                <div class="panel-heading">
                    Recruitment by Team
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row-fluid">

                        <!-- syntax to refine recruitment stats by
                        area//group by area
                        team//group by team
                        club// group by club
                        vounteer//group by volunteer
                            //php if recruitments not found-->

                        <!--php else if recruitments found-->
                        <table class="table table-bordered table-condensed table-hover table-responsive">
                            <tr>
                                <th>Team Name</th>
                                <th># Kids Met 3x</th>
                                <th># Invited to Club</th>
                                <th># Invited to Camp</th>
                                <th># Confirmed 4 Camp</th>
                            </tr>


                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>


                        </table>

                    </div>

                </div>
            </div>


        </div>
    </div>

@endsection