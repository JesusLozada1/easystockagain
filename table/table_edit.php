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
        <?php
        require_once 'process.php'; ?>

        <div class="row justify-content-center">

        <form action="process.php" method="POST">
        <input type = "hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
            <label>Name</label>
            <input type="text" name="pname" class="form-control" 
            value="<?php echo $paname; ?>" placeholder="Enter paint name">
            </div>
        
            <div class="form-group">
            <label>Brand</label>
            <input type="text" name="pbrand" class="form-control"
            value="<?php echo $pabrand; ?>" placeholder="Enter paint brand">
            </div>
        
            <div class="form-group">
            <label>Color</label>
            <input type="text" name="pcolor" class="form-control"
            value="<?php echo $pacolor; ?>" placeholder="Enter paint color">
            </div>    
        
        
            <div class="form-group"> 
        
            <?php
            if ($update == true):
            ?>
        
            <button type="submit" class="btn btn-info" name="update">Update</button>
           <?php else: ?>
        
            <button type="submit" class="btn btn-primary" name="add">ADD</button>
            <?php endif; ?>
            </div>
            
        </form>
        </div>
       </main>
    </div>
</body>
</html>