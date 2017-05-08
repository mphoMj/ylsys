@extends('layouts.default') @section('content')
    <div class="container">
        <!--//insert navigation-->
        <div class="panel panel-default">
            <div class="panel-heading">Statistics</div>
            <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data">

                </form>
            </div>


            <div class="table-responsive">
                <table class="alt">
                    <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Event Type</th>
                        <th>Event Dates</th>
                        <th>Venue</th>
                        <th>Fee</th>

                        <th></th>
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
                            <input class="btn-primary" type="submit" name="submit" value="Update Event"/>
                        </td>
                    </tr>

                    <!--end php for each
                        <tr>
                                        <td>
                                            <?php echo $event->name; ?>
                            </td>
                            <td>
                                <?php echo $event->eventtype; ?>
                            </td>
                            <td>
                                <?php echo $event->Datestart; ?>
                    <?php echo " to "; ?>
                    <?php echo $event->dateend; ?>
                            </td>
                            <td>
                                <?php echo $event->venue; ?>
                            </td>
                            <td>
                                <?php echo $event->Fee; ?>
                            </td>
                            -->

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    </div>
@endsection