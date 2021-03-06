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
    <link rel="stylesheet" href="css/terms.css" />
    <link rel="stylesheet" href="css/blog.css" />
    <title>Crypted. | Common Crypto Terms</title>
    <link rel="icon" type="image/x-icon" href="images/crypted.ico">
  </head>
  <body>
    <?php
      include('navbar.php')
    ?>
    <div class="content">
      <div class="blog">
        <div class="blog-header">
          <h1 id="blog-header-text">Common Crypto Terms</h1>
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
        <table class="terms">
          <tr>
            <td class="term">Cryptocurrency</td>
            <td class="definition"> Digital money which uses encryption and consensus algorithms to regulate the generation of coins/tokens and transfer of funds. Cryptocurrencies are generally decentralized, operating independently of central authorities. </td>
          </tr>
          <tr>
            <td class="term">Address</td>
            <td class="definition"> Much like a URL, a blockchain address is the location to or from which transactions occur on the blockchain. </td>
          </tr>
          <tr>
            <td class="term">Wallet</td>
            <td class="definition"> A digital file that holds coins and tokens held by the owner. The wallet also has a blockchain address to which transactions can be sent. </td>
          </tr>
          <tr>
            <td class="term">Blockchain</td>
            <td class="definition"> A mathematical structure for storing digital transactions or data in an immutable, distributed, decentralized digital ledger consisting of blocks that are linked via cryptographic signature that is nearly impossible to fake, hack or disrupt. </td>
          </tr>
          <tr>
            <td class="term">Block</td>
            <td class="definition"> A group of transactions entered into a blockchain; analogous to a page of a ledger or record book. </td>
          </tr>
          <tr>
            <td class="term">Public/Private Key</td>
            <td class="definition"> A public key is a unique string of characters derived from a private key which is used to encrypt a message or data. The private key is used to decrypt the message or data. </td>
          </tr>
          <tr>
            <td class="term">Smart Contract</td>
            <td class="definition"> Self-executing computer code deployed on a blockchain to perform a function, often, but not always, the exchange of value between a buyer and a seller. </td>
          </tr>
        </table>
        <a class="definition_source" href="https://comptiacdn.azureedge.net/webcontent/docs/default-source/research-reports/07576-blockchain-glossary-of-terms-r3.pdf" target="_blank">Source</a>
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