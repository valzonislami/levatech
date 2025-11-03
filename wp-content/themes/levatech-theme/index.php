<?php
/* Main template for LevaTech one-page site */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
  </header>

  <main>
    <section>
      <h2>Welcome to LevaTech</h2>
      <p>Building digital experiences that matter..</p>
    </section>
  </main>

  <?php wp_footer(); ?>
</body>
</html>
