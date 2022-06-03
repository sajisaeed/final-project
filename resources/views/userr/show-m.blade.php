@extends('layouts.dash')
@section('mainContent')
<div class="container">
  <div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h3>massege and feedback </h3>
      </div>
  </div>

  <table class="table table-bordered">
      <tr>
        <th>name</th>
          <th>email</th>
          <th>massege</th>

          {{-- <th width="280px">Actions</th> --}}
      </tr>
      @foreach ($messages as $message)
      <tr>
          <td>{{$message->name}}</td>
          <td>{{$message->email}}</td>
          <td>{{$message->massege}}</td>
      </tr>
      @endforeach
  </table>
</div>





























<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  @endsection
