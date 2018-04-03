

<!-- 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->
<!DOCTYPE HTML>

<html>
    <head>
        <title>Registrations</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script   src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src=https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
        <link href="css/star.css" rel="stylesheet" type="text/css">
        <script language="javascript">
    function unhide()
    {
        document.getElementById("label").style.visibility="visible";
        document.getElementById("textarea").style.visibility="visible";
        
    }
    function hide()
    {
        document.getElementById("label").style.visibility="hidden";
        document.getElementById("textarea").style.visibility="hidden";
    }
    </script>
            
        <style>
            .input{
                min-width: 100%;
            }
        </style>
    </head>
    <body>
         <?php
        include 'header.php'
        ?>
        <main>
        <div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<div id='title'>
   
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-lg-12">
                    <label class =label>Registration No. </label>
                    <input type ="text" placeholder="Enter Registration Number" name="reg_no" class="input">
                    <label class="label">First Name </label>
                    <input type ="text" placeholder="Enter First Name" name="first_name" class="input">
                    <label class="label">Last Name </label>
                    <input type ="text" placeholder="Enter Last Name" name="last_name" class="input">
                    <label class="label">Choose Event </label>
                    <select class="input">
                        <option>e1</option>
                        <option>e2</option>
                        <option>e3</option>
                        <option>e4</option>
                    </select>
                    <label class="label">Event Type </label>
                    <div class="input>"<label class="radio"><input type="radio" name="event_type" value="Team" onclick="unhide()">Team</label>
                        <label class="radio"><input type="radio" name="event_type" value="Individual" onclick="hide()">Individual</label></div><br>
                        <label class="label" id="label" style="visibility:hidden">Team Members </label>
                        <textarea placeholder="Enter names of team members" class="input" name="team_members" id="textarea" style="visibility: hidden"></textarea>
                        <div class="col-lg-12" style="float: left"><input type="submit" class="input button" value="Submit" style="color: #ededed"></div>
                    </div>
                </div>
            </form>
        </div>
</div>
        </main>
       
         <div class="footer">
            <div class="container ">
                <p align="center">Good Host Carnival &nbsp;    |   &nbsp; The Techno-Socio-Cultural Fest &nbsp;    |   &nbsp;Contact Us: +91 90000 00000 &nbsp;| &nbsp;Crafted with &hearts; Guna Chaitanya</p>
            </div>
        </div>


    </body>
</html>