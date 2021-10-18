<!doctype HTML>
<html lang="">

<head>
    <title>Mathefunktionen</title>
    <meta charset="UTF-8">

</head>
<body>

<form method="post" action="<?php echo$_SERVER["PHP_SELF"]; ?>">
    <label><input type="text" name="Zahl[]" /></label>
    <label><input type="text" name="Zahl[]"  /></label>
    </br>
    <input type="submit"/>
    <a href="Aufgabe_A_PB.php"><label>Zurücksetzen</label></a>
</form>
<?php
if(empty($_POST["Zahl"])){
    echo "Bitte eine Eingabe tätigen!";
}
else {
    $Zahlen = $_POST["Zahl"];

    class Aufgaben
    {
        private $Zahl1;
        private $Zahl2;

        public function __construct($Zahl1, $Zahl2)
        {
            $this->Zahl1 = $Zahl1;
            $this->Zahl2 = $Zahl2;
        }

        public function addition()
        {
            return $this->Zahl1 + $this->Zahl2;
        }

        public function quadrat()
        {
            return pow($this->Zahl1, 2);
        }

        public function Pruefen()
        {
            if ($this->Zahl1 < 0 || $this->Zahl2 < 0) {
                $a = false;
            } else {
                $a = true;
            }
            return var_dump($a);
        }

        public function Fakultaet()
        {
            $fakul = 1;
            for ($i = 1; $i <= $this->Zahl1; $i++) {
                $fakul *= $i;
            }
            return $fakul;
        }
    }

    $Loesung = new Aufgaben($Zahlen[0], $Zahlen[1]);
    echo "Die Zahl bei Aufgabe a ist: " . $Loesung->addition();
    echo "</br>";
    echo "Die Zahl bei Aufgabe b ist: " . $Loesung->quadrat();
    echo "</br>";
    echo "Der bool ist: ";
    $Loesung->Pruefen();
    echo "</br>";
    echo "Die Fakultät ist: " . $Loesung->Fakultaet();

}





?>







</body>






</html>