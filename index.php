<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>AniBox</title>
</head>

<body class="bg-gradient bg-light">
    <header>
        <nav class="navbar sticky-top bg-gradient bg-danger">
            <div class="container">
                <a class="navbar-brand navbar-text" href="#">
                    <h3 class="text-dark">AniBox</h3>
                </a>
                <?php if (true) : ?>

                    <div class="dropdown">
                        <div class="dropdown-toggle" role="button" data-bs-toggle="dropdown">
                            <img class="rounded-circle" src="t.jpg" width="48" height="48" alt="avatar">
                        </div>
                        <ul class="dropdown-menu">
                            <li>
                                <a class=" dropdown-item" href="/templates/userProfile.html">Личные данные</a>
                            </li>
                            <li>
                                <a class=" dropdown-item" href="/templates/orderHistory.php">История заказов</a>
                            </li>
                            <li>
                                <a class=" dropdown-item" href="/templates/card.php">Корзина</a>
                            </li>
                        </ul>
                    </div>
                <?php else : ?>
                    <div class="nav-item">
                        <a class="nav-link" href="#">Вход</a>
                        <a class="nav-link" href="templates/registration.html">Регистрация</a>
                    </div>
                <?php endif ?>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-5">
            <h1>Список товаров</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">                    
                        <img src="item1.png" data-bs-toggle="modal" data-bs-target="#productModal1" class="card-img-top" width="200" height="500" alt="Товар 1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Манга "Доктор Стоун"</h5>
                            <p class="card-text">Манга</p>
                            <p class="card-text">999 руб.</p>
                            <a href="#" class="btn btn-primary">Добавить в корзину</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="item2.png" data-bs-toggle="modal" data-bs-target="#productModal1" class="card-img-top" width="200" height="500" alt="Товар 2">
                        <div class="card-body">
                            <h5 class="card-title">Фигурка "Доктор Стоун"</h5>
                            <p class="card-text">Аниме фигурка</p>
                            <p class="card-text">2500 руб.</p>
                            <a href="#" class="btn btn-primary">Добавить в корзину</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="item3.jpg" data-bs-toggle="modal" data-bs-target="#productModal1" class="card-img-top" width="200" height="500" alt="Товар 3">
                        <div class="card-body">
                            <h5 class="card-title">Кружка "Дoктор Стоун"</h5>
                            <p class="card-text">Аниме кружка.</p>
                            <p class="card-text">450 руб.</p>
                            <a href="#" class="btn btn-primary">Добавить в корзину</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <!-- Модальное окно -->
    <div class="modal fade" id="productModal1" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModal1Label">Товар 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <img src="item1.png" class="img-fluid" alt="Товар 1">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, quisquam sapiente repellat voluptatem, nobis delectus, laboriosam earum repellendus natus dolorum quam corporis fugit non quas excepturi. Neque voluptatum accusamus non.</p>
                    <p>$10.00</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary">Добавить в корзину</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>