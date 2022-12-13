<?php
require 'functions.php';

$artikel = mysqli_query($koneksi, "SELECT * FROM artikel");
?>


<html>
    <head>
        <title>ANJAY NGODING</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <!-- NAVBAR -->
        <div>
            
        </div>
        <div id="navbar" class="navbar">
            <ul id="home" class="juganavbar">
                <li>
                    <form>
                        <a href=# class="home" onclick="topFunction()" id="scroll-btn" title="Top">HOME</a>
                        <a href=# class="artist" onclick="return smoothScroll('artis')">ARTIST</a>
                        <a href="gallery.php" class="support" onclick="return smoothScroll()">GALLERY</a>
                        <a href=# class="about" onclick="return smoothScroll('about')" >ABOUT</a>
                        <input class="search" type="text" placeholder="Search...">
                        <img class="searchicon" src="img/search icon.png"/>
                    </form>
                </li>
                <li class="bordernavbar">
                </li>
            </ul>
        </div>
        <!-- NAVBAR SELESAI -->

        <!-- Content -->
        <!-- <div class=malasngoding-slider id="home">
            <div class=isi-slider>
                <img src="SixHorsemen1860.jpg" alt="Gambar 1">
                <img src="penangkapanpangerandiponegoro.jpg" alt="Gambar 2">
                <img src="affandikkarya.jpg" alt="Gambar 3">
            </div>
        </div>
        <div>
            <ul>
                <li>
                    <h1></h1>
                </li>
            </ul>
        </div> -->
        <!-- Content selesai -->
<!-- hh -->
<div class="container" id="slider-utama">
	<div class="slider-wrapper">
		<img src="img/penangkapanpangerandiponegoro.jpg" class="slide" />
		<img src="img/lion hunt.jpg" class="slide" />
		<img src="img/penangkapanpangerandiponegoro.jpg" class="slide" />
		<img src="img/SixHorsemen1860.jpg" class="slide" />
	</div>
</div>
<!-- hh -->
        <!-- Content 2-->
        <div>
            <ul class="content2">
                <li>
                    <a class="judulcontent2a">THE ACT ART</a>
                    <a class="judulcontent2b">IST</a> 
                </li>
                <img class="contentgambar2" src="img/content2.png"/>
                <li class="content2b">
                    <h4 class="content2d">Grant Wood</h4>
                    <a class="content2c"><br/><br/>Grant Wood, famous for his representations of the Midwest—of which the Art Institute’s American Gothic (1930.934) is his most recognizable example—intended The Pump to be an illustration for Sinclair Lewis’s novel Main Street (1920). </a>
                    <h4 class="content2d">American Gothic</h4>
                    <a class="content2c"><br/><br/>This image of a contemporary water pump would have been a perfect fit for Lewis’s novel about life in a midwestern town. The drawing was given to the Art Institute by Carter Manny, Jr., who received it as a high school graduation gift from the artist in 1937.</a>
                </li>
            </ul>
        </div>
        <!-- Content 2 -->

        <!-- content3 -->
        <div class="content3">
            <a class="content3a1">New Gallery</a>
            <a class="content3a">New Gallery</a>
            
            <div class="content3c">
                <ul class="content3b">
                    <img class="gambarcontent3b" src="img/content3-1.png"/>
                </ul>
                <ul class="content3b">
                    <img class="gambarcontent3b" src="img/content3-2.png"/>
                </ul>
                <ul class="content3b">
                    <img class="gambarcontent3b" src="img/content3-3.png"/>
                </ul>
            </div>
            <div>
                <ul>
                    <div class="desgambar3a-4">
                    <main>
                        <?php foreach($artikel as $item) : ?>
                        <h3><?php echo ($item['judul']) ?></h3>
                        <p><?php echo ($item['isi_artikel']) ?></p>
                        <br><br>
                        <?php endforeach; ?>
                        </main>
                    </div>
                </ul>
                <ul>
                    <p class="desgambar3b-1">1887</p>
                    <p class="desgambar3b-2">Vincent van Gogh</p>
                    <p class="desgambar3b-3">Self-portrait</p>
                    <p class="desgambar3b-4">In 1886 Vincent van Gogh left his native Holland and settled in Paris, where his beloved brother Theo was a dealer in paintings. Van Gogh created at least twenty-four self-portraits during his two-year stay in the energetic French capital.</p>
                </ul>
                <ul>
                    <p class="desgambar3c-1">1881</p>
                    <p class="desgambar3c-2">Pierre-Auguste Renoir</p>
                    <p class="desgambar3c-3">Two Sisters (On the Terrace)</p>
                    <p class="desgambar3c-4">He loves everything that is joyous, brilliant, and consoling in life,” an anonymous interviewer once wrote about Pierre-Auguste Renoir. This may explain why Two Sisters (On the Terrace) is one of the most popular paintings in the Art Institute.</p>
                </ul>
            </div>
            <div>
                <ul>
                    <p class="content3d">All Gallery</p>
                </ul>
            </div>
        </div>
        <!-- content3 -->

        <!-- content4 -->
        <div class="content4">
            <ul>
                <li class="content4b">
                    <p class="content4a" >
                        <img class="gambarcontent4a" src="img/content4-1.png"/>
                    </p>
                    <p class="content4c">Multiple Modernisms <br />in the Americas</p>
                    <p class="content4f" > For many years these works, along with other beloved paintings and sculptures, have been located in galleries 262–65 in the Rice Building. We in Arts of the Americas recently re-envisioned and reinstalled these galleries, seeking to present art of North America in a more lively and engaging manner.
                        Our intention was to contextualize old favorites in new ways, introduce a greater variety of objects, and offer more complex and interesting narratives that highlight the true breadth and depth of our collection.</p>
                </li>
                <li>
                    <img class="gambarcontent4b" src="img/content4-2.png"/>
                    <img class="gambarcontent4c" src="img/content4-3.png"/>
                    <p class="content4d">Andrew James <br />associate curator</p>
                    <p class="content4e">With this reinstallation, it was important to bring works by Native American artists into these galleries to create a more inclusive, expansive, and simply more accurate presentation of American art. These additions do not replace our dedicated gallery of Native and Indigenous art in the Morton Wing, but rather are a complement to it.</p>
                    
                    <!-- <img src="content4-2.png"/> -->
                </li>
            </ul>
        </div>
        <!-- content4 -->
        <!-- artis -->
        <div class="artiss" id="artis">
            <a class="judulartis">AMPART</a>
            <div >
                <img class="artisgambar1" src="img/penangkapanpangerandiponegoro.jpg"/>
                <img class="artisgambar2" src="img/raden saleh.jpg"/>
                <img class="artisgambar3" src="img/deandels.jpg"/>
                <img class="artisgambar4" src="img/SixHorsemen1860.jpg"/>
            </div>
            <div class="desartisgambar">
                <p class="desartisgambar1a">1857</p>
                <p class="desartisgambar1b">Penangkapan Pangeran Diponegoro</p>
                <p class="desartisgambar2a">1807</p>
                <p class="desartisgambar2b">Raden Saleh Syarif Bustaman</p>
                <p class="desartisgambar3a">1838</p>
                <p class="desartisgambar3b">Posthumous Portrait of Herman Willem Daendels</p>
                <p class="desartisgambar4a">1860</p>
                <p class="desartisgambar4b">Enam Pengendara Kuda Mengejar Rusa</p>
            </div>
            <div class="artiscelebrate">
                <p class="artiscelebrate1">Celebrate<br/>whit us</p>
                <!-- <p class="artiscelebrate1b">whit us</p> -->
                <p class="artiscelebrate2">70</p>
                <p class="artiscelebrate3">Years</p>
            </div>
        </div>
        <!-- artis -->

        <!-- FOOTER -->
        <div class="backgroundfooter" id="about">
            <ul>
                <li class="picaso2">
                    <img  src="img/picasso 2.png"/>
                </li>
                <li>
                    <a class="footersosmed">Jangan Lupa Mampir Sosmed Coyy</a>
                </li>
                <li class="sosmed">
                    <a href="https://www.instagram.com/kanniyoo/">
                        <img class="sosmedicon" src="img/fb icon.png"/>
                    </a>
                    <a href="https://www.instagram.com/kanniyoo/">
                        <img class="sosmedicon" src="img/ig icon.png"/>
                    </a>
                   <a href="https://www.instagram.com/kanniyoo/">
                    <img class="sosmedicon" src="img/twitter icon.png"/>
                   </a>
                </li>
            </ul>
        </div>
        <!-- FOOTER SELESAI -->

        <script src="main.js"></script>
    </body>
</html>