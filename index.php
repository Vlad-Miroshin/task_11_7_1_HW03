<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">    
    <title>Задание 11.7.1 — Таблицы истинности и сравнения (HW-03)</title>
</head>
<body>
    <header>
        <h1 aria-label="Учебное задание">Задание 11.7.1 — Таблицы истинности и сравнения (HW-03)</h1>
    </header>

    <main>
        <div class="databox">

            <h2 aria-label="Таблица истинности PHP">Задание 1. Таблица истинности PHP</h2>
            <?php 
                $ab = [
                    [0, 0],
                    [0, 1],
                    [1, 0],
                    [1, 1]
                ];
            ?>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>A</th>
                        <th>B</th>
                        <th>!A</th>
                        <th>A | B</th>
                        <th>A & B</th>
                        <th>A xor B</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($ab as $item): 
                        $a = $item[0];
                        $b = $item[1];
                    ?>
                    <tr>
                        <td class="first-column"><?= $a; ?></td>
                        <td class="first-column"><?= $b; ?></td>
                        <td><?= (int)!$a; ?></td>
                        <td><?= $a | $b; ?></td>
                        <td><?= $a & $b; ?></td>
                        <td><?= $a ^ $b; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?php 
                $ab = [
                    [true, "true"],
                    [false, "false"],
                    [1, "1"],
                    [0, "0"],
                    [-1, "-1"],
                    ["1", '"1"'],
                    [null, "null"],
                    ["php", '"php"'],
                ];
            ?>

            <h2 aria-label="Гибкое сравнение">Задание 2. Гибкое сравнение (==)</h2>
            <table class="content-table">
                <thead>
                    <tr>
                        <th></th>
                        <?php foreach($ab as $item): 
                            $caption = $item[1];
                        ?>
                        <th><?= $caption; ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($ab as $item): 
                        $val_1 = $item[0];
                        $caption = $item[1];
                    ?>
                    <tr>
                        <td class="first-column"><?= $caption; ?></td>
                        <?php foreach($ab as $item): 
                            $val_2 = $item[0];

                            $res_1 = $val_1 == $val_2;
                            $res_2 = $val_1 === $val_2;
                        
                            if ($res_1 === $res_2):
                        ?>
                        <td><?= (int)$res_1; ?></td>
                        <?php else: ?>
                        <td class="value-diff"><?= (int)$res_1; ?></td>
                        <?php 
                            endif;
                            endforeach; 
                        ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <h2 aria-label="Жёсткое сравнение">Жёсткое сравнение (===)</h2>
            <table class="content-table">
                <thead>
                    <tr>
                        <th></th>
                        <?php foreach($ab as $item): 
                            $value = $item[0];
                            $caption = $item[1];
                        ?>
                        <th><?= $caption; ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($ab as $item): 
                            $val_1 = $item[0];
                            $caption = $item[1];
                    ?>
                    <tr>
                        <td class="first-column"><?= $caption; ?></td>
                        <?php foreach($ab as $item): 
                            $val_2 = $item[0];

                            $res_1 = $val_1 === $val_2;
                            $res_2 = $val_1 == $val_2;
                        
                            if ($res_1 === $res_2):
                        ?>                            
                        <td><?= (int)$res_1; ?></td>
                        <?php else: ?>
                        <td class="value-diff"><?= (int)$res_1; ?></td>
                        <?php endif; ?>

                        <?php endforeach; ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <p><span class="value-diff">Цветом</span> 
            выделена разница между гибким и жёстким сравнением.
            </p>
            
        </div>

        <div class="footer">
            <div class="copyright">
                &copy;&nbsp;<a href="https://github.com/Vlad-Miroshin">Владислав Мирошин</a>, 2024. Поток PHPPRO_22 <a href="https://skillfactory.ru/">Skillfactory</a>.
            </div>
        </div>

    </main>

</body>
</html>