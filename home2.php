<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <script>
function showdate()
{
var d= new Date();
var h=d.getHours();
var m=d.getMinutes();
var s=d.getSeconds();
document.getElementById("client-date").innerHTML = (h+':'+m+':'+s);
setTimeout(showdate,1000);
}
</script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url("background.img.jpg"); /* Replace with your background image URL or path */
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    header {
      background-color: #333;
      padding: 10px;
      color: #fff;
      display: flex;
      justify-content: flex-end;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      display: inline;
      margin-right: 10px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
    }

    main {
      display: flex;
      justify-content: space-around;
      align-items: flex-start;
      margin: 20px;
    }

    section {
      width: 555%;
      background-color: cornsilk;
      padding: 40px;
      margin: 150px;
    }

    section h2 {
      color: #333;
    }
    p{
      font-size: larger;
    }
  </style>
</head>
<body  onload="showdate()">
<p id="client-date"></p>>
  <header>
    <nav>
      <ul>
        <li><a href="home2.html">Home</a></li>
        <li><a href="qualification.html">Qualification</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="hobbies.html">Hobby</a></li>
        <li><a href="achievement.html">Achievements</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section>
      <h2>Welcome ,</h2>
      <p>I am Hansie Swedal Pais , a Computer Science Engineer.<br>
       Click on the respective to know more about my : qualification , hobbies ,achievements,photo gallery.<br> 
      </b>Hope you like it....
        </p>
      </section>
<?php
date_default_timezone_set("Asia/Kolkata");
echo "The time is " . date("h:i:sa");
?>

    
   
  </main>
</body>
</html>
