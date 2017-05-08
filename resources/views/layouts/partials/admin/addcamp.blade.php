<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Create a Camp Event</h4>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form method="post" action="/adolescent">
            {{csrf_field()}}
            <div class="form-group  form">
                <div class="col-sm-4 ">
                    <label for="campname" class="sr-only">camp name</label>
                    <input class="form-control" name="campname" type="text" placeholder="Camp Name" />
                </div>

                <div class="col-sm-4 ">
                    <label for="campvenue" class="sr-only">User Type</label>
                    <input class="form-control" name="campvenue" type="text" placeholder="Camp Venue" />
                </div>
                <div class="col-sm-4 ">
                    <label for="campfee" class="sr-only">User Type</label>
                    <input class="form-control" name="campfee" type="number" placeholder="campfee" />
                </div>
                <div class="col-sm-4 ">
                    <label for="startdate" class="sr-only">User Type</label>
                    <input class="form-control" name="startdate" type="date" placeholder="Starts On" />
                </div>
                <div class="col-sm-4 ">
                    <label for="enddate" class="sr-only">User Type</label>
                    <input class="form-control" name="enddate" type="date" placeholder="Ends On" />
                </div>
                <div class="col-sm-4 ">
                    <label for="camptype_id" class="sr-only">Camp Type</label>
                    <select class="form-control" name="camptype_id" type="text" placeholder="Camp Name">
                    @foreach($camps as $camp)
                        <option value='{{$camp->camptype_id}}'>{{$camp->camptype->name}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="col-sm-4 ">
                <button type="submit" class="btn btn-primary">Create Camp</button>


            </div>
        </form>
    </div>

</div>