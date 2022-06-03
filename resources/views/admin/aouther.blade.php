@extends('layouts.dash')
@section('mainContent')
<div class="container">
  <div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h3>Name Aouther </h3>
      </div>
  </div>

  <table class="table table-bordered">
      <tr>
        <th>ID</th>
        <th>name</th>

      </tr>
      @foreach($author as $author)
      <tr>
        <td>{{ $author->id }}</td>
        <td>{{ $author->author }}</td>
      </tr>
      @endforeach
  </table>
</div>





























<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  @endsection
