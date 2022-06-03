@extends('layouts.dash')
@section('mainContent')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit About In Websit</h1>
        </div>

        <form class="mb-5" method="post" action="{{ url('/editabout')}}" >

            @csrf

            <div class="form-group">
                <label for="about">Enter about:</label>
                <input type="text" class="form-control w-50" id="about" name="about" value="{{ old('about') }}">
            </div>



            <button id="submit-btn" type="submit" class="btn btn-primary"><span data-feather="check"></span> Submit
            </button>
        </form>
    </main>
@endsection
