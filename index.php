<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSTLY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="css/style.css" rel="stylesheet">
</head>
<body >
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">HOSTLY</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilities</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
            </li>

        </ul>
        <div class="d-flex">
          
            <button type="button" class="btn btn-outline-dark  shadow-none me-lg-2 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
              Login
            </button>
            <button type="button" class="btn btn-outline-dark  shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
              Register
            </button>
        </div>
        </div>
    </div>
    </nav>
   
        <!-- loginModal -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center" >
                  <i class="bi bi-person-circle fs-3 me-2"></i>  User Login
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control shadow-none" >
                  </div>
                  <div class="mb-4">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control shadow-none" >
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                    <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot password?</a>
                  </div>
                </div>
                
            </form>
        
        </div>
      </div>
    </div>
      <!-- registerModal -->
      <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center" >
                <i class="bi bi-person-lines-fill  fs-3 me-2"></i> User Registration                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control shadow-none" >
                        </div>
                        <div class="col-md-6 p-0">
                            <label class="form-label">Email </label>
                            <input type="email" class="form-control shadow-none" >
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Phone number</label>
                            <input type="number" class="form-control shadow-none" >
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <label class="form-label">Address </label>
                            <textarea class="form-control shadow-none" rows="1"></textarea>
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Postalcode</label>
                            <input type="number" class="form-control shadow-none" >
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <label class="form-label">Date of birth</label>
                            <input type="date" class="form-control shadow-none" >
                        </div>
                        <div class="col-md-6 ps-0 mb-3 ">
                            <label class="form-label">Password </label>
                            <input type="password" class="form-control shadow-none" >
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <label class="form-label">Confirm password</label>
                            <input type="password" class="form-control shadow-none" >
                        </div>
                    </div>
                </div>
                <div class="text-center">
                 <button type="submit" class="btn btn-dark shadow-none my-1">REGISTER</button>
                </div>
                
                </div>
                
            </form>
        
        </div>
      </div>
    </div>

    <!-- Carousel -->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="/images/carousel/1.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="/images/carousel/4.png" class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
            <img src="/images/carousel/2.jpg" class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
                <img src="/images/carousel/3.jpg" class="w-100 d-block"/>
            </div>
            
        </div>
        
    </div>
  </div>   
   <!--Check availability  -->
   <div class="container availability-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow p-4  rounded">
            <h5 class="mb-2">Check booking availability</h5>
            <form >
                <div class="row align-items-end ">
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight:500">Check-in</label>
                        <input type="date" class="form-control shadow-none" >
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight:500">Check-out</label>
                        <input type="date" class="form-control shadow-none" >
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight:500">Adults</label>
                        <select  class="form-select shadow-none">
                           <option selected>Open menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            
                        </select>
                        
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight:500">Children</label>
                        <select  class="form-select shadow-none">
                           <option selected>Open menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            
                        </select>
                        
                    </div>
                    <div class="col-lg-1 mb-lg-3 mt-2">
                        <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                    </div>
                </div>
            </form>

        </div>
      </div>
   </div>
   <!-- our rooms -->
    <h2 class="mt-2 pt-4 mb-4  text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4  col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="/images/rooms/r2.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5>Simple Room</h5>
                        <h6 class="mb-4">$25 per night</h6>
                        <div class="features mb-4">
                           <h6 class="mb-1">Features</h6>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1bedroom
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1balcony
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1bathroom
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1kitchen
                           </span>
                        </div>
                        <!-- div facilities -->
                        <div class="features mb-4">
                           <h6 class="mb-1">Facilities</h6>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Wifi
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              AC
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Free parking
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Heater
                           </span>
                        </div>
                        <!-- ratings -->
                         <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill  bg-light ">
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                           </span>
                            
                         </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm custom-bg shadow-none text-white">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More details</a>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- room2 -->
            <div class="col-lg-4  col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="/images/rooms/r2.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5>Simple Room</h5>
                        <h6 class="mb-4">$25 per night</h6>
                        <div class="features mb-4">
                           <h6 class="mb-1">Features</h6>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1bedroom
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1balcony
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1bathroom
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1kitchen
                           </span>
                        </div>
                        <!-- div facilities -->
                        <div class="features mb-4">
                           <h6 class="mb-1">Facilities</h6>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Wifi
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              AC
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Free parking
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Heater
                           </span>
                        </div>
                        <!-- ratings -->
                         <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill  bg-light ">
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                           </span>
                            
                         </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm custom-bg shadow-none text-white">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More details</a>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- room 3 -->
            <div class="col-lg-4  col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="/images/rooms/r2.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5>Simple Room</h5>
                        <h6 class="mb-4">$25 per night</h6>
                        <div class="features mb-4">
                           <h6 class="mb-1">Features</h6>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1bedroom
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1balcony
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1bathroom
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              1kitchen
                           </span>
                        </div>
                        <!-- div facilities -->
                        <div class="features mb-4">
                           <h6 class="mb-1">Facilities</h6>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Wifi
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              AC
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Free parking
                           </span>
                           <span class="badge rounded-pill text-wrap bg-light text-dark">
                              Heater
                           </span>
                        </div>
                        <!-- ratings -->
                         <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill  bg-light ">
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                           </span>
                            
                         </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm custom-bg shadow-none text-white">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More details</a>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
              <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More Rooms >>></a> 
            </div>

     <!-- OUR FACILITIES -->
        <h2 class="mt-2 pt-4 mb-4  text-center fw-bold h-font">OUR FACILITIES</h2>
        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                     <img src="/images/features/f3.svg" width="80px">
                     <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="/images/features/f5.svg" width="80px">
                    <h5 class="mt-3">Air conditioner</h5>
               </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                     <img src="/images/features/f1.svg" width="80px">
                     <h5 class="mt-3">Television</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="/images/features/f2.svg" width="80px">
                    <h5 class="mt-3">Heater</h5>
               </div>
               <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="/images/features/f4.svg" width="80px">
                <h5 class="mt-3">Massage</h5>
               </div>
               <div class="col-lg-12 text-center mt-5">
                <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More Facilities >>></a> 
               </div>
            </div>
        </div>
        </div>
     <!-- Testimonials -->
     <h2 class="mt-2 pt-4 mb-4  text-center fw-bold h-font">TESTIMONIALS</h2>
     <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <!-- test1 -->
              <div class="swiper-slide p-4 bg-white">
                <div class="profile d-flex align-items-center mb-3">
                <img src="/images/features/f1.svg" width="30px">
                <h6 class="m-0 ms-2">Darappa</h6>
                </div>
                <p>
                    Hostly has completely transformed the way I book accommodations. 
                    The platform is incredibly user-friendly, and I love how easy it is to find exactly what I'm looking for, whether
                     it's a cozy apartment for a weekend getaway or a luxury villa for a family vacation.
                     
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning "></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
              </div>
              <!-- test2 -->
              <div class="swiper-slide p-4 bg-white">
                <div class="profile d-flex align-items-center p-4">
                <img src="/images/features/f1.svg" width="30px">
                <h6 class="m-0 ms-2">Darappa</h6>
                </div>
                <p>
                    Hostly has completely transformed the way I book accommodations. 
                    The platform is incredibly user-friendly, and I love how easy it is to find exactly what I'm looking for, whether
                     it's a cozy apartment for a weekend getaway or a luxury villa for a family vacation.
                     
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning "></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
              </div>
              <!-- test 3 -->
              <div class="swiper-slide p-4 bg-white">
                <div class="profile d-flex align-items-center p-4">
                <img src="/images/features/f1.svg" width="30px">
                <h6 class="m-0 ms-2">Darappa</h6>
                </div>
                <p>
                    Hostly has completely transformed the way I book accommodations. 
                    The platform is incredibly user-friendly, and I love how easy it is to find exactly what I'm looking for, whether
                     it's a cozy apartment for a weekend getaway or a luxury villa for a family vacation.
                    
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning "></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
              </div>
              <!-- test 4 -->
              <div class="swiper-slide p-4 bg-white">
                <div class="profile d-flex align-items-center p-4">
                <img src="/images/features/f1.svg" width="30px">
                <h6 class="m-0 ms-2">Darappa</h6>
                </div>
                <p>
                    Hostly has completely transformed the way I book accommodations. 
                    The platform is incredibly user-friendly, and I love how easy it is to find exactly what I'm looking for, whether
                     it's a cozy apartment for a weekend getaway or a luxury villa for a family vacation.
                    
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning "></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                 </div>
              </div>
              <!-- test 5-->
              <div class="swiper-slide p-4 bg-white">
                <div class="profile d-flex align-items-center p-4">
                <img src="/images/features/f1.svg" width="30px">
                <h6 class="m-0 ms-2">Darappa</h6>
                </div>
                <p>
                    Hostly has completely transformed the way I book accommodations. 
                    The platform is incredibly user-friendly, and I love how easy it is to find exactly what I'm looking for, whether
                     it's a cozy apartment for a weekend getaway or a luxury villa for a family vacation.
                    
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning "></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        
     </div>
     

    </div>
    <!-- Reach us -->
    <h2 class="mt-2 pt-4 mb-4  text-center fw-bold h-font">REACH US</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe height="320px" class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.9167084301002!2d36.876638974709394!3d-1.218089135554836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f15f826d2697b%3A0x283746033cb1b5a5!2sUnited%20States%20International%20University%20Africa!5e0!3m2!1sen!2ske!4v1728632094684!5m2!1sen!2ske"  loading="lazy" ></iframe>

            </div>
            <div class="col-lg-4 col-md-4">
               <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="tel: +254796632214" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>(254) 796632214
                    </a>
               </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook"></i> &nbsp; Facebook
                        </span>
                    </a><br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter-x"></i>&nbsp; twitter-x
                        </span>
                    </a><br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram"></i> &nbsp; Instagram
                        </span>
                    </a>
                    
             
               </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
     <div class="container-fluid bg-white mt-5">
        <div class="row">
            <div class="col-lg-4 p-4">
              <h3 class="h-font fw-bold fs-3">HOSTLY</h3>
              <p>Wherever your journey takes you, we ensure you feel at home. 
                Discover comfort, convenience, and unforgettable experiences with every stay.</p>
            </div>
            <div class="col-lg-4 p-4">
                <h5>Links</h5>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About Us</a>

            </div>
            <div class="col-lg-4 p-4">
                <h5>Follow Us</h5>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">
                    <i class="bi bi-facebook"></i> &nbsp; Facebook </a> <br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">
                    <i class="bi bi-instagram"></i> &nbsp; Instagram </a> <br>   
                <a href="#" class="d-inline-block text-dark text-decoration-none">
                    <i class="bi bi-twitter-x"></i> &nbsp; Twitter-x </a> <br> 

            </div>
        </div>
     </div>

     <h6 class="text-center bg-dark text-white p-3 m-0">@2024 Developed with &#10084;&#65039; by Delphine</h6>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop:"true",
        autoplay:{
            delay:3500,
            disableOnInteraction:false
        }
    
        });
  
     var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320: {
           slidesPerView:1,
        },
        640: {
           slidesPerView:1,
        },
        768: {
           slidesPerView:2,
        },
        1024: {
           slidesPerView:3,
        }
      }
     });
  </script>
</body>
</html>