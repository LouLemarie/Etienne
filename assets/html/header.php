<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#">
                <img style="width: 100px;" src="http://www.free-icons-download.net/images/factory-logo-icon-84733.png" alt="logo factory blog">
            </a>
        </div>
        <ul class="nav navbar-nav">

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <input type="search" placeholder="Search">
            </li>

            <?php

            if(!$_SESSION['login']) {
                echo ('
                                    
                                    <li style="margin:0px 10px;">
                                        <div class="button">
                                            <button class="button btn-5 pop-up-button-sign-in" style="margin: 20px auto; width:100%">Sign Up</button>
                                        </div>
                                    </li>
                                    
                                    <li  style="margin:0px 10px;">
                                        <button class="btn-5" style="margin: 20px auto; width:100%">Articles</button>
                                    </li>
                                    
                                    
                                    <li  style="margin:0px 10px;">
                                        <button class="btn-5 pop-up-button" style="margin: 20px auto; width:100%">login</button>
                                    </li>'
                );
            } else {
                echo ('
                                    <li  style="margin:0px 10px;">
                                        <button class="btn-5 pop-up-button" style="margin: 20px auto; width:100%">New Article</button>
                                    </li>  
                                    
                                     <li  style="margin:0px 10px;">
                                        <button class="btn-5"  class="btn-5" style="margin: 20px auto; width:100%">Mes articles</button>
                                    </li>                    
                                   
                                    
                                    <li  style="margin:0px 10px;">
                                        <a href="../php/authentification.php" class="btn-5" style="margin: 20px auto; width:100%">Administrateur</a>
                                    </li>
                                    

                                    <li  style="margin:0px 10px;">
                                        <a href="../../index.php" class="btn-5" style="margin: 20px auto; width:100%">Logout</a>
                                    </li>
                                    ');
            }

            ?>
        </ul>
    </div>
</nav>




<div class="tag col-xs-12">
    <?php
        include '../html/categoriesBarre.php';
    ?>
</div>


