@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-fluid my-2">
  <div class="bg-teal text-light rounded-3 p-2">
    <h4 class="text-center fw-bold">Let's Productive Today</h4>
  </div>
</div>

<div class="container-fluid my-4">
  <div class="card p-3">
    <div class="row mb-3">
      <div class="col-md-10 mb-2">
        <form method="GET" action="{{ route('home') }}" class="d-flex">
          <input type="date" name="filter_date" class="form-control me-2" value="{{ request('filter_date') }}">
          <button type="submit" class="btn btn-success">Filter</button>
        </form>        
      </div>
      <div class="col-md-2">
        <a href="{{route('add')}}">
          <button class="btn bg-green bi bi-plus-circle-fill w-100"> Tambah Task</button></a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 mb-2">
        <div class="d-flex align-items-center justify-content-center px-3 py-2 text-white bg-sage rounded">
          <strong class="me-2 bi bi-check-circle-fill"> Cleared Task</strong> <span id="countHigh">10</span>
        </div>
        {{-- <button class="btn btn-outline-success bi bi-check-circle-fill me-1 rounded"> Cleared Task</button> --}}
      </div>
        <!-- High Box -->
      <div class="col-3">
        <div class="d-flex align-items-center justify-content-center px-3 py-2 text-dark bg-high rounded">
          <strong class="me-2">High</strong> <span id="countHigh">10</span>
        </div>
      </div>

      <!-- Medium Box -->
      <div class="col-3">
        <div class="d-flex align-items-center justify-content-center px-3 py-2 text-dark bg-med rounded">
          <strong class="me-2">Medium</strong> <span id="countMedium">8</span>
        </div>
      </div>

      <!-- Low Box -->
      <div class="col-3">
        <div class="d-flex align-items-center justify-content-center px-3 py-2 text-dark bg-low rounded">
          <strong class="me-2">Low</strong> <span id="countLow">15</span>
        </div>
      </div>

    </div>
    <div class="table-responsive">
      <table class="table table-hover table-sm text-center mb-0">
        <thead class="bg-med">
          <tr>
            <th>No</th>
            <th>Task</th>
            <th>Priority</th>
            <th>Deadline</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mandi</td>
            <td>High</td>
            <td>2023-10-01</td>
            <td>
              <form action="" method="POST" class="d-inline">
                @csrf
                @method('PUT')
                <button class="btn btn-sm bg-green bi bi-check"></button>
              </form>
              <a href="{{route('edit')}}">
                <button class="btn btn-sm btn-warning bi bi-pencil"></button>
              </a>
              <a href="{{route('view')}}">
                <button class="btn btn-sm bg-teal bi bi-eye"></button>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
