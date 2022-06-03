
@extends('layouts.dash')

@section('mainContent')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Manage Books</h1>
        </div>

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show w-50" role="alert">
                <strong>Error!</strong> {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show w-50" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <h2>Books</h2>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>ISBN</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{$book->image}}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->price }}</td>
                        <td>

                            <a href="{{ route('update-book', ['id' => $book->id]) }}" class="btn btn-primary btn-sm">Update</a>
                            <a href="{{ route('delete-book', ['id' => $book->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection

@section('pageScripts')
<script>
    $(document).ready(function() {
        $('.view-btn').on('click', function(e) {
            e.preventDefault();

            var viewBookUrl = $(this).attr('href');

            $.ajax({
                url: viewBookUrl,
                type: 'get',
                data: {},
                success: function(data) {
                    alert('Title: ' + data["title"] + ' | Author: ' + data.author + ' | ISBN: ' + data.isbn + ' | Price: ' + data.price);
                    console.log(data);
                }
            });
        });
    });
</script>
@endsection
