<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stevey Snappy Snacks!</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="index.js" defer></script>
</head>

<body>
    <header>
        <div>
            <h1>Stevey Snappy Snacks!</h1>
            <p>Come and enjoy the best african meals here!</p>
        </div>
    </header>

    <?php
        include_once 'nav.php';
    ?>

    <aside>
        <div class="flex-container">
            <div>
                <img style="width:300px; height: 300px;" src="./images/EfoVegetable.jpg" alt="EfoVegetable">
                <p>Efo Vegetables.</p>
                <div class="price">
                    <p>Price: 2000FCFA</p>
                </div>
            </div>
            <div>
                <img style="width:300px; height: auto;" src="./images/eggBeans.jpg" alt="eggBeans">
                <p>Egg Beans.</p>
                <div class="price">
                    <p>Price: 3000FCFA</p>
                </div>
            </div>
            <div>
                <img style="width:300px; height: 300px;" src="./images/garriAndVegetables.jpg" alt="garriAndVegetables">
                <p>Garri and Vegetables.</p>
                <div class="price">
                    <p>Price: 2500FCFA</p>
                </div>
            </div>
            <div>
                <img style="width:300px; height: 300px;" src="./images/ogbono.webp" alt="ogbono">
                <p>Ogbono.</p>
                <div class="price">
                    <p>Price: 2000FCFA</p>
                </div>
            </div>
            <div>
                <img style="width:300px; height: 300px;" src="./images/ruties.jpg" alt="rusties">
                <p>Rusties.</p>
                <div class="price">
                    <p>Price: 3000FCFA</p>
                </div>
            </div>
            <div>
                <img style="width:300px; height: 300px;" src="./images/Thieboudienne.jpg" alt="Thieboudienne">
                <p>Thieboudienne.</p>
                <div class="price">
                    <p>Price: 2500FCFA</p>
                </div>
            </div>
        </div>
    </aside>
    <article>
        <h2>Why go for African meals?</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a
            type specimen book. It has survived not only five centuries, but also the leap
            into electronic typesetting, remaining essentially unchanged. It was popularised
            in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.</p>
    </article>

    <?php
        include_once 'footer.php';
    ?>

</body>

</html>