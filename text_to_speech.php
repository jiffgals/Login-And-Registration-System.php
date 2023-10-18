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
    .ttscontainer {
        border: 1em solid blue;
        padding: 2px;
    }

    textarea {
        width: 90vw;
    }
</style>
</head>
<body>
<container>
<headfloat>
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
</headfloat>
</container>

    <margintop></margintop>

    <container2>
        <table>
            <td>
                <a href="main.php"><text1>&lt;</text1></a>
            </td>
            <td>
                <text1>Text to Speech</text1>
            </td>
        </table>
    </container2>

        <main2>
            <text2>
            Turn your Text into speech / audible 
            </text2>
        </main2>

<content1>
    
<div class="ttscontainer">
        <textarea></textarea>
        <button>Speak</button> <button><a href="https://codepen.io/jiffen/pen/ExGpgXm" target="_blank">Test Here Instead</a></button>
    </div>

<script>
    const text = document.querySelector('textarea');
    const button = document.querySelector('button');

    button.addEventListener('click', () => {
        const utterance = new SpeechSynthesisUtterance(text.value);
        speechSynthesis.speak(utterance);
    })
</script>
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