<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Регистрация</title>
</head>
<body>
<div class="modal modal-alert position-static d-block py-4" tabindex="-1" role="dialog" id="modalChoice">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-body p-4 text-center">
                <h5 class="mb-0">Вы хотите зарегистрироваться как...?</h5>
            </div>
            <div class="modal-footer flex-nowrap p-0">
                @guest
                <a href="{{ route('registerAsEmployer') }}" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-right">Работодатель</a>
                <a href="{{ route('registerAsEmployee') }}" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-right">Соискатель</a>
               @endguest
            </div>
        </div>
    </div>
</div>
</body>
</html>
