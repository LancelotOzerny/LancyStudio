<?php
$projectsList = $data['projectsList'] ?? [];
?>

<div class="page-block border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-4">
                <div class="page-title-wrapper">
                    <p class="page-title">Портфолио</p>
                </div>
            </div>
        </div>

        <div class="row pt-md-5">
            <?php foreach ($projectsList as $project): ?>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="project-wrapper overflow-hidden position-relative mb-4">
                    <img class="w-100"
                         src="<?= $project['image_src'] ?: '/templates/main/assets/images/no_image.png' ?>" alt="test">
                    <div class="project-info position-absolute">
                        <p class="text-center"><?= $project['name'] ?></p>
                        <p class="project-info-description"><?= $project['short_description'] ?></p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-auto" href="<?= $project['link'] ?>">Перейти</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>