<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="html\css\hamburger.css">
    <link rel="stylesheet" href="html\css\myportfolio.css">
    <link rel="stylesheet" href="html\css\navigation.css">
<style>

/* This is for hamburger menu */
#navbar {
    background-color: #333333;
    overflow: hidden;
  }

  #navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  .dropdown {
    float: left;
    overflow: hidden;
  }

  .dropdown .dropbtn {
    font-size: 16px;  
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
  }

  #navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }

  .dropdown-content a:hover {
    background-color: #ddd;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }
  
  /* Hamburger styles */
  
  #hamburger {
    display: none;
    cursor: pointer;
  }

  #hamburger span {
    width: 35px;
    height: 5px;
    background-color: white;
    margin-bottom: 6px;
    display: block;
  }
  
  @media only screen and (max-width: 600px) {
    #navbar a:not(:first-child), .dropdown .dropbtn {
      display: none;
    }
    #navbar a.icon {
      float: right;
      display: block;
    }
  }

  @media only screen and (max-width: 600px) {
    #navbar.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    }
    #navbar.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
    #navbar.responsive .dropdown {
      float: none;
    }
    #navbar.responsive .dropdown-content {
      position: relative;
    }
    #navbar.responsive .dropdown .dropbtn {
      display: block;
      width: 100%;
      text-align: left;
    }
  }

/* This is for my portfolio */ 
body {
    color: #000;
}

container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: repeat(1, 1fr);
    grid-gap: 0px;
    background: linear-gradient(90deg, rgb(147, 253, 7) 10%, rgb(8, 247, 247) 100%);
}

container2 {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-template-rows: repeat(1, 1fr);
    grid-gap: 0px;
    background: linear-gradient(90deg, rgb(147, 253, 7) 10%, rgb(8, 247, 247) 100%);
}

nav {
    font-family: 'Courier New', Courier, monospace;
    display: grid;
    align-items: top;
    justify-content: left;
    border: 0px solid #000;
    width: calc(140% + 20%);
    height: 100%;
    color: #fff;
    background: linear-gradient(90deg, rgb(146, 64, 64) 10%, rgb(175, 184, 224) 100%);
    padding: 10px;
}

navheader {
    border: 1px solid #000;
    border-radius: 4px;
    padding: 10px;
    margin-top: 22px;
    margin-bottom: 2px;
}

footer {
    border: 1px solid #000;
    border-radius: 4px;
    font-size: x-small;
    margin-top: 22px;
    margin-bottom: 2px;
}

aside {
    font-family: 'Courier New', Courier, monospace;
    display: grid;
    align-items: top;
    justify-content: left;
    border: 0px solid yellow;
    width: calc(auto);
    margin-left: 50%;
    height: 100%;
    color: #fff;
    background: linear-gradient(90deg, rgb(170, 170, 196) 10%, rgb(146, 64, 64) 100%);
    padding: 10px;
}

main {
    font-family: 'Courier New', Courier, monospace;
    display: grid;
    align-items: top;
    justify-content: left;
    border: 0px solid #000;
    width: auto;
    height: 100%;
    color: #000000;
    background: linear-gradient(90deg, rgb(255, 255, 255) 10%, rgb(175, 184, 224) 100%);
    padding: 10px;
}

/* This is for navigation */ 
@import url('https://unpkg.com/boxicons@latest/css/boxicons.min.css');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    font-family: "Poppins", sans-serif;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: #a37272;
    min-height: 100vh;
    overflow-x: hidden;
}

header {
    position: absolute;
    opacity: 90%;
    top: 0;
    left: 0;
    bottom: 20px;
    width: 100%;
    height: 40px;
    background: brown;
    padding: 20px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 15px 15px rgba(0, 0, 0, 0.05);
}

.logo {
    color: #333;
    text-decoration: none;
    font-size: 1.5em;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
}

.group {
    display: flex;
    align-items: center;
}

header ul {
    position: relative;
    display: flex;
    gap: 30px;
}

header ul li {
    list-style: none;
}

header ul li a {
    position: relative;
    text-decoration: none;
    font-size: 1em;
    color: #333;
    text-transform: uppercase;
    letter-spacing: 0.2em;
}

header ul li a::before {
    content: "";
    position: absolute;
    bottom: -2px;
    width: 100%;
    height: 2px;
    background: #333;
    transform: scaleX(0);
    transition: transform 0.5s ease-in-out;
    transform-origin: right;
}

header ul li a:hover::before {
    transform: scaleX(1);
    transform-origin: left;
}

header .search {
    position: relative;
    display: flex;
    justify-items: center;
    align-items: center;
    font-size: 1.5em;
    z-index: 10;
    cursor: pointer;
}

.searchBox {
    position: absolute;
    right: -100%;
    width: 100%;
    height: 100%;
    display: flex;
    background: #fff;
    align-items: center;
    padding: 0 30px;
    transition: 0.5s ease-in-out;
}

.searchBox.active {
    right: 0;
}

.searchBox input {
    width: 100%;
    border: none;
    outline: none;
    height: 38px;
    color: #333;
    font-size: 1.25em;
    background: #fff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.5);
}

.searchBtn {
    position: relative;
    left: 30px;
    top: 2.5px;
    transition: 0.5s ease-in-out;
}

.searchBtn.active {
    left: 0;
}

.closeBtn {
    opacity: 0;
    visibility: hidden;
    transition: 0.5s;
    scale: 0;
}

.closeBtn.active {
    opacity: 1;
    visibility: visible;
    transition: 0.5s;
    scale: 1;
}

.menuToggle {
    position: relative;
    display: none;
}

@media (max-width: 800px) {
    .searchBtn {
        left: 0;
    }
    
    .menuToggle {
        position: absolute;
        display: block;
        font-size: 2em;
        cursor: pointer;
        transform: translateX(30px);
        z-index: 10;
    }

    header .navigation {
        position: absolute;
        opacity: 0;
        visibility: hidden;
        left: 100%;
    }

    header.open .navigation {
        top: 40px;
        opacity: 99%;
        visibility: visible;
        left: 70%;
        display: flex;
        flex-direction: column;
        background: #000;
        width: 100%;
        height: calc(100vh - 80px);
        padding: 20px;
        padding-top: 10px;
        border-top: 1px solid rgba(0, 0, 0, 0.5);
    }

    header.open .navigation li a {
        font-size: 1.25em;
    }

    .hide {
        display: none;
    }
}

</style>
</head>
<body>

    <container>
        <nav>
            <h1>JN GS</h1>
        </nav>
        <aside>
            <header>
            <a href="#" class="logo">JN GS</a>
            <div class="group">
                <ul class="navigation">
                    <li><a href="#">Home</a></li>
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
                <script src="html\js\navigation.js"></script>

        </aside>
    </container>

    <navheader>
            <h1>HTML Tutorial Series / Complete guide for beginners</h1>
    </navheader>

    <container2>
        <main>
            <p> Html Tutorial #1: <a href="html\html_tutorial_1.html" target="_blank">Overview & Structure</a> <br/>
                Html Tutorial #2: <a href="html\html_tutorial_2.html" target="_blank">Elements & Attributes</a> <br/>
                Html Tutorial #3: <a href="html\html_tutorial_3.html" target="_blank">Linking Html Files</a> <br/>
            </p>
                
                
            <p> Java Script Tutorial #1: <a href="html\html_tutorial_1.html" target="_blank">Overview & Structure</a> <br/>
                Java Script Tutorial #2: <a href="html\html_tutorial_2.html" target="_blank">Elements & Attributes</a> <br/>
                Java Script Tutorial #3: <a href="html\html_tutorial_3.html" target="_blank">Linking Html Files</a> <br/>
                Java Script Tutorial #4: <a href="html\javascript_tutorial_4.html" target="_blank">Linking Html Files</a> <br/>
            </p>
        </main>
    </container2>

<script>
    function toggleNavbar() {
    let navbar = document.getElementById("navbar");
    if (navbar.className === "") {
        navbar.className = "responsive";
    } else {
        navbar.className = "";
    }
    }

    let searchBtn = document.querySelector('.searchBtn');
let closeBtn = document.querySelector('.closeBtn');
let searchBox = document.querySelector('.searchBox');
let navigation = document.querySelector('.navigation');
let menuToggle = document.querySelector('.menuToggle');
let header = document.querySelector('header');

searchBtn.onclick = function() {
    searchBox.classList.add('active');
    closeBtn.classList.add('active');
    searchBtn.classList.add('active');
    menuToggle.classList.add('hide');
    header.classList.add('open')
}

closeBtn.onclick = function() {
    searchBox.classList.remove('active');
    closeBtn.classList.remove('active');
    searchBtn.classList.remove('active');
    menuToggle.classList.remove('hide');
}

menuToggle.onclick = function() {
    header.classList.toggle('open');
    searchBox.classList.remove('active');
    closeBtn.classList.remove('active');
    searchBtn.classList.remove('active');
}
</script>

    <footer>
        Copyright &copy; 2023 <NAME>JN GS</NAME>
    </footer>

</body>
</html>