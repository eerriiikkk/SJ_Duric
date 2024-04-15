<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
function displayHeader(){
    echo '
    <header>
    <h1> Vitajte na mojej stranke </h1>
    <nav>
    <ul>
    <li><a href="#section1"> Sekcia 1 </a></li>
    <li><a href="#section2"> Sekcia 2 </a></li>
    <li><a href="#section3"> Sekcia 3 </a></li>
    </ul>
    </nav>
    </header>';
}
?>
<?php displayHeader(); ?>


<main>
    <section id="section1">
        <h2>Sekcia 1</h2>
        <p>Prva Sekcia</p>
    </section>

    <section id="section2">
        <h2>Sekcia 2</h2>
        <p>Druha Sekcia</p>
    </section>

    <section id="section3">
        <h2>Sekcia 3</h2>
        <p>Tretia Sekcia</p>
    </section>
</main>

<?php
    function displayFooter()
    {
       echo ' 
       <footer>
       <p>&copy; ' . date("Y"). ' Erik Ďurič</p>
       </footer>
       ';
    }
?>
<?php displayFooter(); ?>

</body>
</html>
