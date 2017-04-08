<?php if (($i % 3 === 0) && $i != 0): ?>
	</div>
	<div class="scroll-anchor">
<?php endif; ?>
<article class="single-project">
	<div class="project-title" style="background-image : url(<?php the_post_thumbnail_url();?>);">
		<h2><?php the_title(); ?></h2>
    <div class="overlay"><div>
    </div>
	</div> <!-- .project-title -->
	<div class="project-info">
		<div class="content-wrapper">
			<?php the_content(); ?>
		</div> <!-- .content wrapper -->
	</div> <!-- .project-info -->
</article> <!-- .single-project -->
