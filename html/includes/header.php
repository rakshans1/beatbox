<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><i class="fa fa-lg fa-headphones"></i> BeatBox</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GENRES <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <?php include 'html/includes/generedrop.php'; ?>
          </ul>
        </li>
        <li class="active"><a href="#">TRACKS <span class="sr-only">(current)</span></a></li>
        <li><a href="#">VIDEOS</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="input-group">
                  <input type="text" class="form-control input-beat" placeholder="SEARCH..."  name="">
              <div class="input-group-btn">
                  <button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
              </div>
          </div>
      </form>
      <?php  include "aside.php" ?><!--Aside-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>