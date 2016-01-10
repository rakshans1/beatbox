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
        <h2 class="title text-center">Sign Up For BeatBox...!!!</h2>
</div>
<div class="container ">    
<form role="form" action="" method="post">
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <input type="text" name="first_name" class="form-control input-form" placeholder="First Name*" required>
    </div>
    <div class="form-group">
        <input type="text" name="last_name" class="form-control input-form" placeholder="Last Name" >
    </div>
    
    <div class="form-group">
        <input type="text" name="address" class="form-control input-form" placeholder="Address*" required>
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control input-form" placeholder="Email*" required>
    </div>
    </div><!--div col-->
    <div class="col-md-6">
    <div class="form-group input-group">
        <div class="input-group-addon">+91</div>
        <input type="number" maxlength="10" name="mobile_number" class="form-control input-form" placeholder="Mobile Number*" required>
    </div>
    <div class="form-group">
        <input type="text" name="username" class="form-control input-form" placeholder="Username*" required>
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control input-form" placeholder="Password*" required>
    </div>
    <div class="form-group">
        <input type="password" name="password_again" class="form-control input-form" placeholder="Confirm Password*" required >
    </div>
    </div><!--div col-->

    <button type="submit" class="btn btn-beat btn-block">Sign Up!</button>
    </div><!--div row-->
</form>
 <br>
 

</div><br>

<?php require 'html/includes/footer.php'; ?>


