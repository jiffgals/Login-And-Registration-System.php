<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Script</title>
    <link rel="stylesheet" href="css/hamburger.css">
    <link rel="stylesheet" href="css/porfotlio.css">
    <link rel="stylesheet" href="css/navigation.css">
<style>
</style>
</head>
<body>

<container>
    <nav>
        <h1>JN GS</h1>
    </nav>
    
<headfloat>
    <aside>
        <header>
        <a href="main.php" class="logo">JN GS</a>
        <div class="group">
            <ul class="navigation">
                <li><a href="main.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <div class="search">
                <span class="icon">
                    <ion-icon name="search-outline" class="searchBtn"></ion-icon>
                    <ion-icon name="close-outline" class="closeBtn"></ion-icon>
                </span>
            </div>
            <ion-icon name="menu-outline" class="menuToggle"></ion-icon>
        </div>
        <div class="searchBox">
            <input type="text" placeholder="Search...">
        </div>
        </header>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            <script src="js/navigation.js"></script>

    </aside>
</headfloat>
</container>

    <container2><text1>What is JavaScript?</text1></container2>

        <main2>
            <text2>
            JavaScript is the world's most popular programming language. 
            JavaScript is the programming language of the Web. JavaScript is easy to learn.
            </text2>
        </main2>

        

    <!-- This is for JS Examples -->
<content1>
<text type="button" onclick="document.getElementById('jschangehtml').style.display='block'">JavaScript Can Change HTML Content</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="jschangehtml" style="display:none">
            One of many JavaScript HTML methods is <font color="red">getElementById()</font>. <br/>
            The example below "finds" an HTML element (with id="demo"), and changes the element content (innerHTML) to "Hello JavaScript": <br/> <br/>

            Example: <br/>
            document.getElementById("demo").innerHTML = "Hello JavaScript"; <br/><br/>

            < ! D O C T Y P E &nbsp; h t m l > <br/>
            < h t m l > <br/>
            < b o d y > <br/><br/>

            < h 2 > What Can JavaScript Do?< / h 2 > <br/>
            < p id="demo">JavaScript can change HTML content.< / p > <br/><br/>

            < button type="button" onclick='document.getElementById("demo").innerHTML = "Hello JavaScript!"'>Click Me!< /button > <br/><br/>

            < /body > <br/>
            < /html >
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('example').style.display='block'">Title</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="example" style="display:none">
            
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('explained').style.display='block'">Title</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="explained" style="display:none">
            
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('wcss').style.display='block'">Title</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="wcss" style="display:none">
            
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('selector').style.display='block'">Title</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="selector" style="display:none">
            
            </p>
            </div>
        </text5>
    </div>

<text type="button" onclick="document.getElementById('selectorcategory').style.display='block'">Title</text>
    <div class="jsresult">
        <text5>
            <div contenteditable="true">
            <p id="selectorcategory" style="display:none">
            
            </p>
            </div>
        </text5>
    </div>
</content1>

    <script src="js/hamburger.js"></script>

    <footer>
        Copyright &copy; 2023 <NAME>JN GS</NAME>
    </footer>
</body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>