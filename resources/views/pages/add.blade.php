@extends('layouts.app')

@section('title', 'Add New Tasks')

@section('content')
<div class="container-fluid my-2">
    <div class="container col-10">
        <div class="card">
            <h2 class="text-center fw-bold mt-2">ADD NEW TASK</h2>
            
            <form action="" method="POST">
                @csrf
                
                <div class="form-floating col-11 align-items-center mx-auto my-3 fw-bold">
                    <input type="text" name="task" class="form-control" id="floatingTask" placeholder="Task">
                    <label for="floatingTask">Task</label>
                </div>
                <div class="form-floating col-11 align-items-center mx-auto my-3 fw-bold">
                    <textarea name="description" class="form-control" placeholder="Description" id="floatingDesc" style="height: 100px;"></textarea>
                    <label for="floatingDesc">Description</label>
                </div>                
                <div class="form-floating col-11 align-items-center mx-auto my-3 fw-bold">
                    <select name="priority" class="form-select" id="floatingSelect" aria-label="Select Priority">
                        <option selected disabled>Choose Priority</option>
                        <option value="1">High</option>
                        <option value="2">Medium</option>
                        <option value="3">Low</option>
                    </select>
                    <label for="floatingSelect">Priority</label>
                </div>

                <div class="form-floating col-11 align-items-center mx-auto my-3 fw-bold">
                    <input type="date" name="deadline" class="form-control" id="floatingDate" placeholder="Deadline">
                    <label for="floatingDate">Deadline</label>
                </div>

                <div class="row col-11 align-items-center mx-auto my-3 fw-bold">
                    <div class="d-grid gap-2">
                        <a href="{{ route('home') }}" class="btn btn-outline-danger fw-bold">Cancel</a>
                        <button type="submit" class="btn btn-outline-success fw-bold">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
