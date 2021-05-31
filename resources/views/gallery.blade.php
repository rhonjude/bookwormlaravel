<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <style>
        b{
            color: black;
            font-size: large;
        }
        strong{
            color: darkslategrey;
            font-size: large;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img height="80" width="80" src="https://static6.depositphotos.com/1001911/621/v/600/depositphotos_6218229-stock-illustration-book-worm.jpg">
       <b>Book</b><strong>Worms</strong>
      </a>
    </div>
  </nav>
  <nav class="navbar navbar-dark bg-light">
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/">HOME</a>
    </li>
    <li class="nav-item" >
      <a class="nav-link" href="/register"><strong style="font-size: medium;">Register</strong></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/gallery"><strong style="font-size: medium;">gallery</strong></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/about"><b style="font-size: medium;">About</b><strong style="font-size: medium;">Us</strong></a>
      </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <strong style="font-size: medium;">Collections</strong>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/classic"><strong>Classic</strong></a></li>
          >
      </li>
    </ul>
    </nav>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img height="400px" src="https://images-na.ssl-images-amazon.com/images/I/61RZI1cKZUL.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">The Godfather</h5>
                  <p class="card-text">Mario Puzo</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img height="400px" src="https://images-na.ssl-images-amazon.com/images/I/81vphzLEQsL.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">The Wizard of Oz</h5>
                  <p class="card-text">L Frank Baum</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img height="400px" src="https://images-cdn.reedsy.com/discovery/post/2/featured_image/medium_9c9d0901cc43af7917fe892d5909309a7345703f.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Short stories</h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
          </div>
          <nav aria-label="...">
            <ul class="pagination pagination-lg">
              <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
          </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>  
</body>
</html>