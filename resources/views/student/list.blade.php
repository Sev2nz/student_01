@extends('layouts.app')

@section('title','products')

@section('content')
<h1>Demo list product</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  
  <tbody>
    @if (count($students) <= 0)
    @else
        @foreach($students as $student)
            <tr>
                <th>{{$student->id}}</th>
                <th>{{$student->fullname}}</th>
                <th><button ><a href="/edit-student/{{$student->id}}">edit</a></button></th></button></th>
                <th><button>
                <a href="/student/{{$student->id}}">detail</a></button></th>
            </tr> 
           
        @endforeach  
    @endif
    </tbody>
</table>
@endsection