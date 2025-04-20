@extends('layouts.app')

@section('title', 'Cleared Tasks')

@section('content')
<div class="container-fluid my-2">
  <div class="bg-green text-light rounded-3 p-2">
    <h4 class="text-center fw-bold">Tasks You've Completed</h4>
  </div>
</div>

<div class="container-fluid my-4">
  <div class="card p-3">
    <div class="table-responsive">
      <table class="table table-hover table-sm text-center mb-0">
        <thead class="bg-sage">
          <tr>
            <th>No</th>
            <th>Task</th>
            <th>Completed At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mandi</td>
            <td>2024-04-16</td>
            <td>
              <form action="" method="POST" class="d-inline">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </form>
              <a href="{{route('view')}}"><button class="btn btn-sm bg-teal bi bi-eye"></button></a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
