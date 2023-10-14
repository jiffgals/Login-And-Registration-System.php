<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
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

    <services>
        <text1>SERVICES:</text1>
    </services>

    <!-- This is for Programming Languages -->
    <container2>
        <text3>
            Learn Programming Languages and Database with &nbsp; H t m l , &nbsp; C s s , &nbsp; J a v a S c r i p t , &nbsp; P h p , &nbsp; and &nbsp; M y S Q L 
        </text3>
    </container2>

    <container>
        <main>
            <p><a href="html.php">Html</a> - is the standard markup language for Web pages.
                        With HTML you can create your own ...</p><br/>
            <p><a href="css.php">CSS</a> - is the language we use to style an HTML document. 
                        CSS describes how HTML elements should be displayed...</p><br/>
            <p><a href="js.php">JavaScript</a> - is the world's most popular programming language. 
                        JavaScript is the programming language of the Web. 
                        JavaScript is easy to learn.</p><br/>
            <p><a href="">PHP</a> - is a server scripting language, and a powerful tool for making dynamic and interactive ...</p><br/>
            <p><a href="">MySQL</a> - is a widely used relational database management system (RDBMS). Free and open ...</p>
        </main>

        <aside2>
            <div class="photocont">
                    <img src="logo/web-development-html-logo-world-wide-web-consortium-create-html-signature.jpg"/>
                    <img src="logo/CSS-Logo.jpg"/>
                    <img src="logo/JS_Logo.png"/>
                    <img src="logo/php.jpg"/>
            </div>
        </aside2>
    </container>

    <container2>
        <text3>
            Usefutl Tools - Text to Speech, Device Image Viewer, Stop Watch, World Clock, Calendar, Compass and more...
        </text3>
    </container2>

    <container1>
        <main>
            <p><a href="html.php">Text to Speech</a> - Turn text into Voice/Speech</p><br/>
            <p><a href="">Device Image Viewer</a> - View your devices images directly in this page</p><br/>
            <p><a href="">Stop Watch</a> - Useful stop watch you can use anytime online</p><br/>
            <p><a href="">World Clock</a> - Be updated on your schedules everyday using our builtin clock</p><br/>
            <p><a href="">Compass</a> - Find exactly the location of true north in your journeying around earth</p>
        </main>

        <aside>
            <div class="photocont">
                    <img src="logo/web-development-html-logo-world-wide-web-consortium-create-html-signature.jpg"/>
                    <img src="logo/CSS-Logo.jpg"/>
                    <img src="logo/JS_Logo.png"/>
                    <img src="logo/mysql php.jpg"/>
            </div>
        </aside>
    </container1>

<!-- This is for Programming Languages -->
<container2>
    About JN GS 
</container2>

<container1>
    <main>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi repellendus accusamus obcaecati ipsum totam ullam sunt suscipit eveniet aliquam, assumenda illo est voluptatem illum hic dolore modi tempore officiis alias.</p><br/>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum minima sit incidunt id deleniti. Blanditiis laboriosam laudantium accusamus error accusantium omnis dolorum reprehenderit explicabo temporibus consequuntur, ex provident molestiae magnam!</p><br/>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem nemo officia atque optio voluptatibus? Distinctio, veniam dignissimos. Veritatis quaerat, incidunt dolore, rem a fugiat consequuntur quas quidem facere exercitationem mollitia?</p><br/>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla dicta earum est perferendis fugit non facere labore provident ex illo quisquam deserunt hic unde nihil totam eius excepturi, quidem sunt?</p><br/>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In error odio quaerat architecto. Dolores corporis sit non, perspiciatis a pariatur impedit vel odio facilis dolor sunt, eaque illo consequuntur laboriosam.</p>
    </main>

    <aside>
        This is the description
    </aside>
</container1>

<!-- This is for Services -->
<container2>
    Our Services 
</container2>

<container1>
    <main>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi repellendus accusamus obcaecati ipsum totam ullam sunt suscipit eveniet aliquam, assumenda illo est voluptatem illum hic dolore modi tempore officiis alias.</p><br/>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum minima sit incidunt id deleniti. Blanditiis laboriosam laudantium accusamus error accusantium omnis dolorum reprehenderit explicabo temporibus consequuntur, ex provident molestiae magnam!</p><br/>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem nemo officia atque optio voluptatibus? Distinctio, veniam dignissimos. Veritatis quaerat, incidunt dolore, rem a fugiat consequuntur quas quidem facere exercitationem mollitia?</p><br/>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla dicta earum est perferendis fugit non facere labore provident ex illo quisquam deserunt hic unde nihil totam eius excepturi, quidem sunt?</p><br/>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In error odio quaerat architecto. Dolores corporis sit non, perspiciatis a pariatur impedit vel odio facilis dolor sunt, eaque illo consequuntur laboriosam.</p>
    </main>

    <aside>
        This is the description
    </aside>
</container1>

    <!-- This is temporary -->
    <container1>

    <main>
    <navheader>
            HTML Tutorial Series / Complete guide for beginners
    </navheader> <br/>
            <p> 
                Html Tutorial #1: <a href="html-tutorial1.php">Overview & Structure</a> <br/>
                Html Tutorial #2: <a href="html-tutorial2.php">Elements & Attributes</a> <br/>
            </p>
    </main>

    <aside>
    <text3>Html</text3>
        <text4> 
            - stands for Hyper Text Markup Language. <br/>
            - not a programming language <br/>
            - use to display an element on a webpage. <br/>
            - "building blocks of the web" 
        </text4>
    </aside>

    <main>
    <navheader>
            JavaScript Tutorial Series / Complete guide for beginners
    </navheader> <br/>
    
            <p> 
                Java Script Tutorial #1: <a href="js-tutorial1.php">Overview & Structure</a> <br/>
                Java Script Tutorial #2: <a href="js-tutorial2.php">Elements & Attributes</a> <br/>
                Java Script Tutorial #3: <a href="js-tutorial3.php">Linking Html Files</a> <br/>
                Java Script Tutorial #4: <a href="js-tutorial4.php">Linking Html Files</a> <br/>
            </p>
    </main>

    <aside>
    <text3>JavaScript Syntax - Statements</text3>
        <text4>A JavaScript program is a list of statements to be executed by a computer.</text4>
            <text5>ex: The value of z is 11.</text5> <br/>

    <text3>JavaScript Syntax - Numbers</text3>
        <text4>Number can be written with or without decimals.</text4>
            <text5>ex: 10.5</text5> <br/>

<text3>JavaScript Strings</text3>
    <text4>Strings can be written with double or single quotes.</text4>
        <text5>ex: John Doe</text5>
    </aside>

    </container1>

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