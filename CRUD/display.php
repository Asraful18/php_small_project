<?php
    include "connection.php";
?>
<?php
 if(isset($_POST['submit'])){
    $input=$_POST['einput'];
    if($_POST['selected']=="Name"){
      $s="SELECT * FROM stdunt1 WHERE name='$input'";
      $row=mysqli_query($con,$s);
    }
    if($_POST['selected']=="Mobile No."){
      $s="SELECT * FROM stdunt1 WHERE mobile='$input'";
      $row=mysqli_query($con,$s);
    }
    if($_POST['selected']=="All"){
      $s="SELECT * FROM stdunt1 ";
      $row=mysqli_query($con,$s);
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
          <a class="nav-link"  href="insert.php">Insert</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="delete.php">Delete</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Display</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container px-5 my-5">
    <form class="d-flex justify-content-center text-aligne-center" id="contactForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <select class="form-select w-50 h-25 mx-5 bg-primary text-light" aria-label="Default select example" name="selected">
            <option value="Name" selected>Name</option>
            <option value="All" >ALL</option>
            <option value="Mobile No.">Mobile</option>
        </select>
        <div class="mb-3 w-100 mx-5">
            <input class="form-control" type="text" name="einput" placeholder="Enter here..."/>
        </div>
        <div class="mb-3 w-12.5">
            <input class="btn btn-primary" type="submit" value="Submit" name=submit>
        </div>
    </form>
</div>
<div class="card w-50" style="margin-left: 25%;">
  <div class="card-header bg-primary text-light">
    Your Information
  </div>
  
    <?php if(mysqli_num_rows($row)<1):?>
      <li class="list-group-item">Not Matched With Database!!!</li>
    <?php endif;?>
    <?php for($i=0;$i<mysqli_num_rows($row);$i++):
            $r=mysqli_fetch_assoc($row);
            foreach($r as $t=>$v):?>
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $t.":".$v;?></li>
            <?php endforeach;?>
            </ul><hr>
            <?php endfor;?>
  
</div>