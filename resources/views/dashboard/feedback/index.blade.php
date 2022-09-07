@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Feedback List</h1>
</div>

<div class="table-responsive col-lg-8">
  @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Feedback Type</th>
        <th scope="col">Created At</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($feedbacks as $feedback)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $feedback->name }}</td>
          <td>{{ $feedback->email }}</td>
          <td>{{ $feedback->type }}</td>
          <td>{{ $feedback->created_at->toDateString() }}</td>
          <td>
            <a href="/dashboard/feedbacks/{{ $feedback->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <form action="/dashboard/feedbacks/{{ $feedback->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="trash-2"></span></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection