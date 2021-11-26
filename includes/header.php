
<div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.php" class="nav-item nav-link active">Home</a>
                                <a href="about.php" class="nav-item nav-link">About</a>
                                <a href="service.php" class="nav-item nav-link">Practice</a>
                                <a href="team.php" class="nav-item nav-link">Attorneys</a>
                                <a href="portfolio.php" class="nav-item nav-link">Case Studies</a>
                                
                                <?php
                                    
                                     if(isset($_SESSION['loggedin'] )){?>
                                         <div class='nav-item dropdown'>
                                         <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown'>Your Account</a>
                                         <div class='dropdown-menu'>
                                         <a href='includes/logout.php' class='dropdown-item'>Logout</a>
                                         <a href='account.php' class='dropdown-item'>View Your Account</a>
                                         <a href='attorney.php' class='dropdown-item'>View Your Attorneys</a>
                                         </div>
                                         </div>
                                    <?php
                                     }
                                    else {
                                        ?>
                                        <div class='nav-item dropdown'>
                                        <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown'>Your Account</a>
                                        <div class='dropdown-menu'>
                                        <a href='login.php' class='dropdown-item'>Login as client</a>
                                        <a href='login-lawyer.php' class='dropdown-item'>login as lawyer</a>
                                        </div>
                                        </div>
                                        <?php
                                    }
                                ?>
                                <a href="contact.php" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="team.php">Get Appointment</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>