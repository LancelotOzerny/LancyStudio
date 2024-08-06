<div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center" style="height: 100vh">
            <div class="wrapper">
                <p class="pb-4 display-4 text-center">Авторизация</p>
                <div id="MessagesContainer"></div>
                <form>
                    <div class="mb-3">
                        <label for="InputLogin" class="form-label">Логин</label>
                        <input type="text" class="form-control" id="InputLogin">
                    </div>

                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="InputPassword">
                    </div>

                    <div class="d-flex justify-content-center pt-4">
                        <button type="button" id="AuthButton" class="btn btn-success text-uppercase">войти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#AuthButton').click(() => {
        $.ajax({
            'url' : '/admin/auth',
            'method' : 'post',
            'data': {
                'user-login': $("#InputLogin").val(),
                'user-password': $("#InputPassword").val(),
            },
            success: (data) => {
                let dataList = JSON.parse(data);

                if (dataList.length === 0)
                {
                    location.reload();
                    return;
                }

                let messagesHtml = '';
                for (let i = 0, count = dataList.length; i < count; ++i)
                {
                    messagesHtml += '<div class="alert alert-danger">' + dataList[i] + '</div>';
                }
                $("#MessagesContainer").html(messagesHtml);
            },
        });
    });
</script>