<!doctype HTML>
<html lang="">

<head>
    <title>Moutrechner</title>
    <meta charset="UTF-8">

</head>
<body>

<form method="post" action="<?php echo$_SERVER["PHP_SELF"]; ?>">
    <label>Schadstoffklasse: <input type="text" name="Zahl[]" /></label>
    <label>Gefahrene Kilometer: <input type="text" name="Zahl[]"  /></label>
    <label>Anzahl der Achsen: <input type="text" name="Zahl[]"  /></label>
    </br>
    <input type="submit"/>
    <a href="Kontrollstrukturen_3_PB.php"><label>Zurücksetzen</label></a>
</form>
<?php

    $Zahlen = $_POST["Zahl"];


class Moutrechner
{
    private $polclass;
    private $dkil;
    private $axis;

    public function __construct($polclass, $dkil, $axis){

        $this->polclass = $polclass;
        $this->dkil = $dkil;
        $this->axis = $axis;

    }

    public function calc (){

        if($this->axis >= "4"){
            switch($this->polclass){

                case $this->polclass == "A":
                    echo "Die Moutgebühr beträgt: " . $this->dkil *= 13.10;
                    echo " ct";
                    break;
                case $this->polclass == "B":
                    echo "Die Moutgebühr beträgt: " . $this->dkil *= 15.20;
                    echo " ct";
                    break;
                case $this->polclass == "C":
                    echo "Die Moutgebühr beträgt: " . $this->dkil *= 16.30;
                    echo " ct";
                    break;
                case $this->polclass == "D":
                    echo "Die Moutgebühr beträgt: " . $this->dkil *= 19.40;
                    echo " ct";
                    break;
                case $this->polclass == "E":
                    echo "Die Moutgebühr beträgt: " . $this->dkil *= 20.40;
                    echo " ct";
                    break;
                case $this->polclass == "F":
                    echo "Die Moutgebühr beträgt: " . $this->dkil *= 21.40;
                    echo " ct";

            }
        }
        elseif ($this->axis <= "3"){
            switch($this->polclass){

                case $this->polclass == "A":
                    echo "Die Moutgebühr beträgt: " . $this->dkil *= 12.50;
                    echo " ct";
                    break;
                case $this->polclass == "B":
                    echo "Die Moutgebühr beträgt: " . $this->dkil *= 14.60;
                    echo " ct";
                    break;
                case $this->polclass == "C":
                    echo "Die Moutgebühr beträgt: " . $this->dkil *= 15.70;
                    echo " ct";
                    break;
                case $this->polclass == "D":
                    echo "Die Moutgebühr beträgt: " . $this->dkil *= 18.80;
                    echo " ct";
                    break;
                case $this->polclass == "E":
                    echo "Die Moutgebühr beträgt: " . $this->dkil *= 19.80;
                    echo " ct";
                    break;
                case $this->polclass == "F":
                    echo "Die Moutgebühr beträgt: " . $this->dkil *= 20.80;
                    echo " ct";
                    break;
                
            }
        }
    }
}

$Test1 = new Moutrechner($Zahlen[0], $Zahlen[1], $Zahlen[2]);
$Test1->calc();
?>
</body>

</html>
