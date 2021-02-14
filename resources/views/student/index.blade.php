@extends('student.layout')

@section('content')
<div class="pull-left">
    <h2>Student crude operations</h2>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('student.create')}}"> create new student</a>
        <div>
    <div>
<div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Course</th>
        <th>Fee</th>
        <th width="280px"> Action</th>
    </tr>
    @foreach ($student as $student)
    <tr>
        <td>{{ ++$i}}</td>
        <td>{{ $student->studname }} </td>
        <td> {{$student->course}} </td>
        <td> {{ $student->fee }} </td>
        <td>
            <form action=" {{ route('student.destroy',$student->id)}}" method="post">
                <a class="btn btn-info" href="{{route ('student.show', $student->id) }}"> show</a>
                <a class="btn btn-primary" href="{{ route('student.edit',$student->id) }}"> Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger"> delete</button>
            </from>
        </td>
    </tr>
    @endforeach

</table>