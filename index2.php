<?php
$xml = simplexml_load_file('podaci/igraci2.xml');
$igraci = $xml->igrac;
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Players Rankings</title>
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
        <a class="navbar-brand" href="#">Poredak - Tenis</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Singl</a>
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
    <h2 class="section-title">Singl Poredak</h2>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Rank</th>
          <th>Ime</th>
          <th>Prezime</th>
          <th>Drzava</th>
          <th>Bodovi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($igraci as $igrac): ?>
          <tr>
            <td class="rank-cell"><?php echo $igrac->ranking; ?></td>
            <td><?php echo $igrac->ime; ?></td>
            <td><?php echo $igrac->prezime; ?></td>
            <td><?php echo $igrac->drzava; ?></td>
            <td><?php echo $igrac->bodovi; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="index.php" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="index.php">1</a></li>
      <li class="page-item"><a class="page-link" href="index2.php">2</a></li>
      <li class="page-item"><a class="page-link" href="index3.php">3</a></li>
      <li class="page-item">
        <a class="page-link" href="index3.php" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
