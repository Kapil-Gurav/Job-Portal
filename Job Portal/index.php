<?php require 'navbar.php'; ?>

<?php
    include 'config.php';
    if(isset($_POST['submit'])){
        $Company_id = $_POST['Company_id'];
        $Job_profile = $_POST['Job_profile'];
        $Start_date = $_POST['Start_date'];
        $End_date = $_POST['End_date'];
        $vacancy = $_POST['vacancy'];
        $job_location = $_POST['job_location'];

        $sql = "INSERT INTO job_post (Company_id,Job_profile,Start_date,End_date,vacancy,job_location) VALUES ('$Company_id','$Job_profile','$Start_date','$End_date','$vacancy','$job_location')";
        if (mysqli_query($conn, $sql)) {
            
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>Successfull</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
         } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
         }
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
    body{
         background-color: rgb(212, 212, 170);
    }
         .container {
            margin-top: 20px;
            background-color:rgb(153, 153, 77);
            padding: 20px;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        } 
        /* .container2:hover { */
            /* background-color: #FFD700; Change to your desired hover color */
        /* } */
       
; /* Change to your desired hover color */
        
        .form-label {
            font-weight: bold;
        }
        .form-control {
            width: 100%;
        }
        .btn-primary {
            background-color: #007bff;
        }
    </style>
    <div class="container" style="margin-top:20px;">
    <form action="index.php" method="post">
                        
                        <div class="container2">
                            <label class="form-label">Company_id</label>
                            <input class="form-control" type="text" name="Company_id">
                        </div>
                        <div>
                            <label class="form-label">Job_profile</label>
                            <input class="form-control" type="text" name="Job_profile">
                        </div>
                        <div>
                            <label class="form-label">Start_date</label>
                            <input class="form-control" type="text" name="Start_date">
                        </div>
                        <div>
                            <label class="form-label">End_date</label>
                            <input class="form-control" type="text" name="End_date">
                        </div>
                        <div>
                            <label class="form-label">vacancy</label>
                            <input class="form-control" type="text" name="vacancy">
                        </div>
                        <div>
                            <label class="form-label">job_location</label>
                            <input class="form-control" type="text" name="job_location">
                        </div>
                        <br>
                        <input class="btn btn-dark" type="submit" name="submit" value="Submit">
                    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
