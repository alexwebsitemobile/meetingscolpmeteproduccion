<?php
get_header();
the_post();
?>
<div class="container-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="post-content">
                    <div class="row">
                        <div class="col-xs-4 text-left">
                            <div class="hidden-xs">
                                <?php next_post_link('%link', '← Previous lesson'); ?>
                            </div>
                            <div class="visible-xs">
                                <?php next_post_link('%link', '← Prev'); ?>
                            </div>
                        </div>
                        <div class="col-xs-4 text-center">
                            <div class="hidden-xs">
                                <a href="<?php echo home_url('courses/setting-up-a-meeting'); ?>" class="wpProQuiz_button">
                                    Back to lesson menu
                                </a>
                            </div>
                            <div class="visible-xs">
                                <a href="<?php echo home_url('courses/setting-up-a-meeting'); ?>" class="wpProQuiz_button">
                                    Lesson menu
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-4 text-right">
                            <div class="hidden-xs">
                                <?php previous_post_link('%link', 'Next lesson →'); ?>
                            </div>
                            <div class="visible-xs">
                                <?php previous_post_link('%link', 'Next →'); ?>
                            </div>
                        </div>
                    </div>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <div class="row">
                        <div class="col-xs-4 text-left">
                            <div class="hidden-xs">
                                <?php next_post_link('%link', '← Previous lesson'); ?>
                            </div>
                            <div class="visible-xs">
                                <?php next_post_link('%link', '← Prev'); ?>
                            </div>
                        </div>
                        <div class="col-xs-4 text-center">
                            <div class="hidden-xs">
                                <a href="<?php echo home_url('courses/setting-up-a-meeting'); ?>" class="wpProQuiz_button">
                                    Back to lesson menu
                                </a>
                            </div>
                            <div class="visible-xs">
                                <a href="<?php echo home_url('courses/setting-up-a-meeting'); ?>" class="wpProQuiz_button">
                                    Lesson menu
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-4 text-right">
                            <div class="hidden-xs">
                                <?php previous_post_link('%link', 'Next lesson →'); ?>
                            </div>
                            <div class="visible-xs">
                                <?php previous_post_link('%link', 'Next →'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>