<html>
    <title> introduction </title>
    <body>
        <?php
        /*
       // create variable
        $x="10";
        $y="20";
        echo "$x"
        echo "$y"
        */
        //hadda kuwaan malahan isbees ama sadar cusub
/*
        $Magac="Abdisamad";
         // waa iikalagooy sadarka 
        $AaabahaMagaca="Ali";
     echo "$Magac" , "$AaabahaMagaca"; //qaabkan usoo bandhig ama 
        //qaabkan waaa ayadoo laqorayo labo sadar marki laso bandhigayo
        echo "<br>"; //Sadar Cusub
        echo "$Magac";
        echo "<br>";
        echo "$AaabahaMagaca";

*/

        
    //use when you want new line (isticmaal markaad donayso inuu kalajaro qoraalka) v Two Numbers 
    echo "<br>";

    /*
    $A=10;
    $A+=20;
    echo "$A";

    */

    //Create Function
//this funciton he tells the time and date 
    function TellTime($timestamp){
        return date("l,F,js,Y",$timestamp);
    }
    echo TellTime(time());

        ?>
        </body>