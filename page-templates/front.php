<?php
/*
Template Name: Front
*/
get_header(); ?>


<div class=projects-container>
  <header class="scroll-anchor">
    <ul>
      <li class="head-top">
        <div class="title-top">
          <img class="logo" src="wp-content/themes/themeportfolio-master/assets/images/logo.svg" alt="Logo" />
          <h1><?php bloginfo( 'name' ); ?></h1>
          <h4><?php bloginfo( 'description' ); ?></h4>
          <a href="#" class="button contact">Contact</a>
          <a href="#loop-start" class="button">Mes travaux</a>
        </div> <!-- .layer-->
            <video autoplay loop class muted="fillWidth">
              <source src="wp-content/themes/themeportfolio-master/assets/images/Let-It-Grow.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            </video>
      </li> <!-- head-top -->
    </ul>
  </header> <!-- scroll-achor -->
  <div class="about scroll-anchor">
    <h1 class="h1about">Welcome to <b class="orangodaze">my garden !</b></h1>
    <div class="carretext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
  </div>
	<div id="loop-start" class="scroll-anchor">
		<?php do_action("MyPostAction") ?>
	</div>
</div> <!-- .projects-container -->


<?php get_footer();
