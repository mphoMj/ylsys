@extends('layouts.default')

@section('content')
    <div class="row-fluid">
        <div class="span11">
            <h2>Admin Dashboard</h2>
        </div>
    </div>
    <div id="TabbedPanels1" class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item "><a href="">NOtifications</a></li>
            <li class="nav-item active"><a href="#"></a></li>
            <li class="nav-item"><a href="#">Add Member</a></li>
            <li class="nav-item"><a href="#">View Literature</a></li>
            <li class="nav-item"><a href="#">Book Sales Report</a></li>
            <li class="nav-item"><a href="#">User Sales Report</a></li>
            <li class="nav-item "><a href="#">View Literature Orders</a></li>
            <li class="nav-item"><a href="#">Create Event</a></li>
            <li class="nav-item"><a href="#"> View Event</a></li>
        </ul>
    </div>
    <div class="TabbedPanelsContentGroup">
        <br>
        <div class="row-fluid">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4> Event Confirmattions</h4>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row-fluid">
                            <!--php if recruitments not found-->
                            <h4>No New recruitments on Any of the events </h4>
                            <!--php else if recruitments found-->
                            <table class="table table-bordered table-condensed table-hover table-responsive">
                                <tr>
                                    <th>Adolescents Name</th>
                                    <th># times met</th>
                                    <th>Invited to Club</th>
                                    <th>Invited to Camp</th>
                                    <th></th>
                                </tr>


                                <tr>
                                    <td><input type="text" class="form-control" placeholder="0"/></td>
                                    <td><input type="te" class="form-control form-control-sm" placeholder="0"/>
                                    </td>
                                    <td><input type="check" class="form-control form-control-sm" placeholder="0"/></td>
                                    <td>
                                    <td><input type="radio" class="form-control form-control-sm" placeholder="0"/></td>
                                    <td><input type="number" class="form-control form-control-sm" placeholder="0"/></td>
                                    <td>
                                        <select class="form-control icon-select-arrows" name="camp">
                                            <option class="" value="1"> camp 1</option>
                                            <option class="" value="2"> camp 2</option>
                                        </select>
                                    </td>
                                    <td><a href="">
                                            <button class="btn btn-mini btn-danger">Cancel Event</button>
                                        </a></td>
                                </tr>


                            </table>

                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection