<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard - EzStock</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossOrigin="anonymous"/>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossOrigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../resources/css/homepage.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css' />
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="../resources/css/contact.css">

    
    

</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><!--<span class="fab fa-servicestack">--><img src="../resources/images/ezstock-white.svg"></span></h2>
          
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="../pages/homepage.php" class="active"><span class="fas fa-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="../table/table.php"><span class="fas fa-table"></span><span>Paint Department</span></a>
                </li>
                <li>
                    <a href="../table/table_lumber.php"><span class="fas fa-table"></span><span>Lumber Department</span></a>
                </li>
                <li>
                    <a href=""><span class="fas fa-user-friends"></span><span>Customers</span></a>
                </li>
                <li>
                  <a href="../about/about_us.php"><span class="far fa-building"></span><span>About Us</span></a>
                </li>
                <li>
                  <a href="../contact/contact.php"><span class="far fa-address-card"></span><span>Contact Us</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="">
                    <span class="fas fa-bars"></span>
                </label>

                Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="fas fa-search"></span>
                <input type="search" placeholder="Search"/>
            </div>
            <div class="user-wrapper">
                <img src="../resources/images/avatar-pic.png" width="40px" height="" alt="">
                <div>
                    <h4>John Doe</h4>
                    <small>omega admin</small>
                </div>
            </div>
        </header>

    
        <main>
        <!--Start of contact form-->
        <br>

<!--WELCOME-->
<div class="p-4">
                <div class="welcome">
                  <div class="content rounded-3 p-3">
                    <h1 class="main-header_title fs-3">Contact us!</h1>
                    <p class="main-header_subtitle mb-0">
                      Feel free to contact us at any time if there are any concerns with our program.
                      <br>
                      Please fill out the next form and we will be reaching back to you as soon as possible.  
                  
                    </p>
                    
                  </div>
                </div>
             <!--END OF WELCOME-->   
                <!-- OVERVIEW CARDS-->
               
                <!--END OF MAIN CARDS--> 
                
                <!--CHARTS-->
                
                <!--END OF CHARTS-->

                <!--Start of contact form-->
                <br>

                <div class="container d-flex align-items-center my-5 pb-2" id="contact-container">

                    <div class="col" id="col1">
                      <br><br>
                        <div div class="d-flex justify-content-around align-items-center">
                            <h4 class="pb-3">
                              Leave your information on the fields to the right, we will get back to you as soon as we can.
                              <br>
                            <h4>
                        </div>
                        <div>
                            <h6>
                              Remember to leave a detailed description of the issues you're experiencing as well as overall feedback. 
                              <br>
                              <br>
                              Shoot us an email at: <i>wemakestockeasy@ez.com</i>
                            </h6>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                          <input type="submit" class="py-2 submit" value="Send your information!">
                        </div>
                    </div>

                    <div class="col" id="col2">
                        <form class="form-pop my-2" method="POST">
                          <br>
                          <div class="d-flex justify-content-around">
                            <input type="text" name="firstName" id="inputForm" placeholder="First name*">
                            <input type="text" name="lastName" id="inputForm" placeholder="Last name*">
                          </div>
                          <br>
                          <div class="d-flex justify-content-around">
                            <input type="email" name="email" id="inputForm" placeholder="Email address*">
                            <input type="text" name="company" id="inputForm" placeholder="Company*">
                          </div>
                          <br>
                          <div class="d-flex justify-content-center" id="areaDiv">
                            <textarea name="comments" id="inputArea" cols="58" rows="10" placeholder="Comments or issues*"></textarea>
                          </div>
                        </form>

                    </div>
                </div>
              
              <!--End of contact form-->

                
              </div>


</div>
       </main>
    </div>
</body>
</html>