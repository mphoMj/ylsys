@extends('layouts.default') @section('content')
<div class="container">
    <div class="row">

        <section>
            <h3>View Events</h3>

            <div class="table-responsive">
                <table class="alt">
                    <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Event Type</th>
                            <th>Event Dates </th>
                            <th>Venue</th>
                            <th>Fee</th>

                            <th></th><th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- php for each-->
                        <tr>
                            <td>
                                2016 Summer Camp
                            </td>
                            <td>
                                Outreach Camp
                            </td>
                            <td>
                                12/02/2016 - 19/02/2019
                            </td>
                            <td>
                                Boadzulu Holiday Resort
                            </td>
                            <td>
                                MK 5000.00
                            </td>

                            <td>
                                <input class="btn-primary" type="submit" name="submit" value="Update Event" />
                            </td>
                        </tr>
                        


                    </tbody>

                </table>
            </div>
    </div>
</div>
@endsection