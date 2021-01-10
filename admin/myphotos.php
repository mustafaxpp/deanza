<?php
require_once("header.php");
?>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-5">
    <a class="navbar-brand text-danger" href="index.php">Deanza PH</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link text-warning active" href="myphotos.php">My Photos <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <?php

            if (!empty($_GET["msg"]) && $_GET["msg"] == "deleted") {

            ?>

                <div class="container text-center">
                <small class="alert alert-danger "> the photo deleted succesfully </small>
                </div>

            <?php
            }

            ?>
            <h1 class="text-center text-danger"> All Photos </h1>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>photo</th>
                        <th>name</th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("connection.php");
                    $query = "select * from photos";
                    $rslt = mysqli_query($connect, $query);
                    while ($tabledata = mysqli_fetch_array($rslt)) {



                    ?>

                        <tr>
                            <td><?= $tabledata["id"] ?></td>
                            <td> <img src="<?= $tabledata["photo"] ?>" alt="" width="80"></td>
                            <td><?= $tabledata["name"] ?></td>
                            <td> <a href="editphoto.php?id=<?= $tabledata["id"] ?>" title="Edit <?= $tabledata["id"] ?>" class="text-success"> <i class="fa fa-edit text-success"></i> Edit </a> </td>
                            <td> <a href="" title="Delete <?= $tabledata["id"] ?>" data-toggle="modal" data-target="#del<?= $tabledata["id"] ?>" class="text-danger"> <i class="fa fa-delete text-danger"></i> Delete </a>
                                <!-- Start  Modal  -->
                                <div class="modal fade" id="del<?= $tabledata['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Deleting item</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div href="" class="modal-body btn btn-sm btn-danger">
                                                Are you Sure You Want Delete photo with id = <b><?= $tabledata['id'] ?></b> ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <a href="delete.php?id=<?= $tabledata['id'] ?>" type="submit" class="btn btn-danger"> Delete </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End  Modal  -->
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-2"></div>
    </div>
</div>



<?php
require_once("footer.php");
?>