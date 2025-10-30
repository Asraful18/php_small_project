<?php
    include "connection.php";
?>
<?php
    if(isset($_POST['submit'])){
        $nm=$_POST['ename'];
        $pss=$_POST['epass'];
        $mob=$_POST['emobile'];
        $s="INSERT INTO `stdunt1` VALUES ('null','$nm','$pss','$mob')";
        $r=mysqli_query($con,$s);
        if($r){
          echo "Execute Successful";
        }
        else{
            echo "Execute failed";
        }
    }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Insert</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="delete.php">Delete</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display.php">Display</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container px-5 my-5">
    <form id="contactForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input class="form-control" name="ename" type="text" placeholder="Name"/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <input class="form-control" name="epass" type="password" placeholder="Password"/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="mobile">Mobile</label>
            <input class="form-control" name="emobile" type="text" placeholder="Mobile"/>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" name="submit" type="submit">Submit</button>
        </div>
    </form>
</div>
