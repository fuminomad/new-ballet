<?php get_header(); ?>

<?php get_header(); ?>
<section class="p-page-single-mv l-page-single-mv">
    <div class="p-page-single-mv__container page-single-mv__container">
        <div class="page-single-mv__wrapper" id="">
            <div class="page-single-mv__image">
                <figure class="page-single-mv__figure">
                    <h1 class="p-page-single-mv__title-4th">角屋満李子バレエ団<br> <span> <?php the_title(); ?></span>
                    </h1>
                    <div class="page-single-mv__img page-single-mv__img-4">
                    </div>
                </figure>
            </div>
        </div>

        <div class="p-page-single-mv__wrapper">
            <div class="p-page-single-mv__texts">
                <div class="p-page-single-mv__news">22年9月3(土) 公演開催予定</div>
                <a class="p-page-single-mv__icon" href="https://instagram.com/sumiya_ballet?utm_medium=copy_link"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-instagam.png" loading="lazy" width="40" height="40" alt="インスタグラムアイコン"></a>
            </div>
        </div>
    </div>
</section>
<div class="p-page__breadcrumb p-page__breadcrumb--single">
    <?php
    if (function_exists('bcn_display')) {
        bcn_display();
    }
    ?>
</div>
<section class="l-about p-about">
    <div class="p-about__inner">

        <h2 class="p-about__title c-section__title">
            角屋満李子バレエ団
        </h2>
        <div class="p-about__text">
            <p class="p-about__message">
                1966年 相模大野の地に角屋満李子先生がお教室を開き、クラシックバレエの基礎、踊る楽しさを大切に健やかな人間性を築き、心身ともに成長できるように指導してまいりました。

            </p>
            <p class="p-about__message">
                2007年より教室を引継ぎ、より一層細やかな指導とともに、ひとりひとりの個性を活かしバレエを通して豊かな芸術性を育むよう教師一同心がけております。 </p>
            <p class="p-about__name">主宰 吉田千文</p>
        </div>
        <div class="p-about__nav">
            <div class="p-about__btns">
                <a href="#p-page-company" class="p-about__btn">教室の<br class="is-sp">特徴</a>
            </div>
            <div class="p-about__btns">
                <a href="#page-single-class" class="p-about__btn">クラス<br class="is-sp">紹介</a>
            </div>
            <div class="p-about__btns">
                <a href="#page-single-map" class="p-about__btn">体験<br class="is-sp">レッスン</a>
            </div>
        </div>
    </div>
</section>
<section class="p-company l-company" id="p-page-company">
    <div class="p-company__inner">
        <h2 class="c-section__title p-company__title">
            教室の<span>3</span>つの特徴
        </h2>
        <div class="p-company__cards card-item">

            <div class="p-company__card card">
                <div class="card__texts">
                    <div class="card__title line_narrow">年に一度の<br class="is-sp">大きな公演・発表会</div>
                    <p class="card__text">
                        毎年、相模大野グリーンホールにて3歳からのプチバレリーナ、本格的なクラシックバレエ、コンテンポラリーダンスなどの多彩な演目による公演を行っております。
                    </p>
                    <p class="card__text--bottom">
                        発表会は技術的な成長は勿論ですが、『目標に向かって努力すること』を学び『大きな舞台で発表する達成感を経験する』精神的に成長する大切な機会です。
                    </p>
                </div>
                <a class="card__images card__images--1st" href="<?php echo home_url('/gallery/'); ?>">
                    <figure class="card__figure">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/company-1.jpg" loading="lazy" width="350" height="240" alt="舞台写真">
                    </figure>
                </a>
            </div>
            <div class="p-company__card card">
                <div class="card__texts">
                    <div class="card__title line_narrow">相模大野を拠点に<br class="is-sp"><span>８</span>教室</div>
                    <p class="card__text">
                        本部のスタジオは相模大野駅徒歩３分の場所にあり、その他、神奈川県内に８教室(鶴間・西三田・綾瀬・南林間・戸塚・本厚木・海老名) 約150名の生徒が在籍しております。
                    </p>
                    <p class="card__text--bottom">
                        最寄りの教室の他に相模大野スタジオの『コンクールクラス』『コンテンポラリーダンスクラス』のレッスンを選択する事も可能です。
                    </p>
                </div>
                <a class="card__images card__images--2nd" href="<?php echo home_url('/category/archive/'); ?>">
                    <figure class="card__figure">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/company-2.jpg" loading="lazy" width="350" height="240" alt="スタジオ舞台写真">
                    </figure>
                </a>
            </div>
            <div class="p-company__card card">
                <div class="card__texts">
                    <div class="card__title--3rd line_narrow">習い事としてのお稽古から<br>プロダンサーまで</div>
                    <p class="card__text-3rd">
                        習い事の一環としてお稽古する生徒から、ボリショイバレエ学校、ミラノスカラ座バレエ学校、イギリスランベールスクールなど海外留学、そしてプロバレエダンサーとして活躍している人材を輩出しています。
                    </p>
                    <p class="card__text--bottom">
                        『美しい姿勢、表現力、リズム感』を養う目的の生徒から『コンクール』に出場する生徒まで幅広い目的に対応しております。
                    </p>
                </div>
                <a class="card__images card__images--3rd" href="<?php echo home_url('/information/'); ?>">
                    <figure class="card__figure">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/company-3.jpg" loading="lazy" width="350" height="240" alt="舞台写真">
                    </figure>
                </a>
            </div>

        </div>
    </div>

</section>
<section class="l-page-class">
    <div class="l-page-class__inner">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php if (has_tag('sagami-ono')) : ?>
                    <h2 class="l-page-class__subtitle" id="page-single-class">
                        <?php the_title(); ?>
                        <br><span>
                            タイムスケジュール</span>
                    </h2>
                    <?php the_content(); ?>
                <?php else : ?>
                    <h2 class="l-page-class__subtitle" id="page-single-class">
                        <?php the_title(); ?>
                        <br><span>
                            クラシックバレエ</span>
                    </h2>
                    <?php the_content(); ?>
                <?php endif; ?>
                <?php if (has_tag('totsuka')) : ?>
                    <div class="l-page-class__times">
                        <h3 class="l-page-class__time">
                            <a href="<?php echo esc_url(home_url('/teachers/')); ?>#ikeda">
                                <p class="l-page-class__teacher-1st">
                                    <span>担当教師</span><br><?php $teacher = scf::get('teacher');
                                                            echo nl2br($teacher); ?>
                                </p>
                            </a>
                            <?php $time = scf::get('time');
                            echo nl2br($time); ?>
                        </h3>
                    </div>

                <?php elseif (has_tag('ayase')) : ?>
                    <div class="l-page-class__times">
                        <h3 class="l-page-class__time">
                            <a href="<?php echo esc_url(home_url('/teachers/')); ?>#kojima">
                                <p class="l-page-class__teacher">
                                    <span>担当教師</span><?php $teacher = scf::get('teacher');
                                                        echo nl2br($teacher); ?>
                                </p>
                            </a>
                            <?php $time = scf::get('time');
                            echo nl2br($time); ?>
                        </h3>
                    </div>
                <?php elseif (has_tag('minami')) : ?>
                    <div class="l-page-class__times">
                        <h3 class="l-page-class__time">
                            <a href="<?php echo esc_url(home_url('/teachers/')); ?>#ichikawa">
                                <p class="l-page-class__teacher">
                                    <span>担当教師</span><?php $teacher = scf::get('teacher');
                                                        echo nl2br($teacher); ?>
                                </p>
                            </a>
                            <?php $time = scf::get('time');
                            echo nl2br($time); ?>
                        </h3>
                    </div>
                <?php elseif (has_tag('ebina')) : ?>
                    <div class="l-page-class__times">
                        <h3 class="l-page-class__time">
                            <a href="<?php echo esc_url(home_url('/teachers/')); ?>#ishiyama">
                                <p class="l-page-class__teacher">
                                    <span>担当教師</span><?php $teacher = scf::get('teacher');
                                                        echo nl2br($teacher); ?>
                                </p>
                            </a>
                            <?php $time = scf::get('time');
                            echo nl2br($time); ?>
                        </h3>
                    </div>
                <?php elseif (has_tag('honatsugi')) : ?>
                    <div class="l-page-class__times">
                        <h3 class="l-page-class__time">
                            <a href="<?php echo esc_url(home_url('/teachers/')); ?>#ishiyama">
                                <p class="l-page-class__teacher">
                                    <span>担当教師</span><?php $teacher = scf::get('teacher');
                                                        echo nl2br($teacher); ?>
                                </p>
                            </a>
                            <?php $time = scf::get('time');
                            echo nl2br($time); ?>
                        </h3>
                    </div>

                <?php elseif (has_tag('sagami-ono')) : ?>

                    <div class="l-page-class__times">
                        <h3 class="l-page-class__time">
                            <a href="<?php echo esc_url(home_url('/teachers/')); ?>#yoshida">
                                <p class="l-page-class__teacher">
                                    <span>担当教師</span>
                                </p>
                            </a>
                            <?php $time = scf::get('time');
                            echo nl2br($time); ?>
                        </h3>
                    </div>
                <?php elseif ('tsuruma,nishimita') : ?>

                    <div class="l-page-class__times">
                        <h3 class="l-page-class__time">
                            <a href="<?php echo esc_url(home_url('/teachers/')); ?>#yoshida">
                                <p class="l-page-class__teacher">
                                    <span>担当教師</span><?php $teacher = scf::get('teacher');
                                                        echo nl2br($teacher); ?>
                                </p>
                            </a>
                            <?php $time = scf::get('time');
                            echo nl2br($time); ?>
                        </h3>
                    </div>


                <?php endif; ?>

                <div class="l-page__wrapper">

                    <div class="l-page-class__image">
                        <figure class="l-page-class__figure">
                            <?php if (get_post_meta($post->ID, 'class_image', true)) : ?>
                                <?php
                                $class_image = scf::get('class_image');
                                echo wp_get_attachment_image($class_image, 'large');
                                ?>
                            <?php endif; ?>
                        </figure>
                    </div>

                    <?php if (has_tag('ayase')) : ?>
                        <div class="l-page-class__overview p-overview">
                            <h2 class="p-overview__title"><?php the_title(); ?></h2>
                            <div class="p-overview__wrapper-2nd">

                                <dl>
                                    <dt>住所</dt>
                                    <dd><?php $address = scf::get('address');
                                        echo nl2br($address); ?></dd>
                                </dl>
                            </div>
                        </div>
                </div>
            <?php else : ?>
                <div class="l-page-class__overview p-overview">
                    <h2 class="p-overview__title"><?php the_title(); ?></h2>
                    <div class="p-overview__wrapper">

                        <dl>
                            <dt>住所</dt>
                            <dd><?php $address = scf::get('address');
                                echo nl2br($address); ?></dd>
                            <dt>TEL</dt>
                            <dd><?php $tel2nd = scf::get('tel-2nd');
                                echo nl2br($tel2nd); ?></dd>
                            <dt>アクセス</dt>
                            <dd><?php $access = scf::get('access');
                                echo nl2br($access); ?></dd>


                        </dl>
                        <div class="p-overview__maps">
                            <iframe src="<?php $google_maps = scf::get('google_maps');
                                            echo sanitize_text_field($google_maps); ?>" width="400" height="750" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>

    </div>
<?php endif; ?>


<?php if (has_tag('studio')) : ?>



    <div class="l-page-class__contact" id="page-single-map">
        <div class="l-page-class__text">
            <p>体験レッスン <br class="is-sp">お問い合わせはこちらまで</p>

        </div>
        <div class="l-page-class__btns p-class__btn">
            <a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>
        </div>
    </div>
<?php else : ?>
<?php endif; ?>

<?php if (has_tag('minami')) : ?>
    <div class="l-page-class__contacts" id="minami">
        <div class="l-page-class__contact" id="page-single-map">
            <div class="l-page-class__text">
                <p>体験レッスンお申し込み</p>
            </div>
            <div class="l-page-class__text-2nd">
                <p>
                    体験レッスンは南林間カルチャーへ<br class="is-sp">直接お申し込み下さい
                </p>
            </div>
            <h3 class="p-btn__title--2nd">月曜日クラス</h3>
            <div class="p-btn_wrapper--2nd">
                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.culture.gr.jp/spn/detail/minamiri/itemview_29_29001005.html">園児</a>
                </div>

                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.culture.gr.jp/spn/detail/minamiri/itemview_29_29001006.html">小学生低学年</a>
                </div>

                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.culture.gr.jp/spn/detail/minamiri/itemview_29_29001007.html">小学生高学年</a>
                </div>

                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.culture.gr.jp/spn/detail/minamiri/itemview_29_29000701.html">中学生以上</a>
                </div>
            </div>
            <h3 class="p-btn__title--3rd">火曜日クラス</h3>
            <div class="p-btn_wrapper--2nd">
                <div class="l-page-class__btns p-class__btn-3rd">
                    <a href="https://www.culture.gr.jp/spn/detail/minamiri/itemview_29_903040163.html">園児</a>
                </div>

                <div class="l-page-class__btns p-class__btn-3rd">
                    <a href="https://www.culture.gr.jp/spn/detail/minamiri/itemview_29_903040164.html">小学生低学年</a>
                </div>

                <div class="l-page-class__btns p-class__btn-3rd">
                    <a href="https://www.culture.gr.jp/spn/detail/minamiri/itemview_29_903040165.html">小学生高学年</a>
                </div>

                <div class="l-page-class__btns p-class__btn-3rd">
                    <a href="https://www.culture.gr.jp/spn/detail/minamiri/itemview_29_903026398.html">中学生以上</a>
                </div>

            </div>
            <div class="l-page-class__text  p-class__btn-totsuka">
                <p>お問い合わせはこちらまで</p>

            </div>
            <div class="l-page-class__btns p-class__btn">
                <a href="<?php echo home_url('/contact/'); ?>">角屋満李子バレエ団</a>
            </div>
        </div>
    </div>

    </div>
<?php else : ?>
<?php endif; ?>
<?php if (has_tag('honatsugi')) : ?>
    <div class="l-page-class__contacts" id="honatsugi">
        <div class="l-page-class__contact" id="page-single-map">
            <div class="l-page-class__text">
                <p>体験レッスンお申し込み</p>
            </div>
            <div class="l-page-class__text-2nd">
                <p>
                    体験レッスンは本厚木カルチャーへ<br class="is-sp">直接お申し込み下さい
                </p>
            </div>
            <div class="p-btn_wrapper">

                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.culture.gr.jp/spn/detail/atugi/itemview_1_1001006.html">本厚木カルチャー</a>
                </div>

            </div>
            <div class="l-page-class__text  p-class__btn-totsuka">
                <p>お問い合わせはこちらまで</p>

            </div>
            <div class="l-page-class__btns p-class__btn">
                <a href="<?php echo home_url('/contact/'); ?>">角屋満李子バレエ団</a>
            </div>
        </div>
    </div>

    </div>
<?php else : ?>
<?php endif; ?>

<?php if (has_tag('totsuka')) : ?>
    <div class="l-page-class__contacts" id="totsuka">
        <div class="l-page-class__contact" id="page-single-map">
            <div class="l-page-class__text">
                <p>体験レッスンお申し込み
                </p>
            </div>
            <div class="l-page-class__text-2nd">
                <p>
                    体験レッスンは戸塚カルチャーへ<br class="is-sp">直接お申し込み下さい
                </p>
            </div>
            <div class="p-btn_wrapper">

                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.ms-yurindo.jp/shop_classroom/totsuka_cc/childcourse1-2/">幼児〜小学生</a>
                </div>
                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.ms-yurindo.jp/shop_classroom/totsuka_cc/dance_health1/">成人</a>
                </div>
            </div>
            <div class="l-page-class__text  p-class__btn-totsuka">
                <p>お問い合わせはこちらまで</p>

            </div>
            <div class="l-page-class__btns p-class__btn">
                <a href="<?php echo home_url('/contact/'); ?>">角屋満李子バレエ団</a>
            </div>
        </div>

    </div>
<?php else : ?>
<?php endif; ?>
<?php if (has_tag('ebina')) : ?>
    <div class="l-page-class__contacts" id="ebina">
        <div class="l-page-class__contact" id="page-single-map">
            <div class="l-page-class__text">
                <p>体験レッスンお申し込み
                </p>
            </div>
            <div class="l-page-class__text-2nd">
                <p>
                    体験レッスンは海老名カルチャーへ<br class="is-sp">直接お申し込み下さい
                </p>
            </div>
            <div class="p-btn_wrapper">

                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.aeonculture.jp/products/detail.php?product_id=1233">3歳</a>
                </div>
                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.aeonculture.jp/products/detail.php?product_id=1234">1年生~3年生</a>
                </div>
                <div class="l-page-class__btns p-class__btn-2nd">
                    <a href="https://www.aeonculture.jp/products/detail.php?product_id=1232">4年生~</a>
                </div>
            </div>
            <div class="l-page-class__text  p-class__btn-totsuka">
                <p>お問い合わせはこちらまで</p>

            </div>
            <div class="l-page-class__btns p-class__btn">
                <a href="<?php echo home_url('/contact/'); ?>">角屋満李子バレエ団</a>
            </div>
        </div>

    </div>
<?php else : ?>
<?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>
</div>
</section>

<?php get_footer(); ?>