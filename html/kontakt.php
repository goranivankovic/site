<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Izrada Sajta,Pravljenje Sajta,Making a Web site,Best Way to make a site,
    Html for beginers,Ease way to make a web  site,Novi sad izrada Sajta" >
    <meta name="keywords" content="Izrada Sajta,Pravljenje Sajta,Making a Web site,Best Way to make a site,
    Html for beginers,Ease way to make a web  site,Novi sad izrada Sajta,Simple Way to make  a site,
    Sites for 100 euro">
    <meta name="author" content="Goran Ivankovic">
    <title>My Web Site</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/kontakt.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php" id="pocetna">Početna</a></li>
                <li><a href="usluge.php">Usluge</a></li>
                <li><a href="cenovnik.php">Cenovnik</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
            </ul>
        </nav>
        <div class="logo">
            gogaDesign
        </div>
    </header>
    <div class="menuBar">
        <i class="fas fa-bars"></i>
     </div>
     
     <div class="root">
        <div class="formDiv">
        <form action="send.php" method="POST">
          <label for="fName">Name:</label>
             <input type="text" name="fName">
          <label for="lastName">Lastname:</label>
             <input type="text" name="lastName">
          <label for="email">Email:</label>
             <input type="email" name="email">
          <label for="korisnikText">Text:</label>
            <textarea name="korisnikText"></textarea>
          <input type="submit" name="sub" value="button" id="btn">
          </form>
          </div>
          </div>
          <footer>
            <div class="footerOne">
                Powered by:<span> gogaDesign 2020</span>
            </div>
            
            <div class="footerTwo">
                <div>Email: <i class="fas fa-envelope-square"></i> gogadesignweb@gmail.com</div>
                <div>Github: <i class="fab fa-github"></i> <a href="https://github.com/nscoder123">gogaDesign</a></div>
                <div>Telphone: <i class="fab fa-viber"></i> +381/064-415-68-13</div> 
                <div>Instagram: <i class="fab fa-instagram"></i> <a href="https://instagram.com">gogaDesign</a> </div>
      
            </div>
      
        </footer>


    <script src="../js/kontakt.js"></script>
</body>
</html>