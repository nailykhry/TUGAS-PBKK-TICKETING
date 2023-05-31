<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking Detail</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #239BD8;">
          <!-- Container wrapper -->
          <div class="container-fluid">
              <!-- Navbar brand -->
              <a class="navbar-brand" href="#">

                <img src="<?= base_url("images/logo.png"); ?>" alt="Logo Brand" width="40" height="40">

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
        
        <div class="row">
            <div class="col">
                <!-- Your Flight -->
                <div class="card m-5 shadow" style="border: none">
                    <div class="card-header" style="background-color: #239BD8; color: white;">
                    Your Flight
                    </div>
                    <div class="card-body mb-3">
                        <h5 class="card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-airplane-fill" viewBox="0 0 16 16">
                                <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Z"/>
                            </svg>
                            <?php //var_dump($flight) ?>
                            <?= $flight[0]['name']; ?></h5>
                    <p class="card-text">
                        <div class="row">
                            <p class="col card-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"></path>
                                </svg>
                               <?= $flight[0]['rute_from']; ?>
                            </p>
                            <p class="col card-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-arrow-down-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 5.146a.5.5 0 1 0-.708.708L9.243 9.95H6.475a.5.5 0 1 0 0 1h3.975a.5.5 0 0 0 .5-.5V6.475a.5.5 0 1 0-1 0v2.768L5.854 5.146z"/>
                                </svg>
                                <?= $flight[0]['rute_to']; ?>
                            </p>
                            <p class="col card-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-airplane" viewBox="0 0 16 16">
                                    <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                </svg>
                                <?php $date = date('l, d F Y', strtotime($flight[0]['date'])); ?>
                                <?= $date; ?>
                            </p>
                        </div>

                            <div class="row">
                            <p class="col card-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg>
                                <?= $flight[0]['depart_at']; ?>
                            </p>
                            <p class="col card-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg>
                                <?= $flight[0]['arrive_at']; ?>
                            </p>
                            <p class="col card-text">
                                
                            </p>
                        </div>
                    </p>
                    <p class="card-text" style="color: #239BD8;">Seat 25A, 25B, 25C</p>
                    <a href="#" class="card-text" style="color: #239BD8;">Change Seat</a>
                    
                    </div>
                </div>

                <!-- Extra Baggage -->
                <div class="card col m-5 shadow" style="border: none">
                    <div class="card-body m-2">
                        <h5 class="card-title">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedBaggage">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#DEB887" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                        <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
                                    </svg>
                                    Extra Baggage
                                </label>
                            </div>
                        </h5>
                        <p class="card-text">Increase the amount of luggage you wish to take with you for a fee.</p>
                        <p style="color: grey">See full details <a href="#" style="color: grey;">here</a></p>
                    </div>
                </div>

                <!-- Rent a Car -->
                <div class="card col m-5 shadow" style="border: none">
                    <div class="card-body m-2">
                        <h5 class="card-title">
                            <div class="form-check">
                                <h5><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" onclick="toggleBoxRent()"></h5>
                                <label class="form-check-label" for="flexCheckDefault">
                                    <h5>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#F9C802" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                            <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
                                        </svg>
                                        Rent a Car
                                    </h5>
                                </label>
                            </div>
                        </h5>
                        <div class="row" style="color: #239BD8;">
                            <p class="card-text col">Wednesday, 25 May 2023 - Sunday, 29 May 2023</p>
                            <a href="#" class="card-text col-2" style="color: #239BD8;">Change</a>
                        </div>
                        <p class="card-text">As soon as you land at your destination, you’ll be able to drive a rental car
                            we prepare with our partners!</p>
                        <p style="color: grey">Information and rules for you to be eligible to rent and drive a car abroad can be seen <a href="#" style="color: grey;">here</a></p>
                    </div>
                </div>
            </div>

            <div class="col">
                <!-- Additional Information -->
                <div class="card m-5 shadow" style="border: none">
                    <div class="card-header" style="background-color: #239BD8; color: white;">
                        Additional Information
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                            </svg>
                            Ticket refundable</p>
                        <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                            </svg>
                            Reschedule available</p>
                    </div>
                </div>
                
                <!-- Price Details-->
                <div class="card m-5 shadow" style="border: none">
                    <div class="card-header" style="background-color: #239BD8; color: white;">
                    Price Details
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <th scope="row"></th>
                                <td><?= $flight[0]['name']; ?> x<?= $people; ?></td>
                                <td style="color: #239BD8;">IDR <?= $people*$flight[0]['price']; ?>,-</td>
                            </tr>
                            <tr style="display: none;" id="boxRent">
                                <th scope="row"></th>
                                <td>Car Rental (SUV - 4 days)</td>
                                <td style="color: #239BD8;">IDR 640000</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Free Protection</td>
                                <td style="color: #239BD8;">FREE</td>
                            </tr>
                        </table>
                    <a href="/travellerdetail/<?= $flight[0]['id']; ?>/<?= $people; ?>" class="mx-auto btn btn-primary" style="background-color: #239BD8; color: white; border: none;">Continue Booking <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg></a>
                    </div>
                </div>
            </div>
        </div>

        <script>
        function toggleBoxRent() {
            var checkBox = document.getElementById("flexCheckChecked");
            var boxRent = document.getElementById("boxRent");
        
            if (checkBox.checked) {
                boxRent.style.display = "table-row";
            } else {
                boxRent.style.display = "none";
            }
        }
        </script>

        <!-- Footer -->
        <footer class="bg-light text-center" style="color: #239BD8;">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #E2F5FC;">
              © 2023 PT. Flitix • All Rights Reserved.
            </div>
            <!-- Copyright -->
        </footer>

    </body>
</html>