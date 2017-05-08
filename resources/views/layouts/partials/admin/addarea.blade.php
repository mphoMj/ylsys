
    <div class="panel-heading">
        <h4> Add New Area</h4>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <form method="post" action="/area">
            {{csrf_field()}}
            <div class="form-group flex-row form-inline">

                <div class="col-sm-3 form-inline">
                    <label for="areaname" class="sr-only">Area Name</label>
                    <input class="form-control" name="areaname" type="text" placeholder="Area Name"/>
                </div>
                <div class="col-sm-3 form-inline">
                    <label for="description" class="sr-only">Area Description</label>
                    <input class="form-control" name="description" type="text"
                           placeholder="Description"/>
                </div>
                <div class="col-sm-3 form-inline">
                    <label for="startedon" class="sr-only">Established Date</label>
                    <input class="form-control" name="startedon" type="date"
                           placeholder="Established On"/>
                </div>
                <div class="col-sm-3 form-inline">
                    <button type="submit" class="btn btn-primary">Add Area</button>
                </div>

            </div>
        </form>
    </div>

