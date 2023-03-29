<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Zeyada&display=swap" rel="stylesheet">
</head>
<body>
    <article id="landing">
        <div class="margin_container">
            <div class="centered_container">
                <h1 id="page-header">BingChilling</h1>
                <div id="login_container">
                    <a href="pages\login.php">Login</a>
                </div>
                <nav>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Menu</a></li>
                        <li><a href="">Contact</a></li>  
                        <li><a href="" id="vl"></a></li> 
                    </ul>
                    <button id="border_button">
                        order
                    </button>
                </nav>
                <img id="landing-image" src="images\landing-page.jpg" alt="">
            </div>
        </div>
    </article>
    
    <article id="about-us">
        <div class="margin_container">
            <div class="centered_container">
                <div class="header">
                    <hr>
                    <h1>About Us</h1>
                    <hr>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda natus, minus enim aliquid temporibus ipsum qui officia tempore voluptas recusandae alias dicta doloribus officiis odit, nobis repellendus soluta possimus et optio a eaque exercitationem deserunt! Et magni maiores facere dignissimos rem inventore, eius fugiat, quae quaerat provident ex eos ipsam cumque dolorem repudiandae corporis aliquam minus aspernatur ab aut. Vero adipisci recusandae enim eligendi? Facilis, nostrum nulla perferendis repudiandae mollitia molestias cumque tenetur itaque voluptatibus ipsa officiis ipsam, repellat quae quia eligendi quasi dicta culpa cum distinctio explicabo deserunt maxime quam voluptatem. Doloremque, optio quae! Odio nostrum dicta id totam.
                </p>
            </div>
        </div>
    </article>

    <article id="menu">
        <div class="margin_container">
        <div class="grid_container">
            <div id="item1">Header</div>
            <div id="item2">Menu</div>
            <div id="item3">
                <div id="products_container" >
                    <?php
                        for($i=0; $i<8; $i++){
                            echo '
                            <div class="product_container"><div class="product">'.($i+1).'</div></div>
                            ';
                        }
                    ?>
                </div>
            </div>
        </div>
        </div>
    </article>
    <footer></footer>
</body>
</html>