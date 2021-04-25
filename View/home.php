<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet/main.css">
</head>
<body>

    <nav>
        <ul id="navbar-ls">
            <li class="nav-el" id="navbar-logo">
                <a href="">
                    <img src="ressources\cii_white.png" alt="">
                </a>
            </li>
            <li class="nav-el"><a href="/test">About</a></li>
            <li class="nav-el"><a href="">PHP</a></li>
            <li class="nav-el"><a href="">JavaScript</a></li>
            <li class="nav-el"><a href="">C++</a></li>
            <li id="connection-zone">
                <div>connection zone</div>
            </li>
        </ul>
    </nav>

    <div id="main-zone">
        <section id="main-section">
            <div class="language-card" id="lang-c-about">
                <div class="language-card-text" id="about-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt quisquam voluptatum veritatis quos dicta, culpa maiores explicabo facilis in dolor sed. Expedita architecto quam a deleniti delectus asperiores nesciunt, laudantium cupiditate amet consequuntur praesentium id modi vero ab iusto ipsam inventore omnis molestiae hic nihil ut enim animi blanditiis sint.
                </div>
            </div>
            <div class="language-card" id="lang-c-php">
                <div class="language-card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt quisquam voluptatum veritatis quos dicta, culpa maiores explicabo facilis in dolor sed. Expedita architecto quam a deleniti delectus asperiores nesciunt, laudantium cupiditate amet consequuntur praesentium id modi vero ab iusto ipsam inventore omnis molestiae hic nihil ut enim animi blanditiis sint.
                </div>
            </div>
            <div class="language-card" id="lang-c-js">
                <div class="language-card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt quisquam voluptatum veritatis quos dicta, culpa maiores explicabo facilis in dolor sed. Expedita architecto quam a deleniti delectus asperiores nesciunt, laudantium cupiditate amet consequuntur praesentium id modi vero ab iusto ipsam inventore omnis molestiae hic nihil ut enim animi blanditiis sint.
                </div>
            </div>
            <div class="language-card" id="lang-c-html">
                <div class="language-card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt quisquam voluptatum veritatis quos dicta, culpa maiores explicabo facilis in dolor sed. Expedita architecto quam a deleniti delectus asperiores nesciunt, laudantium cupiditate amet consequuntur praesentium id modi vero ab iusto ipsam inventore omnis molestiae hic nihil ut enim animi blanditiis sint.
                </div>
            </div>
            <div class="language-card" id="lang-c-css">
                <div class="language-card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt quisquam voluptatum veritatis quos dicta, culpa maiores explicabo facilis in dolor sed. Expedita architecto quam a deleniti delectus asperiores nesciunt, laudantium cupiditate amet consequuntur praesentium id modi vero ab iusto ipsam inventore omnis molestiae hic nihil ut enim animi blanditiis sint.
                </div>
            </div>
            <div class="language-card" id="lang-c-cpp">
                <div class="language-card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt quisquam voluptatum veritatis quos dicta, culpa maiores explicabo facilis in dolor sed. Expedita architecto quam a deleniti delectus asperiores nesciunt, laudantium cupiditate amet consequuntur praesentium id modi vero ab iusto ipsam inventore omnis molestiae hic nihil ut enim animi blanditiis sint.
                </div>
            </div>
        </section>
        <section id="right-panel">this status
        <!-- test Github API -->
        <?php
            $test_aray = json_decode(file_get_contents("https://api.github.com/repos/nico-php-coder/portfolio/languages"));
            echo $test_aray;

            echo file_get_contents("https://api.github.com/repos/nico-php-coder/portfolio/languages");

            $test = new Poo;
            $test->print_poo();
        ?>
        </section>
    </div>

    <div id="toolbox-zone"></div>

</body>
</html>
