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
    </nav><br>
        <div class="container">
            <div class="row">
                <div class="col col-12 col-sm-6 col-xxl-6">
                    <strong><h1>Register</h1></strong>
                <table class="table table-borderless">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td>Conform Password</td>
                        <td><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-success">SIGN UP</button></td>
                    </tr>
                </table>
                </div>
                <div class="col col-12 col-sm-6 col-xxl-6">
                    <img height="600px" src="https://www.keepinspiring.me/wp-content/uploads/2020/02/a-room-without-books-body-without-soul-cicero-quote-min.jpg" alt="">

                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>   
</body>
</html>