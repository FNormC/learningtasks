<?php
$loadpage =(isset($_GET['load']) && $_GET['load'] !='') ? $_GET['load'] :'';
?>
<!DOCTYPE html>

<html>
<head> 
    <title> Portfolio </title>
    <link rel="stylesheet" href="files/finalcss.css">
    <script src="files/finaljs.js"> </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
    
    <header>
        
    <div id="logo"> <img alt="logopic" src="img/logoblackorng.png"> </div>
    <div id=nav>
           <?php 
            switch($loadpage){
                case 'projects':
                    include_once 'files/navmenu.php';
                    break;
                case 'profile':
                    include_once 'files/navmenu.php';
                    break;
                default:
            }
        ?>
    </div>
    </header>
    <div id="wallpaper">
    <div id="welcome"> 
        <?php 
            switch($loadpage){
                case 'projects':
                    include_once 'files/project_text.php';
                    break;
                case 'profile':
                    include_once 'files/profile_text.php'; 
                    break;
                default:
                    include_once 'files/default_text.php';
            }
        ?>
        </div>
    <div id = "content"> 
        <?php       
                        switch($loadpage){
                            case 'projects':
                                include_once 'files/projects.php';
                                break;
                            case 'profile':
                                include_once 'files/profile.php';
                                break;
                            default:
                                include 'files/home.php';
                        }
        ?>
    </div>
    </div>
    
    <footer>
    
    <div id="footerbox">
        <div id="footerhead"><h1>Services</h1></div>
        <h2>Web-Design<br>UI/UX Design</h2>
        </div>
        
    <div id="footerbox">
        <div id="footerhead"><h1>About</h1></div>
        <h2>A website portfolio created by<br>Francis Norman Causing</h2>
        </div> 
        
    <div id="footerbox">
        <div id="footerhead"><h1> Contact </h1></div>
        <h2>+034-0987-654<br>francwebdev@gmail.com</h2>
        
        </div> 
   
    </footer>
</body>

</html>
