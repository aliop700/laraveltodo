<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      <ul class="nav navbar-nav">
        <li class="{{Request::is('/')?'active':''}}"><a href="/">Home </a></li>
        <li class="{{Request::is('todos/create')?'active':''}}"><a href="/todos/create">Create ToDo</a></li>
       
      </ul>
      
      
  </div><!-- /.container-fluid -->
</nav>