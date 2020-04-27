<?php
/*
* Template Name: leftSide
*/
?>

<?php get_header(); ?>
<?php $undersida = get_field('undersida'); ?>
<main>
    <section>


        <div class="container">
            <div class="row">
            <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
                    <h1><?php echo $undersida['title']; ?></h1>
                    <p><?php echo $undersida['description'];  ?></p>
                </div>

                <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
                <ul class="side-menu">
                    <?php
                    if (is_active_sidebar('undersida')) {
                        dynamic_sidebar('undersida');
                    }
                    ?>
                </ul>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>