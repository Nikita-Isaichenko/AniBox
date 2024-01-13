<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <title>История заказов</title>
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
                        <img class="rounded-circle" src="../assets/img/t.jpg" width="48" height="48" alt="avatar">
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
            <div class="card-header">История заказов</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Заказ</th>
                            <th>Дата заказа</th>
                            <th>Сумма</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Здесь вставьте PHP-код для извлечения истории заказов из базы данных
                        // Пример:
                        $orders = [
                            ['Заказ 1', '2023-01-15', '$100.00'],
                            ['Заказ 2', '2023-02-20', '$75.50'],
                            // Добавьте дополнительные заказы
                        ];

                        foreach ($orders as $order) {
                            echo "<tr>";
                            echo "<td>{$order[0]}</td>";
                            echo "<td>{$order[1]}</td>";
                            echo "<td>{$order[2]}</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>