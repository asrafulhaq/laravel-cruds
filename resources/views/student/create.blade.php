@extends('student.layouts.app')


@section('page-name', 'Create New Student')
@section('page-sub-title', 'Insert a student for our database')

@section('main-content')
    
    <div class="card w-50 mx-auto shadow">
        <div class="card-body">
            <h3>Create new student</h3>
            <hr>
            <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="my-3">
                    <label for="">Name</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="my-3">
                    <label for="">Email</label>
                    <input name="email" type="text" class="form-control">
                </div>
                <div class="my-3">
                    <label for="">Cell</label>
                    <input name="cell" type="text" class="form-control">
                </div>
                <div class="my-3">
                    <label for="">Photo</label>
                    <input name="photo" type="file" class="">
                </div>
                <div class="my-3">
                    <button type="submit" class="btn btn-primary w-100">Create student</button>
                </div>
            </form>
        </div>
    </div>

@endsection

