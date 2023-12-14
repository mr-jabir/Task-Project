@extends('layout.master')

@section('content')
  <table class="table table-bordered">
  <a href="{{route('createtaskpage')}}" class="btn btn-primary">Add</a>

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach ($tasks as $task)
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$task->title}}</td>
      <td>{{$task->description}}</td>
      <td>{{  $task->category->name }}</td>
      <td>{{$task->due_date}}</td>
      <td>
       <a href="{{route('edittaskpage',encrypt($task->id))}}" class="btn btn-success">Edit</a>
       <a href="{{route('deletetask',encrypt($task->id))}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach

  </tbody>

</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection