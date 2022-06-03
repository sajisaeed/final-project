@extends('layouts.app')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Update book info</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show w-50" role="alert">
                @foreach ($errors->all() as $error)
                    <li>
                        <strong>Error!</strong> {{ $error }}
                    </li>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

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

        <form class="mb-5" method="post" action="{{ route('do-update-book', ['id' => $data->id]) }}">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control w-50" id="title" name="title" value="{{ $data->title }}">
            </div>

            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control w-50" id="author" name="author" value="{{ $data->author }}">
            </div>

            <div class="form-group">
                <label for="isbn">destbition:</label>
                <input type="text" class="form-control w-50" id="isbn" name="isbn" value="{{ $data->isbn }}">
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control w-50" id="price" name="price" value="{{ $data->price }}">
            </div>

            <button id="submit-btn" type="submit" class="btn btn-primary"><span data-feather="check"></span> Submit
            </button>
        </form>
    </main>
@endsection
