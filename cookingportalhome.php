<!DOCTYPE html>
<head lang="en">
    <title>Cooking Portal and Calorie Counter Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="description" content="Cooking portl and calorie counter home">
    <style>
        ul {
            list-style-type: none;
            margin-top: 0;
            padding: 20px;
            overflow: hidden;
        }
        li {
            display: inline;
            margin-right: 20px;
            float:left;
        }
        body {
            background-image: url("food\ home.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: relative;
        }
        #search-bar {
            display: block;
            padding: 8px;
            background-color: rgba(230, 230, 255, 0.8);
            opacity: 1;
        }
        li a {
            color:teal;
            text-decoration: none;
            font-weight: 200;
            font-family: 'Times New Roman', Times, serif;
            font-size: 15px;
            font-weight: 800;
        }
        * {
            box-sizing: border-box;
        }
        .hover-size {
            transition: transform .2s;
            float: left;
            width: 350px;
            height: 250px;
            margin: 20px 30px;
        }

        .hover-size:hover {
            -ms-transform: scale(1.2);
            -webkit-transform: scale(1.2); 
            transform: scale(1.2); 
        }
        .img-block1 {
            position: relative;
            font-family: Arial;
            float: left;
          }
        .text-block {
            position: absolute;
            bottom: 20px;
            right: 4%;
            background-color: lavenderblush;
            color:darkmagenta;
            padding-left: 20px;
            padding-right: 20px;
          }
    </style>
</head>
<body>
    <div id=search-bar>
        <div style="width: 40%; float: left;">
            <script async src="https://cse.google.com/cse.js?cx=59256b39dc56a8e32"></script>
            <div class="gcse-search"></div>
        </div>
        <ul>
            <li><a href="http://localhost/html%20project/login.php">Log Out</a></li>
            <li><a href="http://localhost/html%20project/signup.php">Sign Up</a></li>
            <li><a href="http://localhost/html%20project/calorie%20counter.php">Calorie Counter</a></li>
            <li><a href="http://localhost/html%20project/IndianVar.php">Shop</a></li>
            <li><a href="http://localhost/html%20project/Htips.php">Health Tips</a></li>
            <li><a href="https://thechefsconnection.com/">Connect with chefs</a></li>
            <li><a href="https://www.cntraveller.in/story/indian-accent-voted-indias-1-restaurant-bombay-canteen-2/">Restaurants</a></li>
            <li><a href="https://www.healthyeating.org/nutrition-topics/general/food-groups/fruits"><img src="food icon.jpg" alt="food icon" style="width:40px;height:40px;margin-left: 30px;"></a></li>
        </ul>
    </div>
    <br>
    <br>
    <div class="hover-size img-block1">
        <a href="http://localhost/html%20project/regional%20home.php"><img src="regional food.jpg" alt="regional food" style="width:350px;height: 250px;margin-right: 10px;" class="image"></a>
        <div class="text-block">
            <p>Regional Food</p>
        </div>
    </div>
    <div class="hover-size img-block1">
        <a href="http://localhost/html%20project/feedback.php"><img src="cooking feedback.jpg" alt="feedback" style="width:350px;height: 250px;margin-right: 10px;" class="image"></a>
        <div class="text-block">
            <p>Provide Feedback</p>
        </div>
    </div>
    <div class="hover-size img-block1">
        <a href="http://localhost/html%20project/upload.php"><img src="cooking upload.jpg" alt="upload" style="width:350px;height: 250px;margin-right: 10px;" class="image"></a>
        <div class="text-block">
            <p>Upload your Recipes</p>
        </div>
    </div>
    <div class="hover-size img-block1">
        <a href="http://localhost/html%20project/ingofblackcurrent.php"><img src="black currant home.jpg" alt="blackcurrant" style="width:350px;height: 250px;margin-right: 10px;" class="image"></a>
        <div class="text-block">
            <p>Black Currant Ice Cream</p>
        </div>
    </div>
    <div class="hover-size img-block1">
        <a href="http://localhost/html%20project/ingofkebabs.php"><img src="kebab home.jpg" alt="kebab" style="width:350px;height: 250px;margin-right: 10px;" class="image"></a>
        <div class="text-block">
            <p>Kebab Recipe</p>
        </div>
    </div>
    <div class="hover-size img-block1">
        <a href="http://localhost/html%20project/retrivehome.php"><img src="retrive_foodmainhome.jpg" alt="upload" style="width:350px;height: 250px;margin-right: 10px;" class="image"></a>
        <div class="text-block">
            <p>Retrive Food From Portal</p>
        </div>
    </div>
    <br>
    <br>
    <a href="#top" id="link" style="text-align: center;display: inline;background-color: blanchedalmond;border: 1px solid grey;border-radius: 10px;padding: 10px;position: absolute;left:46%;top: 116%;text-decoration: none;">Back to top</a>
    <footer style="background-color: rgba(243, 230, 255, 0.8);padding-left: 20px; padding-bottom: 0px;padding-right: 20px;padding-top: 20px;position: absolute;top: 125%;">
        <div style="float: right;margin-left: 500px;">Quick link access: 
        <nav>
            <a href="http://localhost/html%20project/Desserts%20webpage.php" style="text-decoration: none;color: darkgreen;">Desserts</a>|
            <a href="http://localhost/html%20project/signup.php" style="text-decoration: none;color: darkgreen;">Sign up</a>|
            <a href="http://localhost/html%20project/regional%20home.php" style="text-decoration: none;color: darkgreen;">Regional food</a>|
            <a href="http://localhost/html%20project/ingragidosa.php" style="text-decoration: none;color: darkgreen;">Ragi Dosa</a>
        </nav></div>
        <address style="float: left;margin-right: 500px;">
            Topic: Login page for cooking portal<br>
            Author: Anjana<br>
            Contact details: <a href="mailto:abc@gmail.com" style="text-decoration: none;color: darkgreen;">Through mail</a>
        </address>
    </footer>
</body>