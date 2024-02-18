<?php
if ($_SERVER['REQUEST_URI'] !== '/') {
  header("Location: /");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="canonical" href="https://fcoop.at">
  <title>Services für FoodCoops</title>
  <meta name="description" content="Services für österreichische FoodCoops">
  <style type="text/css">
    html,
    body,
    h1,
    h2 {
      padding: 0;
      margin: 0;
    }

    h1 {
      font-size: 3em;
    }

    h2 {
      color: gray;
    }

    body {
      align-items: center;
      background-image: url(background.jpg);
      background-position: center top;
      background-repeat: no-repeat;
      display: flex;
      font-family: Helvetica, Arial, sans-serif;
      justify-content: center;
    }

    body>div {
      max-width: 50em;
    }

    header,
    main {
      background-color: #fffd;
      padding: 1em;
      margin-top: 1em;
    }

    ul {
      display: flex;
      flex-wrap: wrap;
      list-style: none;
      padding: 0;
    }

    li {
      background: lightgray;
      border: 1px solid gray;
      border-radius: .5em;
      color: gray;
      display: inline-block;
      flex-grow: 1;
      margin: .5em;
      min-width: 15em;
      padding: .5em;
    }

    li>a {
      display: block;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div>
    <header>
      <h1>fcoop.at</h1>
      <h2>Services für österreichische FoodCoops</h2>
    </header>
    <main>
      <p>Die <strong>Arbeitsgruppe Infrastruktur</strong> innerhalb der <strong>IG FoodCoops</strong> betreibt mehrere Services.
        Diese können von <strong>allen</strong> österreichischen FoodCoops genutzt werden, damit sich nicht jede FoodCoop selber darum kümmern muss.
        Mehr Informationen über die IG FoodCoops und deren Arbeitsgruppen gibt es unter <a href="https://foodcoops.at" target="_blank">foodcoops.at</a>.
        Dort finden sich auch Informationen über die Beteiligungsmöglichkeiten für interessierte Personen.
      </p>
      <h3>Zu den Services</h3>
      <p>
      <ul>
        <li><a href="https://tools.foodcoops.at/pads/" target="_blank">Etherpad</a>Kollaborativer Texteditor (wie Piratepad)</li>
        <li><a href="https://calc.foodcoops.at" target="_blank">EtherCalc</a>Kollaborative Tabellenverarbeitung</li>
        <li><a href="https://fcoop.at/admin/" target="_blank">YOURLS</a>URL Shortener (wie bit.ly)</li>
        <li><a href="https://tools.foodcoops.at/polls/" target="_blank">BitPoll</a>Terminfindung & Umfrage (wie Doodle)</li>
        <li><a href="https://cloud.foodcoops.at" target="_blank">Nextcloud</a>Online Speicherplatz (wie Dropbox), Kalender & Videokonferenz</li>
        <li><a href="https://mail.foodcoops.at" target="_blank">Roundcube</a>Webmail-Zugang</li>
        <li><a href="https://forum.foodcoops.at" target="_blank">Discourse</a>Vernetzungsforum</li>
        <li><a href="https://app.foodcoops.at/austria/" target="_blank">Foodsoft Austria</a>IG-Foodsoft für FoodCoop-übergreifende Bestellungen & Mitgliedsbeiträge</li>
        <li><a href="https://app.foodcoops.at/demo/" target="_blank">Demo-Foodsoft</a>Demo-Instanz der Foodsoft zum Ausprobieren</li>
        <li><a href="https://docs.foodcoops.net/de/home" target="_blank">Foodsoft-Dokumentation</a>Zum Nachlesen von Foodsoft-Features</li>
      </ul>
      </p>
    </main>
  </div>
</body>

</html>
