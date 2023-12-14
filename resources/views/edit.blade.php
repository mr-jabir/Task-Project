@extends('layout.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS Files -->
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.2/components/logins/login-2/assets/css/login-2.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
</head>
<body>
<!-- Login 2 - Bootstrap Brain Component -->
<div class="bg-light py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
        
      <div class="col-8 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h4>Update existing task</h4>
              </div>
            </div>
          </div>
          <form action="{{route('updatetask')}}" method="POST">
            @csrf
           <input type="hidden" name="id" value={{encrypt($task->id)}}>
          
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="email" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$task->title}}" placeholder="Enter Title"  required>
              </div>
              <div class="col-12">
                <label for="desc" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="{{$task->description}}" placeholder="Enter Description" required>
              </div>
              <div class="col-12">
                <label for="date" class="form-label">Due date </label>
                <input type="date" class="form-control" name="due_date" id="due_date" placeholder="Enter date" value="{{$task->due_date}}" required>
              </div>
              <div class="col-12">
              <select class="form-select" aria-label="Default select example" name="category_id">
               
                    <option selected>Open this select menu</option>
                    @foreach($category as $cat)
                    <option @selected($cat->id==$task->category_id) value="{{$cat->id}}">{{$cat->name}}</option>
                  @endforeach  
                </select> </div>
              <br>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn bsb-btn-xl btn-primary" type="submit">update</button>
                </div>
              </div>
          
            </div>
          </form>
      
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
@endsection