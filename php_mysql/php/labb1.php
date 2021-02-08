<!DOCTYPE HTML>
<html lang="sv">
<head>
     <!-- CSS only -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fe5f309870.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css"> 
	<title>Biobiljetter</title>
    <meta charset="utf-8" />
</head>

<body>
<?php         
    function input_data($data) {  
        $data = trim($data);  
        $data = stripslashes($data);  
        $data = htmlspecialchars($data);  
        return $data;  
      }  
?>

<svg  viewBox="0 0 450 50"> 
  <text y="40">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp CINEMA CITY</text>
</svg>

<h1 id="bar"> &nbsp&nbsp&nbsp&nbsp&nbsp <i class="fas fa-ticket-alt"></i>
Biobiljetter </h1> <br>

<img id="image" src="cinema.jpg" alt="Cinema City"> <br><br><br>

<h3>  </h3>
<p> Du är inloggad. Välkommen!</p>
<h4 class="stylo"> Fylla i formulären för att köpa biljett. </h4> <br><br>
<p><span class = "error">* Måste fyllas.</span></p>

<form action="form_send.php" method="post">


<p> Målsman medföljer:

     <select name="malsman">
             <option value="Ja"> Ja </option>
             <option value="Nej"> Nej </option> 
        </select>
    </p>

    <p>Välj film: 
    
        <select name="film">
            <option value="Frozen"> Frozen (+7)</option>
            <option value="Godzilla"> Godzilla (+11)</option>
            <option value="Inlove"> In love (+15)</option>
        </select>
    </p>

    <p> Ålder:
    <input type="number" name="age" placeholder="Din ålder:">
    <span class="error">* <?php echo $ageErr; ?> </span>  </p>


    <p> Välj antal biljetter: 
    <select name="antalb">
            <option value="1">1</option>
            <option value="2"> 2</option>
        </select>
    <p class="obs"> OBS! Man kan inte köpa flera biljetter. Om du är under 18, du får välja att köpa två om en målsman medföljer. </p>

     <p>Email: <input type="text" name="mail" placeholder="Ditt mejl:"></p>


    <p class="obs"> OBS! Om det finns flera barn med samma målsmal, lämna oss ett meddelande: <br> <br> <textarea name="comment" placeholder="Din meddelanade" rows="5" cols="40"></textarea> </p>

    <p><input type="submit" value="Slutföra beställningen"></p>

    <p> Priser: <br>
                185kr/ 1 biljett <br>
                370kr/ 2 biljetter
     </p>
</form>

<footer>

  <h5> 
  <i class="fas fa-phone-volume"></i>
    Phone number: 0724728333  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <i class="far fa-envelope"></i>
    Email: cinemacity@yahoo.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <i class="fas fa-map-marker-alt"></i>
    Address: Engelbrektsvägen 1, Täby
    
  </h5>
</footer>

 <!-- JS, Popper.js, and jQuery -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
