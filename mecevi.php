<?php
$xml = simplexml_load_file('podaci/mecevi.xml');
$mecevi = $xml->mec;
?>

<!doctype html>
<html lang="hr">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Mečevi</title>
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
              <a class="nav-link" href="index.php">Pojedinačno</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doubles.php">Parovi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="mecevi.php">Mečevi</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

<div class="container">
  <h2 class="section-title">Popis mečeva</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Igrač 1</th>
        <th>Igrač 2</th>
        <th>Rezultat</th>
        <th>Turnir</th>
        <th>Datum</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($mecevi as $mec): ?>
        <tr>
          <td><?php echo $mec->igrac1; ?></td>
          <td><?php echo $mec->igrac2; ?></td>
          <td><?php echo $mec->rezultat; ?></td>
          <td><?php echo $mec->turnir; ?></td>
          <td><?php echo $mec->datum; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <nav aria-label="Navigacija stranica">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="index.php" aria-label="Prethodna">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Prethodna</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Sljedeća">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Sljedeća</span>
        </a>
      </li>
    </ul>
  </nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
