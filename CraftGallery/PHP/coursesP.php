<!DOCTYPE html> <html lang="en"> <head>
    <meta name="viewport" initial-scale=1.0"> <meta charset="utf-8">
    <title> Craft Gallery</title>
    <link rel="stylesheet" href="about.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700 &display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/fontawesome- free/4.7.0/css/fontawesome-free.min.css">
    <script src="https://kit.fontawesome.com/3458dc9cc6.js" crossorigin="anonymous"></script>
   
    <style>
*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    }


    nav{
    display: flex;
    padding: 2% 6%; justify-content: space-between; align-items: center;
    }
    nav img{
    width: 250px;
    border-radius: 50%; }
     .nav-links{ flex: 1;
    text-align: right; }
    .nav-links ul li { list-style: none; display: inline-block; padding: 8px 12px; position: relative;
    }
     
    .Class1{
    min-height: 10vh;
    width: 100%;
    background-image: linear-gradient(rgba(228, 176, 109, 0.7),rgba(240, 209, 183,
    0.7)), url(background3.jpg); background-size: cover; background-position: center; position: relative;
    }
    
    .section2 { width:100%;
    min-height: 60vh; background-color:rgba(155, 114, 63, 0.199);
    } 
    .container{
    width:80%; background-size: cover; display: block; margin: auto; padding-top: 100px;
    }
    .content-section {
        float: left;
        width: 40%;
    }

    .content-section .content h1,h4 {
    
     margin-top: px; color:rgb(131, 98, 48);
    }
     .content-section .content p{
    margin-top: 1px; font-size:19px; color:rgb(145, 106, 49); line-height: 1.5;
    }
    .content-section .content .button {
    margin-top: 50px;
    }
    .content-section .content .button a{
    padding: 12px 25px;
    text-decoration: none ;
    font-size:19px;
    letter-spacing: 1.5px;
    background-color: rgba(189, 145, 88, 0.7); color: white;
    }
    .content-section .content .button a:hover { background-color: white; color:rgba(189, 145, 88, 0.7);
    } #about-1{
    color: rgb(37, 16, 2); font-weight: 600;
    }
    /* -------- Footer -------*/
    .footer{
    width: 100%;
    text-align: center; padding: 30px 0;
    color: rgb(107, 65, 18); }
    .footer h4{ margin-bottom: 25px; margin-top: 20px; font-weight: 600;
    }
    .footer p{ font-weight: 200; color: darkgray;
    
    }
    .footer ul, li{
    color: darkgray; text-align: center; font-weight: 200;
    }
    .icons-fot .fa{
    color: rgba(167, 94, 51, 0.89); margin: 0 13px;
    cursor: pointer;
    padding: 18px 0;
    }
    .icons-fot .fa:hover {
    transform: scale(1.3); }
    .text-box h1{ font-size: 45px;
    }

    </style></head>
    <body>
   
    <section class="Class1"> <nav>
    <a href="home.html"> <img src="LOgo.png"></a> 
    
    </section>
    
    <div class="section2">
    <div class="container">
    <div class="content-section"> 
    <div class="content">
    
    <h1>THANK YOU !</h1>  
      <br><br>

    <p>
    <?php

$pname= $_POST['pname'];
$pemail= $_POST['pemail'];
$pnumber=$_POST['pnumber'];
$phours=$_POST['phours'];


$connection = new mysqli('localhost','root','','craft_gallery');
if($connection->connect_error){
     die("connection Failed: ".$connection->connect_error);
}else{
    $stus=$connection->prepare("insert into professionals_courses(pname,pemail,pphone,phours)
    values(?,?,?,?)");
    $stus->bind_param("ssis",$pname,$pemail,$pnumber,$phours);
    $stus->execute();
    
    echo"Sent SUCCESSFULLY:)";
    $stus->close();
    $connection->close();
}
?>
    <div class="button">
        <a href="home.html"> back to the home page</a> </div>
        </div>
    </p>
    <br>
    </div>
    </div>
    </div>
    </div>

    <section class="footer">
    <h4>About Us</h4>
    <p> &copy; 2021 Craft Gallery Riyadh | webdesign by :
    <ul><br>
    <li> - Mothla Alnoshan </li> <li> - Feda Alnafisah </li> <li> - Areen Alquayid </li> <li> - Sara Alghofaily </li> <li> - Lamees Aloqlan </li>
    </ul> </p>
    <br>
    <div class="icons-fot">
    <i class="fa fa-facebook" ></i>
    <a href="https://twitter.com/craftgallery_sa?s=21"><i class="fa fa-twitter" ></i></a>
    <a href="https://instagram.com/craftgallery.sa?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
    <i class="fa fa-envelope"></i> </div>
    </section>
    </body>
    </html>