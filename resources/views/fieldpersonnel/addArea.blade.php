@extends('layouts.default')
@section('title','Add Area')
@section('content')
    <div class="container">
        <div class="row">
            <section>
                <h3>Area</h3>
                <h4>Add New Area</h4>
                <div class="table-responsive">
                    <table class="alt">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Started On</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <!--end php for each-->
                        <tr>
                            <td>
                                <input type="text" class="form-group" name="areaname" id="areaname" value="" placeholder="Area Name"/>
                            </td>
                            <td>
                                <input type="date" class="form-group" name="date" id="date" value="" placeholder="Date"/>
                            </td>
                            <td>
                                <input type="text" class="form-group" name="description" id="description" value=""
                                       placeholder="Description"/>
                            </td>
                            <td class="actions" colspan='2'><a href="#" class="btn btn-block btn-success">Add
                                    Area</a></li>
                            </td>
                            <!--start php for each-->
                        <tr>
                            <td>
                                Blantyre
                            </td>
                            <td>
                                January 2005
                            </td>
                            <td>
                                First Area
                            </td>
                            <td><a href="#" class="btn btn-md btn-primary ">Update Area</a></td>
                            <td><a href="#" class="btn btn-md btn-warning">View Area Teams</a></td>
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

                            <td><a href="#" class="btn btn-block btn-warning">Update Area</a></td>
                        </tr>
                        </tbody>

                    </table>
                </div>
            </section>
        </div>
    </div>
@endsection