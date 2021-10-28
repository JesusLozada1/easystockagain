<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/homepage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossOrigin="anonymous"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css' />
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossOrigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Dashboard - EasyStock</title>
    
</head>
<body class="background">
    <main>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="home" viewBox="0 0 16 16">
          <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
          <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
          <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
          <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
          <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
        </symbol>
      </svg>
<!-- SiDEBAR -->
<div id="outer-container">
    <div class="sidebar flex-column p-3 bg-light " >
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <img src="../resources/images/ezstock.svg" class="logo" alt="">
        </a>
        <hr>
        <ul class="nav nav-pills link-dark flex-column mb-auto">
          <li class="nav-item">
            <a href="../pages/homepage.php" class="nav-link active" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
              Dashboard
            </a>
          </li>
          <li>
            <a href="../table/table.php" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
              Tables
            </a>
          </li>
          <li>
            <a href="../table/table_process.php" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
              Add Items
            </a>
          </li>
          <li>
            <a href="#" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              Customers
            </a>
          </li>
        </ul>
        
        <hr>
        
      </div>
</div>
<!-- EVERYTHING ELSE -->

  <div class="content">
        <div class="section">
            <!--NAVBAR-->
                <div class="top_navbar">
                    <div class="hamburger">
                        <a href="#">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                    &nbsp;&nbsp;
                    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
                    &nbsp;&nbsp;
                    <div class="dropdown nav-item text-wrap">
                        <a class="dropdown dropdown-toggle" type="button" href="#" id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../resources/images/avatar-pic.png" height="40px" width="40px">
                        </a>
                        <ul class="dropdown-menu text-small" id="dropmenu" style="color:antiquewhite" aria-labelledby="dropdownUser2">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            <!--END OF NAVBAR-->
            <!--WELCOME-->
            <div class="p-4">
                <div class="welcome">
                  <div class="content rounded-3 p-3">
                    <h1 class="main-header_title fs-3">Welcome to your Dashboard!</h1>
                    <p class="main-header_subtitle mb-0">Hello User, this is your daily reports.</p>
                    
                  </div>
                </div>
             <!--END OF WELCOME-->   
                <!-- OVERVIEW CARDS-->
                <div class="main-overview">
                  <div class="overviewCard">
                    <div class="overviewCard-icon overviewCard-icon--document align-items-center">
                       <i class="fas fa-traffic-light fa-2x"></i>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="overviewCard-description">
                      <h3 class="overviewCard-title">Total <strong>Traffic</strong></h3>
                      <p class="overviewCard-subtitle font-weight-bold">350,897&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 9.63%</span></p>
                    </div>
                  </div>
                  <div class="overviewCard">
                    <div class="overviewCard-icon overviewCard-icon--calendar">
                       <i class="fas fa-user-friends fa-2x"></i>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="overviewCard-description">
                      <h3 class="overviewCard-title">New <strong>Users</strong></h3>
                      <p class="overviewCard-subtitle font-weight-bold">2,356&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 9.63%</span></p>
                    </div>
                  </div>
                  <div class="overviewCard">
                    <div class="overviewCard-icon overviewCard-icon--photo">
                       <i class="fas fa-chart-line fa-2x"></i>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="overviewCard-description">
                      <h3 class="overviewCard-title"> <strong>Sales</strong></h3>
                      <p class="overviewCard-subtitle font-weight-bold">924&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 10.90%</span></p>
                    </div>
                  </div>
                  <div class="overviewCard">
                    <div class="overviewCard-icon overviewCard-icon--mail">
                       <i class="far fa-envelope fa-2x"></i>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="overviewCard-description">
                      <h3 class="overviewCard-title">Recent <strong>Emails</strong></h3>
                      <p class="overviewCard-subtitle font-weight-bold">+10</p>
                    </div>
                  </div>
                  
                </div>
                <!--END OF OVERVIEW CARDS-->
                <!--MAIN CARDS-->
                <div>
                  <div class="main__cards">
                    <div class="card">
                      <div class="card__header">
                        <div class="card__header-title text-light">Your <strong>Events</strong>
                          <a href="#" class="card__header-link text-bold">View All</a>
                        </div>
                      </div>
                      <div class="card__main">
                        <div class="card__row">
                          <div class="card__icon"><i class="fas fa-gift"></i></div>
                          <div class="card__time">
                            <div>today</div>
                          </div>
                          <div class="card__detail">
                            <div class="card__source text-bold">Jonathan G</div>
                            <div class="card__description">Going away party at 8:30pm. Bring a friend!</div>
                            <div class="card__note">1404 Gibson St</div>
                          </div>
                        </div>
                        <div class="card__row">
                          <div class="card__icon"><i class="fas fa-plane"></i></div>
                          <div class="card__time">
                            <div>Tuesday</div>
                          </div>
                          <div class="card__detail">
                            <div class="card__source text-bold">Matthew H</div>
                            <div class="card__description">Flying to Bora Bora at 4:30pm</div>
                            <div class="card__note">Delta, Gate 27B</div>
                          </div>
                        </div>
                        <div class="card__row">
                          <div class="card__icon"><i class="fas fa-book"></i></div>
                          <div class="card__time">
                            <div>Thursday</div>
                          </div>
                          <div class="card__detail">
                            <div class="card__source text-bold">National Institute of Science</div>
                            <div class="card__description">Join the institute for an in-depth look at Stephen Hawking</div>
                            <div class="card__note">7:30pm, Carnegie Center for Science</div>
                          </div>
                        </div>
                        <div class="card__row">
                          <div class="card__icon"><i class="fas fa-heart"></i></div>
                          <div class="card__time">
                            <div>Friday</div>
                          </div>
                          <div class="card__detail">
                            <div class="card__source text-bold">24th Annual Heart Ball</div>
                            <div class="card__description">Join us and contribute to your favorite local charity.</div>
                            <div class="card__note">6:45pm, Austin Convention Ctr</div>
                          </div>
                        </div>
                        <div class="card__row">
                          <div class="card__icon"><i class="fas fa-heart"></i></div>
                          <div class="card__time">
                            <div>Saturday</div>
                          </div>
                          <div class="card__detail">
                            <div class="card__source text-bold">Little Rock Air Show</div>
                            <div class="card__description">See the Blue Angels fly with roaring thunder</div>
                            <div class="card__note">11:00pm, Jacksonville Airforce Base</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <div class="card card--finance" id="finance">
                    <div class="card__header">
                      <div class="card__header-title text-light">Monthly <strong>Sales</strong>
                        <a href="#" class="card__header-link text-bold">View All</a>
                      </div>
                    </div>
                    <div id="chart"><h6 class="text-small">Chart goes here.</h6></div>
                  </div>
                  </div>
                </div>
                <!--END OF MAIN CARDS--> 
                
                <!--CHARTS-->
                
                <!--END OF CHARTS-->
                
              </div>
        </div>  
    </div>
  </div>
</main>

<script src="../resources/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


</body>
</html>