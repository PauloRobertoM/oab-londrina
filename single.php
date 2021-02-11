<?php get_header(); ?>
    
    <?php $page = 'noticia'; ?>

    <?php get_template_part('components/menu-interna'); ?>

    <?php foreach (get_the_category() as $category) { ?>
        <?php if ( $category->name != 'Artigos' ) { ?>
            <div class="breadcrumb-block">
                <div class="inner">
                    <div class="iconwrap">
                        <i class="icon -megaphone"></i>
                    </div>
                    <ul class="list">
                        <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('?page_id=22'); ?>">Notícias</a></li>
                        <li><span><?php the_title(); ?></span></li>
                    </ul>
                </div>
            </div>

            <main class="content-block">
                <div class="content">
                    <div class="news-item is-active">
                        <div class="date">
                            <?php $dia = get_the_date('d'); ?>
                            <?php $mes = ucfirst(get_the_date('M')); ?>
                            <div class="day"><?php echo "{$dia}"; ?></div>
                            <div class="month"><?php echo "{$mes}"; ?></div>
                        </div>
                        <h2 class="title"><?php the_title(); ?></h2>
                    </div>
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
              
                <?php get_template_part('components/sidebar-ads'); ?>
            </main>
            <div class="section-block -unpad-top">
                <div class="container">
                    <h2 class="section-title -theme-red">Últimas Notícias</h2>
                    <div class="clearfix">
                        <?php $count = 1; ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php $dia = get_the_date('d'); ?>
                            <?php $mes = ucfirst(get_the_date('M')); ?>
                            <a href="noticia-single.php?id=71864" class="news-block">
                                <div class="date"><?php echo "{$dia}/{$mes}"; ?></div>
                                <span class="title"><?php the_title(); ?></span>
                            </a>
                            <?php $count++; ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php if ( $category->name == 'Artigos' ) { ?>
            <div class="breadcrumb-block">
                <div class="inner">
                    <div class="iconwrap">
                        <i class="icon -newspaper"></i>
                    </div>
                    <ul class="list">
                        <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('?page_id=26'); ?>">Artigos</a></li>
                        <li><span><?php the_title(); ?></span></li>
                    </ul>
                </div>
            </div>

            <main class="content-block">
                <div class="content">                    
                    <h1 class="article-title"><?php the_title(); ?></h1>

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
              
                <?php get_template_part('components/sidebar-ads'); ?>
            </main>
            
            <div class="section-block -unpad-top">
                <div class="container">
                    <h2 class="section-title -theme-blue">Últimos Artigos</h2>
                    <div class="clearfix">
                        <?php $count = 1; ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <a href="noticia-single.php?id=71864" class="news-block">
                                <div class="title">
                                    <span class="_color-red">•</span> <?php the_title(); ?>
                                </div>
                            </a>
                            <?php $count++; ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>

<?php get_footer(); ?>