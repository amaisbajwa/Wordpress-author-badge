<div id="author_badge">
  <div class="author_avatar"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author"><img src="http://thumbs.dreamstime.com/m/profile-icon-male-avatar-portrait-casual-person-silhouette-face-flat-design-vector-46846328.jpg" /></a></div>

		<div class="user_name"><?php the_author_meta('user_firstname'); ?> <?php the_author_meta('user_lastname'); ?></div>
		<div class="user_bio"><?php the_author_meta('description'); ?></div>
		<ul class="user_social_profiles">
		<li><a href="http://twitter.com/<?php the_author_meta('twitter'); ?>"> <i class="fa fa-twitter"></i> </a></li>
		<li><a href="<?php the_author_meta('facebook'); ?>"> <i class="fa fa-facebook"></i> </a></li>
		<li><a href="<?php the_author_meta('email'); ?>"> <i class="fa fa-envelope-o"></i> </a></li>
		<li><a href="<?php the_author_meta('googleplus'); ?>"> <i class="fa fa-google-plus"></i> </a></li>
		</ul>
</div>
