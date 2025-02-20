<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Vinculando Boxicons desde un CDN -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    
    <!-- Vinculando tu archivo CSS (usa asset() para Laravel) -->
    <link rel="stylesheet" href="{{ asset('css/arquitectura.css') }}">
    
    <title>arquitectura</title>
</head>


<body>

    <header>
        <div class="headcontent">
            <i class='bx bx-cart-add'></i>
            <a href="#">MY account</a>
            <input type="text" placeholder="Buscar..." name="search">
        </div>
    </header>

    <div id="title-nav">
        <h1>A Big Title</h1>
        <nav>
            <a href="about">Home</a>
            <a href="event">Event</a>
            <a href="">Accesories</a>
            <a href="">Appareal</a>
            <a href="">Featured items</a>
        </nav>
    </div>

    <div class="img_title"></div>

    <div class="intro_copy">
        <div class="contenedor_texto">
            <h2>Intro Copy Headline</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae, minus voluptatem quidem quisquam
                fuga sit vero qui ab dolorem vel? Ipsum molestias odit in adipisci optio magnam reprehenderit odio,
                aliquid, ipsa voluptatibus necessitatibus! Aut sunt, voluptates consectetur error non dolorem velit
                dolorum repellat eius, dolore ullam atque expedita blanditiis rem. Nemo repudiandae vero autem
                voluptates itaque explicabo similique et reiciendis incidunt numquam iure sint, adipisci dolorem
                deleniti corrupti modi ab.</p>
        </div>
    </div>

    <section id="items_cards">
    
        <div class="card">
            <img src="img/CARTA.jpg" alt="#">
            <h3>Item Title</h3>
            <p>Item Category</p>
            <p>$88.000</p>
        </div>
        <div class="card">
            <img src="img/CARTA.jpg" alt="img/CARTA.jpg">
            <h3>Item Title</h3>
            <p>Item Category</p>
            <p>$88.000</p>
        </div>
    
        <div class="card">
            <img src="img/CARTA.jpg" alt="img/CARTA.jpg">
            <h3>Item Title</h3>
            <p>Item Category</p>
            <p>$88.000</p>
        </div>
        <div class="card">
            <img src="img/CARTA.jpg" alt="#">
            <h3>Item Title</h3>
            <p>Item Category</p>
            <p>$88.000</p>
        </div>

    </section>

    <section class="info">
        <div class="colum1">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Event</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
        <div class="colum2">
            <h3>Announcements / Promoted Content</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, obcaecati ea odit quidem explicabo consectetur quod asperiores optio! Voluptatum odio quisquam ipsam ducimus est vitae commodi minima animi, adipisci omnis! Tempora ab explicabo velit ipsa officiis natus libero dicta eveniet debitis minus culpa dolore quam eius harum a quidem commodi rerum, consequuntur mollitia ullam odit quaerat pariatur at quos. Ab odit vitae dolor nulla maxime maiores consequatur, nemo repellat eveniet dicta inventore tempora sapiente sequi, sed harum unde animi suscipit.</p>
        </div>

        <div class="colum3">
            <h3>Comming Soon</h3>
            <img src="img/coming.jpg" alt="">
        </div>
    </section>







</body>

</html>