@extends('layouts.default')
@section('title','Creating an Adolescent')
@section('content')
    <div class="container">
        <h3>Adding An Adolescent</h3>
        <form method="post" action="/adolescent">
            {{csrf_field()}}
            <div class="form-group row">
                <label for="firstname" class="col-2 col-form-label">First Name</label>
                <div class="col-10">
                    <input class="form-control" type="text" name="firstname">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-2 col-form-label">Last Name</label>
                <div class="col-10">
                    <input class="form-control" type="text" name="lastname">
                </div>
            </div>
            <div class="form-group row">
                <label for="nickname" class="col-2 col-form-label">Nickname</label>
                <div class="col-10">
                    <input class="form-control" type="text" name="nickname">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-email-input" class="col-2 col-form-label">Gender</label>
                <div class="col-10">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" value="female"> female
                        </label>
                    </div>
                    <div class="form-check form-checkolescent-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" value="male"> Male
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="dateofbirth" class="col-2 col-form-label">Date of Birth</label>
                <div class="col-10">
                    <input class="form-control" type="date" name="dateofbirth">
                </div>
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-primary">Add new ad</button>
            </div>
            @include('layouts.partials.errors')
        </form>
    </div>

@endsection