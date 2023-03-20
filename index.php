<?php 
include('constants.php');
include('layouts/head.php');
include('layouts/header.php'); 
?>
<div class="container">
    <div class="row d-flex justify-content-center my-5">
        <form class="col-12 col-sm-12 col-md-8 col-lg-6" action="search.php" method="GET">
            <div class="d-flex">
                <input class="form-control me-2" name="q" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>
<?php include('layouts/script.php'); ?>