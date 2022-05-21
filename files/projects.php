<?php
$loadpage =(isset($_GET['load']) && $_GET['load'] !='') ? $_GET['load'] :'';
?>
<div id="overlay1">
        <div id="modal">
            <img src="img/LT1prev.png" width="900px" height="484px">
            <div id="modaltext">
            <h2> <a id ="backbtn" href="#" onclick="hide1()">close</a></h2>
                </div>
            </div>
        </div>

        <div id="overlay2" class="overlay">
        <div id="modal">
            <img src="img/LT3.PNG" width="900px" height="484px">
            <div id="modaltext">
            <h2> <a id ="backbtn" href="#" onclick="hide2()">close</a></h2>
                </div>
            </div>
        </div>
 <div id="overlay3" class="overlay">
        <div id="modal">
            <img src="img/LE4.PNG" width="900px" height="484px">
            <div id="modaltext">
            <h2> <a id ="backbtn" href="#" onclick="hide3()">close</a></h2>
                </div>
            </div>
        </div>
 <div id="overlay4" class="overlay">
        <div id="modal">
            <img src="img/CLE1MT.PNG" width="900px" height="484px">
            <div id="modaltext">
            <h2> <a id ="backbtn" href="#" onclick="hide4()">close</a></h2>
                </div>
            </div>
        </div>
 <div id="overlay5" class="overlay">
        <div id="modal">
            <img src="img/LT5.PNG" width="900px" height="484px">
            <div id="modaltext">
            <h2> <a id ="backbtn" href="#" onclick="hide5()">close</a></h2>
                </div>
            </div>
        </div>
 <div id="overlay6" class="overlay">
        <div id="modal">
            <img src="img/LE6home.PNG" width="900px" height="484px">
            <div id="modaltext">
            <h2> <a id ="backbtn" href="#" onclick="hide6()">close</a></h2>
                </div>
            </div>
        </div>

        <div id="container">
            
            <div id="box1">
                <div id="sitename"> <h1>LEARNING TASK 2 </h1>
                <div id ="buttons" > 
                    <h3  class="prev"> <a  href ="#" id="prev1" onclick="show1()">Preview</a></h3> 
                    <h3 id="visit"><a href ="/LE2files/Homepage.html" target="_blank" rel="noopener noreferrer"> Visit</a> </h3>
                </div>
                    </div>
                
            </div> 
            <div id="box2">
                <div id="sitename"> <h1>LEARNING TASK 3 </h1>
                <div id ="buttons"> 
                    <h3 id="prev2" class="prev"> <a href ="#" onclick="show2()">Preview</a></h3> 
                    <h3 id="visit"><a href ="/LE3files/movies.html" target="_blank" rel="noopener noreferrer"> Visit</a> </h3>
                </div>
                    </div>
            </div>
            <div id="box3">
                <div id="sitename"> <h1>LEARNING TASK 4 </h1>
                <div id ="buttons"> 
                    <h3 id="prev3" class="prev"> <a href ="#" onclick="show3()">Preview</a></h3> 
                    <h3 id="visit"><a href ="/LE4files/peom.html" target="_blank" rel="noopener noreferrer"> Visit</a> </h3>
                </div>
                    </div>
            </div>
            <div id="box4">
                <div id="sitename"> <h1>CULMINATING LE </h1>
               <div id ="buttons"> 
                    <h3 id="prev4" class="prev"> <a href ="#" onclick="show4()">Preview</a></h3> 
                    <h3 id="visit"><a href ="/CLEMTfiles/index.html" target="_blank" rel="noopener noreferrer"> Visit</a> </h3>
                </div>
                    </div>
            </div>
            <div id="box5">
                <div id="sitename"> <h1>LEARNING TASK 5 </h1>
                <div id ="buttons"> 
                    <h3 id="prev5" class="prev"> <a href ="#" onclick="show5()">Preview</a></h3> 
                    <h3 id="visit"><a href ="/LE5files/index.html" target="_blank" rel="noopener noreferrer"> Visit</a> </h3>
                </div>
                    </div>
            </div>
            <div id="box6">
                <div id="sitename"> <h1>LEARNING TASK 6 </h1>
                <div id ="buttons"> 
                    <h3 id="prev6" class="prev"> <a href ="#" onclick="show6()">Preview</a></h3> 
                </div>
                    </div>
            </div>
            
        </div>
        