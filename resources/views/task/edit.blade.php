  @extends('layouts.app')
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
              <input type="submit" class="btn btn-success btn-lg pull-right" value="">
            </div>

            <a href="#" class="btn btn-info">Go Back</a>
          </form>
        </div>
        @if(session('updateMsg'))
        <br>
        <div class="alert alert-success">
       {{ session('updateMsg') }}
        </div>
        @endif
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
