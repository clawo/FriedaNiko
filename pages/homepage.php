<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Frieda & Niko</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Quicksand:wght@400;500&display=swap" rel="stylesheet" />


  <!-- CSS -->
  <link rel="stylesheet" href="style/styleHeader.css" />
  <link rel="stylesheet" href="../style/styleHomepage.css"/>
<!-- Header -->
  <?php include '../Includes/header.php'; ?>
</head>

<body>

<section class="hero">
    <div class="image-row">
      <img src="../Images/Bild1.png" alt="Bild 1" />
      <img src="../Images/Bild2.png" alt="Bild 2" />
      <img src="../Images/Bild3.png" alt="Bild 3" />
      <img src="../Images/Bild4.png" alt="Bild 4" />
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

<section class="anreise-section">
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
            <h3>Von Girona:</h3>
            <ul>
              <li>Mit dem Auto oder Taxi – ca. 30 Minuten</li>
              <li>Mit dem Bus (2× Umsteigen) + Taxi – ca. 1,5 Stunden</li>
            </ul>
          </div>
          <div class="anreise-block">
            <h3>Von Barcelona:</h3>
            <ul>
              <li>Mit dem Auto oder Taxi – ca. 1,5 Stunden</li>
              <li>Mit dem Bus – ca. 2 Stunden</li>
            </ul>
          </div>
        </div>

        <p class="anreise-pdf-hinweis">
  Alle Details findet ihr in der
  <a href="../PDF/Informationen zur Anreise.pdf" target="_blank" class="pdf-link">
    PDF mit den Anreiseinfos
  </a>.
</p>
      </div>
    </div>
  </div>
</section>

<section class="unterkunft-section">
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
          DAMIT ALLE VON EUCH MIT UNS FEIERN KÖNNEN, HABEN WIR UNS ENTSCHIEDEN, DIE KOSTEN FÜR DIE UNTERKUNFT NICHT FEST ZU BERECHNEN, SONDERN AUF FREIWILLIGER BASIS ANZUBIETEN.
        </p>
        <p><strong>ALS GROBE ORIENTIERUNG: DIE DREI ÜBERNACHTUNGEN KOSTEN UNS ETWA 185 € PRO GAST.</strong></p>
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
<section class="faq-section">
  <div class="faq-background-box">
    <div class="faq-info">
      <h3>Alternative Unterkunft</h3>
      <p>
        FALLS IHR LIEBER EXTERN ÜBERNACHTEN MÖCHTET, GEBT UNS BITTE RECHTZEITIG BESCHEID,
        DAMIT WIR ENTSPRECHEND PLANEN KÖNNEN.
      </p>
    </div>
    <div class="faq-rsvp-heading">RSVP</div>
  </div>

  <div class="faq-content">
    <h2 class="faq-title">FAQ</h2>
    <div class="accordion">
      <div class="accordion-item">
        <button class="accordion-button">DRESSCODE?</button>
        <div class="accordion-content">
          <p>WIR FREUEN UNS SEHR, UNSERE FAMILIE UND FREUNDE AN UNSEREM GROSSEN TAG FESTLICH GEKLEIDET ZU SEHEN.</p>
          <p>DA UNSERE FEIER DRAUSSEN STATTFINDET, WÜNSCHEN WIR UNS EINEN SOMMERLICH-FESTLICHEN DRESSCODE – SCHICK, ABER DEM WETTER UND DER ENTSPANNTEN ATMOSPHÄRE ENTSPRECHEND. BITTE VERMEIDET ALL-WHITE ODER ALL-BLACK OUTFITS.</p>
          <p>WENN IHR EUCH FARBLICH INSPIRIEREN LASSEN MÖCHTET:</p>
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
        <button class="accordion-button">GASTGESCHENKE?</button>
        <div class="accordion-content">
          <p>NEIN! ES BEDEUTET UNS SEHR VIEL, DASS IHR UNSEREN TAG MIT UNS FEIERT… EURE ANWESENHEIT IST DAS GRÖßTE GESCHENK!</p>
          <p>WER UNS TROTZDEM EINE FREUDE MACHEN MÖCHTE, DARF SICH GERN FREIWILLIG AN DER UNTERKUNFT BETEILIGEN.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="rsvp">
<div class="rsvp-banner">
  <div class="rsvp-banner-inner">
    <h2>Rsvp</h2>
  </div>
</div>
    <div class="rsvp-info">
      <p>Wir freuen uns, wenn ihr uns bei eurer Rückmeldung folgende Infos mitgebt:</p>
      <ol>
        <li>Ernährungspräferenzen – keine, vegetarisch, vegan</li>
        <li>Allergien oder Unverträglichkeiten – falls vorhanden</li>
      </ol>
      <p>Ggf. Unterkunft – freiwilligen Beitrag</p>
    </div>

    <div class="rsvp-music-box">
      <h3>Musikwunsch</h3>
      <p>Für die Party!*</p>
      <form>
        <label for="song">Song:</label><br>
        <input type="text" id="song" name="song"><br>
        <label for="artist">Artist:</label><br>
        <input type="text" id="artist" name="artist">
      </form>
      <p class="note">*Pro Gast ein Lied</p>
    </div>

    <p class="rsvp-footer">
      Eine kurze Nachricht per WhatsApp reicht völlig aus. Wir freuen uns auf eure Antworten!
    </p>
  </div>
</section>


<!-- RSVP SECTION END -->


</body>
<script src="../Includes/functions.js"></script>
</html>
