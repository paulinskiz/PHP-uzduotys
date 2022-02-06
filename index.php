<?php
// 1. Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. Atspausdinti juos į ekraną.
echo '<b>Pirmas</b> <br>';
for ($i=0; $i<4; $i++){
    echo rand(0, 100).'<br>';
}



// 2. Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. Išvesti juos į ekraną. Visus nelyginius skaičius padidinti dvigubai. Išvesti visus skaičius į ekraną.
echo '<br> <b>Antras</b> <br>';
$array = [];
for ($i=0; $i<4; $i++){
    array_push($array, rand(0, 100));
    echo $array[$i].'<br>';
}
echo '<br>';
for ($i=0; $i<4; $i++){
    if ($array[$i]%2!=0) {
        $array[$i]=$array[$i]*2;
    }
    echo $array[$i].'<br>';
}


// 3. Sugeneruoti atsitiktinį skaičių nuo 1 iki 7. Atitinkamai pagal skaičių parašyti kokia tai savaitės diena.
echo '<br> <b>Trečias</b> <br>';
$day=rand(1, 7);
switch ($day) {
    case 1:
        echo 'Monday';
        break;
    case 2:
        echo 'Tuesday';
        break;
    case 3:
        echo 'Wednesday';
        break;
    case 4:
        echo 'Thursday';
        break;
    case 5:
        echo 'Friday';
        break;
    case 6:
        echo 'Saturday';
        break;
    case 7:
        echo 'Sunday';
        break;
}

// 4. Trečią uždavinį perdaryti taip, kad rodytų, kokia tai savaitės diena (1-5 – darbo diena, 6-7 – savaitgalis).
echo '<br> <b>Ketvirtas</b> <br>';
switch ($day) {
    case 1:
        echo 'Monday - Weekday';
        break;
    case 2:
        echo 'Tuesday - Weekday';
        break;
    case 3:
        echo 'Wednesday - Weekday';
        break;
    case 4:
        echo 'Thursday - Weekday';
        break;
    case 5:
        echo 'Friday - Weekday';
        break;
    case 6:
        echo 'Saturday - Weekend';
        break;
    case 7:
        echo 'Sunday - Weekend';
        break;
}

// 5. Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. Skaičiai dalūs iš 3 turi būti atvaizduoti žaliai, turintys dalybos iš trijų liekaną vienetą – geltonai, turintys dalybos iš trijų liekaną dvejetą – raudonai.
echo '<br> <b>Penktas</b> <br>';
for ($i=0; $i<4; $i++){
    $num = rand(0, 100);
    if ($num%3==0){
        echo '<font color="green">'.$num.'</font><br>';
    } elseif ($num%3==1){
        echo '<font color="yellow">'.$num.'</font><br>';
    } else {
        echo '<font color="red">'.$num.'</font><br>';
    }
}

// 6. Išvesti į ekraną skaičius nuo 0 iki 100.
echo '<br> <b>Šeštas</b> <br>';
for ($i=0; $i<=100; $i++){
    echo "$i; ";
}

// 7. Išvesti į ekraną visus lyginius skaičius nuo 0 iki 200.
echo '<br> <b>Septintas</b> <br>';
$array2 = [];
for ($i=0; $i<=200; $i++){
    if ($i%2==0){
        array_push($array2, $i);
        echo "$i; ";
    }
}

// 8. Septinto uždavinio sąlygoje atspausdintus skaičius „pataisyti“, kad dalūs iš 6 būtų atvaizduoti mėlynai.
echo '<br> <b>Aštuntas</b> <br>';
for ($i=0; $i<count($array2); $i++){
    if ($array2[$i]%6==0){
        echo '<font color="blue">'.$array2[$i].'</font>; ';
    } else {
        echo $array2[$i].'; ';
    }
}

// 9. Generuoti atsitiktinius skaičius nuo 1 iki 50 tol, kol sugeneruotas skaičius bus dalus iš 5.
echo '<br> <b>Devintas</b> <br>';
$rand=1;
while ($rand%5!=0){
    $rand = rand(1, 50);
    echo "$rand; ";
}

// 10. Generuoti atsitiktinius skaičius nuo 1 iki 100 tol, kol sugeneruotas skaičius bus dalus iš 5 arba iš 11.
echo '<br> <b>Dešimtas</b> <br>';
$rand2=1;
while ($rand2%5!=0 && $rand2%11!=0){
    $rand2 = rand(1, 100);
    echo "$rand2; ";
}

// 11. Generuoti atsitiktinius skaičius nuo 1 iki 10 tol, kol jų suma bus lygi arba didesnė 150.
echo '<br> <b>Vienuoliktas</b> <br>';
$sum1=0;
while ($sum1<150){
    $rand = rand(1, 10);
    echo "$rand; ";
    $sum1+=$rand;
}
echo "<br> suma = $sum1";

// 12. Generuoti atsitiktinius skaičius nuo 1 iki 10 tol, kol jų suma bus lygi arba didesnė 120. Suskaičiuoti kiek skaičių buvo sugeneruota.
echo '<br> <b>Dvyliktas</b> <br>';
$sum2 = 0;
$array3 = [];
while ($sum2<120){
    $rand = rand(1, 10);
    echo "$rand; ";
    array_push($array3, $rand);
    $sum2+=$rand;
}
echo "<br> suma = $sum2, sugeneruota - ".count($array3).' skaičių.';

// 13. Generuoti atsitiktinius skaičius nuo 1 iki 15 tol, kol jų suma bus lygi arba didesnė 175. Surasti didžiausią ir mažiausią skaičių.
echo '<br> <b>Tryliktas</b> <br>';
$sum3 = 0;
$array4 = [];
while ($sum3<175){
    $rand = rand(1, 15);
    echo "$rand; ";
    array_push($array4, $rand);
    $sum3+=$rand;
}
echo '<br> suma = '.$sum3.', Didžiausias sugeneruotas skaičius - '.max($array4).'; mažiausias - '.min($array4);

// 14. Generuoti atsitiktinius skaičius nuo 1 iki 15 tol, kol jų suma bus lygi arba didesnė 200. Surasti skaičių vidurkį.
echo '<br> <b>Keturioliktas</b> <br>';
$sum4 = 0;
$array5 = [];
while ($sum4<200){
    $rand = rand(1, 15);
    echo "$rand; ";
    array_push($array5, $rand);
    $sum4+=$rand;
}
echo '<br> suma = '.$sum4.', skaičių vidurkis ≈ '.round($sum4/count($array5), 2);

// 15. Sukurti masyvą, kurio ilgis būtų 100, o reikšmės – skaičiai nuo 1 iki 100.
echo '<br> <b>Penkioliktas</b> <br>';
$array7 = [];
for ($i=1; $i<=100; $i++){
    array_push($array7, $i);
}

// 16. Sukurti masyvą, kurio ilgis būtų 100, o reikšmės – atsitiktiniai skaičiai nuo 10 iki 25.
echo '<br> <b>Šešioliktas</b> <br>';
$array8 = [];
for ($i=0; $i<100; $i++){
    array_push($array8, rand(10, 25));
}

// 17. Sukurti atsitiktinio ilgio masyvą, nuo 40 iki 60, kurio reikšmės būtų skaičiai nuo 1 iki masyvo ilgio.
echo '<br> <b>Septynioliktas</b> <br>';
$array9 = [];
for ($i=1; count($array9)<=rand(40, 60); $i++){
    array_push($array9, $i);
}

// 18. Sukurti atsitiktinio ilgio masyva, kurio ilgis nuo 80 iki 120, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 47.
echo '<br> <b>Aštuonioliktas</b> <br>';
$array10 = [];
while (count($array10)<rand(80, 120)){
    array_push($array10, rand(5, 47));
}

// 19. Sukurti masyvą, kurio ilgis 100, o reikšmės – raidės D, E, F, G, H.
echo '<br> <b>Devynioliktas</b> <br>';
$array11 = [];
$letters1 = 'DEFGH';
while (count($array11)<100){
    array_push($array11, $letters1[rand(0, 4)]);
}

// 20. Sukurti masyvą, kurio ilgis 100, o reikšmės – raidės M,N,O,P. Suskaičiuoti, kurios raidės buvo daugiausia.
echo '<br> <b>Dvidešimtas</b> <br>';
$array12 = [];
$letters2 = 'MNOP';
while (count($array12)<100){
    array_push($array12, $letters2[rand(0, 3)]);
}

$m = $n = $o = $p = 0;
for ($i=0; $i<count($array12); $i++){
    if ($array12[$i]=='M'){
        $m++;
    } elseif ($array12[$i]=='N'){
        $n++;
    } elseif ($array12[$i]=='O'){
        $o++;
    } else {
        $p++;
    }
}
$max=max($m, $n, $o, $p);
echo 'Daugiausia raidžių buvo: ';
if ($max==$m) {
    echo "M = ";
}
if ($max==$n) {
    echo "N = ";
}
if ($max==$o) {
    echo "O = ";
}
if ($max==$p) {
    echo "P = ";
}
echo " $max kartų.";

// 21. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės skaičiai nuo 1 iki 10 ([1,2,3,4,5,6,7,8,9,10]).
echo '<br> <b>Dvidešimt pirmas</b> <br>';
$arr1 = $masyvas1 = [];
for ($i=1; count($masyvas1)<=10; $i++){
    array_push($masyvas1, $i);
}
// var_dump($masyvas);
for ($i=0; $i<100; $i++) {
    array_push($arr1, $masyvas1);
} 

// 22. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės atsitiktiniai skaičiai nuo 1 iki 17.
echo '<br> <b>Dvidešimt antras</b> <br>';
$arr2 = [];
for ($i=0; $i<100; $i++){
    for ($j=0; $j<10; $j++) {
        $arr2[$i][$j]=rand(1, 17);
    }
}

// 23. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki 18, o reikšmės – skaičiai nuo 1 iki masyvo ilgio.
echo '<br> <b>Dvidešimt trečias</b> <br>';
$arr3 = [];
for ($j=0; $j<100; $j++) {
    $masyvas3 = [];
    for ($i=1; count($masyvas3)<=rand(5, 18); $i++) {
        array_push($masyvas3, $i);
    }
    array_push($arr3, $masyvas3);
}

// 24. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki 18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 30.
echo '<br> <b>Dvidešimt ketvirtas</b> <br>';
$arr4 = [];
$rand4 = (rand(5, 18));
for ($i=0; $i<100; $i++) {
    $masyvas4 = [];
    for ($j=0; $j<$rand4; $j++) {
        array_push($masyvas4, rand(5, 30));
    }
    array_push($arr4, $masyvas4);
}

// 25. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki 18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 75. Surasti didžiausią skaičių visame didžiajame masyve.
echo '<br> <b>Dvidešimt penktas</b> <br>';
$arr5 = $masyvas5 = [];
$rand5 = rand(5, 18);
for ($i=0; $i<100; $i++) {
    for ($j=0; $j<$rand5; $j++) {
        array_push($masyvas5, rand(5, 75));
    }
    array_push($arr5, $masyvas5);
    $masyvas5=[];
}
$largest = [];
foreach ($arr5 as $array) {
    array_push($largest, max($array));
}
echo 'Didžiausias skaičius visame didžiajame masyve - '.max($largest);

// 26. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki 18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 75. Surasti mažiausią skaičių visame didžiajame masyve ir kiek kartų jis pasikartojo.
echo '<br> <b>Dvidešimt šeštas</b> <br>';
$arr6 = $masyvas6 = [];
$rand6 = rand(5, 18);
for ($i=0; $i<100; $i++) {
    for ($j=0; $j<$rand6; $j++) {
        array_push($masyvas6, rand(5, 75));
    }
    array_push($arr6, $masyvas6);
    $masyvas6=[];
}
$least = [];
foreach ($arr6 as $array) {
    array_push($least, min($array));
}
$minNum = min($least);
$count = 0;
foreach ($arr6 as $array) {
    foreach ($array as $value) {
        if ($value == $minNum) {
            $count++;
        }
    }
}
echo "Mažiausias skaičius visama didžiajame - $minNum, pasikartojo - $count kartų.";

// 27. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės atsitiktiniai skaičiai nuo 1 iki 17. Išrykiuoti vidinių masyvų reikšmes didėjančia tvarka.
echo '<br> <b>Dvidešimt septintas</b> <br>';
$arr7 = [];
$rand7 = rand(1, 17);
for ($i=0; $i<100; $i++) {
    for ($j=0; $j<10; $j++) {
        $arr7[$i][$j]=rand(1,17);
    }
}
$sorted = [];
foreach ($arr7 as $array){
    sort($array);
    array_push($sorted, $array);
}


// 28. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės atsitiktiniai skaičiai nuo 1 iki 17. Perrikiuoti vidinius masyvus pagal vidinių masyvų reikšmių sumas didėjančia tvarka.

// Reikia taisyti !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
echo '<br> <b>Dvidešimt aštuntas</b> <br>';
$arr8 = [];
for ($i=0; $i<100; $i++) {
    for ($j=0; $j<10; $j++) {
        $arr8[$i][$j]=rand(1, 17);
    }
} 
$summed = [];
foreach ($arr8 as $array) {
    array_push($summed, array_sum($array));
}
sort($summed);
$sorted2 = [];
// foreach ($summed as $sum) {
//     foreach ($arr8 as $array) {
//         if ($sum == count($array)) {
//             array_push($sorted2, $array);
//         }
//     }
// }

// for ($i=0; $i<count($summed); $i++){
//     foreach ($arr8 as $array) {
//         if ($summed[$i]==array_sum($array)) {
//             array_push($sorted2, $array);
//         }
//     }
// }

// echo '<pre>';
// print_r($sorted2);


// 29. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės atsitiktiniai skaičiai nuo 1 iki 17. Iš dvimačio masyvo sukurti vieną vienmatį masyvą – visas dvimačio masyvo masyvų reikšmes perkelti į naują masyvą.
echo '<br> <b>Dvidešimt devintas</b> <br>';

$arr9 = [];
for ($i=0; $i<100; $i++){
    for ($j=0; $j<10; $j++){
        $arr9[$i][$j]=rand(1,17);
    }
}
$allInOne = [];
foreach ($arr9 as $array) {
    for ($i=0; $i<count($array); $i++) {
        array_push($allInOne, $array[$i]);
    }
}

// 30. Papildyti 29 uždavinį taip, kad surastų skaičių vidurkį ir palygintų jį su vidurinia reikšme, kuris didesnis. Jei elementų yra nelyginis skaičius, pvz 9, tai vidurinė reikšmė bus 5-as elementas, jei elementų yra lyginis skaičius, pvz 8, tai vidurinė reikšmė bus 4-os ir 5-os reikšmės aritmetinis vidurkis.
echo '<br> <b>Trisdešimtas</b> <br>';

$arrayAvg = array_sum($allInOne)/count($allInOne);
$middle = 0;
if (count($allInOne)%2!=0) {
    $middle = $allInOne[ceil(count($allInOne)/2)];
} else {
    $middle = ($allInOne[(count($allInOne))/2] + $allInOne[((count($allInOne))/2)+1])/2;
} 

if ($arrayAvg > $middle) {
    echo 'Vidurkis yra didesnis už vidurinę reikšmę.';
} elseif ($arrayAvg < $middle) {
    echo 'Vidurinė reikšmė yra didesnė už vidurkį.';
} else {
    echo 'Vidurkis yra lygus vidurinei reikšmei.';
}

// 31. Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą. 
echo '<br> <b>Trisdešimt pirmas</b> <br>';

function h1 (string $string) {
    return "<h1>$string</h1>";
}

// 32. Parašyti funkciją, kuri priima du kintamuosius. Patikrina ar jie yra skaičiai. Grąžina tų skaičių sumą.
echo '<br> <b>Trisdešimt antras</b> <br>';

function sum ($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a+$b;
    }   else {
        return 'ERROR - Input is not a number';
    }
}

// 33. Parašyti funkciją, kuri priima du kintamuosius. Patikrina ar jie yra skaičiai. Palygina tuos du skaičius ir grąžina rezultatą ar pirmas skaičius yra didesnis, ar antras, ar jie yra lygūs.
echo '<br> <b>Trisdešimt trečias</b> <br>';

function compare ($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        if ($a>$b) {
            return 'First number is bigger than second number.';
        } elseif ($a<$b) {
            return 'Second number is bigger than first number.';
        } else {
            return 'Both numbers are equal.';
        }
    }   else {
        return 'ERROR - Input is not a number';
    }
}

// 34. Parašyti funkciją, kuri priimtų vieną kintamajį. Turi patikrinti ar tai yra skaičiu ir ar tai yra keturženklis skaičius. Turi būti grąžinamas rezultatas ar tie metai yra keliemieji.
echo '<br> <b>Trisdešimt ketvirtas</b> <br>';

function leapYear ($a) {
    if (is_numeric($a) && strlen($a)==4) {
        if ($a%400 == 0 || $a%100!=0 && $a%4==0) {
            return 'Leap year';
        } else {
            return 'Common year';
        }
    } else {
        return 'Input must be 4 digits number';
    }
}

// 35. Parašyti funkciją, kuri priimtų vieną kintamajį. Turi būti patikrinimas ar tas kintamasis yra skaičius. Funkcija turi grąžinti skaičių, kur įvesto skaičiaus skaitmenys būtų išrikiuoti didėjimo tvarka.
echo '<br> <b>Trisdešimt penktas</b> <br>';


function ascending ($a) {
    if (is_numeric($a)) {
        $temp = str_split($a);
        sort($temp);
        $sorted = '';
        for ($i=0; $i<count($temp); $i++){
            $sorted[$i]=$temp[$i];
        }
        return $sorted;
    }   else {
        return 'ERROR - Input is not a number';
    }
}

// 36. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių.
echo '<br> <b>Trisdešimt šeštas</b> <br>';

function divisions($a) {
    if (is_int($a)) {
        $count=0;
        for ($i=2; $i<$a; $i++) {
            if ($a%$i==0) {
                $count++;
            }
        }
        return "Number can be devided $count times";
    } else {
        return 'ERROR - Input is not a natural number';
    }
}

// 37. Parašyti funkciją telefonoNumeris, kuri priima vieną kintamąjį. Turi būti patikrinimas, kad kintamasis yra masyvas, kad jo visi elementai yra skaičiai ir, kad jo ilgis yra 10. Funkcija turi grąžinti telefono numerį tokiu formatu - "(XXX) XXX-XXXX".
echo '<br> <b>Trisdešimt septintas</b> <br>';

function number ($a) {
    if (is_array($a) && count($a)==10) {
        foreach ($a as $value) {
            if (!is_int($value)) {
                return 'ERROR - Input must be array with 10 numbers';
            }
        }
        $temp1 = '';
        $temp2 = '';
        $temp3 = '';
        for ($i=0; $i<10; $i++) {
            if ($i<3){
                $temp1[$i]=$a[$i];
            } elseif ($i<6){
                $temp2[$i]=$a[$i];
            } else {
                $temp3[$i]=$a[$i];
            }
        }
        $number = "($temp1) $temp2-$temp3";
        return $number; 
    } else {
        return 'ERROR - Input must be array with 10 numbers';
    }
}

// 38. Parašyti funkciją pirminisSkaicius. Funkcija turi vieną kintamąjį. Turi būti patikrinimas, kad kintamasis yra skaičius. Funkcija turi grąžinti ar pateiktas skaičius yra pirminis( pirminis skaičius yra tas, kuris dalinasi tik iš savęs ir tik iš vieneto be liekanos.)
echo '<br> <b>Trisdešimt aštuntas</b> <br>';

function prime ($a) {
    if (is_int($a)) {
        if ($a<2) {
            return 'Number is not a prime';
        } else {
            for ($i=2; $i<$a; $i++) {
                if ($a%$i==0) {
                    return 'Number is not a prime';
                }
            }
            return 'Number is prime';
        }
    }
}


?>