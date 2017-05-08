@extends('layouts.default')
@section('title', 'Notifications')
@section('content')
    <div class="container">
        @include('layouts.partials.areadirector.nav')
        <div class="panel panel-default">
            <div class="panel-heading">Upcoming eventsNotification</div>
            <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                </form>
            </div>
            <div class="panel-heading">Over Due Statistics</div>
            <div class="panel-body">

            </div>
            <div class="panel-heading">Notification</div>
            <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                </form>
            </div>
        </div>
    </div>
@endsection