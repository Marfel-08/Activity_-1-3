<!DOCTYPE html>
<html lang="em"> 
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scales=1.0">
<title>Document</title> 
<link rel="stylesheet" href="../css/customstyle.css">
</head>

<body>



    <!-- STARTING HEADER -->
    <header> 
        <H1> AniWatch </H1> 
         <H2> THE MOST FAMOUS WEBSITE TO WATCH ANIME </H2>
        <div class="container">
            <a href="../index.html">Home</a>|
            <a href="./about.html">About</a>|
            <a href="./Contact Us.html">Contact Us</a>|
            <a href="./pages/inquiry.html">Inquiry</a>|
            <a href="./pages/Profile.html">Profile</a>|
        </div>
    
    
    
    </header>
     <!-- ENDING HEADING -->

    <!-- STARTING SECTION -->
     <section>
        <nav>
            <ul class="navigation_menu">
                <li><a href="./index.html">Heading</a></li>
                <li><a href="./list.html">Anime List</a></li>
                <li><a href="./table.html">Table</a></li>
                <li><a href="./Forms.html">Form</a></li>
                <li><a href="./forms.html">Form Post Method</a></li>
                <li><a href="./Images.html">Image</a></li>
            </ul>
        </nav>
        <article>
            <h2>Form Post Method</h2>
            <?php
              if($_SERVER["REQUEST_METHOD"] == "POST"){
                  $fullname = htmlspecialchars($_POST['name']);
                  $yourAge = htmlspecialchars($_POST['age']);

                  echo "<h2>Received Data</h2>";
                  echo "name: " $name . "<br>";
                  echo "Age: " . $age . "<br>";
                } else{
                    echo "Invalid Request Method.";
                }
            ?>
          
           
            </p>
        </article>
     </section>
     <!-- ENDING SECTION -->

     <!-- STARTING TAG FOOTER -->
      <footer>
        <h2>AniWatch!!!</h2>
        <div class=" footer menu">
            <a href="about.html"> About</a> |
            <a href="#"> Refund policy </a> |
            <a href="#"> Terms of use </a> |
            <a href="#"> Privacy policy </a> |
            <a href="#"> FAQ'S </a> |
            <a href="#"> Affiliates </a> |
            <a href="contactUs.html"> Contact </a> |
        </div>
          <div> 
            <p>
                <b>Copyright &copy; Student of BSIS 3A. All rights reserved.</b>
               </p>
          </div>
        
      </footer>
      <!-- ENDING TAG FOOTER -->
</body>
</html>
