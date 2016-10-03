					<?php 
						$args = array('cat' => 2, 'posts_per_page' => 1);
						$filter_posts = new WP_Query($args);

						if ($filter_posts->have_posts() ) : 
							while ($filter_posts->have_posts() ) : 
								$filter_posts->the_post();
					?>
						<!-- post -->
						<h2><?php the_title(); ?></h2>
						<p><?php the_content( $more_link_text, $strip_teaser ); ?></p>	
						<a href="<?php the_permalink(); ?>"></a>
					<?php
						endwhile;
						else :
					?>
					<!-- post navigation -->
						<h4>Huy, no encontramos entradas</h4>
					<!-- no posts found -->
					<?php 
						endif;
					?>