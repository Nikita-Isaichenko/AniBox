<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <title>Авторизация</title>
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
                    <div class="card-header">Авторизация</div>
                    <div class="card-body">
                        <form action="../scripts/auth.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="email" class="form-label">Почта</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Пароль</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="row text-align-center">
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary">Войти</button>
                                </div>
                                <div class="col-auto">
                                    <a href="registration.php" class="btn btn-primary">
                                        Зарегистрироваться
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://apvarun.github.io/toastify-js/src/toastify.js"></script>
    <script>
        document.querySelector('form').addEventListener('submit', function (event) {
            event.preventDefault();
            var form = this;
            var formData = new FormData(form);

            fetch('../scripts/auth.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(error => {
                if (error.length === 0) {
                    window.location.href = '../index.php';
                }
                else{
                    Toastify({
                        text: error,
                        duration: 3000,
                        gravity: "bottom",
                        position: "left",
                        stopOnFocus: true,
                        style: {
                            background: "linear-gradient(to right, #00b09b, #96c93d)",
                        },
                    }).showToast();
                }
            })
            .catch(error => {
                console.error('Ошибка:', error);
            });
        });
    </script>
</body>
</html>