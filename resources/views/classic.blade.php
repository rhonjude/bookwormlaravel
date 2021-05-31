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
        <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img height="400px" src="https://www.shortlist.com/media/imager/202002/45973-original.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">The Road</h5>
                  <p class="card-text">Cormac Mcarthy</p>
                  <p class="card-text">Price : Rs 234/-</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img height="400px" src="https://cms-assets.tutsplus.com/uploads/users/114/posts/25982/image/War-and-peace-mock-up.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">War & Peace</h5>
                  <p class="card-text">Leo Tolstoy</p>
                  <p class="card-text">Price : Rs 187/-</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img height="400px" src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=%5B900%2C402%5D&w=1800&h=1200&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F23%2F2014%2F06%2F10%2Fclassic-books-to-kill-a-mockingbird.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">To kill a Mocking Bird</h5>
                  <p class="card-text">Harper Lee</p>
                  <p class="card-text">Price : Rs 145/-</p>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                  <img height="400px" src="https://api.time.com/wp-content/uploads/2015/02/national-reading-month-best-books-uder-100-pages-12.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Heart Of Darkness</h5>
                    <p class="card-text">Joseph Conrad</p>
                    <p class="card-text">Price : Rs 245/-</p>
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
          </div>
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>   
</body>
</html>