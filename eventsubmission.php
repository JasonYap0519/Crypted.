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
    <link rel="stylesheet" href="css/eventsubmission.css" />
    <title>Crypted. | Event Submission</title>
    <link rel="icon" type="image/x-icon" href="images/crypted.ico">
</head>
<body>
    <?php
      include('navbar.php')
    ?>

    <div class="event-submission-div">
      <div class="eventSubmission">
        <div class="EventSubmission-title">
          <h1>Event Submissions</h1>
          <center>
            <h6>Create a new event below!</h6>
          </center>
        </div>
        <?php include("eventsubmissionform.php")?>
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