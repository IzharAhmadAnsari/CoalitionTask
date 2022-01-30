<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        {{-- Fonts --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

        {{-- Bootstrap CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <style>
        .draggable {
            cursor: move;
            user-select: none;
        }
        .createdTime{
            background-color: #dee2e6!important;
            border-radius: 50rem!important;
            color: #212529!important;
        }
      </style>
    </head>
    <body class="antialiased">

        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand" href="{{ route('index') }}">Coalition Task App</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('task.create') }}">New Task</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>


        {{-- Body --}}
        <div class="container p-5">
            @yield('main-content')
        </div>


        {{-- Bootstrap JS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
          integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
          crossorigin="anonymous"></script>
    </body>
</html>
<!--Add task associated with particular project.-->
<script type="text/javascript">
    function getTasks(){
        var projectId = $("#project").val();

        if(projectId==1){
            $('#task').empty();
            $('#task').append('<option value="Task1">Task1</option>'+
                                '<option value="Task2">Task2</option>'+
                                '<option value="Task2">Task3</option>');
        }
        else if(projectId==2){
            $('#task').empty();
            $('#task').append('<option value="Task4">Task4</option>'+
                                '<option value="Task5">Task5</option>');
        }
        else if(projectId==3){
            $('#task').empty();
            $('#task').append('<option value="Task6">Task6</option>');
        }
    }
</script>