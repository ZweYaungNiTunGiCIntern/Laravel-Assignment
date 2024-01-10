@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Manage Your Daily Task') }}</div>
            </div>

            <div class="">
                <form action="{{ route('task.store') }}" method="post">
                    @csrf
                    <div class="mb-3 mt-3">


                        <label  class="form-label">Task </label>
                            <input type="text" name="task" class="form-control @error('task')is-invalid @enderror " value="{{ old('task') }}"  >
                                @error('task')
                                    <div class="text-danger">{{ $message }}</div>

                                @enderror

                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Description <small class="text-danger" ></small></label>
                        <input type="text" name="description" class="form-control @error('description')is-invalid @enderror " value="{{ old('description') }}">
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>

                            @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Duration <small class="text-danger"></small></label>
                        <input type="text" name="duration" class="form-control @error('duration')is-invalid @enderror " value="{{ old('duration') }}">
                            @error('duration')
                                <div class="text-danger">{{ $message }}</div>

                            @enderror
                    </div>
                    <div class="mb-4">
                        <a href="{{ route('task.index') }}" class="btn btn-outline-dark">Back</a>
                        <button class="btn btn-lg btn-outline-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
