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
      </div>
    </div>
  </body>
</html>
