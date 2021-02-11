<?php get_header(); ?>
    
    <?php $page = 'curso'; ?>

    <?php get_template_part('components/menu-interna'); ?>

    <div class="breadcrumb-block">
        <div class="inner">
            <div class="iconwrap">
                <i class="icon -cursos"></i>
            </div>
            <ul class="list">
                <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
                <li><a href="<?php echo site_url('?page_id=28'); ?>">Cursos</a></li>
                <li><span><?php the_title(); ?></span></li>
            </ul>
        </div>
    </div>

    <main class="content-block">
        <div class="content">
            <div class="course-block -transparent">
                <h3 class="title"><?php the_title(); ?></h3>
                <?php
                    $args = array(
                        'posts_per_page' => 1,
                        'post_type'      => 'cursos',
                    );
                    $cursos = get_posts($args);
                ?>
                <?php foreach ($cursos as $curso) : ?>
                    <?php $tit_curso = $curso->post_title; ?>
                    <?php $dt_extenso_curso = $curso->cursos_dt_extenso; ?>
                    <?php $duracao_curso = $curso->cursos_duracao; ?>
                    <?php $local_curso = $curso->cursos_local; ?>                    
                    <div class="info">
                        <i class="icon -days"></i>
                        <?= $dt_extenso_curso ?>
                    </div>
                    <div class="info">
                        <i class="icon -time"></i>
                        <strong> <?= $duracao_curso ?></strong>
                    </div>
                    <div class="info">
                        <strong><?= $local_curso ?></strong>
                    </div>
                <?php endforeach; ?>
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

<?php get_footer(); ?>