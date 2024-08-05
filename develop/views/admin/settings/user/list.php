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
                        <th><input type="checkbox"></th>
                        <th>ID</th>
                        <th>Логин</th>
                        <th>Email</th>
                        <th>Права</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($userList as $user): ?>
                        <tr>
                            <td><input type="checkbox"></td>
                            <th><?= $user['id'] ?></th>
                            <td><?= $user['login'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['name'] ?></td>
                            <td class='text-right'>
                                <a href="#" class="btn btn-danger">Удалить</a>
                                <a href="#" class="btn btn-secondary">Изменить</a>
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