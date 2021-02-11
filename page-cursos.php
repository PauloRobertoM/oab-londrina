<?php get_header(); ?>
    
    <?php
        $args = array (
            'post_status'    => 'publish',
            'pagination'     => true,
            'posts_per_page' => '10',
        );
        $posts = new WP_Query( $args );
    ?>

    <?php $page = 'cursos'; ?>

    <?php get_template_part('components/menu-interna'); ?>

    <div class="breadcrumb-block">
        <div class="inner">
            <div class="iconwrap">
                <i class="icon -cursos"></i>
            </div>
            <ul class="list">
                <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
                <li><a href="#">Cursos</a></li>
                <li><span>Todas os cursos</span></li>
            </ul>
        </div>
    </div>

    <main class="content-block">
        <div class="content">
            <div class="clearfix">
            	<?php
                    $args = array(
                        'posts_per_page' => 20,
                        'post_type'      => 'cursos',
                    );
                    $cursos = get_posts($args);
                ?>
                <?php foreach ($cursos as $curso) : ?>
                    <?php $tit_curso = $curso->post_title; ?>
                    <?php $dt_extenso_curso = $curso->cursos_dt_extenso; ?>
                    <?php $duracao_curso = $curso->cursos_duracao; ?>
                    <div class="course-column -two">
						<a href="<?php the_permalink($curso->ID); ?>" class="course-block">
							<h3 class="title"><?= $tit_curso ?></h3>
							<div class="info">
								<i class="icon -days"></i>
								<?= $dt_extenso_curso ?>
							</div>
							<div class="info">
								<i class="icon -time"></i>
								<strong> <?= $duracao_curso ?></strong>
							</div>
						</a>
					</div>
                <?php endforeach; ?>
			</div>
            <div class="content-footer">
                <button class="goback || js-go-back"><i class="icon -voltar"></i> Voltar</button>
                <ul class="pagination">
                    <li><a href="/noticias.php?pag=1">1</a></li>
                    <li><a href="/noticias.php?pag=2">2</a></li>
                    <li><a href="/noticias.php?pag=1">próxima ></a></li>
                </ul>
            </div>
        </div>
      
        <?php get_template_part('components/sidebar-ads'); ?>
    </main>

<?php get_footer(); ?>