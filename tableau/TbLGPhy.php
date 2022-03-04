<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesure Physique</title>
    <link rel='stylesheet' type='text/css' href='style/style.php' />
</head>
    <body>
        <?php // Ouverture du fichier contenant les données
	        $FValeur = fopen("data/data.txt","r"); 
        ?>
            <div class="page">
                <div class="haut">
                    <div class="logo">
                        <img src="img/domo.png" alt="">
                    </div>  
                    <div class="banner">Mesures physiques - Domotique</div>
                </div>
            
                <div class="centre">
                    <div class="content">
                        Les mesures de température, d'humidité et de pression sont réalisées par un capteur BME280 (<a href="https://www.sparkfun.com/" target="_blank">Sparfun</a>)<br>
                        <ul>
                            <li>Température : de -40°C à 85°C, +/- 1°C</li>
                            <li>Humidité : de 0 à 100% HR, +/-3%</li>
                            <li>Pression : 30kPa à 110kPa, +/-1hPa</li>
                        </ul>
                        <br>
                            La mesure de luminosité est réalisé par un capteur BH1750(<a href="https://www.dfrobot.com/" target="-blank">DFRobot</a>).<br>
                        <ul>
                            <li>Plage de mesure : 0 a 65539 lux</li>
                            <li>Précision : 1.2 lux</li>
                            <br>
                                Le template est affichable a partir de ce <a href="https://www.google.com/search?channel=crow5&client=firefox-b-d&q=template" target="-blank">lien</a>
                        </ul>
                    </div>
                    <div class="aside">
                        <table>
                            <tr>
                                <td>Mesures</td>
                                <td>Valeur</td>
                                <td>Unité</td>
                            </tr>
                            <tr>
                                <td>Température</td>
                                <td>
                                <?php
				                    $Temp = fgets($FValeur,10); // $Temp <- première valeur de $FValeur
				                    echo "$Temp"; // Affichage de la valeur mémorisée dans $Temp
			                    ?>	   
                                </td>
                                <td>°C</td>
                            </tr>
                            <tr>
                                <td>Humidité</td>
                                <td>
                                <?php
				                    $Humid = fgets($FValeur,10);
				                    echo "$Humid";
			                    ?>
                                </td>
                                <td>%</td>
                            </tr>
                            <tr>
                                <td>Luminosité</td>
                                <td>
                                <?php
				                    $Lum = fgets($FValeur,10);
				                    echo "$Lum";
				                ?>
                                </td>
                                <td>lux</td>
                            </tr>
                            <tr>
                                <td>Pression</td>
                                <td>
                                <?php
				                    $Pres = fgets($FValeur,10);
				                    echo "$Pres";
				                ?>
                                </td>
                                <td>hpa</td>
                            </tr>
                        </table>
                    </div>
                </div>
            
                <div class="footer">Belliard - Arnaud - TSTI2D2 - SIN - 2 Rue du Lycée, 74150 Rumilly ( <a href="https://albanais.ent.auvergnerhonealpes.fr/" target="_blank"> Lycée de l'Albanais</a>)</div>
            </div>
    </body>
</html>