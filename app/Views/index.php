<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #239BD8;">
          <!-- Container wrapper -->
          <div class="container-fluid">
              <!-- Navbar brand -->
              <a class="navbar-brand" href="#">
                <img src="Images/logo.png" alt="Logo Brand" width="40" height="40">
                <span class="navbar-text ml-2">Flitix</span>
              </a>

              <!-- Icons -->
              <ul class="navbar-nav d-flex flex-row me-1">
                  <li class="nav-item me-3 me-lg-0">
                      <a class="nav-link text-white" href="#"><i class="fas fa-cog mx-1"></i> My Orders</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                      data-mdb-toggle="dropdown" aria-expanded="false"> <i class="fas fa-user mx-1"></i> Profile </a>
                      <!-- Dropdown menu -->
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <li>
                              <a class="dropdown-item" href="#">My account</a>
                          </li>

                          <li>
                              <a class="dropdown-item" href="#">Log out</a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </div>

          <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
        
        <!-- Image -->
        <img src="Images/Miniature airplane travel theme.png" class="img-fluid" alt="Responsive image">

        <!-- Input -->
        <form action="/flights" method="get">
            <div class="card m-5 w-50 mx-auto">
              <h5 class="m-3 text-center" style="color: #239BD8;">Search your Flight</h5>
              <div class="card-body">            
                <div class="col mb-3">
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"></path>
                      </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="From" aria-label="Input group example" aria-describedby="basic-addon1" fdprocessedid="s53ov" name="rute_from">
                  </div>
                </div>

                <div class="col mb-3">
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 5.146a.5.5 0 1 0-.708.708L9.243 9.95H6.475a.5.5 0 1 0 0 1h3.975a.5.5 0 0 0 .5-.5V6.475a.5.5 0 1 0-1 0v2.768L5.854 5.146z"/>
                      </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="To" aria-label="Input group example" aria-describedby="basic-addon1" fdprocessedid="s53ov" name="rute_to">
                  </div>
                </div>

                <div class="col mb-3">
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                      </svg>
                    </span>
                    <input type="date" class="form-control" placeholder="Date" aria-label="Input group example" aria-describedby="basic-addon1" fdprocessedid="s53ov" name="date">
                  </div>
                </div>

                <div class="col mb-3">
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                      </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="People" aria-label="Input group example" aria-describedby="basic-addon1" fdprocessedid="s53ov" name="people">
                  </div>
                </div>

                <button type="submit" class="btn" style="background-color: #239BD8; color: white">Search</button>

              </div>
            </div>
        </form>
        
        
        <!-- Footer -->
        <footer class="bg-dark text-center" style="color: white;">
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: #239BD8">
            © 2023 Copyright: PT. Flitix
          </div>
          <!-- Copyright -->
        </footer>

    </body>
</html>