
        <div class="row"  >
            <div class="col-lg-12 col-sm-12 col-sx-12" >
                <nav>
                    <div style="width:125px;height:85px; float:left;">
                        <a href="../homepage.php"> <img src="../img/logo.png" class="logo"> </a>
                    </div>

                    <ul class="menu">
<!--
                            <li><i class="fa fa-bars" style="color:white;"></i>
                                <ul>

                                    <li><a href="about.php" style="text-decoration: none;color:white;">about </a></li><br>
                                    <li><a href="contact.php" style="text-decoration: none;color:white;">contact</a></li><br>
                                </ul>
                            </li>-->
                            <li><a href="../about.php" style="text-decoration: none;color:white;">about </a></li>
                            
                            <li><a href="../contact.php" style="text-decoration: none;color:white;">contact</a></li>
                            
                            <li>
                                <a href="../user_profile/profile.php" style = "color:white;">
                                    <i class = "fa fa-address-book-o"></i>
                                </a>
                            </li>

                            <li><a href="cartdetail.php" style="color:white;"><i class="fa fa-cart-plus">  </i></a></li>

                            <li>
                                <?php
                                if (!isset($_SESSION['user'])) {
                                    ?>
                                    <a href="../form/login.php" style="text-decoration: none;color:white;">Login</a>
                                    <?php
                                }
                                ?>

                            </li>

                            <li>
                                <?php
                                if (isset($_SESSION['user'])) {
                                    ?>
                                    <a href="../logout.php" style="color:white;">Logout</a>
                                    <?php
                                }
                                ?>

                            </li>

                            <!--diplay name of user loged in-->
                            <li style="color:white;text-decoration: none;">
                                <?php
                                if (isset($_SESSION['user'])) {
                                    $con = new mysqli("localhost", "root", "", "project");
                                    $sql = "SELECT * FROM user_info where userid='" . $_SESSION['user'] . "'  ";
                                    $result = $con->query($sql);
                                    $row = mysqli_fetch_array($result);
                                    if ($_SESSION['user'] != "admin") {
                                       echo 'welcome ' . $row['first_name'];
                                    }

                                    if ($_SESSION['user'] == "admin") {
                                        echo"welcome admin";
                                    }
                                }
                                ?> 
                            </li>

                        </ul>  
                </nav>


            </div>
        </div>

