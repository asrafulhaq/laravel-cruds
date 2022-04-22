@extends('student.layouts.app')


@section('page-name', 'Create New Student')
@section('page-sub-title', 'Insert a student for our database')

@section('main-content')
    
    <div class="card w-50 mx-auto shadow">
        <div class="card-body">
            <h3>Create new student</h3>
                
            <hr>
            {{-- @if( $errors -> any() )
                <p class="alert alert-danger">{{ $errors -> first() }} <button class="close" data-dismiss="alert">&times;</button></p>
            @endif --}}

            @if( $errors -> any() )

                @foreach($errors -> all() as $err)
                    <p class="alert alert-danger">{{ $err }} <button class="close" data-dismiss="alert">&times;</button></p>
                @endforeach
                
            @endif

            @if( Session::has('success') )
            <p class="alert alert-success">{{ Session::get('success') }} <button class="close" data-dismiss="alert">&times;</button></p>
            @endif

            <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="my-3">
                    <label for="">Name</label>
                    <input name="name" type="text" value="{{ old('name') }}" class="form-control">
                </div>
                <div class="my-3">
                    <label for="">Email</label>
                    <input name="email" type="text" value="{{ old('email') }}" class="form-control">
                </div>
                <div class="my-3">
                    <label for="">Cell</label>
                    <input name="cell" type="text" value="{{ old('cell') }}" class="form-control">
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

