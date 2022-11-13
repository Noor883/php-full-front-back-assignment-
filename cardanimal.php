<?php
include "./header.php";
include ' animal_redirect('./');';

$canimal_id = !empty($_GET['id']) ? $_GET['id'] : null;

if (!empty($canimals_id)) :


    $canimals = json_decode(file_get_contents('./api_data/courseanimals api.json'));
var_dump($canimal_id)
    // second solution (Pro)
    
    $canimal = array_filter($canimal , function ($item) use ($canimal_id) {
        return $item->id == $canimal_id;
    });
    $canimal = $canimal[array_key_first($canimal)];
?>

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col">
                <img src="./assets/images/c1.jpeg" class="card-img-top"  alt="card animals PHP">
            </div>
            <div class="col">
                <h2>
                    <?= $cdanimal->title ?>
                </h2>
                <p>
                    <?=$cdanimal->description ?>
                </p>
                <p>
                    <?= $cdanimal->featured ? "This cardA is featured" : "This cardA is not featured." ?>
                </p>
            </div>
        </div>
    </div>

<?php
else :
?>

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col">
                <p class="text-center">No CARD was animal found</p>
            </div>
        </div>
    </div>

<?php
endif;
include "./footer.php" ?>