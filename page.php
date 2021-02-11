<?php get_header(); ?>
    
    <?php $page = 'noticia'; ?>

    <?php get_template_part('components/menu-interna'); ?>

    <div class="breadcrumb-block">
        <div class="inner">
            <div class="iconwrap">
                <i class="icon -close"></i>
            </div>
            <ul class="list">
                <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
                <li><span><?php the_title(); ?></span></li>
            </ul>
        </div>
    </div>

    <main class="content-block">
        <div class="content">
            <div class="post-block">
                <h1><?php the_title(); ?></h1>

                <div class="post-block">
                    <p><?php the_content(); ?></p>
                </div>

                <div class="content-footer">
                    <button class="goback || js-go-back"><i class="icon -voltar"></i> Voltar</button>
                    <div class="social">
                        <div class="share-block">
                            <a href="#" class="button -facebook" data-share-facebook><i class="icon -facebook"></i></a>
                            <a href="#" class="button -twitter" data-share-twitter><i class="icon -twitter"></i></a>
                            <a href="#" class="button -plus" data-share-plus><i class="icon -plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <?php get_template_part('components/sidebar-ads'); ?>
    </main>

<?php get_footer(); ?>