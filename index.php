<?php
// Diese Datei ist deine neue Startseite mit PHP-Unterstützung
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Dachfenster in Sachsen – Fachgerechter Austausch, Montage & Service von Dachfenstern in der Region um Dresden, Leipzig und Chemnitz">
<link rel="canonical" href="https://www.dachfenster-sachsen.de/">
  <title>Dachfenster Sachsen</title>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-K6BB2SVXBD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-K6BB2SVXBD');
  </script>
  <!-- Bootstrap CSS (Version 5) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="reviews.css">
</head>
<body>

<!-- WhatsApp Button -->
<a href="https://wa.me/4915123138079" target="_blank" style="
    position:fixed;
    width:60px;
    height:60px;
    bottom:20px;
    right:20px;
    background-color:#25D366;
    color:white;
    border-radius:50px;
    text-align:center;
    font-size:30px;
    box-shadow: 2px 2px 5px #999;
    z-index:1000;
    display:flex;
    align-items:center;
    justify-content:center;
    text-decoration:none;">
    💬
</a>
<!-- Navbar ohne Logo -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <!-- Unternehmensname -->
    <a class="navbar-brand fw-bold" href="index.php">
      dachfenster-<span style="color:#4CAF50;">sachsen.de</span>
    </a>

    <!-- Mobile Menü-Button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menülinks -->
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Startseite</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="impressum.php">Impressum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="datenschutz.php">Datenschutz</a>
        </li>
        <!-- Später erweiterbar -->
        <li class="nav-item">
          <a class="nav-link" href="#kontakt">Kontakt</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar / Header -->
<header class="bg-light py-5">
  <div class="container text-center">
    <h1 class="display-5 fw-bold">Ihr Experte für Dachfenster in Sachsen</h1>
    <p class="lead">Fachgerechter 1-zu-1 Austausch oder Neuöffnungen, Montage und Service - schnell , sauber und zuverlässig</p>
  </div>
</header>

<!-- Einleitung -->
<section class="py-5 bg-light text-center">
  <div class="container">
    <h1 class="fw-bold mb-4">Ihr Experte für Dachfenster in Sachsen</h1>
    <p class="lead mb-5">Fachgerechter 1-zu-1 Austausch oder Neuöffnungen, Montage und Service - schnell , sauber und zuverlässig</p>

    <div class="intro-video ratio ratio-16x9">
      <iframe src="intro.mp4"
              title="FAKRO PreSelect MAX More Space" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- Austausch -->
<section class="bg-light py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-3">1:1 Austausch Ihrer Dachfenster</h2>
    <p>Wir ersetzen Ihr altes Dachfenster fachgerecht durch ein passgenaues Modell – schnell, sauber und ohne aufwendige Umbauten.</p>
    <a href="#kontakt" class="btn btn-success btn-lg shadow">
      📏 Jetzt kostenloses Aufmaß vereinbaren
    </a>
  </div>
</section>

<hr>

<!-- Fakro Vorteile -->
<div class="container py-5">
  <div class="row align-items-center">
    <div class="col-md-7">
      <h2>Warum Fakro Dachfenster?</h2>
      <ul>
        <li>✅ Hervorragende Wärmedämmung</li>
        <li>✅ Modernes Design & hoher Komfort</li>
        <li>✅ Vielfältige Größen & Ausführungen</li>
        <li>✅ Lange Lebensdauer</li>
      </ul>
    </div>
    <div class="col-md-5 text-center">
      <img src="2.png" class="img-fluid" alt="Fakro Dachfenster">
    </div>
  </div>
</div>

<hr>

<!-- Service -->
<div class="container py-5">
  <div class="row align-items-center">
    <div class="col-md-7">
      <h2>Unser Service – Dachfenster-Austausch</h2>
      <ol>
        <li>Kostenlose Beratung vor Ort</li>
        <li>Passendes Fenster auswählen</li>
        <li>Altes Fenster ausbauen</li>
        <li>Neues Fenster montieren</li>
        <li>Entsorgung des Altfensters</li>
      </ol>
      <p>In den meisten Fällen <strong>innerhalb eines Tages</strong> abgeschlossen.</p>
    </div>
    <div class="col-md-5 text-center">
      <img src="1.webp" class="img-fluid" alt="Alexander Krisch">
    </div>
  </div>
</div>

<hr>

<!-- Beispielangebot -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold mb-4 text-center">Beispielangebot</h2>

    <div class="table-responsive">
      <table class="table table-bordered align-middle">
        <thead class="table-dark">
          <tr>
            <th>Position</th>
            <th>Bezeichnung</th>
            <th>Menge</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Schwingfenster U5 ABMX 78x140</td>
            <td>2 ×</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Thermo-Eindeckrahmen EHU-AT 78x140</td>
            <td>2 ×</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Folienanschluss-XDP-SET</td>
            <td>2 ×</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Außenrollladen für Dachfenster FAKRO ARZ Solar</td>
            <td>2 ×</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Fernbedienung ZRH1</td>
            <td>1 ×</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Preisübersicht -->
    <div class="bg-white p-4 rounded shadow-sm mt-4">
      <h4 class="fw-bold">Preisübersicht</h4>
      <p class="mb-1"><strong>Gesamtpreis (exkl. Rabatt):</strong> 4.788 €</p>
      <p class="mb-1"><strong>Förderfähiger Betrag:</strong> 4.788 €</p>
      <p class="mb-1 text-success"><strong>Preis nach Förderung*:</strong> 4.069,80 €</p>
      <p class="mt-3"><small>* Die Förderung hängt von individuellen Voraussetzungen ab. Wir beraten Sie gerne dazu.</small></p>
      <div class="alert alert-success mt-3 mb-0" role="alert">
        💡 <strong>Kostenloser Service:</strong> Wir übernehmen für Sie die vollständige Antragsstellung beim BAFA – schnell und unkompliziert.
      </div>
    </div>
  </div>
</section>
<!-- TÜV NORD geprüfte Fakro Dachfenster mit Video -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">

      <!-- Text -->
      <div class="col-lg-6">
        <h2 class="fw-bold mb-3">TÜV NORD geprüfte Fakro Dachfenster</h2>
        <p>
          Sicherheit, Qualität und Langlebigkeit – ausgewählte Fakro Dachfenster sind
          <strong>TÜV NORD geprüft</strong> und erfüllen höchste Anforderungen an Stabilität, Wärmedämmung und Bedienkomfort.
        </p>
        <p>
          Vertrauen Sie auf geprüfte Qualität, die Ihnen nicht nur eine helle und freundliche Wohnatmosphäre bietet,
          sondern auch langfristig Energie spart und Ihr Zuhause schützt.
        </p>
        <ul class="mb-4">
          <li>Geprüfte Material- und Verarbeitungsqualität</li>
          <li>Optimale Wärmedämmwerte</li>
          <li>Hohe Sicherheitsstandards</li>
        </ul>
        <a href="#kontakt" class="btn btn-success btn-lg">Jetzt beraten lassen</a>
      </div>
      <!-- Bild -->
      <div class="col-lg-6 text-center mb-4 mb-lg-0">
        <img src="fakro.webp" alt="Fakro Tüv Nord"
             class="img-fluid rounded shadow-sm" style="max-height: 350px;">
      </div>
    </div>
  </div>
</section>
<!-- Fakro TopSafe Sicherheitssystem -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">

      <!-- Bild -->
      <div class="col-lg-6 text-center mb-4 mb-lg-0">
        <img src="topsafe.jpg" alt="Fakro TopSafe Sicherheitssystem"
             class="img-fluid rounded shadow-sm" style="max-height: 350px;">
      </div>

      <!-- Text -->
      <div class="col-lg-6">
        <h2 class="fw-bold mb-3">Fakro TopSafe – Mehr Sicherheit für Ihr Zuhause</h2>
        <p>
          Das innovative <strong>TopSafe-System</strong> von Fakro wurde entwickelt, um den Einbruchschutz
          bei Dachfenstern deutlich zu erhöhen. Dank spezieller Verstärkungen und Sicherheitsbeschläge
          wird das Aufhebeln des Fensters erheblich erschwert.
        </p>
        <ul class="mb-4">
          <li>Verstärkte Fensterkonstruktion</li>
          <li>Sicherheitsbeschläge mit hoher Widerstandsklasse</li>
          <li>Schutz vor Aufhebelversuchen</li>
        </ul>
        <p>
          Mit Fakro TopSafe investieren Sie nicht nur in Komfort und Design,
          sondern auch in den wirksamen Schutz Ihres Eigentums.
        </p>
      </div>

    </div>
  </div>
</section>
<!-- Kontakt -->
<section id="kontakt" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">Kontakt & Kostenloses Aufmaß</h2>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <form action="send.php" method="post" class="p-4 border rounded bg-white shadow-sm">
          <div class="mb-3">
            <label for="name">Ihr Name *</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email">E-Mail-Adresse *</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="phone">Telefonnummer</label>
            <input type="tel" class="form-control" id="phone" name="phone">
          </div>
          <div class="mb-3">
            <label for="message">Ihre Nachricht *</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
          </div>
          <!-- Spam-Schutz -->
          <div class="mb-3">
            <label for="antispam">Sicherheitsfrage: Wieviel ist 5 + 3? *</label>
            <input type="number" class="form-control" id="antispam" name="antispam" required>
          </div>
          <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" id="privacy" required>
            <label class="form-check-label" for="privacy">
              Ich stimme der <a href="datenschutz.html" target="_blank">Datenschutzerklärung</a> zu.
            </label>
          </div>
          <button type="submit" class="btn btn-success btn-lg w-100">📩 Nachricht senden</button>
        </form>
      </div>
    </div>
  </div>
</section>

        <div class="reviews-container">
            <div class="reviews-slider" id="reviewsSlider">
                <!-- Slide 1 -->
                <div class="review-slide">
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-avatar avatar-green">G</div>
                            <div class="reviewer-info">
                                <div class="reviewer-name">Gerhard Lenz</div>
                                <div class="review-date">vor 7 Monaten</div>
                            </div>
                            <svg class="google-icon" viewBox="0 0 24 24" fill="#4285f4">
                            <svg class="google-icon" viewBox="0 0 24 24" fill="#4285f4">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                            </svg>
                        </div>
                        <div class="review-rating">★★★★★</div>
                        <div class="review-text">Von Anfang bis Ende 6 von 5 Sternen. Preis ist gut, Bafa hat bezahlt, alle Gespräche waren sehr freundlich und kompetent.</div>
                    </div>

                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-avatar avatar-orange">W</div>
                            <div class="reviewer-info">
                                <div class="reviewer-name">Wilfried Pedd</div>
                                <div class="review-date">vor 8 Monaten</div>
                            </div>
                            <svg class="google-icon" viewBox="0 0 24 24" fill="#4285f4">
                            <svg class="google-icon" viewBox="0 0 24 24" fill="#4285f4">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                            </svg>
                        </div>
                        <div class="review-rating">★★★★★</div>
                        <div class="review-text">Die Monteure haben fachkundig ihre Arbeit erledigt und den Arbeitsplatz sauber verlassen. Sie waren freundlich und hilfsbereit.</div>
                    </div>

                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-avatar avatar-teal">W</div>
                            <div class="reviewer-info">
                                <div class="reviewer-name">Wolfgang Oster</div>
                                <div class="review-date">vor 8 Monaten</div>
                            </div>
                            <svg class="google-icon" viewBox="0 0 24 24" fill="#4285f4">
                            <svg class="google-icon" viewBox="0 0 24 24" fill="#4285f4">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                            </svg>
                        </div>
                        <div class="review-rating">★★★★★</div>
                        <div class="review-text">Nachdem ich mich im Internet umgeschaut und viele Angebote verglichen habe fiel die Entscheidung auf die Firma KRONMAT.</div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="review-slide">
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-avatar avatar-purple">M</div>
                            <div class="reviewer-info">
                                <div class="reviewer-name">Michael Braun</div>
                                <div class="review-date">vor 9 Monaten</div>
                            </div>
                            <svg class="google-icon" viewBox="0 0 24 24" fill="#4285f4">
                            <svg class="google-icon" viewBox="0 0 24 24" fill="#4285f4">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                            </svg>
                        </div>
                        <div class="review-rating">★★★★★</div>
                        <div class="review-text">Sehr professionelle Beratung und Ausführung. Das Team war pünktlich, freundlich und hat alles perfekt erklärt. Kann ich nur weiterempfehlen!</div>
                    </div>

                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-avatar avatar-red">S</div>
                            <div class="reviewer-info">
                                <div class="reviewer-name">Sabine Fischer</div>
                                <div class="review-date">vor 10 Monaten</div>
                            </div>
                            <svg class="google-icon" viewBox="0 0 24 24" fill="#4285f4">
                            <svg class="google-icon" viewBox="0 0 24 24" fill="#4285f4">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                            </svg>
                        </div>
                        <div class="review-rating">★★★★★</div>
                        <div class="review-text">Kompetente Beratung von Anfang an. Preis-Leistung stimmt absolut. Gerne wieder!</div>
                    </div>

                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-avatar avatar-green">T</div>
                            <div class="reviewer-info">
                                <div class="reviewer-name">Thomas Klein</div>
                                <div class="review-date">vor 11 Monaten</div>
                            </div>
                            <svg class="google-icon" viewBox="0 0 24 24" fill="#4285f4">
                            <svg class="google-icon" viewBox="0 0 24 24" fill="#4285f4">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                            </svg>
                        </div>
                        <div class="review-rating">★★★★★</div>
                        <div class="review-text">Zuverlässiges Unternehmen. Termintreue, faire Preise und top Qualität. Alles wurde sauber hinterlassen.</div>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <div class="slider-nav prev" onclick="previousSlide()">‹</div>
            <div class="slider-nav next" onclick="nextSlide()">›</div>
        </div>

        <!-- Indicators -->
        <div class="slider-indicators">
            <div class="indicator active" onclick="goToSlide(0)"></div>
            <div class="indicator" onclick="goToSlide(1)"></div>
        </div>
    </div>

    <script>
        let currentSlide = 0;
        const totalSlides = 2;

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }

        function previousSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        }

        function goToSlide(slideIndex) {
            currentSlide = slideIndex;
            updateSlider();
        }

        function updateSlider() {
            const slider = document.getElementById('reviewsSlider');
            const indicators = document.querySelectorAll('.indicator');

            slider.style.transform = `translateX(-${currentSlide * 100}%)`;

            indicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === currentSlide);
            });
        }

        function openGoogleReview() {
        function openGoogleReview() {
            // Hier würden Sie den echten Google Review Link einfügen
            // Hier würden Sie den echten Google Review Link einfügen
            window.open('https://g.page/r/IHRE_GOOGLE_PLACE_ID/review', '_blank');
            window.open('https://g.page/r/IHRE_GOOGLE_PLACE_ID/review', '_blank');
        }

        // Auto-slide alle 8 Sekunden
        setInterval(nextSlide, 8000);

        // Touch/Swipe Support für mobile Geräte
        let startX = 0;
        let endX = 0;

        document.querySelector('.reviews-container').addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });

        document.querySelector('.reviews-container').addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            handleSwipe();
        });

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = startX - endX;

            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    nextSlide();
                } else {
                    previousSlide();
                }
            }
        }
    </script>
<!-- Footer -->
<footer class="bg-dark text-light py-4 mt-5">
  <div class="container text-center">
    <p>Alexander Krisch – Ihr Vertriebspartner in Sachsen</p>
    <p>📞 +49 151 23138079 | ✉️ alexander.krisch@kronmat.de</p>
    <a href="impressum.php" class="text-white me-3">Impressum</a>
    <a href="datenschutz.php" class="text-white">Datenschutzerklärung</a>
    <p class="mt-3 mb-0">&copy; <span id="year"></span> Alexander Krisch</p>
  </div>
</footer>

<script>
  document.getElementById('year').textContent = new Date().getFullYear();
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
