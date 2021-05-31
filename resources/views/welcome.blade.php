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
    <!-- Image and text -->
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
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img height="500px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_A1M5x6JX7llxLce5oPBhsFhR82BuuX9nUQ&usqp=CAU" class="d-block-w-100" alt="">
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img height="500px" src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_655998316_2000149920009280219_363765.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img height="500px" src="https://www.britishcouncil.lk/sites/default/files/essential-books.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col col-12 col-sm-6 col-lg-6">
                <table class="table">
                    <h2><span style="font-size: x-large;"><span style="background-size: auto;"><center><i>SIGN IN</center></i></span></span></h2>
                    <tr>
                        <span style="height: auto;"><td>Username/Email ID</td></span>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-warning">LOGIN</button></td>
                    </tr>
                </table><br><br><br><br><br>
                <strong>“There is more treasure in books than in all the pirate’s loot on Treasure Island.”
                    – Walt Disney</strong>
            </div>
        </div>
       
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>