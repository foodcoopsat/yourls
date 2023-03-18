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
  <title>fcoop.at</title>
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
      <p>Die <strong>Arbeitgruppe Infrastruktur</strong> innerhalb der <strong>IG FoodCoops</strong> betreibt mehrere Services.
        Diese können von <strong>allen</strong> österreichischen FoodCoops genutzt werden, damit sich nicht jede FoodCoop selber darum kümmern muss.
        Mehr Informationen über die IG FoodCoops und deren Arbeitgruppen gibt es unter <a href="https://foodcoops.at">foodcoops.at</a>.
        Dort finden sich auch Informationen über die Beteiligungsmöglichket für interessierte Personen.
      </p>
      <h3>Zu den Services</h3>
      <p>
      <ul>
        <li><a href="https://tools.foodcoops.at/pads/">Etherpad</a>Kollaborativer Texteditor (Piratpad)</li>
        <li><a href="https://calc.foodcoops.at">EtherCalc</a>Kollaborative Tabellenverarbeitung</li>
        <li><a href="https://fcoop.at/admin/">YOURLS</a>URL Shortener (bit.ly)</li>
        <li><a href="https://tools.foodcoops.at/polls/">BitPoll</a>Terminfindung (Doodle)</li>
        <li><a href="https://cloud.foodcoops.at">Nextcloud</a>Online Speicherplatz (Dropbox)</li>
        <li><a href="https://meet.foodcoops.at">Jitsi</a>Online Videkonferenz</li>
        <li><a href="https://mail.foodcoops.at">Roundcube</a>Webmail-Zugang</li>
        <li><a href="https://forum.foodcoops.at">Discourse</a>Verntzungsforum</li>
        <li><a href="https://app.foodcoops.at/austria/">Foodsoft</a></li>
      </ul>
      </p>
    </main>
  </div>
</body>

</html>
