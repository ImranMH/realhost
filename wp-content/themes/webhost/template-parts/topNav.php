<?php
/**
 * Displays the navbar
 *
 * @package imranWebhost
 * @subpackage webhost
 * @since 1.0.0
 */
?>


<div class="container">
  <a class="navbar-brand" href="index.html">WebHost</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="oi oi-menu"></span> Menu
  </button>

  <div class="collapse navbar-collapse" id="ftco-nav">
  <!-- <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'     => 'navbar-nav ml-auto ',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
			?> -->
    <ul class="navbar-nav ml-auto">
  
      <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
      <li class="nav-item"><a href="domain.html" class="nav-link">Domain</a></li>
      <li class="nav-item"><a class="nav-link" href="hosting.html">Hosting</a></li>
      <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
      <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
      <li class="nav-item cta"><a href="contact.html" class="nav-link"><span>Get started</span></a></li>
    </ul>
  </div>
</div>


<!-- <div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
  
      <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
      <li class="nav-item"><a href="domain.html" class="nav-link">Domain</a></li>
      <li class="nav-item"><a class="nav-link" href="hosting.html">Hosting</a></li>
      <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
      <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
      <li class="nav-item cta"><a href="contact.html" class="nav-link"><span>Get started</span></a></li>
    </ul>
  </div> -->