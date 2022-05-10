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
    <link rel="stylesheet" href="css/blog.css" />
    <title>Crypted. | Blog</title>
    <link rel="icon" type="image/x-icon" href="images/crypted.ico">
  </head>
  <body>
    <?php
      include('navbar.php')
    ?>
    <div class="blog">
      <div class="blog-header">
        <h1 id="blog-header-text"> TITLE GOES HERE</h1>
      </div>
      <div class="blog-content">
        <div id="blog-block1"></div>
        <div id="blog-block2">
          <div id="blog-sharebar">
            <p> Share: </p>
            <a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
            <a href="https://twitter.com/" target="_blank" class="fa fa-twitter"></a>
            <a href="https://www.linkedin.com/" target="_blank" class="fa fa-linkedin"></a>
            <a href="https://www.reddit.com/" target="_blank" class="fa fa-reddit"></a>
          </div>
          <div id="blog-text">
            <h1>
              <b>Introduction to ---------</b>
            </h1>
            <br>
            <p>This is text that can be replaced with content. This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content. This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content. This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content. This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content. This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content. </p>
            <br> This is text that can be replaced with content. This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content. This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content. This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content. This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content. This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content.This is text that can be replaced with content. <br>
          </div>
        </div>
        <div id="blog-block3"></div>
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