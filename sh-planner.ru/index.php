<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sh-planner</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    

    
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check" viewBox="0 0 16 16">
        <title>Check</title>
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
      </symbol>
    </svg>
    
    <div class="container py-3">
    <header class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
      <span class="fs-4">Bussnes planner</span>
    </a>

    <nav class="mt-2 mt-md-0 mr-md-3">
      <a class=" py-2 text-dark" href="#">Главная</a>
      <a class=" py-2 text-dark" href="#">Контакты</a>
    </nav>
    <a href="http://app.sh-planner.ru" class="btn btn-outline-primary">Войти</a>
  </header>
    
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Ценообразование</h1>
        <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
      </div>
    
      <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Free</h4>
              </div>


              <div class="card-body">
                <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>10 users included</li>
                  <li>2 GB of storage</li>
                  <li>Email support</li>
                  <li>Help center access</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
              </div>
            </div>
          </div>
        
         

          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Pro</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>20 users included</li>
                  <li>10 GB of storage</li>
                  <li>Priority email support</li>
                  <li>Help center access</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
              <div class="card-header py-3 text-white bg-primary border-primary">
                <h4 class="my-0 fw-normal">Enterprise</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>30 users included</li>
                  <li>15 GB of storage</li>
                  <li>Phone and email support</li>
                  <li>Help center access</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
              </div>
            </div>
          </div>
        </div>
    
        <h2 class="display-6 text-center mb-4">Compare plans</h2>
    
        <div class="table-responsive">
          <table class="table text-center">
            <thead>
              <tr>
                <th style="width: 34%;"></th>
                <th style="width: 22%;">Free</th>
                <th style="width: 22%;">Pro</th>
                <th style="width: 22%;">Enterprise</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-start">Public</th>
                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
              </tr>
              <tr>
                <th scope="row" class="text-start">Private</th>
                <td></td>
                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
              </tr>
            </tbody>
    
            <tbody>
              <tr>
                <th scope="row" class="text-start">Permissions</th>
                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
              </tr>
              <tr>
                <th scope="row" class="text-start">Sharing</th>
                <td></td>
                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
              </tr>
              <tr>
                <th scope="row" class="text-start">Unlimited members</th>
                <td></td>
                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
              </tr>
              <tr>
                <th scope="row" class="text-start">Extra security</th>
                <td></td>
                <td></td>
                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
              </tr>
            </tbody>
          </table>
        </div>
      </main>
    
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2 w-30"  src="https://github.com/Andrei0903/Business-planner/blob/main/sh/img/logo.png?raw=true" alt="" width="120" >
            <small class="d-block mb-3 text-muted">© 2021</small>
          </div>
          <div class="col-6 col-md">
            <h5>Особенности</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>


</body>
</html>