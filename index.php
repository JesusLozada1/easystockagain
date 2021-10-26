<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../resources/css/login.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossOrigin="anonymous"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css' />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossOrigin="anonymous"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <title>EasyStock - Login</title>
    </head>
    <body class="background">
        <div class="loginwrapper">
            <div class="login shadow-lg mb-5">
                <div class='form-header text-center'>
                    <img src="../resources/images/ezstock.svg" class="logo" alt="">
                    <h2 class="mb-0 mt-3">Admin Login</h2>
                </div>




                <form class="form-pop my-2" method="POST">
                    <div>
                        <div class="form-group">
                            <svg class='input-icon' id="Outline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>94 user</title><path d="M12,12A6,6,0,1,0,6,6,6.006,6.006,0,0,0,12,12ZM12,2A4,4,0,1,1,8,6,4,4,0,0,1,12,2Z"/><path d="M12,14a9.01,9.01,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.01,9.01,0,0,0,12,14Z"/></svg>
                            <input class="input form-control rounded-0" type="text" name="Username" value="Enter your username" placeholder="Enter username" required/>
                        </div>
                        <div class="form-group">
                            <svg class='input-icon' id="Outline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>71 lock</title><path d="M19,8.424V7A7,7,0,0,0,5,7V8.424A5,5,0,0,0,2,13v6a5.006,5.006,0,0,0,5,5H17a5.006,5.006,0,0,0,5-5V13A5,5,0,0,0,19,8.424ZM7,7A5,5,0,0,1,17,7V8H7ZM20,19a3,3,0,0,1-3,3H7a3,3,0,0,1-3-3V13a3,3,0,0,1,3-3H17a3,3,0,0,1,3,3Z"/><path d="M12,14a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V15A1,1,0,0,0,12,14Z"/></svg>
                            <input class="input form-control rounded-0" type="password" name="Password" placeholder="Password" requiered/>
                        </div>
                        
                    </div>

                    <div class="button-center mt-4">
                            <button class="submit">
                                Login
                            </button>
                    </div>
                </form>





                <br/>
            </div>
        </div>
    </body>
</html>