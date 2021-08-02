@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">
                        <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name1" name="name"
                                    value="{{ Auth::user()->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ Auth::user()->email }}">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" name="image">
                            </div>
                            <textarea name="address" cols="30" rows="10" class="form-control mb-3">{{ Auth::user()->address->address }}</textarea>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
