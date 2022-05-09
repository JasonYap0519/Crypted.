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
    <link rel="stylesheet" href="css/whatare.css" />
    <link rel="stylesheet" href="css/blog.css" />
    <title>Crypted. | What are NFTs?</title>
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
        <div class="blog-header">
          <h1 id="blog-header-text">What are NFTs?</h1>
        </div>
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
        <div class="whataretext">
          <img src="images/nfts.jpg" alt="A sample image of many Bored Ape Yacht Clubs and Cryptopunk NFTs" />
          <p> A non-fungible token (NFT) is a non-interchangeable unit of data stored on a blockchain, a form of digital ledger, that can be sold and traded. Types of NFT data units may be associated with digital files such as photos, videos, and audio. Because each token is uniquely identifiable, NFTs differ from blockchain cryptocurrencies, such as Bitcoin. </p>
          <p> NFT ledgers claim to provide a public certificate of authenticity or proof of ownership, but the legal rights conveyed by an NFT can be uncertain. NFTs do not restrict the sharing or copying of the underlying digital files, do not necessarily convey the copyright of the digital files, and do not prevent the creation of NFTs with identical associated files. </p>
          <p> NFTs have been used as a speculative asset, and they have drawn increasing criticism for the energy cost and carbon footprint associated with validating blockchain transactions as well as their frequent use in art scams. The NFT market has been compared to a Ponzi scheme. </p>
        </div>
        <a class="definition_source" href="https://en.wikipedia.org/wiki/Non-fungible_token" target="_blank">Source</a>
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