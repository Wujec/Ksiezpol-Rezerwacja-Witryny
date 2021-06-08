<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>PDO</title>
    <link rel="stylesheet" href="style.css">
    <script src="obliczjs.js"></script>
</head>
<body>

    <section class="nav">
        <span><a href="https://www.facebook.com/GKS-Relax-Księżpol-1483355785215231" id="elo1"><img src="ksiezpol.gif" id="imgks"></a></span>
    </section>
    <section class="strzalka">
        <span class="arrow" onclick="pokaz()">&#8250;</span>
    </section> 

    <section class="strzalka2">
        <span class="arrow2" onclick="schowaj2()">&#8249;</span>
    </section>  
<form method="POST">
    <section class="form">
        <section class="form_body">
                            <span id="formtext">ZAREZERWUJ SOBIE POBYT!</span><br>
            <input type="number" name="dzieci" id="dz" placeholder="Liczba Dzieci" required><br>
            <input type="number" name="dorosli" id="do" placeholder="Liczba Dorosłych" required><br>
            <input type="number" name="dni" id="dn" placeholder="Liczba Dni" required><br>
            <input type="date" name="data" id="da" required><br>
            <label for="rodzaj_pok" id="klp">Klasa pokoju</label><br>
            <select name="rodzaj_pok" id="rodzaj_pok">
                <option value="o1">Luksusowy</option>
                <option value="o2">Zwykły</option>
                <option value="o3">Uboższy</option>
            </select>
        <br><br><input type="button" value="Obliczanie JS" onclick="obliczjs()" id="inputjs"><br>
        <input type="submit" value="Obliczanie PHP" onclick="obliczphp()" id="inputphp"><br>
            <section class="wypisz">
                <span id="wynik"></span>
            </section>


      </section>  
    </section>
                                            <!-- PEHAP -->
    <?php
    $ldz=@$_POST['dzieci'];
    $ldo=@$_POST['dorosli'];
    $ldn=@$_POST['dni'];
    $da=@$_POST['data'];
    $ro=@$_POST['rodzaj_pok'];
    
    $ldz=25;
    $ldo=50;
    
    if($ro=='o1'){
        $ro=500;
    }
    else if($ro=='o2'){
        $ro=200;
    }
    else if($ro=='o3'){
        $ro=80;
    }
    @$cena=($ldz+$ldo+$ro)*$ldn;

    echo "<span id=\"wynik2\">"."Cena za twój pobyt wyniesie: ".$cena."</span>";
    ?>
</form> <!-- zamkniecie FORMULARZA -->

   
</body>
</html>