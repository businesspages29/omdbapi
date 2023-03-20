<?php
include('constants.php');

if(empty($_GET['q'])){
    echo "something went wrong";
    exit;
}
$data = getMovie($_GET['q']);  
include('layouts/head.php');
include('layouts/header.php'); 
?>
<div class="container">
    <div class="row d-flex justify-content-center my-5">
        <div class="table-responsive">
            <table class="table align-middle">
                <tbody>
                    <?php foreach($data as $key => $value){ ?>
                    <?php if($key == "Ratings" && count($data->Ratings) > 0) { ?>
                    <tr>
                        <td>Ratings</td>
                        <td>
                            <?php foreach($data->Ratings as $k => $v){ ?>
                            <p>
                                <strong> <?= $v->Source ?></strong>
                                <?= $v->Value ?>
                            </p>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } else { ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('layouts/script.php'); ?>