<?php
$xml = simplexml_load_file('podaci/igraci.xml');
$igraci = $xml->igrac;
?>

<!doctype html>
<html lang="hr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Poredak Igrača</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f7f9fb;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    header nav {
      background-color: #002a5c;
    }
    header nav a.navbar-brand, header nav .nav-link {
      color: #fff !important;
      font-weight: 600;
    }
    header nav .nav-link.active {
      border-bottom: 2px solid #ff7f50;
    }
    h2.section-title {
      border-left: 6px solid #ff7f50;
      padding-left: 12px;
      margin-top: 40px;
      margin-bottom: 20px;
      color: #002a5c;
      font-weight: 700;
      font-size: 28px;
    }
    table {
      background: white;
      border-radius: 6px;
      box-shadow: 0 4px 8px rgb(0 0 0 / 0.1);
    }
    thead th {
      border-bottom: 2px solid #ff7f50;
      color: #002a5c;
      font-weight: 700;
      text-align: center;
    }
    tbody td {
      vertical-align: middle;
      text-align: center;
      font-size: 15px;
      color: #444;
    }
    tbody tr:hover {
      background-color: #fff2e8;
    }
    .rank-cell {
      font-weight: 700;
      font-size: 18px;
      color: #ff7f50;
    }
    .container {
      max-width: 900px;
    }
  </style>
</head>
<body>
  <header id="navheader">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="tenis.html">Tenis</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Meni">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Pojedinačno</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doubles.php">Parovi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mecevi.php">Mečevi</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container">
    <h2 class="section-title">Poredak u singlu</h2>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Poredak</th>
          <th>Slika</th>
          <th>Ime</th>
          <th>Prezime</th>
          <th>Država</th>
          <th>Bodovi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($igraci as $igrac): ?>
          <tr>
            <td class="rank-cell"><?php echo $igrac->ranking; ?></td>
            <td>
              <img src="<?php echo $igrac->slika; ?>" alt="Slika igrača" style="height:60px; border-radius:8px;" />
            </td>
            <td><?php echo $igrac->ime; ?></td>
            <td><?php echo $igrac->prezime; ?></td>
            <td><?php echo $igrac->drzava; ?></td>
            <td><?php echo $igrac->bodovi; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <nav aria-label="Navigacija stranica">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="index.php" aria-label="Prethodna">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Prethodna</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="index.php">1</a></li>
      <li class="page-item"><a class="page-link" href="index2.php">2</a></li>
      <li class="page-item"><a class="page-link" href="index3.php">3</a></li>
      <li class="page-item">
        <a class="page-link" href="index2.php" aria-label="Sljedeća">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Sljedeća</span>
        </a>
      </li>
    </ul>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
