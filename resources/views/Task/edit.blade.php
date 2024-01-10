@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">

                    <div class="">
                        <form action="{{ route('task.update',$task->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="mb-3 mt-3">
                                <label  class="form-label">Task</label>
                                <input type="text" name="task" class="form-control" value="{{ $task->task }}">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Description</label>
                                <input type="text" name="description" class="form-control" value="{{ $task->description }}">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">duration</label>
                                <input type="text" name="duration" class="form-control" value="{{ $task->duration }}">
                            </div>

                            <div class="mb-4">
                                <a href="{{ route('task.index') }}" class="btn btn-outline-dark">Back</a>
                                <button class="btn btn-outline-primary">Update</button>
                            </div>
                        </form>
                    </div>
                 </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
