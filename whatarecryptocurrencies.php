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
    <title>Crypted. | What are Cryptocurrencies?</title>
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
          <h1 id="blog-header-text">What are Cryptocurrencies?</h1>
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
          <img src="images/cryptocurrencies.jpg" alt="A bunch of sample cryptocurrency logos." />
          <p> A cryptocurrency, crypto-currency, or crypto is a digital currency designed to work as a medium of exchange through a computer network that is not reliant on any central authority, such as a government or bank, to uphold or maintain it. </p>
          <p> Individual coin ownership records are stored in a digital ledger, which is a computerized database using strong cryptography to secure transaction records, to control the creation of additional coins, and to verify the transfer of coin ownership. Despite their name, cryptocurrencies are not necessarily considered to be currencies in the traditional sense and while varying categorical treatments have been applied to them, including classification as commodities, securities, as well as currencies, cryptocurrencies are generally viewed as a distinct asset class in practice. Some crypto schemes use validators to maintain the cryptocurrency. In a proof-of-stake model, owners put up their tokens as collateral. In return, they get authority over the token in proportion to the amount they stake. Generally, these token stakers get additional ownership in the token over time via network fees, newly minted tokens or other such reward mechanisms. </p>
          <p> Cryptocurrency does not exist in physical form (like paper money) and is typically not issued by a central authority. Cryptocurrencies typically use decentralized control as opposed to a central bank digital currency (CBDC). When a cryptocurrency is minted or created prior to issuance or issued by a single issuer, it is generally considered centralized. When implemented with decentralized control, each cryptocurrency works through distributed ledger technology, typically a blockchain, that serves as a public financial transaction database.[9] </p>
          <p> A cryptocurrency is a tradable digital asset or digital form of money, built on blockchain technology that only exists online. Cryptocurrencies use encryption to authenticate and protect transactions, hence their name. There are currently over a thousand different cryptocurrencies in the world. </p>
          <p> Bitcoin, first released as open-source software in 2009, is the first decentralized cryptocurrency. Since the release of bitcoin, many other cryptocurrencies have been created. </p>
        </div>
        <a class="definition_source" href="https://en.wikipedia.org/wiki/Cryptocurrency" target="_blank">Source</a>
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