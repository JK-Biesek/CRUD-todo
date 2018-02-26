<html>
  <head>
    <meta charset="utf-8">
    <title>TODO App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
          <form action="{{route ('task.update',[$taskEdit->id]) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
              <input class="form-control" name="updTask" type="text" value="{{ $taskEdit->name }}">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success btn-lg pull-right" value="Update">
            </div>

            <a href="{{ route('task.index')}}" class="btn btn-info">Go Back</a>
          </form>
        </div>

        @if(session('delete'))
        <br>
        <div class="alert alert-success">
       {{ session('delete') }}
        </div>
        @endif
      </div>
    </div>
  </body>
</html>
