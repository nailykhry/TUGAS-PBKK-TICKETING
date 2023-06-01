<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking Completed</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <script
			src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
			integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    </head>
    <body >
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #239BD8;">
          <!-- Container wrapper -->
          <div class="container-fluid">
              <!-- Navbar brand -->
              <a class="navbar-brand" href="/">

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
        
        <div id="makepdf">
            <!-- Image -->

            <img src="<?= base_url('images/vacation.png'); ?>" class="rounded mx-auto d-block" alt="Responsive image" width="250" height="250">

            <div class="text-center" style="color:#239BD8">
                <h3>Payment Completed</h3>
                <hr class="hr w-25 mx-auto" />
                <h5>Thank you for ordering with Flitix</h5>
                <h5>Have a safe flight!</h5>
            </div>
            
            
            <!-- Ticket -->
            <div class="card m-5 w-50 mx-auto shadow" id="makepdf" style="border: none">
                <div class="card-header text-center" style="background-color: #239BD8; color: white;"><h5>Flight ID FLTX000<?= $bookId; ?></h5></div>
            
                <!-- Row -->
                <div class="row mt-3 mb-3">
                    <div class="col text-center">

                        <img src="<?= base_url("images/qantas.png"); ?>" width="100" height="100">
                    
                        <p class="card-text"><?= $flight['name']; ?></p>
                        <p class="card-text">
                            <!-- From -->
                            <?= $flight['rute_from']; ?>
            
                            <!-- Arrow -Right Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#239BD8" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
            
                            <!-- To -->
                            <?= $flight['rute_to']; ?> 
                        </p>
                    </div>
                    <!-- <div class="vr" width="10px"></div> -->
                    <div class="col">
                        <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-airplane" viewBox="0 0 16 16">
                                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            <?php $date = date('l, d F Y', strtotime($flight['date'])); ?>
                            <?= $date; ?>
                        </p>
            
                        <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                            </svg>
                            <?= $flight['depart_at']; ?> - <?= $flight['arrive_at']; ?>
                        </p>
                        <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                            </svg>
                            <?= $people; ?> Peoples
                        </p>
                        <p class="card-text"></p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-geo" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                            </svg>
                            <!-- OLAH SEATS -->
                            <?php 
                                $seats = $seats;
                                $exploded = explode(",", $seats);
                                
                                foreach ($exploded as $seat) {
                                    $seat = intval($seat);
                                    $numb = ceil($seat/4);
                                    $alpa = $seat%4;
                                    $alpaPrint = 'a';
                                    switch ($alpa) {
                                        case 1:
                                            $alpaPrint = 'A';
                                            break;
                                        case 2:
                                            $alpaPrint = 'B';
                                            break;
                                        case 3:
                                            $alpaPrint = 'C';
                                            break;
                                        default:
                                            $alpaPrint = 'D';
                                            break;
                                    }

                                    echo $numb . $alpaPrint . ', ';
                                }
                            ?>
                        </p>
                        <!-- <p class="card-text"></p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-briefcase" viewBox="0 0 16 16">
                                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            Extra Baggage included
                        </p> -->
                        <p class="card-text"></p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#239BD8" class="bi bi-car-front" viewBox="0 0 16 16">
                                <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z"/>
                                <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z"/>
                            </svg>
                            Car rent included
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Button Print -->
            <div class="d-grid gap-2 col-6 mx-auto mb-5" >
                <button class="btn btn-primary download" id="printTicket" type="button" style="background-color: #239BD8; color: white; border: none;">
                    Print Ticket
                </button>
            </div>
        </div>
        <script>
			const button = document.getElementById('printTicket');

			function generatePDF() {
				// Choose the element that your content will be rendered to.
				const element = document.getElementById('makepdf');
				// Choose the element and save the PDF for your user.
				html2pdf().from(element).save();
			}

			button.addEventListener('click', generatePDF);
        
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