<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="cursor" role="presentation" aria-hidden="true"></div>
<div id="cursor-ring" role="presentation" aria-hidden="true"></div>

<header id="site-header" role="banner">
  <a href="<?php echo esc_url( home_url('/') ); ?>" class="brand" aria-label="<?php bloginfo('name'); ?> home">
    <svg class="brand__logo" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <path d="M24 4L42 14V34L24 44L6 34V14L24 4Z" stroke="#4af0b0" stroke-width="1" fill="none" opacity="0.4"/>
      <path d="M24 12L36 19V33L24 40L12 33V19L24 12Z" stroke="#4af0b0" stroke-width="1" fill="none" opacity="0.7"/>
      <circle cx="24" cy="26" r="3" fill="#4af0b0"/>
      <line x1="24" y1="16" x2="24" y2="21" stroke="#4af0b0" stroke-width="1"/>
      <line x1="24" y1="31" x2="24" y2="36" stroke="#4af0b0" stroke-width="1"/>
      <line x1="14" y1="26" x2="19" y2="26" stroke="#4af0b0" stroke-width="1"/>
      <line x1="29" y1="26" x2="34" y2="26" stroke="#4af0b0" stroke-width="1"/>
    </svg>
    <span class="brand__name"><?php bloginfo('name'); ?></span>
  </a>
  <span class="header-tag" aria-hidden="true">Clearance Required</span>
</header>
