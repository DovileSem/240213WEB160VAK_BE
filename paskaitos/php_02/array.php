<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP paskaita 02</title>
</head>
<body>

    <h1><?php echo 'PHP Paskaita 02'; ?></h1>

    <p>Tomas</p>
    <p>Pavelas</p>
    <p>Kazimiras</p>

    <?php

        $susirinkusieji = ['Tomas', 'Dovilė', 'Pavelas', 'Donatas', 'Vytautas', 'Kazimiras'];
        // $masyvas = array();

        // Pridėti į masyvą naują reikšmę
        $susirinkusieji[] = 'Paulius';

        print_r($susirinkusieji);

        echo '<br>';

        echo $susirinkusieji[4];

        $susirinkusieji[5] = 'Rasa';

        echo '<br>';

        print_r($susirinkusieji);


        $darbuotojai = [
            'Tomas' => 'Jarmolovskis',
            'Dovilė' => 'Semaskiene',
            'Donatas' => 'Jonaitis',
        ];

        echo '<br>';
        print_r($darbuotojai);

        echo $darbuotojai['Dovilė'];
        $darbuotojai['Dovilė'] = 'Migle';
        echo '<br>';
        print_r($darbuotojai);

        // Masyvas asociatyvaus masyvo viduje
        $zaidimai = [
            'lauko_zaidimai' => ['Tinklinis', 'Tenisas', 'Futbolas'],
            'vidaus_zaidimai' => ['Krepsinis', 'Badmintonas', 'Rankinis'],
        ];

        echo '<br>';
        //Isvedam masyva pagal asociatyvaus masyvo indeksa
        print_r($zaidimai['vidaus_zaidimai']);
        echo '<br>';

        // Isvedam reiksme pagal asociatyvaus masyvo ir paprasto masyvo indeksa
        print_r($zaidimai['lauko_zaidimai'][2]);

        // Pridedam masyvo reikšmę į asociatyvaus masyvo masyvą
        $zaidimai['vidaus_zaidimai'][] = 'Šachmatai';
        echo '<br>';
        print_r($zaidimai['vidaus_zaidimai']);


        echo '<br>';
        print_r($zaidimai);


        echo '<br>';
        echo count ($zaidimai);

        //Skaiciuojame kiek masyve yra elementu
        echo '<br>';
        echo count ($zaidimai['lauko_zaidimai']);


        //Sujungiame masyvo elementus i viena tekstine eilute su implode funkcija.
        echo '<br>';
        echo implode('-', $zaidimai['vidaus_zaidimai']);
        echo '<br>';
        echo 'Mano megstamiausi lauko zaidimai yra ' . implode(', ', $zaidimai['lauko_zaidimai']). '.';


        //Iskaido sakinio zodzius i masyvo elementus i explode funkcija.
        $sakinioZodziai = explode(' ', 'Mano vardas Petras');
        echo '<br>';
        print_r($sakinioZodziai);



        echo '<br>';

        //Atsitiktine tvarka pakeite elementu eiles tvarka
        $skaiciai = [1, 2, 3, 4, 5, 6, 7, 8, 9,'A','F','K'];
        shuffle($skaiciai);
        print_r(implode('-', $skaiciai));
        echo '<br>';
        print_r(implode('', $skaiciai));

        echo '<br>';
        // Rykiuoja elementus pagal abecele
        asort($susirinkusieji);
        print_r($susirinkusieji);

        rsort($susirinkusieji);
        echo '<br>';
        print_r($susirinkusieji);


        echo '<br>';
        //Iskerpu tam tikra masyvo dali: pirmi du
        $pirmiDu = array_slice($susirinkusieji, 0, 2);
        print_r($pirmiDu);
        
        echo '<br>';
        //Iskerpu tam tikra masyvo dali: paskutiniai du 
        $paskutiniaiDu = array_slice($susirinkusieji, -2, 2);
        print_r($paskutiniaiDu);


        echo '<br>';
        // Įterpti masyvo lementą į konkrečią vietą:
        $naujasMasyvas = array_merge(
            array_slice($susirinkusieji, 0, 3),
            ['Kazimiras'],
            array_slice($susirinkusieji, -4, 4),
        );

        print_r($naujasMasyvas);


    ?>
    
</body>
</html>