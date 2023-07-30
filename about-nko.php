<?php 
/*
Template Name: О НКО
*/
get_header(); 
?>

    <main class="main">
        <!-- Название НКО -->
        <section class="about-nko">
            <div class="about-nko__container container" style="background-image: url(<?= CFS()->get('main_bg'); ?>)">
                <div class="about-nko__content container">
                    <h2 class="about-nko__title"><?= CFS()->get('main_title'); ?></h2>
                    <div class="about-nko__btn btn">
                        <button class="btn__help help animation-push">Подать заявку на помощь</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Название НКО -->
        <!-- Описание НКО -->
        <section class="nko-page">
            <div class="nko-page__container container">
                <div class="nko-page__title">
                    <h3 class="third-title"><?= CFS()->get('title_1'); ?> </h3>
                    <h3 class="third-title"><?= CFS()->get('title_2'); ?> </h3>
                </div>
                <p class="nko-page__ogrn"><?= CFS()->get('ogrn'); ?></p>
                <?php
                    $loop = CFS()->get('descr');
                    foreach ($loop as $row) {
                ?>
                <p class="nko-page__text"><?= $row['text']; ?></p>
                <?php
                    }
                ?>
            </div>
        </section>
        <!-- Описание НКО -->
        <!-- Отчеты о проделанной работе -->
        <section class="reports-nko">
            <div class="reports-nko__container container">
                <?php display_reports_nko(); ?>
            </div>
        </section>

        <!-- Отчеты о проделанной работе -->
        <!-- Документы НКО-->
        <section class="documents">
            <div class="documents__container container">
            <?php
                $report_loop_2 = CFS()->get('documents');
                foreach ($report_loop_2 as $about => $row) {
            ?>
            <h4 class="title"><?= $row['documents_title']; ?></h4>
            <div class="documents__buttons">
                <?php
                    foreach ($row['document'] as $imageAbout => $documentRow) {
                ?>
                <a href="<?= $documentRow['doc_link']; ?>" class="doc-button-item animation-push centering-center" target="_blank"><?= $documentRow['doc_name']; ?></a>
                <?php
                    }
                ?>
            </div>
            <?php
                }
            ?>
            </div>
        </section>
        <!-- Документы НКО-->
        <!-- Отзывы -->
        <div class="slider-container container">
            <h5 class="title"><?= CFS()->get('reviews_title'); ?></h5>
            <div class="slider">
                <div class="slide"><p class="slide__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime eligendi ipsam aliquam ex, repudiandae nam nesciunt! Repellendus, consectetur ducimus nobis reprehenderit, aliquam ratione hic assumenda molestiae, temporibus deserunt dolorum? Cum.</p></div>
                <div class="slide"><p class="slide__text">МЯУУicing elit. Dolore natus, inventore veniam quod numquam blanditiis eum iusto, enim atque rerum dolorem molestias excepturi iste fuga nam officiis optio repellendus minima?</p></div>
                <div class="slide"><p class="slide__text">Слайд 3</p></div>
            </div>
            <div class="slider__buttons">
                <img src="<?= get_template_directory_uri() . '/assets/images/icons/arrow-slider-left_about-nko.png);' ?>" alt="Назад" class="prev-button">
                <img src="<?= get_template_directory_uri() . '/assets/images/icons/arrow-slider_about-nko.png);' ?>" alt="Вперёд" class="next-button">
            </div>
        </div>
        <!-- Отзывы -->
        <!-- Блок соцсети -->
        <section class="social">
            <div class="social__container container">
                <h5 class="title"><?= CFS()->get('social_title'); ?></h5>
                <ul class="social__icons">
                <?php
                    $social_loop = CFS()->get('social');
                    foreach ($social_loop as $row) {
                ?>
                <li class="social__link">
                    <a href="<?= $row['social_link']['url']; ?>" target="<?= $row['social_link']['target']; ?>" class="social__icon-link">
                        <img src="<?= $row['social_icon']; ?>" class="social__img">
                    </a>
                </li>
                <?php
                    }
                ?>
            </div>
        </section>
        <!-- Блок соцсети -->
    </main>
    <?php get_footer(); ?>