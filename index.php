<html>
    <head>
    </head>
    <body>
        // Hier echo ik iets op mijn scherm
        <?php echo "<h1>Dit is mijn website</h1>"; ?>

        <?php 
        $naam ='Thomas';
        $leeftijd = 21;
        $lengte =1.85;
        $woonplaats = 'Den Haag';
        echo $naam;  
        ?>
        
        <?php
        echo sprintf('ik ben %s, ik ben %s jaar oud en ben %s m lang en ik woon in %s', $naam, $leeftijd,$lengte,$woonplaats);
        ?>

        <img src="assets/images/download.jpg">
    </body>
</html>


