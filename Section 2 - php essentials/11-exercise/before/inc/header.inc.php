<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/simple.css" />
  <link rel="stylesheet" href="./styles/custom.css" />
  <title>Culinary Cove <?php echo !empty($pageTitle) ?  "&bull; {$pageTitle}" : "" ?></title>
</head>

<body>
  <?php
  empty($headerImg) && $headerImg = 'images/pexels-julia-volk-5273044.jpg'
  ?>
  <header class="header-with-background" style="background-image: url('<?php echo $headerImg; ?>'); ">
    <h1>Culinary Cove</h1>
    <p>Your sanctuary for exceptional flavors</p>
    <nav>
      <?php
        if (!isset($pageKey)) $pageKey = ''; // Better for error handeling
      ?>
      <a
        <?php if ($pageKey === 'mission'): ?>
        class="active"
        <?php endif; ?>
        href="our-mission.php">
        Our mission
      </a>
      <a <?php if ($pageKey === 'ingredients') echo 'class="active"'; ?> href="ingredients.php">Ingredients</a>
      <?php if ($pageKey === 'menu'): ?>
        <a class="active" href="menu.php">Menu</a>
      <?php else: ?>
        <a href="menu.php">Menu</a>
      <?php endif; ?>
    </nav>
  </header>

  <main>