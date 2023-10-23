<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <title>Регистрация</title>
</head>

<body  class="bg-gradient bg-light">
    <header>
        <nav class="navbar sticky-top bg-gradient bg-danger">
            <div class="container">
                <a class="navbar-brand navbar-text" href="/index.php">
                    <h3 class="text-dark">AniBox</h3>
                </a>
            </div>
        </nav>
    </header>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Регистрация</div>
                    <div class="card-body">
                        <form action="../scripts/registration.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="full_name" class="form-label">ФИО</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Почта</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Пароль</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Повторите пароль</label>
                                <input type="password" class="form-control" id="confirm_password"
                                    name="confirm_password" required>
                            </div>
                            <div class="mb-3">
                                <label for="birth_date" class="form-label">Дата рождения</label>
                                <input type="date" class="form-control" id="birth_date" name="birth_date" required>
                            </div>
                            <div class="mb-3">
                                <label for="avatar" class="form-label">Загрузите аватар</label>
                                <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>