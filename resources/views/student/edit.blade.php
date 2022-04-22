@extends('student.layouts.app')



@section('page-name', 'Update Student Data')
@section('page-sub-title', 'Ramadan Mubarak')

@section('main-content')
    
    <div class="card w-50 mx-auto shadow">
        <div class="card-body">
            <h3>Edit student</h3>
            <hr>
            <form action="">
                <div class="my-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="my-3">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="my-3">
                    <label for="">Cell</label>
                    <input type="text" class="form-control">
                </div>
                <div class="my-3">
                    <label for="">Username</label>
                    <input type="text" class="form-control">
                </div>
                <div class="my-3">
                    <button type="submit" class="btn btn-primary w-100">Create student</button>
                </div>
            </form>
        </div>
    </div>

@endsection

