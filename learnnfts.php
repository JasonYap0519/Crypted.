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
    <title>Crypted. | Learn NFTs</title>
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
          <h1>Let's Learn About NFTs!</h1>
          <a> You've come to the right place if your goal is to get fully immersed into the NFT community. View and click the boxes below to view in depth writing and knowledge provided by our team. </a>
        </div>
        <hr class="colored_hr">
        <div class="learn_list">
          <div class="learn_preview" onclick="location.href='whatarenfts.php';">
            <img src="images/boredape.jpg" alt="A sample BAYC photo">
            <h1>What are NFTs?</h1>
            <a> Click here to jump right into our explanation of what NFTs are. This is good for beginners, but still useful for more experienced users. </a>
          </div>
          <div class="learn_preview" onclick="location.href='commonnftterms.php';">
            <img src="images/nftslang.png" alt="A woman confused by all the hip new NFT slang">
            <h1>Common NFT Terms</h1>
            <a> Let's get you caught up to speed on the latest NFT terminology used by all the top NFT minters and traders. </a>
          </div>
          <div class="learn_preview" onclick="location.href='commonnftscams.php';">
            <img src="images/scam.jpg" alt="A bunch of roadsigns saying SCAM on them">
            <h1>Common NFT Scams</h1>
            <a> Something you'll realize as you dive into this community is how easy it is to get scammed. Being in NFTs also means you have to learn the best practices for both NFT and Web3 interactions. </a>
          </div>
          <div class="learn_preview" onclick="location.href='thisweekinnfts.php';">
            <img src="images/calendar.png" alt="A simple calendar emoji.">
            <h1>This Week in NFTs</h1>
            <a> We've got the alpha you need to make your next big trade. Click here and view this week's upcoming NFT mints, reveals, and much more! </a>
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