<html>
<head>
  <?php include ('inc/config.php'); ?>
  <?php include ('inc/feeds.php'); ?>
  <script src="js/app.js"></script>
</head>
<body>
<div class ="tweet"></div>
  <?php


  ?>

  <p>Latest tweet</p>

  <p>
    <?php echo $twitter_data[0][text]; ?>
    <img src="<?php echo $twitter_data[0][entities][media][0][media_url]; ?>"></img>
    <script type="text/javascript" async src="//platform.twitter.com/widgets.js"></script>
    <a href="https://twitter.com/intent/tweet?in_reply_to=<?php echo $twitter_data[0][id]; ?>">Reply</a>
    <a href="https://twitter.com/intent/retweet?tweet_id=<?php echo $twitter_data[0][id]; ?>">Retweet</a>
    <a href="https://twitter.com/intent/favorite?tweet_id=<?php echo $twitter_data[0][id]; ?>">Favorite</a>
  </p>
  <p>
    <?php echo $twitter_data[1][text]; ?>
    <img src="<?php echo $twitter_data[1][entities][media][0][media_url]; ?>"></img>
    <script type="text/javascript" async src="//platform.twitter.com/widgets.js"></script>
    <a href="https://twitter.com/intent/tweet?in_reply_to=<?php echo $twitter_data[1][id]; ?>">Reply</a>
    <a href="https://twitter.com/intent/retweet?tweet_id=<?php echo $twitter_data[1][id]; ?>">Retweet</a>
    <a href="https://twitter.com/intent/favorite?tweet_id=<?php echo $twitter_data[1][id]; ?>">Favorite</a>
  </p>
  <p>Tweet ends</p>

</html>
</body>
