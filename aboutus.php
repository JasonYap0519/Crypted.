<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/aboutus.css" />
    <title>Crypted. | About Us</title>
    <link rel="icon" type="image/x-icon" href="images/crypted.ico">
  </head>
  <body>
    <nav class="nav">
      <div class="nav-bar">
        <div class="nav-left">
          <div class="brand-name nav-item nav-item-left" onclick="location.href='index.php';"> Crypted. </div>
        </div>
        <div class="nav-right">
          <div class="nav-item nav-item-right dropdown" onclick="location.href='aboutus.php';"> About Us <div class="dropdown-content">
              <a href="contactus.php">Contact Us</a>
            </div>
          </div>
          <div class="nav-item nav-item-right dropdown" onclick="location.href='learnnfts.php';"> Learn NFTs <div class="dropdown-content">
              <a href="whatarenfts.php">What are NFTs?</a>
              <a href="commonnftterms.php">Common NFT Terms</a>
              <a href="commonnftscams.php">Common NFT Scams</a>
              <a href="thisweekinnfts.php">This Week in NFTs</a>
            </div>
          </div>
          <div class="nav-item nav-item-right dropdown" onclick="location.href='learncrypto.php';"> Learn Crypto <div class="dropdown-content">
              <a href="whatarecryptocurrencies.php">What are Cryptocurrencies?</a>
              <a href="commoncryptoterms.php">Common Crypto Terms</a>
              <a href="commoncryptoscams.php">Common Crypto Scams</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="about-section">
      <div class="who-we-are">
        <h1>Who We Are</h1>
        <p> Crypted is a education site for all levels of cryptocurrency and NFT users. We provide information from just basic terms to navigating complex scams. We have been in the cryptocurrency space since 2015 and the NFT space since 2020 and we want to share our wisdom with everyone. </p>
      </div>
      <div class="our-vision">
        <h1>Our Vision</h1>
        <p> We think that our information is key to getting your foot into the cryptocurrency space and to start to becoming a pro.</p>
        <ul class="vision-list">
          <li>We think newcomers need to know the basics of NFTs and Crypto as soon as they come in.</li>
          <li>There's always new scams and projects coming out, so we want to be the first people to catch these things.</li>
          <li>We want to build a good community to learn about crypto while also gaining financially together.</li>
        </ul>
      </div>
      <div class="meet-our-team">
        <h1>Meet Our Team</h1>
        <div class="member-group">
          <div class="member">
            <img src="images/cade.png" alt="Picture of Cade's NFT" />
            <div class="member-details">
              <h2>Cade</h2>
              <h4>Co-Owner</h4>
              <p> Cade is an experienced NFT and altcoin trader with over $1 million dollars in total revenue last year alone. He has the alpha on all things quick flips and max minting. A singular Cade call can change your life. </p>
            </div>
          </div>
          <div class="member">
            <img src="images/nando.png" alt="Picture of Nando's NFT" />
            <div class="member-details">
              <h2>Nando</h2>
              <h4>Co-Owner</h4>
              <p> Nando has all the connections. He knows what's happening and when. He sees the longer term vision for projects and helps lead the pack. He is most known for having a couple good calls. </p>
            </div>
          </div>
          <div class="member">
            <img src="images/wiz.png" alt="Picture of Wiz's NFT" />
            <div class="member-details">
              <h2>Wiz</h2>
              <h4>Advisory</h4>
              <p> Wiz is a known and respected member of NFT community with his own NFT alpha discord. He's here to make sure everything is well kept and the information is right. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div id="footer_about">
        <h2>Crypted.</h2>
        <p> On Crypted, we will teach you all you need to know to get deeply into the world of cryptocurrency. We have pages for beginners and for more experienced users. Anyone can learn new things while navigating our website. </p>
      </div>
      <div id="footer_NFT">
        <h2>NFT</h2>
        <div id="footer_NFT_ul">
          <ul>
            <li>
              <a href="learnnfts.php">Learn NFTs</a>
            </li>
            <li>
              <a href="whatarenfts.php">What are NFTs?</a>
            </li>
            <li>
              <a href="commonnftterms.php">Common NFT Terms</a>
            </li>
            <li>
              <a href="commonnftscams.php">Common NFT Scams</a>
            </li>
            <li>
              <a href="thisweekinnfts.php">This Week in NFTs</a>
            </li>
          </ul>
        </div>
      </div>
      <div id="footer_crypto">
        <h2>Cryptocurrency</h2>
        <div id="footer_crypto_ul">
          <ul>
            <li>
              <a href="learncrypto.php">Learn Crypto</a>
            </li>
            <li>
              <a href="whatarecryptocurrencies.php">What are Cryptocurrencies?</a>
            </li>
            <li>
              <a href="commoncryptoterms.php">Common Crypto Terms</a>
            </li>
            <li>
              <a href="commoncryptoscams.php">Common Crypto Scams</a>
            </li>
          </ul>
        </div>
      </div>
      <?php
        include("newsletter.php")
      ?>
    </footer>
  </body>
</html>