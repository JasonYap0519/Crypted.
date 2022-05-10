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
    <link rel="stylesheet" href="css/learn.css" />
    <link rel="stylesheet" href="css/blog.css" />
    <title>Crypted. | Learn Crypto</title>
    <link rel="icon" type="image/x-icon" href="images/crypted.ico">
  </head>
  <body>
    <?php
      include('navbar.php')
    ?>
    <div class="content">
      <div class="blog">
        <div id="blog-sharebar">
          <a> Share: </a>
          <a href="https://www.facebook.com/" target="_blank">
            <img src="images/facebooklogo.png" class="small_logo" alt="Facebook Logo">
          </a>
          <a href="https://twitter.com/" target="_blank">
            <img src="images/twitterlogo.png" class="small_logo" alt="Twitter Logo">
          </a>
          <a href="https://www.linkedin.com/" target="_blank">
            <img src="images/linkedin.png" class="small_logo" alt="Linkedin Logo">
          </a>
          <a href="https://www.reddit.com/" target="_blank">
            <img src="images/redditlogo.png" class="small_logo" alt="Reddit Logo">
          </a>
        </div>
        <div class="topic_information">
          <h1>Let's Learn About Crypto!</h1>
          <a> You've come to the right place if your goal is to get fully immersed into the cryptocurrency space. View and click the boxes below to view in depth writing and knowledge provided by our team. </a>
        </div>
        <hr class="colored_hr">
        <div class="learn_list">
          <div class="learn_preview" onclick="location.href='whatarecryptocurrencies.php';">
            <img src="images/bitcoin.png" alt="The bitcoin logo">
            <h1>What are Cryptocurrencies?</h1>
            <a> The word "cryptocurrencies" has evolved greatly in the last 5 years and he entire cryptocurrency space has grown and expanded. Let's get a solid definition established so you know what you're getting started in. </a>
          </div>
          <div class="learn_preview" onclick="location.href='commoncryptoterms.php';">
            <img src="images/cryptoslang.png" alt="Some example crypto slang being said by a drawn man">
            <h1>Common Crypto Terms</h1>
            <a> Cryptocurrency culture has many new terms and slang you'll need to pick up on to be successful. Click here to get some good starting terms. </a>
          </div>
          <div class="learn_preview" onclick="location.href='commoncryptoscams.php';">
            <img src="images/scam.jpg" alt="A bunch of roadsigns saying SCAM on them">
            <h1>Common Crypto Scams</h1>
            <a> Cryptocurrency scams are some of the most popular scams on the internet nowadays due to the nature of blockchains. You need to be prepared for anything. Let's get you ready to face the wild west of the internet. </a>
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