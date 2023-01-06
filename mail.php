<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/9238737bc9.js" crossorigin="anonymous"></script>
    <!--Czcionka - Roboto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap" rel="stylesheet">
    <!--Mój plik css-->
    <link rel="stylesheet" href="style.css">

    <title>TradeCAD</title>
  </head>
  <body>
    <header>
        <nav class="navbar fixed-top navbar-dark bg-dark navbar-expand-lg">
            <a class="navbar-brand" href="#"><img src="img/TradeCAD_kolor_bialy_podluzny_przyciety.png" class="d-inline-block" alt="Logo"></a>
        </nav>
    </header>



    <section class="kontakt"> 
      <form method="POST" name="contactform" action="index.html">          
        <div class="box">             
        <?php

$to      = 'info@tradecad.pl';
$name    = $_POST['nazwa'];
$email   = $_POST['email'];
$subject = 'Nowe zapytanie od ' . $email;
$numer   = $_POST['numer'];
$temat   = $_POST['temat'];

$naglowek = "Mail od: " . $name . "\r\n".
            "Numer kontaktowy: " . $numer . "\r\n".
            "Temat: " . $temat . "\r\n\r\n";

$message = $_POST['wiadomosc'];

$message = $naglowek . $message;
//$headers = 'From: ' . $email;
//$headers .= "Content-Type: text/html; charset=utf-8\r\n";

$header = "From: " . $email . "\nContent-Type:".
             ' text/plain;charset="UTF-8"'.
             "\nContent-Transfer-Encoding: 8bit";

if(mail($to, $subject, $message, $header))
  {
    echo '<h1> Poprawnie wysłano e-mail </h1>';
    echo '<p> Dziękujęmy za przesłaną wiadomość. Postaramy się odpowiedzieć najszybciej jak to możliwe.</p>';
  }
  else
  {
    echo '<h1> Nieudało się wysłać wiadomości...</h1>';
    echo '<p> Wystąpił nieoczekiwany błąd, spróbuj jeszcze raz...</p>';
  }

?> 
          <div class="przycisk">
            <input type="submit" class="button" value="Strona główna" />    
          </div> 
        </div>     
      </form>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>