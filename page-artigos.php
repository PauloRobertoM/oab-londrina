<?php get_header(); ?>
    
    <?php
        $args = array (
            'post_status'    => 'publish',
            'pagination'     => true,
            'posts_per_page' => '10',
        );
        $posts = new WP_Query( $args );
    ?>

    <?php $page = 'artigos'; ?>

    <?php get_template_part('components/menu-interna'); ?>

    <div class="breadcrumb-block">
        <div class="inner">
            <div class="iconwrap">
                <i class="icon -megaphone"></i>
            </div>
            <ul class="list">
                <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
                <li><a href="#">Artigos</a></li>
                <li><span>Todas as artigos</span></li>
            </ul>
        </div>
    </div>

    <main class="content-block">
        <div class="content">
            <ul class="article-list">
                <?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
                    <?php foreach (get_the_category() as $category) { if ( $category->name == 'Artigos' ) { ?>
                        <?php $dia = get_the_date('d'); ?>
                        <?php $mes = ucfirst(get_the_date('M')); ?>
                        <li class="item">
                            <a href="<?php the_permalink() ?>" class="article">
                                <strong class="title _color-blue"><?php the_title(); ?></strong>
                                <div class="authors">
                                  <div><?php echo excerpt(200, get_the_excerpt()); ?></div>
                                </div>
                            </a>
                        </li>
                    <?php } } ?>
                <?php endwhile; endif; ?>
            </ul>
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