<?php get_header(); ?>
<section class="b-content">
	<section class="content">
		<article class="article">
			<ul class="article-list">
			<?php 
				if (have_posts()) {
					while (have_posts()) {
						the_post();
			?>

				<li class="article-item">
					<div class="article-item-back"></div>
					<div class="article-item-forward">
						<h3 class="article-item-title"><a href="#" class="article-item-title-link"><?php the_title(); ?></a></h3>
						<span class="meta-author-category">By <a href="#" class="meta-author"><?php the_author(); ?></a> in category: <?php the_category(); ?></span>
						<p class="article-item-text">
							<?php the_content(); ?>
						</p>
						<div class="article-item-meta-wrap">
							<span class="article-item-meta meta-date"><?php the_date(); ?></span>
							<span class="article-item-meta meta-comments">14</span>
							<span class="article-item-meta meta-views">1523</span>
							<span class="article-item-meta meta-likes">24</span>
							<ul class="meta-social-share-list">
								<li><a href="#" class="share-vk"></a></li>
								<li><a href="#" class="share-fb"></a></li>
								<li><a href="#" class="share-tw"></a></li>
								<li><a href="#" class="share-g"></a></li>
							</ul>
						</div>
					</div>
					<a href="#" class="post-type post-type-post"></a>
					<span class="post-type-bg"></span>
				</li>

			<?php
					}
				}
			?>
			</ul>
		</article>
		<?php get_sidebar(); ?>
	</section>
</section>
<?php get_footer(); ?>
