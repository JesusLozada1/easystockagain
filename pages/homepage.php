<!--MAIN LAYOUT -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard - EzStock</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../resources/css/homepage.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossOrigin="anonymous"/>
   <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">

</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><!--<span class="fab fa-servicestack">--><img src="../resources/images/ezstock-white.svg"></span></h2>
          
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="homepage.html" class="active"><span class="fas fa-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="../table/table.php"><span class="fas fa-table"></span><span>Paint Department</span></a>
                </li>
                <li>
                    <a href="../table/table_lumber.php"><span class="fas fa-table"></span><span>Lumber Department</span></a>
                </li>
                <li>
                    <a href="confirm_delete.php"><span class="fas fa-user-friends"></span><span>Customers</span></a>
                </li>
                <li>
                  <a href=""><span class="far fa-building"></span><span>About Us</span></a>
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
                <label for="nav-toggle">
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
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="fas fa-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>$6k</h1>
                        <span> Income</span>
                    </div>
                    <div>
                        <span class="fab fa-google-wallet"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                            <h1>21</h1>
                            <span> Emails</span>
                    </div>
                    <div>
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>124</h1>
                        <span> Orders</span>
                    </div>
                    <div>
                        <span class="fas fa-shopping-cart"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
              <div class="projects">
                <div class="card">
                  <div class="card-header">
                      <h3>Recent Projects</h3>
                      <button>See all <span class="fas fa-arrow-right"></span></button>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <table width="100%">
                            <thead>
                              <tr>
                                <td>Project Title</td>
                                <td>Department</td>
                                <td>Status</td>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Behring Order</td>
                                <td>Paint</td>
                                <td>
                                  <span class="status purple"></span>
                                  review
                                </td>
                              </tr>
                              <tr>
                                <td>End of Quarter</td>
                                <td>Lumber</td>
                                <td>
                                  <span class="status pink"></span>
                                  in progress
                                </td>
                              </tr>
                              <tr>
                                <td>Order Delivery</td>
                                <td>Plumbing</td>
                                <td>
                                  <span class="status orange"></span>
                                  pending
                                </td>
                              </tr>
                              <tr>
                                <td>Monthly Review</td>
                                <td>Kitchen</td>
                                <td>
                                  <span class="status purple"></span>
                                  review
                                </td>
                              </tr>
                              <tr>
                                <td>Installation</td>
                                <td>Furniture</td>
                                <td>
                                  <span class="status pink"></span>
                                  in progress
                                </td>
                              </tr>
                              <tr>
                                <td>MiracleGro Order</td>
                                <td>Lawn & Garden</td>
                                <td>
                                  <span class="status purple"></span>
                                 review
                                </td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>

                </div>
              </div>
              <div class="customers">
                <div class="card">
                  <div class="card-header">
                      <h3>New customer</h3>
                      <button>See all <span class="fas fa-arrow-right"></span></button>
                  </div>
                  <div class="card-body">
                    <div class="customer">
                      <div class="info">
                        <img src="../resources/images/avatar-pic.png" width="40px" height="40px" alt="">
                            <div>
                              <h4>Alfredo Boyardee</h4>
                              <small>CEO Jenkins</small>
                            </div>
                      </div>
                      <div class="contact">
                        <span class="fas fa-user-circle"></span>
                        <span class="fas fa-comment"></span>
                        <span class="fas fa-phone"></span>
                      </div>
                    </div>

                    <div class="customer">
                      <div class="info">
                        <img src="../resources/images/avatar-pic.png" width="40px" height="40px" alt="">
                            <div>
                              <h4>Calvin M Beard</h4>
                              <small>STM Lumber</small>
                            </div>
                      </div>
                      <div class="contact">
                        <span class="fas fa-user-circle"></span>
                        <span class="fas fa-comment"></span>
                        <span class="fas fa-phone"></span>
                      </div>
                    </div>
                    <div class="customer">
                      <div class="info">
                        <img src="../resources/images/avatar-pic.png" width="40px" height="40px" alt="">
                            <div>
                              <h4>Christopher P. Beam</h4>
                              <small>Manager Elek-Tek</small>
                            </div>
                      </div>
                      <div class="contact">
                        <span class="fas fa-user-circle"></span>
                        <span class="fas fa-comment"></span>
                        <span class="fas fa-phone"></span>
                      </div>
                    </div>
                  </div> 

                </div>  
              </div>

            </div>
        </main>
    </div>
</body>
</html> 