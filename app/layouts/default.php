<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Your Name">
  <?=$this::getMeta(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;0,900;1,500&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="/favicon.png" />
  <?php
    $dist = getDist();
    $styleTags = $dist['styles'];
    $scriptTags = $dist['scripts'];
  ?>
  <?=$styleTags?>
</head>
<body>
  <div class="default-layout">
    <div class="default-layout__main">
      <?=$this->component('header')?>
      <?=$content?>
    </div>
    <?=$this->component('footer')?>
  </div>
  
  <script>
    var serverUrl = "<?=siteUrl()?>";
  </script>
  <?=$scriptTags?>
  <?=$scripts?>
</body>
</html>
