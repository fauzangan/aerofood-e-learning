@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Category</h1>
</div>

<div class="row mb-5">
  <div class="col-lg-8">
      <form action="/dashboard/categories/{{ $category->id }}" method="POST">
          @method('PUT')
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus value="{{ old('name', $category->name) }}">
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $category->slug) }}">
            @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="excerpt" class="form-label">Body</label>
            @error('excerpt')
              <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="excerpt" type="hidden" name="excerpt" value="{{ old('excerpt', $category->excerpt) }}">
            <trix-editor input="excerpt"></trix-editor>
          </div>

          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function(){
        fetch('/dashboard/categories/fillSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>
@endsection