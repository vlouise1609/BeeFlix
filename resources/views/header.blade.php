<header class="header-container">
    <div class="header-container-1">
        <h2 class="header-txt">BeeFlix</h2>
    </div>
    <div class="header-container-2">
        <ul class="nav nav-pills">
             <li class="nav-item">
              <a class="nav-link" href="{{url('/home')}}">See All Movies</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{url('/categories/1')}}">Drama</a>
                <a class="dropdown-item" href="{{url('/categories/2')}}">Kids</a>
                <a class="dropdown-item" href="{{url('/categories/3')}}">TV Show</a>
                {{-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a> --}}
              </div>
            </li>
          </ul>
    </div>
</header>

<body>
    <a type="button" class="btn btn-outline-primary" href="{{url()->previous()}}">Back</a>
</body>
