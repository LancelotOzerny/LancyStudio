<?php
$userList = $data['userList'] ?? [];
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
                    <?php foreach ([0, 1, 2, 3, 4, 5] as $project): ?>
                    <tr>
                        <td><input type="checkbox" class="form-check-input"></td>
                        <th>0</th>
                        <td>Limited Figure</td>
                        <td>19.10.2002</td>
                        <td>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque earum et eum facere
                            incidunt iusto laborum maxime quo vel! Aperiam dolore earum error eveniet iure, magnam
                            molestias quod ratione.
                        </td>
                        <td>WEB, PHP</td>
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