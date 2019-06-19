<html>
   
   <head>
      <title>Login Page</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .scale {
              transform: scale(1);
              -webkit-transform: scale(1);
              -moz-transform: scale(1);
              -ms-transform: scale(1);
              -o-transform: scale(1);
                 /* 부드러운 모션을 위해 추가*/
            }
            .scale:hover {
              transform: scale(10);
              -webkit-transform: scale(10);
              -moz-transform: scale(10);
              -ms-transform: scale(10);
              -o-transform: scale(10);
            }
         .box {
            border:#666666 solid 1px;
         }

         .autocomplete {
        position: relative;
        display: inline-block;
      }

      input {
        border: 1px solid transparent;
        background-color: #f1f1f1;
        padding: 10px;
        font-size: 16px;
      }

      
      .autocomplete-items {
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        /*position the autocomplete items to be the same width as the container:*/
        top: 100%;
        left: 0;
        right: 0;
      }

      .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff; 
        border-bottom: 1px solid #d4d4d4; 
      }

      /*when hovering an item:*/
      .autocomplete-items div:hover {
        background-color: #e9e9e9; 
      }

      /*when navigating through the items using the arrow keys:*/
      .autocomplete-active {
        background-color: DodgerBlue !important; 
        color: #ffffff; 
      }

      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
   
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Moviegator!</b></div>
            
            <div style = "margin:30px">
               
               <form autocomplete="off" action = "" method = "post">
                  <label>Name  :</label>
                     <div class="autocomplete" style="width:300px;">
                  <input id="myInput" type = "text" name = "username" placeholder="names" class = "box"/>
                   </div>
                  <br />
                  <br />
                  
                  
                  <label>Genre :</label>
                  <select name="genre">
                     <option value="movie">all</option>
                     <option value="action">action</option>
                     <option value="adventure">adventure</option>
                     <option value="animation">animation</option>
                     <option value="Comedy">comedy</option>
                     <option value="Crime">crime</option>
                     <option value="Drama">drama</option>
                     <option value="Documentary">documentary</option>
                     <option value="Family">family</option>
                     <option value="Fantasy">fantasy</option>
                     <option value="History">history</option>
                     <option value="Horror">horror</option>
                     <option value="Music">music</option>
                     <option value="Mystery">mystery</option>
                     <option value="Romance">romance</option>
                     <option value="scifi">sf</option>
                     <option value="War">war</option>
                     
                     
                     
                     
                  </select>
                  <br>
                  <br>
                  <h1><label>Releaseyear :</label></h1>
                  <select name="ry">
                     <option value="releasedate>0"> all</option>
                     <option value="releasedate<1960">under 1960</option>
                     <option value="releasedate>=1960 and releasedate<1970">1960s</option>
                     <option value="releasedate>=1970 and releasedate<1980">1970s</option>
                     <option value="releasedate>=1980 and releasedate<1990">1980s</option>
                     <option value="releasedate>=1990 and releasedate<2000">1990s</option>
                     <option value="releasedate>=2000 and releasedate<2010">2000s</option>
                     <option value="releasedate>=2010 and releasedate<2020">2010s</option>
                     <option value="releasedate>=2020">over 2020</option>
                  </select>

                  <!--<label>ReleaseYear  :</label><input type = "password" name = "password" class = "box" /><br/><br />-->
                  <br>
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
            </div>
            
         </div>


</body>
</html>
<?php

   $conn = mysqli_connect("localhost", "root", "", "myclass");
   mysqli_query($conn, "set session character_set_connection=utf8;");
   mysqli_query($conn, "set session character_set_results=utf8;");
   mysqli_query($conn, "set session character_set_client=utf8;");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form       
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $genre = mysqli_real_escape_string($conn, $_POST['genre']);
      $ry = mysqli_real_escape_string($conn, $_POST['ry']);
      
      

      $sql = "SELECT title, releasedate FROM $genre WHERE $ry and (actor1 like '%$myusername%' or actor2 like '%$myusername%'  or actor3 like '%$myusername%' or actor4 like '%$myusername%') ORDER BY title";//year DEC
      $result = mysqli_query($conn,$sql);

      //$row = mysqli_fetch_assoc($result);            
      //$count = mysqli_num_rows($result);      

    //print_r($row);

      if ($result->num_rows == 0){
         echo 'plz input another OPTION';
      } else {

      while ($row2 = mysqli_fetch_assoc($result)){
          
         echo "TITLE---"."  is   ".$row2["title"]." --- "."[".$row2["releasedate"]."]";
         ?>
         <input type="button" name="link" value="link">
         <div class="img">
            <div class="scale">
               <img src="button.png" style="width: 30px; height: 15px" onmouseover="this.src = 'https://www.google.com/search?tbm=isch&q=ironman.jpg'" onmouseout="this.src='button.png'">
            </div>
         </div>
         
         <?php
         echo '<br>';
         echo '<br>';
            }
         }
      }
   
      
   $conn->close();

?>
