@extends('layout')

@section('main-content')
    <div>
        <div class="float-start">
            <h4 class="pb-3">Edit Task <span class="badge bg-info">{{ $task->title }}</span></h4>
        </div>
        <div class="float-end">
            <a href="{{ route('index') }}" class="btn btn-info">
                <i class="fa fa-arrow-left"></i> All Task
            </a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="card card-body bg-light p-4">
        <form action="{{ route('task.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="project" class="form-label">Project</label>
                <select id="project" name="project" class="form-control" onchange="getTasks()">
                    <option value="">--- Select Project ---</option>
                    <option value="1" {{ ($task->project==1) ? 'selected' :''}}>Project 1</option>
                    <option value="2" {{ ($task->project==2) ? 'selected' :''}}>Project 2</option>
                    <option value="3" {{ ($task->project==3) ? 'selected' :''}}>Project 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Tasks</label>
                <select id="task" name="task" class="form-control taskName">
                    <option value="{{ $task->task }}">{{$task->task}}</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" rows="5">{{ $task->description }}</textarea>
            </div>
             <div class="mb-3">
                <label for="priority" class="form-label">Priority</label>
                <input type="text" class="form-control" id="priority" name="priority" value="{{ $task->priority }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    @foreach ($statuses as $status)
                        <option value="{{ $status['value'] }}" {{  $task->status === $status['value'] ? 'selected' : '' }}>{{ $status['label'] }}</option>
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
