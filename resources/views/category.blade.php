@extends("layouts.main")
@section("container")
    <h1 class="mb-3 text-center">All Courses</h1>
    <div class="container">
        <div class="row row-cols-2">

          @foreach($courses as $course)
          <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{ $course->image }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title fs-4">{{ $course->name }}</h5>
                    <p class="card-text">{{ $course->excerpt }}</p>
                    {{-- <p class="card-text"><small class="text-muted">Author: {{ $course->author }}</small></p> --}}
                    <a href="category/{{ $course->slug }}" class="btn btn-primary px-5 stretched-link">Learn</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
      </div>
@endsection