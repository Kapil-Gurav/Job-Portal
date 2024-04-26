<?php require 'navbar.php'; ?>

<?php  
error_reporting(E_ALL ^ E_WARNING);
include_once('config.php');  
   
if(isset($_GET['edit']) )  
{  
$id = $_GET['edit'];  
$res= mysqli_query($conn,"SELECT * FROM job_post WHERE Company_id='$id'");  
$row= mysqli_fetch_array($res);  
}  
   
if( isset($_POST['vacancy']) )  
{  
$vacancy = $_POST['vacancy'];  
$id   = $_POST['Company_id'];  
$sql     = "UPDATE job_post SET vacancy='$vacancy' WHERE Company_id='$id'";  
$res  = mysqli_query($conn,$sql)   
    or die("Could not update".mysqli_error($conn)); 
                                      
header("location: success.php");
}  
   
?>  

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
  <style>
      
      body {
        background-color: rgb(212, 212, 170);
      
      }
      .container {
            margin-top: 20px;
            background-color:rgb(153, 153, 77);
            padding: 20px;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        } 
       

    </style>
    <div class="container" style="margin-top:20px;">
    <form action="update.php" method="post">
                        
                        <div>
                            <label class="form-label">vacancy</label>
                            <input class="form-control" type="text" name="vacancy" value="<?php echo $row["vacancy"]; ?>">
                            <input type="hidden" name="Company_id" value="<?php echo $row["Company_id"]; ?>">  
                            <br>
                            <input class="btn btn-dark" type="submit" value=" Update "/>  
                            
                            <a class="btn btn-dark" href="search.php">Back</a>
                        </div>
                        
                        <br>
                      
                    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
  </body>
</html>
