@extends('student.layouts.app')



@section('page-name', 'Home')
@section('page-sub-title', 'Welcome to our home')

@section('main-content') 



<div class="card shadow">
    <div class="card-body">
        <h2>All Data</h2>

        @if( Session::has('success') )
            <p class="alert alert-success">{{ Session::get('success') }} <button class="close" data-dismiss="alert">&times;</button></p>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Cell</th>
                    <th>Photo</th>
                    <th width="200">Action</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($all_data as $student)
                    <tr>
                        <td>1</td>
                        <td>{{ $student -> name }}</td>
                        <td>{{ $student -> email }}</td>
                        <td>{{ $student -> cell }}</td>
                        <td><img src="{{ url('photos/' . $student -> photo ) }}" alt=""></td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route('student.show',$student -> id ) }}">View</a>
                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                            <a class="btn btn-sm btn-danger" href="{{ route('student.destroy', $student -> id) }}">Delete</a>
                        </td>
                    </tr>
                    
                @empty
                <tr>
                    <td colspan="6" class="text-center">No data founds</td>
                </tr>
                @endforelse
                

                

            </tbody>
        </table>
    </div>
</div>

@endsection