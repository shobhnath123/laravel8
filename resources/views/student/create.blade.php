@extends('student.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <h2> add new stuent</h2>
        </div>
        <div class="pull-right">
        <a class="btn btn-primary" href="{{route('student.index')}}"> Back</a>
        </div>
    </div>
</div>
@if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>There were some problem with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
        </div>
    @endif
   
<form action="{{route('student.store') }}" method="POST" >
    @csrf 
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="form-group">
            <strong> Student name:</strong>
            <input type="text" name="studname" class="form-control" placeholder="studentname">
            </div>
        </div>

    <div class="col-xs-12 col-sm-12 col-md-12" >
        <div class="from-group">
        <strong> Course</strong>
        <input type="text" name="course" class="form-control" placeholder="course">
        </div>
    <div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="fom-group">
            <stong> fee</strong>
            <input type="text" name="fee" class="form-control" placeholder="fee" >
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
</div>
</form>
@endsection