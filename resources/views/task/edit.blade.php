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

        <div class="">
          <form action="index.html" method="post">
            <div class="">
              <input class="form-control" type="text" value="{{ $taskEdit->name }}">
            </div>
            <div class="">
              <input type="submit" class="btn btn-success btn-lg pull-right" value="">
            </div>

            <a href="#" class="btn btn-info">Go Back</a>
          </form>
        </div>
        @if(session('add'))
        <br>
        <div class="alert alert-success">
       {{ session('add') }}
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
