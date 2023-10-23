<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <title>Профиль</title>
</head>
<body>
    <header>
        <nav class="navbar sticky-top bg-gradient bg-danger">
            <div class="container">
                <a class="navbar-brand navbar-text" href="/index.php">
                    <h3 class="text-dark">AniBox</h3>
                </a>
                <div class="dropdown">
                    <div class="dropdown-toggle" role="button" data-bs-toggle="dropdown">
                        <img class="rounded-circle" src="/t.jpg" width="48" height="48" alt="avatar">
                    </div>
                    <ul class="dropdown-menu">
                        <li>
                            <a class=" dropdown-item" href="/templates/userProfile.php">Личные данные</a>
                        </li>
                        <li>
                            <a class=" dropdown-item" href="/templates/orderHistory.php">История заказов</a>
                        </li>
                        <li>
                            <a class=" dropdown-item" href="/templates/card.php">Корзина</a>
                        </li>
                    </ul>
                </div>
            </div>     
        </nav>
    </header>

    <main>
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">Личный кабинет</div>
                <div class="card-body">
                    <h5 class="card-title">Ваши данные:</h5>
                    <div class="mb-3">
                        <img src="/t.jpg" width="100" height="100" alt="avatar">

                    </div>
                    <div class="mb-3">
                        <label for="full_name" class="form-label">ФИО</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Почта</label>
                        <input type="email" class="form-control" id="email" name="email" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="birth_date" class="form-label">Дата рождения</label>
                        <input type="date" class="form-control" id="birth_date" name="birth_date" readonly>
                    </div>                
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>