<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['fosaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $category=$_POST['categoryname'];
     
    $query=mysqli_query($con, "insert into tblcategory(CategoryName) value('$category')");
    if ($query) {
    $msg="Category has been created.";
  }
  else
    {
      $msg="Please try again";
    }

  
}
  ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Food Ordering System</title>

</head>

<body>

    <div id="wrapper">

    <?php include_once('includes/leftbar.php');?>

        <div id="page-wrapper" class="black-bg">
             <?php include_once('includes/header.php');?>
        <div class="row border-bottom">
        
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Food Category</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Category</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Add</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            
            <div class="row">
                    <div class="ibox">
                        
                        <div class="ibox-content">
                           <p style="font-size:16px; color:red;"> <?php if($msg){
    echo $msg;
  }  ?> </p>

                            <form id="form" action="#" class="wizard-big" method="post" name="submit">
                                    <fieldset>
     <h2>Food Category</h2>
     <div class="row">
                <div class="col-lg-8">
                <div class="form-group">                                              
                <input id="categoryname" name="categoryname" type="text" class="form-control required" required="true">
                </div>
                <div class="form-group">
                <p style="text-align: center;"><button type="submit" name="submit" class="btn btn-primary">Add</button></p>
                                            </div>
        </div>
        <div class="col-lg-6">
        <div class="text-center">
        <div style="margin-top: 20px">
        <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
        </div>
        </div>
        </div>
        </div>
        </fieldset>
        </form>
        </div>
        </div>
        </div>
 </div>
        </div>
       <?php include_once('includes/footer.php');?>
        </div>
        </div>
</body>
<!--Shahbaz can you take a look at this 103, add food, code looks ugly -->
</html>
<?php }  ?>