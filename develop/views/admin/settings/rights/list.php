<?php
$rightsList = $data['rights'] ?? [];
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="text-center py-2 text-white my-4 display-4 bg-dark">Права доступа</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover border-bottom">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>ID</th>
                        <th>Название</th>
                        <th style="white-space: nowrap">Уровень доступа</th>
                        <th>Описание</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rightsList as $right): ?>
                        <tr>
                            <td><input type="checkbox"></td>
                            <th><?= $right['id'] ?></th>
                            <td><?= $right['name'] ?></td>
                            <td><?= $right['level'] ?></td>
                            <td><?= $right['description'] ?></td>
                            <td class='d-flex justify-content-end'>
                                <a href="#" class="btn btn-danger">Удалить</a>
                                <a href="#" class="btn btn-secondary ml-1">Изменить</a>
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