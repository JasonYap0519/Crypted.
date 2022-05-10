<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="icon" type="image/x-icon" href="images/crypted.ico" />
    <title>Crypted. | Homepage</title>
  </head>
  <body>
    <?php
      include('navbar.php')
    ?>
    <div class="content-div">
      <h1>Welcome to Crypted!</h1>
      <div class="flex-content">
        <div class="flex-child">
          <div class="items">
            <img
              src="images/security.png"
              class="main_image"
              alt="A black and white security lock"
            />
            <p>
              Cryptocurrency is the newest cutting edge technology of the 21st
              century. Cryptocurrency is not only a medium of exchange, but it
              also is fueling the future in Web3 compatible sites and securing
              the future of the internet.
            </p>
          </div>
        </div>
        <div class="flex-child">
          <div class="items">
            <img
              src="images/world.png"
              class="main_image"
              alt="A black and white image of the world"
            />
            <p>
              On Crypted, we will teach you all you need to know to get deeply
              into the world of cryptocurrency. We have pages for beginners and
              for more experienced users. Anyone can learn new things while
              navigating our website.
            </p>
          </div>
        </div>
        <div class="flex-child">
          <div class="items">
            <img
              src="images/rocket.png"
              class="main_image"
              alt="A black and white rocket image"
            />
            <p>
              Scroll down or use the navigation bar to get launched into the
              future of currency and the web.
            </p>
          </div>
        </div>
      </div>
      <hr class="large-hr" />
      <div class="cryptocurrency">
        <div>
          <p>
            New to Cryptocurrency? Let's teach you the basics from starting
            terminology, how blockchain works, all the way to how to program on
            them. Let us guide you through everything in our easy to traverse
            directory of information.
          </p>
          <a href="learncrypto.php">Learn More</a>
        </div>
        <img
          src="images/cryptocurrencies.jpeg"
          class="rounded-img homepage_image"
          alt="A image of many cryptocurrency symbols stack upon each other"
        />
      </div>
      <hr class="large-hr" />
      <div class="cryptocurrency">
        <img
          src="images/nfts.jpeg"
          class="rounded-img homepage_image"
          alt="A picture of some sample NFTs from the Bored Ape Yacht Club collection"
        />
        <div>
          <p>
            Want to deep dive into NFTs? Nonfungible Tokens are the newest trend
            within the cryptocurrency space. There's a lot to learn before
            getting your first NFT. Let's get you prepared for the wild ride of
            NFT minting, reselling, and investing.
          </p>
          <a href="learnnfts.php">Learn More</a>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div id="footer_about">
        <h2>Crypted.</h2>
        <p>
          On Crypted, we will teach you all you need to know to get deeply into
          the world of cryptocurrency. We have pages for beginners and for more
          experienced users. Anyone can learn new things while navigating our
          website.
        </p>
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
              <a href="whatarecryptocurrencies.php"
                >What are Cryptocurrencies?</a
              >
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
    <script src="js/main.js"></script>
  </body>
</html>
