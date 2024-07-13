@extends('frontend.master')
@section('frontend.main')

@if ($images->count() > 0)
<!-- Gallery -->
<div class="row">
    @foreach ($images as $key => $image)
    <div class="col-md-4 col-sm-6 mb-4 mb-lg-0">

        <!-- Display the image here -->
        <img src="{{ asset('/uploads/galary/' . $image->url) }}" alt="{{ $image->description }}" class="w-100 shadow-1-strong rounded mb-4" />


    </div>
    @endforeach
    @else
    <p>No images found</p>
    @endif
</div>
<!-- Gallery -->
@endsection