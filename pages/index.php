<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Niko & Frieda – Hochzeit</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Quicksand', sans-serif;
    }
    h1, h2, h3 {
      font-family: 'Great Vibes', cursive;
    }
  </style>
</head>
<body class="bg-[#F8F7F5] text-[#003E6C]">
  <!-- HEADER / HERO -->
  <section id="home" class="relative w-full max-w-[1200px] mx-auto mb-12">
    <div class="text-center py-6">
      <h1 class="text-5xl">Niko & Frieda</h1>
      <nav class="mt-2 space-x-4 text-sm">
        <a href="#home">Home</a>
        <a href="#location">Location</a>
        <a href="#anreise">Anreise</a>
        <a href="#unterkunft">Unterkunft</a>
        <a href="#faq">FAQ</a>
        <a href="#rsvp">RSVP</a>
      </nav>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4">
      <img src="https://via.placeholder.com/300x358" class="w-full h-auto opacity-90" alt="Foto 1">
      <img src="https://via.placeholder.com/300x358" class="w-full h-auto opacity-90" alt="Foto 2">
      <img src="https://via.placeholder.com/300x358" class="w-full h-auto opacity-90" alt="Foto 3">
      <img src="https://via.placeholder.com/300x358" class="w-full h-auto opacity-90" alt="Foto 4">
    </div>
    <div class="text-center mt-10">
      <p class="text-4xl text-[#003E6C]">02.06.2026</p>
      <p class="text-sm text-[#003E6C] mt-2">Wir sind voller Vorfreude, mit euch unseren schönsten Moment zu feiern.</p>
    </div>
  </section>

  <!-- LOCATION -->
  <section id="location" class="max-w-[1200px] mx-auto py-20 px-4">
    <div class="bg-[#003E6C] text-white p-10 rounded-xl text-center relative">
      <h2 class="text-5xl underline mb-4">Location</h2>
      <p class="text-lg mb-4">01. Juni 2026 – 04. Juni 2026</p>
      <p class="text-md">Mas Huix, Santa Coloma de Farners, Spanien</p>
      <img src="https://via.placeholder.com/400x300" alt="Location" class="mx-auto mt-6 rounded-xl">
    </div>
  </section>

  <!-- ANREISE -->
  <section id="anreise" class="max-w-[1200px] mx-auto py-20 px-4 bg-[#003E6C] text-white">
    <div class="grid md:grid-cols-2 gap-8 items-center">
      <div>
        <h2 class="text-5xl underline mb-4">Anreise</h2>
        <p class="mb-4">Mas Huix liegt ca. 90 Minuten von Barcelona entfernt. Vom Flughafen Girona aus sind es nur 30 Minuten.</p>
        <p>Genaue Informationen zu Auto, Zug oder Shuttles folgen mit der Einladung oder auf dieser Seite.</p>
      </div>
      <div>
        <img src="https://via.placeholder.com/400x300" class="rounded-lg" alt="Map">
      </div>
    </div>
  </section>

  <!-- UNTERKUNFT -->
  <section id="unterkunft" class="max-w-[1200px] mx-auto py-20 px-4">
    <h2 class="text-5xl underline mb-6 text-center">Schlafen vor Ort</h2>
    <div class="grid md:grid-cols-2 gap-10 items-center">
      <div>
        <p class="uppercase text-sm mb-2">Check-in: 01.06.2026 um 18:00 Uhr</p>
        <p class="uppercase text-sm mb-2">Check-out: 04.06.2026 um 08:00 Uhr</p>
        <p class="uppercase text-sm">Falls ihr lieber extern übernachten möchtet, gebt uns bitte rechtzeitig Bescheid.</p>
      </div>
      <div>
        <img src="https://via.placeholder.com/500x300" class="rounded-full" alt="Zimmer">
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="max-w-[1200px] mx-auto py-20 px-4 bg-[#003E6C] text-white">
    <h2 class="text-5xl underline text-center mb-10">FAQ</h2>
    <div class="space-y-4">
      <details class="bg-white text-[#003E6C] p-4 rounded-lg">
        <summary class="cursor-pointer text-lg font-bold">Dresscode</summary>
        <p class="mt-2">Festlich, aber bitte keine High Heels – wir feiern auch draußen.</p>
      </details>
      <details class="bg-white text-[#003E6C] p-4 rounded-lg">
        <summary class="cursor-pointer text-lg font-bold">Was ist mit Geschenken?</summary>
        <p class="mt-2">Euer Kommen ist das schönste Geschenk. Wer dennoch etwas geben möchte: Wir freuen uns über einen kleinen Beitrag zur Reise!</p>
      </details>
      <details class="bg-white text-[#003E6C] p-4 rounded-lg">
        <summary class="cursor-pointer text-lg font-bold">Was passiert am Abend vorher?</summary>
        <p class="mt-2">Am Vorabend laden wir euch zu einem entspannten Get-together ein – Infos folgen.</p>
      </details>
    </div>
  </section>

  <!-- RSVP (Responsiv & Gestaltet) -->
  <section id="rsvp" class="relative py-20 px-4 bg-[#F8F7F5] overflow-hidden">
    <div class="absolute inset-0 bg-[url('/assets/fliesen2.0.png')] bg-cover opacity-10"></div>
    <div class="relative max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
      <!-- Linke Box -->
      <div class="bg-[#003E6C] rounded-[45px] p-8 shadow-lg text-white">
        <h2 class="text-4xl lg:text-5xl mb-4 font-script underline text-center">Wann braucht ihr meine Rückmeldung?</h2>
        <p class="text-sm tracking-widest uppercase text-center leading-relaxed">
          Um unsere Hochzeit bestmöglich planen zu können, bitten wir euch um eine Zu- oder Absage bis zum:<br>
          <strong class="text-yellow-300 block text-xl mt-2">01. September 2025</strong>
        </p>
        <div class="mt-8 text-sm tracking-widest uppercase">
          <p class="mb-2">Wir freuen uns, wenn ihr uns bei eurer Rückmeldung folgende Infos mitgebt:</p>
          <ul class="list-disc list-inside space-y-1">
            <li>Ernährungspräferenzen – vegetarisch / vegan / keine</li>
            <li>Allergien oder Unverträglichkeiten</li>
            <li>GGF. Unterkunft / freiwilliger Beitrag</li>
          </ul>
        </div>
      </div>
      <!-- Rechte Box mit Formular -->
      <div class="relative">
        <div class="absolute inset-0 bg-[url('/assets/fliesen2.0.png')] rounded-[45px] border border-[#003E6C] z-0"></div>
        <div class="relative bg-[#F8F7F5] rounded-[45px] p-8 z-10 shadow-lg">
          <h3 class="text-5xl text-[#003E6C] mb-2 font-script text-center">Musikwunsch</h3>
          <p class="text-xs uppercase tracking-wider text-center mb-4">für die Party!</p>
          <form class="space-y-4">
            <input type="text" placeholder="Song" class="w-full p-2 border border-gray-300 rounded text-sm uppercase">
            <input type="text" placeholder="Artist" class="w-full p-2 border border-gray-300 rounded text-sm uppercase">
            <p class="text-xs text-center text-[#003E6C] tracking-widest uppercase">*pro Gast ein Lied</p>
            <button type="submit" class="w-full mt-4 bg-[#003E6C] text-white py-2 rounded hover:bg-[#002d4f] text-sm uppercase tracking-widest">Absenden</button>
          </form>
          <p class="mt-6 text-xs text-center uppercase text-[#003E6C] tracking-wider">Eine kurze Nachricht per WhatsApp reicht völlig aus. Wir freuen uns auf eure Antworten!</p>
        </div>
      </div>
    </div>
  </section>

</body>
</html>