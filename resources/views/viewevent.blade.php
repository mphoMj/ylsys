@extends('layouts.default') @section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4> Upcoming Camps</h4>
        </div>
        <!-- /.panel-heading -->
        @include('layouts.partials.camp')
    </div>
    @endsection