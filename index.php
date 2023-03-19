<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/d258707c8d.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="despre">
        <div class="container">
            <div class="left-bar">
                <img src="./img/logo.png" alt="no image">
                <p>Erhan Ion </p>
            </div>
            <div class="right-bar">
                <ol>
                    <li><a href="#despre"><span>Despre</span></a></li>
                    <li><a href="#produs_metalice"><span>Produse metodice</span></a></li>
                    <li><a href="#examples"><span>Exemple de lucrari</span></a></li>
                </ol>
            </div>
        </div>
        <div class="center">
            <h1>Platforma de promovare</h1>
            <p>Centrul Republican de Învățământ din subordinea Ministerului Educației Publice Platforma unică servește
                la popularizarea celor mai bune practici ale pedagogilor</p>
        </div>
        <div class="buttons-ctn">
            <button id="enrole">Inscrie-te</button>
            <button id="auth">Autentificare</button>
        </div>
    </header>
    <section>
        <div class="section-ctn">
            <div class="info-controllers">
                <div class="info-present">
                    <h2>We connect our customers with the best, and help them keep up-and stay open.</h2>
                </div>
                <div class="buttons">
                    <button class="black"><i class="fa-solid fa-feather"></i>We connect our customers with the
                        best.</button>
                    </i>
                    <button class="middle"><i class="fa-solid fa-sun"></i>Advisor success customer launch party.</button>
                    <button class="last"><i class="fa-solid fa-eye"></i>Business-to-consumer long tail.</button>
                </div>
            </div>
            <div class="images">
                <div class="parent-image">
                    <img src="./img/foto1.jpg" alt="no image">
                    <div class="info">
                        <img src="./img/agile.png" alt="np image">
                    </div>
                </div>

            </div>
        </div>
       
        <div class="info-db" id="produs_metalice">
            <h2>Produse metodice</h2>
            <div class="cards-container">
            <?php
        include("./back/conexion.php");
        $sql = mysqli_query($conexiune, "SELECT * FROM `articole`");
        while ($row=mysqli_fetch_row($sql)) {
            $id = $row[0]; 
        ?>
                <div class="card">
                    <img src="./db-image/<?php echo $row[3] ?>" alt="no image">
                    <div class="card-details">
                        <h3><?php echo $row[1]?></h3>
                        <p><?php echo $row[2]?></p>
                    </div>
                </div>
            <?php
        }
            ?>
            </div>
        </div>

        <div class="info-db works" id="produs_metalice">
            <h2>Exemple de lucrări</h2>
            <div class="cards-container">
            <?php
        include("./back/conexion.php");
        $sql = mysqli_query($conexiune, "SELECT * FROM `lucrari`");
        while ($row=mysqli_fetch_row($sql)) {
            $id = $row[0]; 
        ?>
                <div class="card">
                    <div class="card-details work-details">
                        <h3><?php echo $row[1]?></h3>
                        <p><i class="fa-solid fa-location-dot"></i>&nbsp&nbsp&nbsp<?php echo $row[2]?></p>
                    </div>
                    <img src="./db-image/<?php echo $row[3] ?>" alt="no image">
                </div>
            <?php
        }
            ?>
            </div>
        </div>
    </section>
    <footer>
        <p>Erhan Ion <br> W-1942 <br> ionerhan13@gmail.com</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>