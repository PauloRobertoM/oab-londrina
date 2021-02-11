<?php get_header(); ?>

	<section class="destaque">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9">
					<div class="owl-carousel owl-theme" id="owl-vitrine">
						<?php $count1 = 1; ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php foreach (get_the_category() as $category) { if ( $category->name == 'Destaque' and $count1 < 10 ) { ?>
                                <div class="item">
			                        <a href="<?php the_permalink() ?>">
			                        	<div class="conteudo">
				                        	<h2><?php the_title(); ?></h2>
				                        </div><!--  conteudo  -->
			                        	<?php if (has_post_thumbnail()) : ?>
				                            <?php the_post_thumbnail(); ?>
				                        <?php endif; ?>
			                        </a>
			                    </div><!-- item -->
                                <?php $count1++; ?>
                            <?php } } ?>
                        <?php endwhile; endif; ?>
		            </div><!-- owl-carousel -->
				</div><!-- md-9 -->
				<div class="col-md-3 col-sm-3">
					<div class="banner">
						<?php if(function_exists( 'wp_bannerize' ))
						wp_bannerize( 'group=sidebar' ); ?>
					</div><!-- banner -->
				</div><!-- md-3 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- destaque -->

	<section class="noticias">
		<div class="container">
			<h1>NOTÍCIAS <a href="">LEIA MAIS</a></h1>
			<div class="row">
				<?php $count2 = 1; ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php foreach (get_the_category() as $category) { if ( $category->name != 'Destaque' and $count2 < 4 ) { ?>
                    	<?php $dia = get_the_date('d'); ?>
                        <?php $mes = ucfirst(get_the_date('F')); ?>
                        <?php $ano = get_the_date('Y'); ?>
                    	<div class="col-md-6 col-sm-6">
		                    <a href="<?php the_permalink() ?>">
		                    	<span><?php echo "{$dia} de {$mes} de {$ano}"; ?></span>
		                        <h2><?php the_title(); ?></h2>
		                    </a>
						</div><!-- md-6 -->
                        <?php $count2++; ?>
                    <?php } } ?>
                <?php endwhile; endif; ?>
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- noticias -->

	<section class="banner2">
		<div class="container">
			<div class="box-banner">
				<?php if(function_exists( 'wp_bannerize' ))
				wp_bannerize( 'group=corpo' ); ?>
			</div><!-- box-banner -->
		</div><!-- container -->
	</section><!-- banner2 -->

	<section class="na-midia">
		<div class="container">
			<h1>OAB NA MÍDIA</h1>
			<div class="row">
				<div class="col-md-3 col-sm-3">
                    <iframe width="100%" height="150" src="https://www.youtube.com/embed/dPRVSYf3OH8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div><!-- md-3 -->
				<div class="col-md-3 col-sm-3">
                    <iframe width="100%" height="150" src="https://www.youtube.com/embed/dPRVSYf3OH8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div><!-- md-3 -->
				<div class="col-md-3 col-sm-3">
                    <iframe width="100%" height="150" src="https://www.youtube.com/embed/dPRVSYf3OH8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div><!-- md-3 -->
				<div class="col-md-3 col-sm-3">
                    <iframe width="100%" height="150" src="https://www.youtube.com/embed/dPRVSYf3OH8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div><!-- md-3 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- na-midia -->

	<section class="noticias eventos">
		<div class="container">
			<h1>EVENTOS <a href="">VEJA TODOS</a></h1>
			<div class="row">
				<div class="col-md-6 col-sm-6">
                    <a href="">
                    	<span>08 de dezembro de 2020</span>
                        <h2>PGE anuncia pagamento de mais de R$ 8 milhões para advocacia dativa</h2>
                    </a>
				</div><!-- md-6 -->
				<div class="col-md-6 col-sm-6">
                    <a href="">
                    	<span>08 de dezembro de 2020</span>
                        <h2>PGE anuncia pagamento de mais de R$ 8 milhões para advocacia dativa</h2>
                    </a>
				</div><!-- md-6 -->
				<div class="col-md-6 col-sm-6">
                    <a href="">
                    	<span>08 de dezembro de 2020</span>
                        <h2>PGE anuncia pagamento de mais de R$ 8 milhões para advocacia dativa</h2>
                    </a>
				</div><!-- md-6 -->
				<div class="col-md-6 col-sm-6">
                    <a href="">
                    	<span>08 de dezembro de 2020</span>
                        <h2>PGE anuncia pagamento de mais de R$ 8 milhões para advocacia dativa</h2>
                    </a>
				</div><!-- md-6 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- noticias -->

	<section class="banner2">
		<div class="container">
			<div class="box-banner">
				<?php if(function_exists( 'wp_bannerize' ))
				wp_bannerize( 'group=corpo' ); ?>
			</div><!-- box-banner -->
		</div><!-- container -->
	</section><!-- banner2 -->
	
<?php get_footer(); ?>