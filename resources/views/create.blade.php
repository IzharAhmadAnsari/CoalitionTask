@extends('layout')

@section('main-content')
    <div>
        <div class="float-start">
            <h4 class="pb-3">Create Task</h4>
        </div>
        <div class="float-end">
            <a href="{{ route('index') }}" class="btn btn-info">
                <i class="fa fa-arrow-left"></i> All Task
            </a>
        </div>
        <div class="clearfix"></div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  

    <div class="card card-body bg-light p-4">
        <form action="{{ route('task.store') }}" method="POST">
            @csrf
             <div class="mb-3">
                <label for="project" class="form-label">Project</label>
                <select id="project" name="project" class="form-control" onchange="getTasks()">
                    <option value="">--- Select Project ---</option>
                    <option value="1">Project 1</option>
                    <option value="2">Project 2</option>
                    <option value="3">Project 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Tasks</label>
                <select id="task" name="task" class="form-control">
                    <option value="">--- Select Task ---</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" rows="5"></textarea>
            </div>
             <div class="mb-3">
                <label for="priority" class="form-label">Priority</label>
                <input type="text" class="form-control" id="priority" name="priority">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    @foreach ($statuses as $status)
                        <option value="{{ $status['value'] }}">{{ $status['label'] }}</option>
                    @endforeach
                </select>
            </div>

            <a href="{{ route('index') }}" class="btn btn-secondary mr-2"><i class="fa fa-arrow-left"></i> Cancel</a>

            <button type="submit" class="btn btn-success">
                <i class="fa fa-check"></i>
                Save
            </button>
        </form>
    </div>

@endsection

