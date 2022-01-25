<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
       
       
         echo 'Ahoj světe!<br /><br />';
        $kokoska=true; 
        
$bourak="František Herink"; 
$cislo=25; 
$cena=48.2;
$ahm = $bourak . $cena;








    echo $kokoska;
echo '<br /><br />';
echo $bourak;
echo '<br /><br />';
echo $cislo;
echo '<br /><br />';
echo $cena;
echo '<br /><br />';
echo '<strong>odstavec34</strong>';
    echo '<br /><br />';

    print 'Ahoj světe!';
print $kokoska;
print '<br /><br />';
print $bourak;
print'<br /><br />';
print $cislo;
print '<br /><br />';
print $cena;
print '<br /><br />';
    echo '<img src="kokos.jpg" alt"kokos">';

    print '<br /><br />';
echo '<strong>\\</strong>';
    print '<br /><br />';


    
    
    
    
    
    
    
    $b = 25;
    $a = 69;
    
    var_dump ($a+$b);
var_dump ($a-$b);
var_dump ($a/$b);
var_dump ($a*$b);
var_dump ($a++);
var_dump ($a--);
var_dump ($a+=$b);
var_dump ($a-=$b);
var_dump ($a*=$b);
var_dump ($a/=$b);
var_dump ($a==$b);
var_dump ($a!=$b);
var_dump ($a>$b);
var_dump ($a<$b);
var_dump ($a||$b);
var_dump ($a&&$b);
    var_dump (!$a);

    
    
      echo "<br /><br />";
      echo "<strong>\\</strong>";
      echo "<br /><br />";

    
    
    $fandaherink1 = 1;
    $fandaherink2 = 2;
        
    if ($fandaherink2 > $fandaherink1) {
        echo "Fanda Herink";}
        
    echo "<br /><br />";
    
    
    if($fandaherink2 < $fandaherink1) {
        echo "Fanda";
    }
    
    else {
        echo "Herink";
    }
echo "<br /><br />";
        
        
    if ($fandaherink2 > 2) {
        echo "Fanda";
    }    
    if ($fandaherink1 < 3) {
        echo "Herink";       
    }              
           
    echo "<br /><br />";    
        
    switch ($fandaherink1) {
        case 1:    
           echo "1";     
           break;     
        case 2:   
           echo "2";
           break;              
        case 3:    
           echo "3";     
           break;    
        case 4:    
            echo "4";    
            break;    
        case 5:    
            echo "5";    
            break;    
        case 6:    
            echo "6";   
            break;
        default:
            echo "neplatí";              
        }    

        {
            $produkty = array(
                
                1 => "Letadlo",
                2 => "Lod",
                3 => "Automobil",
                4 => "Metro",
                5 => "Vlak",
                6 => "Tramvaj",
                7 => "Autobus",
                8 => "Trolejbus",
                9 => "Helikoptera",
                10 => "Horkovzdusny balon",
            
                
                
            );
            
            var_dump($produkty);
            echo $produkty[6];
            
         }
       
        $produkty2 = array(
            "Dopravni prostredky" => array(
                "Voda, vzudch a zem" => array (
                    "Po celem svete" => array (
                        "letadlo" => array (
                            11 => "ve vzduchu",
                            12 => "rychle",
                            13 => "vysoka spotreba",
                            14 => "vysoka kapacita pasazeru",
                            15 => "aerodynamicke"
                        ),
                        "lod" => array (
                            16 => "na vode",
                            17 => "pomale",
                            18 => "vysoka spotreba",
                            19 => "vysoka kapacita pasazeru",
                            20 => "dobry pohyb po vode",
                        ),
                        "automobil" => array (
                            21 => "na zemi",
                            22 => "rychle",
                            23 => "prumerna spotreba",
                            24 => "mala kapacita pasazeru",
                            25 => "aerodynamicke",
                        ),
                        "metro" => array (
                            26 => "pod zemi",
                            27 => "rychle",
                            28 => "zadna spotreba",
                            29 => "vysoka kapacita pasazeru",
                            30 => "aerodynamicke",
                        ),
                        "vlak" => array (
                            31 => "na zemi",
                            32 => "rychle",
                            33 => "vysoka spotreba i zadna",
                            34 => "vysoka kapacita pasazeru",
                            35 => "aerodynamicke",
                        ),
                        "tramvaj" => array (
                            36 => "na zemi",
                            37 => "pomale",
                            38 => "zadna spotreba",
                            39 => "vysoka kapacita pasazeru",
                            40 => "aerodynamicke",
                        ),
                        "autobus" => array (
                            41 => "na zemi",
                            42 => "prumerne rychle",
                            43 => "prumerna spotreba",
                            44 => "vysoka kapacita pasazeru",
                            45 => "aerodynamicke",
                        ),
                        "trolejbus" => array (
                            46 => "na zemi",
                            47 => "prumerne rychle",
                            48 => "zadna spotreba",
                            49 => "vysoka kapacita pasazeru",
                            50 => "aerodynamicke",
                        ),
                         "helikoptera" => array (
                            51 => "ve vzduchu",
                            52 => "rychle",
                            53 => "prumerna spotreba",
                            54 => "mala kapacita pasazeru",
                            55 => "aerodynamicke",
                        ),
                         "horkovzdusny balon" => array (
                            56 => "ve vzduchu",
                            57 => "pomale",
                            58 => "mala spotreba",
                            59 => "mala kapacita pasazeru",
                            60 => "aerodynamicke",
                        ),
                    ))));
         
           var_dump($produkty2);
        
        
        echo "letadlo: ";  
        echo $produkty2 ["Dopravni prostredky"]["Voda, vzudch a zem"]["Po celem svete"]["letadlo"][12];
        echo "<br /><br />";
        
        echo "lod: ";
        echo $produkty2 ["Dopravni prostredky"]["Voda, vzudch a zem"]["Po celem svete"]["lod"][20];
        echo "<br /><br />";
        
        echo "automobil: ";
        echo $produkty2 ["Dopravni prostredky"]["Voda, vzudch a zem"]["Po celem svete"]["automobil"][24];
        echo "<br /><br />";
        
        echo "metro: ";
        echo $produkty2 ["Dopravni prostredky"]["Voda, vzudch a zem"]["Po celem svete"]["metro"][29];
        echo "<br /><br />";
        
        echo "vlak: ";
        echo $produkty2 ["Dopravni prostredky"]["Voda, vzudch a zem"]["Po celem svete"]["vlak"][33];
        echo "<br /><br />";
        
        echo "tramvaj: ";
        echo $produkty2 ["Dopravni prostredky"]["Voda, vzudch a zem"]["Po celem svete"]["tramvaj"][36];
        echo "<br /><br />";
        
        echo "autobus: ";
        echo $produkty2 ["Dopravni prostredky"]["Voda, vzudch a zem"]["Po celem svete"]["autobus"][42];
        echo "<br /><br />";
        
        echo "trolejbus: ";
        echo $produkty2 ["Dopravni prostredky"]["Voda, vzudch a zem"]["Po celem svete"]["trolejbus"][50];
        echo "<br /><br />";
        
        echo "helikoptera: ";
        echo $produkty2 ["Dopravni prostredky"]["Voda, vzudch a zem"]["Po celem svete"]["helikoptera"][53];
        echo "<br /><br />";
        
        echo "horkovzdusny balon: ";
        echo $produkty2 ["Dopravni prostredky"]["Voda, vzudch a zem"]["Po celem svete"]["horkovzdusny balon"][60];
        
        echo '<br /><br />';
        
        echo '<strong>Reseni cyklu˘</strong><br /><br />';
        
        // Řešení tabulky
        
        $radekFandaHerink = 5;
        $sloupecFandaHerink = 16;
        
        echo "<table border='1'>";
        
            for ($i = 1; $i <= $radekFandaHerink; $i++){ 
                echo "<tr>";
            
            for ($h = 1; $h <= $sloupecFandaHerink; $h++){
                echo "<td>" . $i . " - ". $h ."</td>";
          } 
                echo "</tr>";
          }
                echo "</table>";
        
            echo '<br />';    
            
        // "while"
            
        $i = 1;
        $pocet3 = 20;
            while ($i <= $pocet3)
            {
            echo($i . ' ');
                $i++;
            }    
            
            echo '<br />';
        
        // "foreach"
        
         $pole = array('pokus1', 'pokus2');
        
            foreach ($pole as $key => $value){
        
                echo $key . ". " . $value. "<br>";
        }    
        
        echo '<br />';

        //######################Funkce#################################
        
        
        //##Mat Funkce##
        echo (abs(8.5) . "<br><br>");
        echo (cos(6) . "<br><br>");
        
        echo '<br /><br />';
        
            


      //##Řetězové funkce##
        echo (addslashes ("Slovo 'Kokoska' bude v obrácených lomítkách.") . "<br><br>");
        echo chr(68) . "<br><br>"; //Desetinná hodnota
        echo chr(061) . "<br><br>"; //Osmičková hodnota
        echo chr(0x66) . "<br><br>"; //Šestnáctková hodnota
        
        echo '<br /><br />';
        
        
        
        
       //##Funkce pro práci s poli##
        $policko1=array("Number1","Number2");
        $policko2=array("Number3","Number4");
        
        print_r(array_merge($policko1,$policko2));
        
        echo '<br /><br />';
        
        $policko3=array("Number1","Number2");
        array_push($policko3,"Number3","Number4");
        print_r($policko3);
        
        echo '<br /><br />';
        
       


        //##Foreach##
        foreach ($produkty as $x => $hodnota) {
        echo "$x => $hodnota<br>";
        }
        
        echo '<br /><br />';
        
        
        //##Vlastní funkce##
        $cokoliv1 = "Welcome Player AHAHAH!";
        $cokoliv2 = "Player1";
    

        function ProsteFunkce(string $cokoliv1, string $cokoliv2){
        return str_replace ("AHAHAH", $cokoliv2, $cokoliv1);

                
        }
        
        echo ProsteFunkce($cokoliv1,$cokoliv2);
        echo "<br>";
        echo ProsteFunkce($cokoliv1,"Player2");
        
        echo '<br /><br />';
        
// --------------------------------------------------------------------------------------------------
        
       $money = 78.5645342;
        $currency = " EUR";
        
        function cena(float $penize, string $currency) {
            return $penize." ".$currency;
        }
 
        echo round($money,3);
        echo $currency;

        echo '<br>';
        echo '<br>';
        echo '<br>';
     
        getPriceFandaHerink( $price = 49424161.498412654);
        $mena4 = " CZK";       
       
        function getPriceFandaHerink(float $cena, string $mena4 = "CZK") : string {
         
          
        
            echo number_format($cena,2,"."," ");
        
        
            return $cena." ".$mena4;
        }
        
        echo $mena4; 
        
        echo '<br>';
        
       // ------------------------------------------------------ 

        function FandaHerinkgetPriceDPH(float $PRICE2, float $DPH) : 
        float{ 

            return ($PRICE2 * round($DPH,2)) + $PRICE2;
        }
        
        echo '<br>';
        echo FandaHerinkgetPriceDPH(659,0.1736);
        
        echo '<br>';
        echo FandaHerinkgetPriceDPH(659,0.1304);
        
        echo '<br>';
        echo FandaHerinkgetPriceDPH(659,0.0909);
        
        echo '<br>';
        echo '<br>';
        
        //---------------------------------------------------------------
        
         function FandaHerinkgetPriceDPH2(float $PRICE3, float $DPH2) : float {
            
            return $PRICE3* round($DPH2,2);
        }
        
        echo '<br>';
        echo FandaHerinkgetPriceDPH2(659,0.1736);
        echo '<br>';
        echo FandaHerinkgetPriceDPH2(659,0.1304);
        echo '<br>';
        echo FandaHerinkgetPriceDPH2(659,0.0909);
        
        echo '<br>';
        echo '<br>';
        
        //---------------------------------------------------------------
        
        $zpravaFandaHerink = "Co jsi z úst vypustil, to ani párem koní nedostaneš zpět.";
         
        $slovaFandaHerink = array('vypustil','koní','zpět');    
        
        echo isValidFandaHerink($zpravaFandaHerink, $slovaFandaHerink);
        
        function isValidFandaHerink(string $zpravaFandaHerink, array $slovaFandaHerink): string {
            
            foreach ($slovaFandaHerink as $value12) {
              
                if (strpos($zpravaFandaHerink, $value12)){
                    return "Slovo > " .$value12. " < je přísně zakázané!!";
                }
            }
            return "Nenašlo se žádné zakázané slovo.";
        }
        echo '<br>';
        echo '<br>';
        
        //---------------------------------------------------------------- funkce
       
        $teststringFandaHerink = "Tohle je testovaci text";
        $teststring2FandaHerink = array("Tohle","je","testovaci","text");
        $teststring3FandaHerink = "toto je text";
        $teststring4FandaHerink = "Tohle je test dialog";
        $teststring5FandaHerink = "tohle je neco random";
        
        
        
        echo (addslashes ("Slovo 'Kokos' bude v obrácených lomítkách.") . "<br><br>");
        
        echo chr(69) . "<br><br>";
        
        print_r (explode(" ",$teststringFandaHerink));
        
        echo "<br><br>";
        
        echo implode(" ",$teststring2FandaHerink);  
        
        echo "<br><br>";
        
        echo join(" ",$teststring2FandaHerink);
        
        echo "<br><br>";
        
        echo md5($teststring3FandaHerink);
        
        echo "<br><br>";
        
        echo hash("sha256",$teststring3FandaHerink);
        
        echo "<br><br>";
        
        echo ord("G");
        
        echo "<br><br>";
        
        echo strchr($teststringFandaHerink,$teststring3FandaHerink);
        
        echo "<br><br>";
        
        echo strlen($teststring3FandaHerink);
        
        echo "<br><br>";
        
        echo strpos($teststringFandaHerink,$teststring3FandaHerink);
        
        echo "<br><br>";
        
        echo strrchr($teststringFandaHerink,$teststring3FandaHerink);
        
        echo "<br><br>";
        
        echo strrev($teststringFandaHerink);
        
        echo "<br><br>";
        
        echo strstr($teststringFandaHerink,$teststring3FandaHerink);
        
        echo "<br><br>";
        
        echo strtolower($teststring4FandaHerink);
        
        echo "<br><br>";
        
        echo strtoupper($teststring4FandaHerink);
        
        echo "<br><br>";
        
        echo substr_replace($teststringFandaHerink,$teststring3FandaHerink,0);
        
        echo "<br><br>";
        
        echo substr($teststringFandaHerink,5);
        
        echo "<br><br>";
        
        echo ucfirst($teststring5FandaHerink);

        echo "<br><br>";
        
        echo ucwords($teststring5FandaHerink);
        
        echo "<br><br>";

        
        
        echo '<br>';
        echo '<br>';
        
        // --------------------------------------------------------------------
        
        $prostecislo2 = 523.451151;
        $prostecislo3 = 1.2;
        $prostecislo4 = -5.4;
        $prostepole1 = array("Kokos","Mamut","Yourmom");
        
 
        echo round ($prostecislo2, 2);
        echo '<br>';
        echo '<br>';
        
        echo ceil($prostecislo2);
        echo '<br>';
        echo '<br>';
        
        echo floor($prostecislo2);
        echo '<br>';
        echo '<br>';  
        
        echo sqrt($prostecislo2);
        echo '<br>';
        echo '<br>';  
        
        echo pow($prostecislo2, $prostecislo3);
        echo '<br>';
        echo '<br>';
        
        echo sin($prostecislo2);
        echo '<br>';
        
        echo cos($prostecislo2);
        echo '<br>';
        
        echo tan($prostecislo2);
        echo '<br>';  
        echo '<br>';
        
        
        echo asin($prostecislo3);
        echo '<br>';
        
        echo acos($prostecislo3);
        echo '<br>';
        
        echo atan($prostecislo3);
        echo '<br>'; 
        echo '<br>';
        
        
        echo fmod($prostecislo3, $prostecislo2);
        echo '<br>';
        echo '<br>';
        
        echo max($prostepole1);
        echo '<br>';
        echo '<br>';
        
        echo min($prostepole1);
        echo '<br>';
        echo '<br>';
        
        echo abs($prostecislo4);
        echo '<br>';
        echo '<br>';
        
        echo "Zakladni Pocty:";
        echo '<br>';
        
        echo $prostecislo2 - $prostecislo3;
        echo '<br>';
        echo '<br>';
        
        echo $prostecislo2 + $prostecislo3;
        echo '<br>';
        echo '<br>';
        
        echo $prostecislo2 / $prostecislo3;
        echo '<br>';
        echo '<br>';
        
         echo $prostecislo2 * $prostecislo3;
        echo '<br>';
        echo '<br>';
        
        echo number_format($prostecislo2);
        echo '<br>';
        
        // ------------------------------------------------------------------
        
        
        
        
        
         ?>
        
    </body>
</html>
