<?php
//Primer 3: Generisanje XML fajla iz baze, u posebnom fajlu

//konekcija ka bazi
require_once "konekcija.php";
// upit koji vraća sve predmete soritrano po ID-ju u rastućem redosledu
$upit = "SELECT* FROM Predmeti ORDER BY asc";

//kreiranje XMLDOM dokumenta
$dom = new DOMDocument("1.0","utf-8");

// dodaje se koreni element napravljenom dokumentu
// odmah ga čuvamo kao promenljivu da bismo joj dodeljivali elemente decu
$predmeti = $dom->appendChild($dom->createElement("predmeti"));

//izvršavanje upita
if (!$rezultat = $mysqli->query($upit)) {
  //ako se upit ne izvrši
  //dodaje se element <greska> u korenom elementu <predmeti>
  $greska = null;
  // dodaje se elementu <greska> sadrzaj cvora
  // pozivamo metodu createTextNode elementa $dom


} else {
  //ako je upit u redu
  if ($rezultat->num_rows > 0) {

    // ako je vraćeno više od 0 redova, tj. ako postoji neki rezultat našeg upita
    // pravimo novu promenljivu $niz i inicijalizujemo prazan niz
    $niz = array();

    // prolazimo kroz rezultat
    while ($red = $rezultat->fetch_object()) {
      // dodaje se element <predmet> u korenom elementu <predmeti>
      // pozivamo metodu createElement elementa $dom

      // dodaje  se <id> element u <predmet>
      // pozivamo metodu createElement elementa $dom

      // dodaje se elementu <id> sadrzaj cvora
      // pozivamo metodu createTextNode elementa $dom

      //dodaje  se <naziv> element u <predmet>
      $naziv = $predmet->appendChild($dom->createElement('naziv'));
      //dodaje se elementu <naziv> sadrzaj cvora
      $naziv->appendChild($dom->createTextNode($red->naziv));

      //dodaje  se <semestar> element u <predmet>
      $semestar = $predmet->appendChild($dom->createElement('semestar'));
      //dodaje se elementu <semestar> sadrzaj cvora
      $semestar->appendChild($dom->createTextNode($red->semestar));

      //dodaje  se <vrsta> element u <predmet>
      $vrsta = $predmet->appendChild($dom->createElement('vrsta'));
      //dodaje se elementu <vrsta> sadrzaj cvora
      $vrsta->appendChild($dom->createTextNode($red->vrsta));

      //dodaje  se <broj_prijavljenih_studenata> element u <predmet>
      $vrsta = $predmet->appendChild($dom->createElement('broj_prijavljenih_studenata'));
      //dodaje se elementu <broj_prijavljenih_studenata> sadrzaj cvora
      $vrsta->appendChild($dom->createTextNode($red->broj_prijavljenih_studenata));
    }
  } else {
    //ako nema rezultata
    //dodaje se element <greska> u korenom elementu <predmeti>
    $greska = $predmeti->appendChild($dom->createElement('greska'));
    //dodaje se elementu <greska> sadrzaj cvora
    $greska->appendChild($dom->createTextNode("Nema unetih predmeta"));
  }
}

//čuvanje XML-a u stringu

//čuvanje XML-a u posebnom fajlu
if(true) {
  echo "<h2>XML fajl podaci.xml je generisan</h2>";
}
//zatvaranje konekcije
$mysqli->close();
