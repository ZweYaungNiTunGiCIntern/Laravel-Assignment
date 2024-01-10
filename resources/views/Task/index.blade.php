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
                        @foreach($tasks as $task)
                            <tr>
                                <th scope="row"> {{ $task->id }}</th>
                                <td>{{ $task->task }}</td>
                                <td>{{ $task->description}}</td>
                                <td>{{ $task->duration }}</td>
                                <td>
                                    <a href="{{route('task.edit',$task->id) }}" class="btn btn-outline-warning">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <form action="{{route('task.destroy',$task->id) }}" method="post" class="d-inline-block">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-outline-danger">

                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                    
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
     </div>
 </div>
</div>
</div>
@endsection
