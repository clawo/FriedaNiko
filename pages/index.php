
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
</head>

<body>
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
    <p class="location-heading">WIR SIND VOLLER VORFREUDE, MIT EUCH UNSEREN SCHÖNSTEN MOMENT ZU FEIERN.</p>
    <div class="location-container">
      <div class="location-dates">
        <p class="date-large">01. Juni 2026<br>bis<br>04. Juni 2026</p>
      </div>
      <div class="location-info">
        <h2>Location</h2>
        <p>Masia Villa<br>Santa Cristina d’Aro, Spanien</p>
      </div>
    </div>
  </section>

  <section id="anreise" class="anreise-section">
    <h2>Anreise</h2>
    <div class="anreise-grid">
      <img src="../Images/Anreise.png" alt="Karte" />
      <img src="../Images/fliesen.png" alt="Location" />
    </div>
    <p class="anreise-text">Für die Anreise gibt es mehrere Möglichkeiten. Der nächstgelegene Flughafen ist Girona (ca. 30 min).</p>
    <ul class="anreise-liste">
      <li><strong>Von Girona:</strong> Mietwagen, Bus oder Taxi</li>
      <li><strong>Von Barcelona:</strong> ca. 1:15 h mit Auto</li>
    </ul>
  </section>

  <section id="unterkunft" class="unterkunft-section">
    <h2>Unterkunft</h2>
    <div class="unterkunft-block">
      <img src="../Images/Unterkunft.png" alt="Unterkunft" class="unterkunft-img"/>
      <div class="unterkunft-text">
        <h3>Schlafplätze vor Ort</h3>
        <p>Unsere Unterkunft bietet vor Ort Schlafplätze für bis zu 40 Personen.</p>
        <p>Bitte gebt im RSVP-Formular an, ob ihr einen Schlafplatz benötigt.</p>
      </div>
    </div>
  </section>

  <section id="faq" class="faq-section">
    <h2>FAQ</h2>
    <div class="faq-box">
      <details><summary>DRESSCODE?</summary><p>Festlich sommerlich – gerne mit Farbakzent.</p></details>
      <details><summary>AB WANN KANN ICH ANREISEN?</summary><p>Ab dem 01. Juni nachmittags.</p></details>
      <details><summary>DETAILS ZUM ABEND DAVOR</summary><p>Es wird ein entspanntes Get-Together geben.</p></details>
      <details><summary>02. JUNI 2026</summary><p>Hochzeitstag – ganztägig.</p></details>
      <details><summary>GASTGESCHENKE?</summary><p>Nur eure Gesellschaft zählt ♥</p></details>
    </div>
  </section>

  <section id="rsvp" class="rsvp-section">
    <h2>RSVP</h2>
    <div class="rsvp-box">
      <p>Bitte gebt uns bis zum 30. September 2025 Bescheid, ob ihr kommen könnt.</p>
      <ul>
        <li>Essenspräferenz: Fleisch / Vegetarisch / Vegan</li>
        <li>Schlafplatz gewünscht: ja/nein</li>
      </ul>
    </div>
  </section>

  <section class="musik-section">
    <h2>Musikwunsch</h2>
    <form action="../Musikwunsch/musik.php" method="POST">
      <label for="song">Songtitel:</label>
      <input type="text" name="song" id="song" required>
      <label for="artist">Interpret:</label>
      <input type="text" name="artist" id="artist" required>
      <button type="submit">Senden</button>
    </form>
  </section>
</body>
</html>
