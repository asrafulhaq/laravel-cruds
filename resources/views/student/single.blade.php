@extends('student.layouts.app')




@section('page-name', 'Profile Page')
@section('page-sub-title', 'View our student profile')

@section('main-content')

<div class="card">
    <div class="card-body">
       <div class="profile">
            <img class="shadow-sm" src="{{ url('photos/' . $student -> photo) }}" alt="">
            <h2>{{ $student -> name }}</h2>
            <p>{{ $student -> email }}</p>
       </div>
    </div>
</div>

@endsection