<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаба 6</title>
</head>
<body>
    <h1>Анкета</h1>
    <form action="anketa.php" method="post">
        <input type="text" name="name" placeholder="Имя"><br>
        <input type="text" name="surname" placeholder="Фамилия"><br>
        <select name="conf">
            <option disabled>Выберите конференциию</option>
            <option value="КНИТУ">КНИТУ</option>
            <option value="КАИ">КАИ</option>
            <option value="КФУ">КФУ</option>
        </select><br>
        <input type="date" name="date"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="submit" value="Отправить">
    </form>

    <h2>Вычисление вклада</h2>
    <form action="money.php" method="post">
        <input type="text" name="sum" placeholder="Начальная сумма"><br>
        <input type="number" name="years" placeholder="Количество лет"><br>
        <select name="proc">
            <option value="3">3%</option>
            <option value="6">6%</option>
            <option value="9">9%</option>
        </select><br>
        <input type="submit" value="Посчитать">
    </form>
    <style>
        input{
            margin: 3px;
        }
        select{
            margin-left: 3px;
        }
    </style>
</body>
</html>