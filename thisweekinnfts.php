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
    <link rel="stylesheet" href="css/calendar.css" />
    <link rel="stylesheet" href="css/blog.css" />
    <title>Crypted. | This Week in NFTs</title>
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
          <h1 id="blog-header-text">NFT Calendar</h1>
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
        <?php 
          include('nftcalendar.php');
        ?>
        <div class="contactus_link">
          <a> Please contact us if you'd like to add your own event to the page! </a>
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
      <div id="footer_signup">
        <h2>Sign up now and get updates from our newsletter.</h2> Our newsletter delivers once a week. <br />
        <label for="email_input">Your Email:</label>
        <input class="text_input" type="text" id="email_input" name="fname" />
        <br />
        <br />
        <button onclick="document.getElementById('email_input').value = ''"> Submit </button>
      </div>
    </footer>
  </body>
</html>