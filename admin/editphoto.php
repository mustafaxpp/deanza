<?php
session_start();
require_once("header.php");
if(!empty($_GET["id"])){
    $id = $_GET["id"];
    require_once("connection.php");
    $query = "select * from photos where id = $id";
    $rslt = mysqli_query($connect , $query);
    if ( $data = mysqli_fetch_array($rslt) ) {
        $photo = $data["photo"];
        $_SESSION["data"] = $data;
    }
}
?>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand text-danger" href="index.php">Deanza PH</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link text-warning" href="myphotos.php">My Photos <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 text-center">
            <img class=" mt-5" src="<?=$photo?>" alt="" width="300">
        </div>
        <div class="col-2"></div>
    </div>
</div>


<div class="container text-center d-flex justify-content-center mt-5 pt-5">
    <div class="row text-center">
        <div class="text-center ">
            <form action="updatephoto.php" method="post" enctype="multipart/form-data">
                <?php
                if (!empty($_GET["msg"]) && $_GET["msg"] == "add_ok") {

                ?>

                    <div class="container">
                        <small class=" mt-2 mb-2 alert alert-success"> the photo you choose added successfully </small>
                    </div>
                <?php
                }


                ?>
                <input type="hidden" name="id" value="<?=$id?>">
                <label class="form-label" for="customFile">Upload photo You Want Add To WebSite</label>
                <input type="file" name="new_logo" class="form-control"/>

                <button type="submit" class="btn btn-outline-danger mt-3" name="uploadbutton">Upload file</button>
            </form>
        </div>
    </div>

</div>
<div class="col-8"></div>
</div>
</div>





<?php
require_once("footer.php");
?>