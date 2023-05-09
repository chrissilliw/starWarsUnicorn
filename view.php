<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicorn Objects</title>
</head>
<body>
    <section>
        <h2>Star wars info: </h2>

        <h3>List of Unicorns with messages</h3>
        <?php
            $renderer->renderAllMessages($character_array);
        ?>
    </section>
    <section>
        <h3>List of alla Unicorns names</h3>
        <ol>
            <?php
                $renderer->renderOrderedList($character_array);
            ?>
        </ol>
    </section>
    <section>
        <h3>List of all colors that are used</h3>
        <?php
            $renderer->renderAllColors($character_array, $unicorn_colors);
        ?>
    </section>
    <section>
        <h3>Unicorn info: </h3>
        <ul>
            <li>Name: <?= $chosen_unicorn["name"] ?></li>
        </ul>

    </section>
</body>
</html>