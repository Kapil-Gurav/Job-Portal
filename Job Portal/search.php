<?php require 'navbar.php'; 
session_start();
?>
  

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search</title>
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
    <form action="search.php" method="post">
                        
                        <div class="mb-3">
                            <label class="form-label">Company_id</label>
                            <input class="form-control" type="text" name="Company_id">
                        </div>
                        
                        <br>
                        <input class="btn btn-dark" type="submit" name="submit" value="Submit">
                    </form>
                   
 
                    <?php
    include 'config.php';
    if(isset($_POST['submit'])){
        $Company_id = $_POST['Company_id'];
     
       
        
                   $result = mysqli_query($conn,"SELECT * FROM  job_post WHERE Company_id = '$Company_id';");
                    ?>
 
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                      <table class='table table-bordered table-striped'>
                       
                      <tr>
                        <td>Company_id</td>
                        <td>Job_profile</td>
                        <td>Start_date</td>
                        <td>End_date</td>
                        <td>vacancy</td>
                        <td>job_location</td>
                        <td>action</td>
                        <td>Delete</td>
                      </tr>
                    <?php
                    //$i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["Company_id"]; ?></td>
                        <td><?php echo $row["Job_profile"]; ?></td>
                        <td><?php echo $row["Start_date"]; ?></td>
                        <td><?php echo $row["End_date"]; ?></td>
                        <td><?php echo $row["vacancy"]; ?></td>
                        <td><?php echo $row["job_location"]; ?></td>
                        <td><a href="update.php?edit=<?php echo $row['Company_id'];?>">Edit</a></td>
                        <td><a href="delete.php?del=<?php echo $row['Company_id'];?>">Delete</a></td>
                      </tr>
                    <?php
                    //$i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "No result found";
                    }
                  }
                    ?>       
                      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
