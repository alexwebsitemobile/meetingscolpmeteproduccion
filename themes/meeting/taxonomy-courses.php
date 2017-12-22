<?php get_header(); ?>
<div class="container-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="post-content">
                    <div class="box-lessons">
                        <div class="acdash_content"></div>
                        <div class="acdash_course_content">
                            <h4 id="acdash_course_content_title">Course Content</h4>
                            <div class="acdash_lessons">
                                <div id="lesson_heading">
                                    <span>Lessons</span>
                                </div>
                                <div class="lessons_list">
                                    <?php
                                    $args = array(
                                        'posts_per_page' => 100,
                                        'post_type' => 'lessons',
                                        'order' => 'ASC',
                                    );
                                    $posts = get_posts($args);
                                    foreach ($posts as $post) : setup_postdata($post);
                                        ?>
                                        <div>
                                            <h4>
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h4>
                                        </div>
                                        <?php
                                    endforeach;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>               
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>