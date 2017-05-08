@extends('layouts.default')
@section('title','Camps')
@section('content')

    <div class="container">
        @include('layouts.partials.admin.nav')
        <section>

            @include('layouts.partials.admin.addcamp')

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4> Upcoming Camps</h4>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    @include('layouts.partials.camp')
                </div>
        </section>
    </div>

@endsection