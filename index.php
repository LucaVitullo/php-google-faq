<header style="margin-bottom:50px">
    <img src="img/gughel-marchigiano-macerata-google.jpg" style="width: 20%;" alt="">
    <span>Privacy e Termini</span>
</header>

<?php
include("Faqs.php");





foreach ($Faqs as $key) {
    echo $key['Domanda'];

    if (isset($key['Domanda'])) {
        $Domande    = $key['Domanda'];
        $Risposte = $key['Risposta'];
        echo $Risposte;
    }
}
?>