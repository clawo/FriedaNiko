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
          Alle Details findet ihr in der PDF mit den Anreiseinfos.
        </p>
      </div>
    </div>
  </div>
</section>


 

</body>
</html>
