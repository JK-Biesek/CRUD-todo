<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TODO App</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="container">
      <div class="col-md-offset-2 col-md-8">
        <div class="row">
          <h2>Todo List</h2>
        </div>
        @if(count($errors) > 0 )
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <strong>Errors:</strong>
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <div class="row">
          <form class="" action="{{route('task.store')}}" method="post">
            {{ csrf_field() }}
            <div class="col-md-9">
              <input type="text" name="taskName" value=""class="form-control">
            </div>
            <div class="col-md-3">
              <input type="submit" class="btn btn-primary btn-block" value="add Task">
            </div>
          </form>
        </div>
          <h3>Tasks ToDo</h3>
        @if(count($savedTask) > 0)
      <table class="table">
        <thead>
          <th>Task No.</th>
          <th>Name</th>
          <th>Edit</th>
          <th>Delete</th>
        </thead>
        <tbody>
          @foreach ($savedTask as $task)
          <tr>
            <th>{{ $task->id}}</th>
            <td>{{ $task->name}}</td>
            <td>Edit</td>
            <td>
              <form class="" action="{{route('task.destroy',['task'=>$task->id])}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" class="btn btn-danger" value="Delete">
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
          @endif
      </div>
    </div>
  </body>
</html>
