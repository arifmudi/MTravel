@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
        </div>

        <!-- Content Row -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('paket-travel.update', $item->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    {{-- Title --}}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $item->title }}">
                    </div>
                    {{-- Location --}}
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" name="location" class="form-control" placeholder="Location" value="{{ $item->location}}">
                    </div>
                    {{-- about --}}
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea name="about" rows="10" class="d-block w-100 form-control">{{ $item->about}}</textarea>
                    </div>
                    {{-- Featured Event --}}
                    <div class="form-group">
                        <label for="featured_event">Featured Event</label>
                        <input type="text" name="featured_event" class="form-control" placeholder="featured_event" value="{{ $item->featured_event }}">
                    </div>
                    {{-- Language--}}
                    <div class="form-group">
                        <label for="language">Language</label>
                        <input type="text" name="language" class="form-control" placeholder="language" value="{{ $item->language}}">
                    </div>
                    {{-- Food--}}
                    <div class="form-group">
                        <label for="foods">Foods</label>
                        <input type="text" name="foods" class="form-control" placeholder="foods" value="{{ $item->foods }}">
                    </div>
                    {{-- Departure Date --}}
                    <div class="form-group">
                        <label for="depature_date">Departure Date</label>
                        <input type="date" name="depature_date" class="form-control" placeholder="depature Date" value="{{ $item->depature_date}}">
                    </div>
                    {{-- Duration--}}
                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" name="duration" class="form-control" placeholder="duration" value="{{ $item->duration }}">
                    </div>
                    {{-- Type--}}
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" name="type" class="form-control" placeholder="type" value="{{ $item->type }}">
                    </div>
                    {{-- Price--}}
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control" placeholder="price" value="{{ $item->price }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
                    </button>
                </form>
            </div>
        </div>
        <!-- Content Row -->


    </div>
@endsection
