<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>@yield('main_title')</title>
</head>
<body>
<body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
  </symbol>
</svg>

<div class="container py-3">
  <header class="d-flex flex-column flex-md-row align-items-center pb-1 mb-4 border-bottom">
   
    <h5 class="my-5 mr-md-auto font-weight-normal">Бизнес планировщик</h5>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
      <a class="me-3 py-2 text-dark text-decoration-none px-2" href="/server.php">Главная</a>
      <a class="me-3 py-2 text-dark text-decoration-none px-2" href="server.php/about">Контакты</a>
    </nav>
    <a href="server.php/review" class="btn btn-outline-primary">Отзывы</a>
  </header>

  <div class="container">
    @yield("main_content")
  </div>

</body>
</body>
</html>