<div class="panel-body">
    <div class="">
        <table class="table-striped">

            <thead>
                <tr>
                    <th>Camp Name</th>
                    <th>Camp Type</th>
                    <th>Camp Dates</th>
                    <th>Venue</th>
                    <th>Fee</th>

                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if(count($camps)>0) 
                @foreach($camps as $camp)
                <tr>
                    
                    <td>{{$camp->campname}}</td>
                    <td>{{$camp->camptype->name}}</td>
                    <td>{{$camp->campvenue}}</td>
                    <td>{{$camp->campfee}}</td>
                    <td>{{$camp->dateofbirth}}</td>
                    <td>{{$camp->startdate->toFormattedDateString()}}</td>
                    <td>{{$camp->enddate->toFormattedDateString()}}</td>
                </tr>
                @endforeach @else
                <tr>
                    <td colspan="5" class="alert alert-danger">Camps yet</td>
                </tr>
                @endif
                <!-- php end for each
                        else -->

            </tbody>

        </table>
    </div>
</div>