<?php
// --------- PHPMailer einbinden (manuell, keine Composer-Nutzung nötig) ---------
class PHPMailer {
    public $Host, $SMTPAuth, $Username, $Password, $SMTPSecure, $Port;
    public $From, $FromName, $Subject, $Body;
    private $to = [];
    public $isHTML = false;

    public function isSMTP() {}
    public function setFrom($from, $name = '') { $this->From = $from; $this->FromName = $name; }
    public function addAddress($address) { $this->to[] = $address; }
    public function isHTML($bool) { $this->isHTML = $bool; }
    public function send() {
        $headers  = "From: {$this->FromName} <{$this->From}>\r\n";
        $headers .= "Reply-To: {$this->From}\r\n";
        $headers .= "Content-Type: " . ($this->isHTML ? "text/html" : "text/plain") . "; charset=utf-8\r\n";

        foreach ($this->to as $recipient) {
            if (!mail($recipient, $this->Subject, $this->Body, $headers)) {
                throw new Exception("E-Mail konnte nicht gesendet werden.");
            }
        }
        return true;
    }
}

$error = "";
$rsvpError = "";
// MUSIKWUNSCH HANDLING
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["song"]) && isset($_POST["artist"])) {
    $song = strip_tags(trim($_POST["song"]));
    $artist = strip_tags(trim($_POST["artist"]));

    try {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.ionos.de';
        $mail->SMTPAuth = true;
        $mail->Username = 'frieda.niko@friedaniko.de';
        $mail->Password = 'Stego933!';  // <<< Passwort hier eintragen
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('frieda.niko@friedaniko.de', 'Musikwunsch');
        $mail->addAddress('clara131@gmx.de');
        $mail->isHTML(false);
        $mail->Subject = 'Neuer Musikwunsch';
        $mail->Body = "Neuer Musikwunsch erhalten:\n\n🎵 Song: $song\n👤 Artist: $artist";

        $mail->send();
        header("Location: index.php?success=1");
        exit();
    } catch (Exception $e) {
        $error = "Fehler beim Senden: " . $e->getMessage();
    }
}

// RSVP HANDLING
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["rsvp_submit"])) {
    $essen = strip_tags(trim($_POST["essen"]));
    $allergien = strip_tags(trim($_POST["allergien"]));
    $unterkunft = strip_tags(trim($_POST["unterkunft"]));

    try {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.ionos.de';
        $mail->SMTPAuth = true;
        $mail->Username = 'frieda.niko@friedaniko.de';
        $mail->Password = 'Stego933!';  // <<< Passwort hier eintragen
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('frieda.niko@friedaniko.de', 'RSVP');
        $mail->addAddress('clara131@gmx.de');
        $mail->isHTML(false);
        $mail->Subject = 'Neue RSVP-Rückmeldung';
        $mail->Body = "Neue Rückmeldung erhalten:\n\n"
                    . "1. Ernährung: $essen\n"
                    . "2. Allergien/Unverträglichkeiten: $allergien\n"
                    . "3. Unterkunft/Freiwilliger Beitrag: $unterkunft";

        $mail->send();
        header("Location: index.php?rsvp=success");
        exit();
    } catch (Exception $e) {
        $rsvpError = "Fehler beim Senden der RSVP: " . $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Frieda & Niko</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Quicksand:wght@400;500&display=swap" rel="stylesheet" />


  <!-- CSS -->
  <link rel="stylesheet" href="../style/styleHeader.css" />
  <link rel="stylesheet" href="../style/styleHomepage.css"/>
<!-- Header -->
  
</head>

<header>
<div class="logo">Niko &amp; Frieda</div>
    <button class="menu-toggle" aria-label="Menü öffnen">&#9776;</button>
    <nav id="nav-menu">
      <a href="#home">HOME</a>
      <a href="#anreise">ANREISE</a>
      <a href="#unterkunft">UNTERKUNFT</a>
      <a href="#faq">FAQ</a>
      <a href="#rsvp">RSVP</a>
    </nav>

    
</header>

<body>

<section id="home" class="hero">
    <div class="image-row">
      <img src="../Images/Foto 1.png" alt="Bild 1" />
      <img src="../Images/Foto 2.png" alt="Bild 2" />
      <img src="../Images/Foto 3.png" alt="Bild 3" />
      <img src="../Images/Foto 4.png" alt="Bild 4" />
    </div>
    <div class="overlay-text">Wir heiraten!</div>
    <div class="date-text">02.06.2026</div>
  </section>

  <section class="location-section">
  <p class="location-heading">
    WIR SIND VOLLER VORFREUDE, MIT EUCH UNSEREN SCHÖNSTEN MOMENT ZU FEIERN.
  </p>

  <div class="location-container">
    <div class="location-dates">
      <p class="date-large">01. Juni 2026</p>
      <p class="bis-text">bis</p>
      <p class="date-large">04. Juni 2026</p>
    </div>
    <div class="vertical-divider"></div>
    <div class="location-address">
      <h2 class="location-title">Location</h2>
      <p>
        <a href="https://www.mashuix.com/de/" target="_blank" rel="noopener noreferrer">
          MAS HUIX<br>
          17430<br>
          SANTA COLOMA DE FARNERS<br>
          SPANIEN
        </a>
      </p>
    </div>
  </div>
</section>

<section id="anreise" class="anreise-section">
  <!-- HELLBLAU OBEN -->
  <div class="anreise-hellblau">
    <div class="anreise-wrapper">
      <div class="anreise-top">
        <div class="karte-hintergrund">
          <div class="karte-box">
            <h3 class="karte-title">Karte</h3>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.0797841992683!2d2.585222176679964!3d41.87987807122627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12bb2830397b89c3%3A0xe3be06fac6669d39!2sMas%20Huix%20Allotjament%20Rural!5e0!3m2!1sde!2ses!4v1715700000000"
              width="100%"
              height="300"
              style="border:0;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <a
              class="koordinaten-link"
              href="https://www.google.es/maps/place/Mas+Huix+Allotjament+Rural/@41.8798779,2.5874176,17z/"
              target="_blank">
              41.876921, 2.607705
            </a>
          </div>
        </div>
        <div class="anreise-image">
          <img src="../Images/Anreise.png" alt="Mas Huix" />
        </div>
      </div>
    </div>
  </div>

  <!-- DUNKELBLAU UNTEN -->
  <div class="anreise-dunkelblau">
    <div class="anreise-wrapper">
      <div class="anreise-info">
        <h2 class="anreise-title">Anreise</h2>
        <p class="anreise-subtitle">
          Für die Anreise gibt es mehrere Möglichkeiten. Ihr könnt über die Flughäfen<br>
          Girona oder Barcelona anreisen.
        </p>

        <div class="anreise-details">
          <div class="anreise-block">
            <h3>VON GIRONA:</h3>
            <ul>
              <li>MIT DEM AUTO ODER TAXI – CA. 30 MINUTEN</li>
              <li>MIT DEM BUS (2× UMSTEIGEN) + TAXI – CA. 1,5 STUNDEN</li>
            </ul>
          </div>
          <div class="anreise-block">
            <h3>VON BARCELONA:</h3>
            <ul>
              <li>MIT DEM AUTO ODER TAXI – CA. 30 MINUTEN</li>
              <li>MIT DEM BUS – CA. 2 STUNDEN</li>
            </ul>
          </div>
        </div>

        <p class="anreise-pdf-hinweis">
  ALLE DETAILS FINDET IHR IN DER
  <a href="../PDF/Informationen zur Anreise.pdf" target="_blank" class="pdf-link">
    PDF MIT DEN ANREISEINFOS
  </a>.
</p>
      </div>
    </div>
  </div>
</section>

<section id="unterkunft" class="unterkunft-section">
  <div class="unterkunft-wrapper">

    <div class="unterkunft-bild-wrapper">
    <img src="../Images/Unterkunft.png" alt="Zimmer mit Bett in Mas Huix" class="unterkunft-bild" />
    </div>

    <div class="unterkunft-inhalt">
      <h2 class="unterkunft-titel">Schlafplätze vor Ort</h2>
      <div class="unterkunft-box">
        <p>
          UNSERE HOCHZEITSLOCATION STEHT UNS FÜR 3 NÄCHTE ZUR VERFÜGUNG, <strong>VOM 01.06.2026 BIS ZUM 04.06.2026</strong>.
        </p>
        <p>CHECK-IN: AM 01.06.2026, UM 18:00 UHR</p>
        <p>CHECK-OUT: AM 04.06.2026, UM 08:00 UHR</p>
      </div>

      <div class="unterkunft-text">
        <p>
        DAMIT ALLE VON EUCH MIT UNS FEIERN KÖNNEN, HABEN WIR UNS ENTSCHIEDEN, DIE KOSTEN FÜR DIE UNTERKUNFT NICH FEST ZU BERECHNEN, SONDERN ZU ÜBERNEHMEN UND AUF FREIWILIGER BASIS ANZUBIETEN.
        </p>
        <p>ALS GROBE ORIENTIERUNG: DIE DREI ÜBERNACHTUNGEN KOSTEN UNS ETWA 185 € PRO GAST.</p>
        <p>
          DAS IST NATÜRLICH KEIN PFLICHTBETRAG, SONDERN EINFACH EIN RICHTWERT. WENN IHR UNS UNTERSTÜTZEN MÖCHTET, ABER NICHT GENAU WISST, WIE VIEL – FÜHLT EUCH BITTE VÖLLIG FREI, DAS ZU GEBEN, WAS FÜR EUCH MACHBAR IST. AUCH EIN KLEINERER BEITRAG IST ABSOLUT WILLKOMMEN.
        </p>
        <p><strong>FÜR UNS ZÄHLT VOR ALLEM, DASS IHR MIT UNS FEIERT!</strong></p>
      </div>
    </div>

  </div>
</section>

<!-- SECTION: FAQ -->
<!-- FAQ Section -->
<section id="faq" class="faq-section">
  <div class="faq-background-box">
    <div class="faq-info">
      <h3>Alternative Unterkunft</h3>
      <p>
        FALLS IHR LIEBER EXTERN ÜBERNACHTEN MÖCHTET, GEBT UNS BITTE RECHTZEITIG BESCHEID,
        DAMIT WIR ENTSPRECHEND PLANEN KÖNNEN.
      </p>
    </div>
    <div class="faq-rsvp"> <h2>RSVP</h2></div>
  </div>

  <div class="faq-content">
    <h2 class="faq-title">FAQ</h2>
    <div class="faq-info-responsive">
      <h3>Alternative Unterkunft</h3>
      <p>
        FALLS IHR LIEBER EXTERN ÜBERNACHTEN MÖCHTET, GEBT UNS BITTE RECHTZEITIG BESCHEID,
        DAMIT WIR ENTSPRECHEND PLANEN KÖNNEN.
      </p></div>
    <div class="accordion">
      <div class="accordion-item">
        <button class="accordion-button">DRESSCODE?</button>
        <div class="accordion-content">
          <p> WIR FREUEN UNS SEHR, UNSERE FAMILIE UND FREUNDE AN UNSEREM GROßEN TAG FESTLICH GEKLEIDET ZU SEHEN</p>
          <p>DA UNSERE FEIER DRAUßEN STATTFINDET, WÜNSCHEN WIR UNS EINEN SOMMERLICH-FESTLICHEN DRESSCODE.BITTE VERMEIDET ALL-WHITE ODER ALL-BLACK OUTFITS.</p>
          <p>WENN IHR EUCH FARBLICH INSPIRIREN LASSEN MÖCHTET:</p>
          <div class="color-palette">
            <span class="swatch" style="background:#C4D6B0"></span>
            <span class="swatch" style="background:#1F4662"></span>
            <span class="swatch" style="background:#26557A"></span>
            <span class="swatch" style="background:#5A85B4"></span>
            <span class="swatch" style="background:#C9D5E2"></span>
            <span class="swatch" style="background:#FDF0AE"></span>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <button class="accordion-button">AB WANN KANN ICH ANREISEN?</button>
        <div class="accordion-content">
          <p>IHR KÖNNT GERNE BEREITS EINEN TAG VORHER, AM 01.06.2026, ANREISEN. DIE CHECK-IN-ZEIT IN DER LOCATION IST AB 18:00 UHR.</p>
          <p>ALTERNATIV KÖNNT IHR AUCH AM HOCHZEITSTAG SELBST ANREISEN – FALLS IHR ERST AM 02.06.2026 IN DER ANREISEN MÖCHTET, SAGT UNS BITTE VORHER BESCHEID.</p>
        </div>
      </div>
      <div class="accordion-item">
        <button class="accordion-button">DETAILS ZUM ABEND DAVOR</button>
        <div class="accordion-content">
          <p>INFOS FOLGEN!</p>
        </div>
      </div>
      <div class="accordion-item">
        <button class="accordion-button">02. JUNI 2026</button>
        <div class="accordion-content">
          <p>INFOS FOLGEN!</p>
        </div>
      </div>
      <div class="accordion-item">
        <button class="accordion-button">GESCHENKE?</button>
        <div class="accordion-content">
          <p>NEIN! ES BEDEUTET UNS SEHR VIEL, DASS IHR UNSEREN TAG MIT UNS FEIERT… EURE ANWESENHEIT IST DAS GRÖßTE GESCHENK!</p>
          <p>WER UNS TROTZDEM EINE FREUDE MACHEN MÖCHTE, DARF SICH GERN FREIWILLIG AN DER UNTERKUNFT BETEILIGEN.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="rsvp">
<div class="rsvp-content-wrapper">
<div class="faq-rsvp-responsive">
  <h2>RSVP</h2>
</div>
  <div class="rsvp-info-box">
    <h3 class="rsvp-column h3">Wann braucht ihr meine Rückmeldung?</h3>
    <p>UM UNSERE HOCHZEIT BESTMÖGLICH PLANEN ZU KÖNNEN UND ALLEN DIENSTLEISTERN RECHZEITIG VERBINDLICHE INFORMATIONEN GEBEN ZU KÖNNEN, BITTEN WIR EUCH, SO FRÜH WIE MÖGLICH BESCHEID ZU GEBEN, OB IHR DABEI SEIN KÖNNT.</p>
    <br>
    <p>WIR BENÖTIGEN EURE ZU- ODER ABSAGE DAHER BIS ZUM <STRONG> 01. SEPTEMBER 2025 </STRONG> </p>
      
      </div>
      <div class="rsvp-right-box">
        <p>WIR FREUEN UNS WENN IHR UNS BEI EURER RÜCKMELDUNG FOLGENDE INFOS MITGEBT:</p>
        <p></p>
          <p>1. ERNÄHRUNGSPRÄFERENZEN – KEINE, VEGETARISCH, VEGAN </p>
          <br>
            <p>2. ALLERGIEN ODER UNVERTRÄGLICHKEITEN – FALLS VORHANDEN</p>
            <br>
        <p>3. GGF. UNTERKUNFT – FREIWILLIGEN BEITRAG</p>
        <br>
        <p> EINE KURZE NACHRICHT PER WHATSAPP REICHT VÖLLIG AUS. WIR FREUEN UNS AUF EURE ANTWORTEN!</p>
      </div>
    </div>
</section>
    <section class="musik-section">
  <div class="musik-wrapper">
    <div class="musik-box-outer">
      <div class="musik-box-inner">
        <h2 class="musik-title">Musikwunsch</h2>
        <p class="musik-subtitle">FÜR DIE PARTY!*</p>

        <form action="index.php" method="POST">
          <label for="song">Song:</label><br>
          <input type="text" id="song" name="song" required><br>
          <label for="artist">Artist:</label><br>
          <input type="text" id="artist" name="artist" required><br>
          <button type="submit">Abschicken</button>
        </form>

<?php if (isset($_GET['success'])): ?>
  <p style="color: green;">Vielen Dank für deinen Musikwunsch!</p>
<?php elseif (!empty($error)): ?>
  <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>

      </div>
    </div>
  </div>
</section>


<button id="scrollToTopBtn" aria-label="Nach oben scrollen">↑ Nach oben</button>

</body>
<script src="../Includes/functions.js"></script>
</html>
