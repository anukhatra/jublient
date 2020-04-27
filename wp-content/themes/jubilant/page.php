<?php
/*
* Template Name: undersida
*/
?>
<?php get_header(); ?>
<?php $undersida = get_field('undersida'); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12">
                    <h1><?php echo $undersida['title']; ?></h1>
                 
                    <?php
                   if( get_the_ID()==109):
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            echo $undersida['description'];
                        endwhile;
                    else :
                        _e('Sorry, no posts matched your criteria.', 'textdomain');
                    endif;
                endif;
                    ?>

                    <section>
                   
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-6">
                              <?php  if( get_the_ID()==111): ?>
                                    <p> <?php echo $undersida['description']; ?></p>
                                </div>
                                <?php endif; ?>
                                <div class="col-xs-12 col-sm-4 col-md-6">
                                    <?php if (get_field('undersida')) : ?>
                                        <img src="<?php echo $undersida['picture']; ?>" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>