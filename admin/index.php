<?php
require_once("header.php");
?>


<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand text-danger" href="index.php">Deanza PH</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
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




<div class="container text-center d-flex justify-content-center mt-5 pt-5">
    <div class="row text-center">
        <div class="text-center ">
            <form action="addphoto.php" method="post" enctype="multipart/form-data">
                <?php
                if (!empty($_GET["msg"]) && $_GET["msg"] == "add_ok") {

                ?>

                    <div class="container mb-4">
                        <small class=" alert alert-success"> the photo you choose added successfully </small>
                    </div>
                <?php
                }


                ?>
                <label class="form-label" for="customFile">Upload photo You Want Add To WebSite</label>
                <input type="file" name="logo" class="form-control"/>

                <button type="submit" class="btn btn-outline-danger mt-3" name="uploadbutton">Upload file</button>
            </form>
        </div>
    </div>

</div>
<div class="col-8"></div>
</div>
</div>






<?php
require_once("header.php");
?>