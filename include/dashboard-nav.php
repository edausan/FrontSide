<nav class="fs-nav-top white-fade-gradient">

    <div class="fs-logo-wrapper fleft">

        <figure class="fs-nav-logo fleft">
            <a href="home">
                <img src="images/fslogo2.png" alt="">
            </a>
        </figure>

        <header class="fs-header fleft">
            <h1>FrontSide Dashboard</h1>
        </header>

        
        
        
    </div>

    <div class="fs-navbar fright">

        <ul class="navbar-list"> 
            <li class="navbar-item notActive" id="welcome">
                <label for="">Welcome Admin <?php echo $_SESSION['fname']; ?></label>
            </li>

            <li class="navbar-item notActive" id="user">
                <figure class="navbar-icon-wrapper">
                    <?php 
                        if (array_key_exists('dp_path',$_SESSION) && !empty($_SESSION['dp_path'])) {
                           
                        ?>
                            <img src="<?php echo $_SESSION['dp_path']; ?>" alt="">
                        <?php
                        } else { ?> 
                            <img src="images/dashboard-icons/user.png" alt="">
                        <?php } ?>
                </figure>

                <ul class="nav-list" id="user" >
                    <li><a href="home">Store</a></li>
                    <li><a href="dashboard">Dashboard</a></li>
                    <li><a href="account">Account Settings</a></li>
                    <li>
                        <form action="dashboard" method="post">
                            <button name="logout" disabled>Logout</button >
                        </form>
                    </li>
                </ul>
            </li>
        </ul>

    </div>

    
</nav>