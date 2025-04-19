@extends('layouts.app')

@section('title', 'View Task')

@section('content')
<div class="container-fluid my-2">
    <div class="container col-10">
        <div class="card">
            <a href="{{ route('home') }}" class="btn btn-outline-primary rounded-pill bi bi-arrow-left-circle-fill fw-bold col-1 ms-2 my-2"></a>
            <form action="" method="POST">
                @csrf
                
                <div class="col-11 align-items-center mx-auto my-3 fw-bold">
                    <h2 class="fw-bold">Name task</h2>
                </div>
                <div class="form-floating col-11 align-items-center mx-auto my-3 fw-bold">
                    <textarea name="description" class="form-control" placeholder="Description" id="floatingDesc" style="height: 100px;" disabled></textarea>
                    <label for="floatingDesc">Description</label>
                </div>
                <div class="form-floating col-11 align-items-center mx-auto my-3 fw-bold">
                    <input type="text" name="priority" class="form-control" id="floatingPriority" placeholder="priority" disabled>
                    <label for="floatingPriority">Priority</label>
                </div>
                <div class="form-floating col-11 align-items-center mx-auto my-3 fw-bold">
                    <input type="date" name="deadline" class="form-control" id="floatingDate" placeholder="Deadline" disabled>
                    <label for="floatingDate">Deadline</label>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
