@extends('student.layout')

@section('content')
<div class="row">
    <div class="co-lg-12 margin-tb">
        <div class="pull-left">
            <h2> edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('student.index) }}"> Back </a>
        <div>
    </div>
<div>

@if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>There were some problem with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
        <div>
    @endif

    <form action="{{ route('student.update', $update->id) }}" method="post" >
        @csrf
        @method('PUT')

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="from-group">
                <strong> Name: </strong>
                <input type="text" name="studname" value="{{ $student->studname }}" class="from-control" placeholder="student name">


                </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="from-group">
                <strong>Course:</strong>

                <input type="text" name="course" value="{{ $student->course }}" class="form-control">
            </div>
        </div>

    <div class="col-xs-12 col-sm-12 col-md-12" >
        <div class="from-group">
        <strong> Fee</strong>
        <input type="text" name="fee" value="{{ $student->fee }}" class="from-group" placeholder="fee">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
</form>
@endsection

