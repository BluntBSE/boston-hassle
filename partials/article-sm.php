<article class="article-sm">
	<h3><a href="<?php the_permalink(); ?>"><?php echo short_title(); ?></a></h3>
	<p><?php the_excerpt(); ?></p>
  	<p class="meta"><?php echo get_the_author(); ?></p>
</article>