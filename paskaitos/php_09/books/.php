<?php include '../parts/header.php'; ?>
<?php include '../parts/navbar.php'; ?>

<?php

    if (isset($_GET['id'])) {

        $bookId = $_GET['id'];

        $sql = "SELECT * FROM `knygos` WHERE `id` = $bookId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            $bookData = $result->fetch_assoc();
?>

        <header class="bg-light text-dark pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1">Knygos "<?php echo $bookData['pavadinimas']; ?>" informacija</h1>
                        <p class="lead">Informacija apie knygą</p>
                    </div>
                </div>
            </div>
        </header>

        <div class="content pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p><strong>Knygos pavadinimas: </strong> <?php echo $bookData['pavadinimas']; ?></p>
                        <p><strong>Autorius: </strong> Kol kas palikim</p>
                        <p><strong>Puslapių sk.: </strong> <?php echo $bookData['puslapiu_skaicius']; ?></p>
                        <p><strong>Kaina: </strong> <?php echo $bookData['kaina']; ?> €</p>
                        <p>
                            <a href="<?php echo $linksBaseDir; ?>/books/atnaujinti.php" class="btn btn-warning">Atnaujinti</a>
                            <a href="<?php echo $linksBaseDir; ?>/books/salinti.php" class="btn btn-danger">Šalinti</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

<?php

        } else {

            $notFound = true;

        }

    } else {

        $notFound = true;

    }


    if (isset($notFound) && $notFound == true) {

?>

        <header class="bg-light text-dark pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1">Knyga nerasta</h1>
                        <a href="../knygos.php">Grįžti į knygų sąrašą</a>
                    </div>
                </div>
            </div>
        </header>

<?php

    }

?>

<?php include '../parts/footer.php'; ?>