<header>
  <nav class="navbar navbar-inverse navbar-default" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">TO DO List</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav pull-right">
          <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="{{ action('TasksController@create') }}">Create</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </header>
