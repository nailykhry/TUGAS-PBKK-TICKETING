<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Traveller Details</title>

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
        
        <div class="row">
            <div class="col">
                <!-- Contact Details -->
                <h5 class="ms-5 mt-5 mb-3">Contact Details</h5>
                <div class="card ms-5 mb-5">
                    <div class="card-header">
                    Contact Details
                    </div>
                    
                    <div class="card-body mb-3">
                        <form>
                            <div class="row">
                                <div class="col form-group mb-3">
                                    <label for="Payment Method">Title</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Mr.</option>
                                      <option>Mrs.</option>
                                      <option>Ms.</option>
                                    </select>
                                </div>
                                <div class="col form-group mb-3">
                                  <label for="Name">Full Name</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Full Name">
                                </div>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1">Mobile Number</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="+62xxxxxxxxxx">
                            </div>
                        </form>                    
                    </div>
                </div>

                <!-- Traveller Details -->
                <h5 class="ms-5 mb-3">Traveller Details</h5>

                <!-- Adult 1 -->
                <div class="card ms-5 mb-3">
                    <div class="card-header">
                        Adult 1
                    </div>
                    
                    <div class="card-body mb-3">
                        <form>
                            <div class="row">
                                <div class="col form-group mb-3">
                                    <label for="Payment Method">Title</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Mr.</option>
                                      <option>Mrs.</option>
                                      <option>Ms.</option>
                                    </select>
                                </div>
                                <div class="col form-group mb-3">
                                  <label for="Name">Full Name</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Full Name">
                                </div>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1">Nationality</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Country">
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1">ID Card Number</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="xxxxxxxxxx">
                            </div>
                        </form>                    
                    </div>
                </div>

                <!-- Adult 2 -->
                <div class="card ms-5 mb-3">
                    <div class="card-header">
                        Adult 2
                    </div>
                    
                    <div class="card-body mb-3">
                        <form>
                            <div class="row">
                                <div class="col form-group mb-3">
                                    <label for="Payment Method">Title</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Mr.</option>
                                      <option>Mrs.</option>
                                      <option>Ms.</option>
                                    </select>
                                </div>
                                <div class="col form-group mb-3">
                                  <label for="Name">Full Name</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Full Name">
                                </div>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1">Nationality</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Country">
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1">ID Card Number</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="xxxxxxxxxx">
                            </div>
                        </form>                    
                    </div>
                </div>

                <!-- Adult 3 -->
                <div class="card ms-5 mb-3">
                    <div class="card-header">
                        Adult 3
                    </div>
                    
                    <div class="card-body mb-3">
                        <form>
                            <div class="row">
                                <div class="col form-group mb-3">
                                    <label for="Payment Method">Title</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Mr.</option>
                                      <option>Mrs.</option>
                                      <option>Ms.</option>
                                    </select>
                                </div>
                                <div class="col form-group mb-3">
                                  <label for="Name">Full Name</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Full Name">
                                </div>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1">Nationality</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Country">
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1">ID Card Number</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="xxxxxxxxxx">
                            </div>
                        </form>                    
                    </div>
                </div>
            </div>

            <div class="col">
                <h5 class="ms-5 mt-5 mb-3">Your Flight</h5>

                <!-- Your Flight -->
                <div class="card ms-5 mb-5 mx-5">
                    <div class="card-header">
                        Your Flight
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <!-- From -->
                            <?= $flight[0]['rute_from']; ?>

                            <!-- Arrow -Right Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>

                            <!-- To -->
                            <?= $flight[0]['rute_to']; ?>
                        </h5>

                        <!-- Airlines -->
                        <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-airplane" viewBox="0 0 16 16">
                                <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Zm.894.448C7.111 2.02 7 2.569 7 3v4a.5.5 0 0 1-.276.447l-5.448 2.724a.5.5 0 0 0-.276.447v.792l5.418-.903a.5.5 0 0 1 .575.41l.5 3a.5.5 0 0 1-.14.437L6.708 15h2.586l-.647-.646a.5.5 0 0 1-.14-.436l.5-3a.5.5 0 0 1 .576-.411L15 11.41v-.792a.5.5 0 0 0-.276-.447L9.276 7.447A.5.5 0 0 1 9 7V3c0-.432-.11-.979-.322-1.401C8.458 1.159 8.213 1 8 1c-.213 0-.458.158-.678.599Z"/>
                            </svg>
                            <?= $flight[0]['name']; ?>
                        </p>
                        <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-airplane" viewBox="0 0 16 16">
                                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            <?php $date = date('l, d F Y', strtotime($flight[0]['date'])); ?>
                            <?= $date; ?>
                        </p>

                        <p class="col card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                            </svg>
                            <?= $flight[0]['depart_at']; ?>  - <?= $flight[0]['arrive_at']; ?>
                        </p>

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
                <h5 class="ms-5 mb-3">Price Details</h5>
                <div class="card mx-5 mb-3">
                    <div class="card-header">
                    Price Details
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <th scope="row"></th>
                                <td><?= $flight[0]['name']; ?> x<?= $people; ?></td>
                                <td style="color: #239BD8;">IDR <?= $people*$flight[0]['price']; ?>,-</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Car Rental (SUV - 4 days)</td>
                                <td style="color: #239BD8;">IDR 640000</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Free Protection</td>
                                <td style="color: #239BD8;">FREE</td>
                            </tr>
                            <div class="dropdown-divider"></div>
                            <tr>
                                <th scope="row"></th>
                                <td>Total Price</td>
                                <td style="color: #239BD8;">IDR <?= $people*$flight[0]['price']+640000; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <a href="#" class="mx-5 mt-3 btn btn-primary" style="background-color: #239BD8; color: white; border: none;">
                    Make Payment 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                </a>
                
            </div>
        </div>
        
            

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