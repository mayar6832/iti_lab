<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


</head>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <h4 style="padding-right:20px"> Laravel</h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Users
          </a>
          <ul class="dropdown-menu " data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" aria-labelledby="navbarDropdownMenuLink">
            
            <li><a class="dropdown-item" class="list-group-item" href="{{route('users.index')}}">List</a></li>
            <li><a class="dropdown-item" class="list-group-item" href="{{route('users.create')}}">New user</a></li>
            <li><hr class="dropdown-divider"></li>
        
         
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Posts
          </a>
          <ul class="dropdown-menu " data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" aria-labelledby="navbarDropdownMenuLink">
            
            <li><a class="dropdown-item" class="list-group-item" href="{{route('posts.index')}}">List Post</a></li>
            <li><a class="dropdown-item" class="list-group-item" href="{{route('posts.create')}}">New Post</a></li>
            <li><hr class="dropdown-divider"></li>
        
         
          </ul>
        </li>
  
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>