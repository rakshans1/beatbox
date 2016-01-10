<?php require 'html/includes/head.php'; ?>


<header id="header"><!--header -->
<div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="brand">
                        <br>
                           <a href="/"><i class="fa fa-lg fa-headphones"></i> BeatBox</a>
                           <br><br>
                        </div>
                       </div> 
                </div>
            </div>
        </div><!--/header-middle-->
</header><!--/header-->
 <div class="brand">
        <h2 class="title text-center">Login...!!!</h2>
</div>
<div class="container ">    
<form role="form" action="login.php" method="post" >
    <div class="form-group ">
        <input type="text" class="form-control input-form" name="username" placeholder="Username" required >
    </div>
    <div class="form-group">
        <input type="password" class="form-control input-form" name="password" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-beat btn-block">LOGIN</button>
 </form>
 <br>
Forgot <a href="#">Username</a> or <a href="#">password</a>?
 

</div><br>
</div>

<?php require 'html/includes/footer.php'; ?>


