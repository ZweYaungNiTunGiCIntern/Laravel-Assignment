@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body">
                <div class="mb-3">
                    <a href="{{route('task.create')}}" class="btn btn-outline-success">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Task</th>
                        <th scope="col">Description</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                            <tr>
                                <th scope="row"> {{ $task->id }}</th>
                                <td>{{ $task->task }}</td>
                                <td>{{ $task->description}}</td>
                                <td>{{ $task->duration }}</td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

