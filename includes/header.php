<nav class="navbar navbar-dark">
               <div class="container">
                  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#976;</button>
                  <a class="navbar-brand" href="index.php"style="color: white"> Foody's </a>
                  <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                     <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php"style="color: white">Popular <span class="sr-only">(current)</span></a> </li>
                     
                        <li class="nav-item"> <a class="nav-link" href="food_results.php?pageno=1"style="color: white">Food Menu</a> </li>


  <?php if (strlen($_SESSION['fosuid']==0)) {?>                      
<li class="nav-item"> <a class="nav-link" href="registration.php"style="color: white">Sign up</a> </li>
<li class="nav-item"> <a class="nav-link" href="login.php"style="color: white">Sign in</a>
<li class="nav-item"> <a class="nav-link" href="track-order-on.php"style="color: white">Track Order</a> </li> 
<?php } ?>

 <?php if (strlen($_SESSION['fosuid']>0)) {?>
							<li class="nav-item"><a class="nav-link" href="cart.php" style="color: white"> Cart </a> </li>
                            <li class="nav-item"><a class="nav-link" href="my-order.php" style="color: white"> My Orders </a> </li>
                        
                        <?php } ?>



                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="color: white" role="button" aria-haspopup="true" aria-expanded="false">My Account</a>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="changepassword.php">Setting</a> <a class="dropdown-item" href="profile.php">Profile</a>  
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="logout.php">Logout</a>
                           </div>
                                                
                        </li>

                       
                     </ul>
                  </div>
               </div>
            </nav>