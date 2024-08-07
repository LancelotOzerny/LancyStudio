<?php
$projectList = $data['projectsList'] ?? [];
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="text-center py-2 text-white my-4 display-4 bg-dark">Список пользователей</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover border-bottom">
                <thead>
                <tr>
                    <th><input type="checkbox" class="form-check-input"></th>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Дата</th>
                    <th>Описание</th>
                    <th>Тип</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($projectList as $project): ?>
                    <tr>
                        <td><input type="checkbox" class="form-check-input"></td>
                        <th><?= $project['id'] ?></th>
                        <td><?= $project['name'] ?></td>
                        <td><?= $project['date'] ?></td>
                        <td><?= $project['short_description'] ?></td>
                        <td><?= $project['type'] ?></td>
                        <td class='text-right'>
                            <a href="#" class="btn btn-secondary my-1"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="btn btn-danger my-1"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="list-inline-item d-flex justify-content-end">
                <a href="/user/create" class="btn btn-success btn-sm rounded-1 text-uppercase" title="Create">Создать</a>
            </div>
        </div>
    </div>
</div>