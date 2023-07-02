<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
    <?php wp_head(); ?>
</head>

<body class="fadeIn">
    <header class="header-warp">
        <div class="openbtn1"><span></span><span></span><span></span></div>
        <div class="inner header-inner">
            <div class="header-left">
                <img class="fadeLeft" src="<?php echo get_template_directory_uri(); ?>/img/logo.PNG" alt="コーディング代行・Web制作ならメイクディレクトリ">
                <h1 class="header-title rotateY">
                    コーディング代行・Web制作なら<br class="sp_header_rb">
                    メイクディレクトリ
                </h1>
            </div>
            <div class="header-center">
                <nav class="header-nav">
                    <ul class="header-nav-list">
                        <a href="">
                            <li class="nav-list-item fadeDown">WORKS</li>
                        </a>
                        <a href="">
                            <li class="nav-list-item fadeDown delay-time02">SERVICE</li>
                        </a>
                        <a href="">
                            <li class="nav-list-item fadeDown  delay-time04">REVIEWS</li>
                        </a>
                        <a href="">
                            <li class="nav-list-item fadeDown  delay-time06">COMPANY</li>
                        </a>
                    </ul>
                </nav>
            </div>
            <div class="header-right fadeRight">
                <div class="btn">
                    <a href="">CONTACT</a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="fv">
            <div class="fv-inner inner">
                <div class="fv-left">
                    <div class="fv-title-warp">
                        <h1 class="fv-title">コーディング請負人</h1>
                        <h2 class="fv-sub-title TextTyping">高品質のコーディングをお約束します！</h2>
                    </div>
                    <p class="fv-text">
                        デザインに忠実　レスポンシブ対応　短納期
                    </p>
                    <div class="btn">
                        <a href="">お問い合わせはこちらから</a>
                    </div>
                </div>
                <div class="fv-right zoomIn">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/FV Pic2.png" alt="高品質のコーディングをお約束します！">
                </div>
            </div>
        </section>



        <section class="problems">
            <div class="problems-inner inner">
                <h1 class="section-title problems-title">
                    わたしのお客様は<br class="sp_section_title">こんなお悩みでご相談に来られます
                    <!-- 疑似要素problemを走らせる -->
                </h1>
                <div class="problems-flex-box">
                    <div class="problems-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/img\problem.png" alt="わたしたちのお客様はこんなお悩みでご相談に来られます">
                    </div>
                    <div class="problems-right">
                        <ul class="problems-list">
                            <!-- 順番にポップアップさせる（ふわっと） -->
                            <li class="problems-item">
                                <p><span class="smoothText"><span class="smoothTextTrigger"> 人的なリソースが足りない</span></span></p>
                            </li>
                            <li class="problems-item">
                                <p><span class="smoothText"><span class="smoothTextTrigger"> コミュニケーション能力の高いコーダーさんに巡り合えない</span></span></p>
                            </li>
                            <li class="problems-item">
                                <p><span class="smoothText"><span class="smoothTextTrigger"> WordPressの知識が乏しい</span></span></p>
                            </li>
                            <li class="problems-item">
                                <p><span class="smoothText"><span class="smoothTextTrigger"> 品質の良いコーディングをしてほしい</span></span></p>
                            </li>
                            <li class="problems-item">
                                <p><span class="smoothText"><span class="smoothTextTrigger"> レスポンシブにデザインに対応してほしい</span></span></p>
                            </li>
                            <li class="problems-item">
                                <p><span class="smoothText"><span class="smoothTextTrigger"> javascript、jQueryで動きのあるWebサイトが欲しい</span></span></p>
                            </li>
                            <li class="problems-item">
                                <p><span class="smoothText"><span class="smoothTextTrigger"> 既存のwebサイトをリニューアルしたい</span></span></p>
                            </li>
                            <li class="problems-item">
                                <p><span class="smoothText"><span class="smoothTextTrigger"> ShopifyでのECサイトの構築をしたい</span></span></p>
                            </li>

                            <!-- 中央よせ このような悩みmkdirが解決いたします -->
                        </ul>
                    </div>
                </div>
                <h2 class="section-title problems-title-2">すべて私にお任せください！！
                    <br>無駄のないコーディングであなたをサポートいたします。</h2>
            </div>
        </section>
        <section class="service">
            <div class="inner service-inner">
                <h1 class="section-title-2 service-title">
                    SERVICE
                    <span class="section-title-2-ja">サービス内容</span>

                </h1>
                <div class="service-flex-box">
                    <div class="service-flex-item">
                        <img class="fadeZoomTrigger" src="<?php echo get_template_directory_uri(); ?>/img/service-left.png" alt="">
                        <div class="service-item-text-warp fadeRightTrigger">
                            <h2 class="service-item-title">コーディング代行</h2>
                            <p>デザインカンプからHTML,CSS,Javascript,jquery<br>を使いコーディングを実施いたします。
                            </p>

                            <table class="service-item-text-warp ">
                                <tr>
                                    <td>トップページコーディング</td>
                                    <td class="plice">¥20,000〜</td>
                                </tr>
                                <tr>
                                    <td>下層ページコーディング</td>
                                    <td class="plice">¥6,000〜</td>
                                </tr>
                                <tr>
                                    <td>LPコーディング </td>
                                    <td class="plice">¥50,000〜</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="service-flex-item">
                        <ul class="service-right-warp fadeLeftTrigger">
                            <h2 class="service-item-title service-item-title-right ">WEB制作</h2>
                            <li class="service-right-item">
                                WordPress構築
                            </li>
                            <li class="service-right-item">
                                shopfyサイト構築
                            </li>
                            <li class="service-right-item">
                                サーバー・ドメイン取得代行
                            </li>

                            <p>制作費用　¥100,000〜</p>
                        </ul>
                        <img class="service-right-img fadeZoomTrigger" src="<?php echo get_template_directory_uri(); ?>/img/service-right.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('include/works') ?>




        <section class="advantage">
            <div class="inner advantage-inner">
                <h1 class="advantage-title section-title">
                    わたしの強み
                </h1>
                <div class="advantage-flex-box">
                    <ul class="advantage-flex-item-box">
                        <li class="advantage-item-box">
                            <h2 class="advantage-item-title">小さな会社だからできる <br> 御社にマッチした柔軟なプラン</h2>
                            <p class=advantage-text>
                                大きなコーディング代行会社にはできない小回りと臨機応変さがあります。大手コーディング会社では分業と細分化がされており問い合わせに対してスムーズな回答が得られないこともありますが弊社はフリーランスとして少数精鋭でコーディングに精通し、お問い合わせに対して的確なアドバイスとご提案をさせていただいております。<br>
                                また、御社に対しひとつひとつ丁寧な対応をさせていただきます。
                            </p>
                        </li>
                        <li class="advantage-item-box">
                            <h2 class="advantage-item-title advantage-item-title-2 ">レスポンスの速さ<br> フットワークの軽さ </h2>
                            <p class=advantage-text>
                                レスポンスのはやさは当然 都内近郊、神奈川、千葉、埼玉など、対面でのミーティング、ご挨拶、ヒアリングをさせていただきます。<br><br>
                                ※コロナ禍のため直近ではZOOMやchatworkを利用したヒアリングが多くなっております。 </p>
                        </li>
                        <li class="advantage-item-box">
                            <h2 class="advantage-item-title advantage-item-title-3">システムインテグレーション ベンダーの経験を活かした調整力</h2>
                            <p class=advantage-text>
                                会社員時代はシステムインテグレーションベンダーをしておりシステム間および顧客間の調整などを担当しておりました。その経験をWeb制作の現場に活かし御社のステークホルダーにムダな調整事が発生しないように配慮させていただきます。主に、スケジュール感、業種間の調整事は得意とさせていただいております、また、弊社でも実施可能な作業は積極的にご提案をさせていただき作業を巻き取る姿勢で取り組ませていただきます。
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="review">
            <div class="inner review-inner">
                <h1 class="section-title-2 review-title">
                    REVIEWS
                </h1>
                <div class="review-flex-box-warp">
                    <ul class="review-item-box-warp">
                        <div class="review-item-box">
                            <li class="review-list-item">
                                <h2 class="review-item-title">
                                    株式会社PKさま
                                </h2>
                                <p class="review-item-text">ご依頼内容：コーディング<br>難しい作業をやっていただき、有難う御座いました。 今後とも、よろしくお願い致します。</p>
                            </li>
                        </div>
                        <div class="review-item-box">
                            <li class="review-list-item">
                                <h2 class="review-item-title">
                                    フリーランスエンジニアｋさま
                                </h2>
                                <p class="review-item-text">ご依頼内容：コーディング<br>発注から作業完了まで素早くご対応いただきました。 また、最終調整での軽微な修正にも対応していただきました。</p>
                            </li>
                        </div>
                        <div class="review-item-box">
                            <li class="review-list-item">
                                <h2 class="review-item-title">
                                    株式会社ＡＯさま
                                </h2>
                                <p class="review-item-text">ご依頼内容：コーディング<br>イメージ通りの納品物をありがとうございました。
                                    また機会ありましたら、よろしくお願い致します。</p>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </section>


        <section class="conpany">
            <div class="conpany-bk-color"></div>
            <div class="inner conpany-inner">
                <h1 class="section-title-2 conpany-title">
                    COMPANY
                </h1>
                <div class="conpany-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/20220503_140354.jpg" alt="会社概要">
                    <p class="conpany-item-text">
                        わたしはコーディング代行というお仕事をとおして御社と信頼関係を構築したいと考えております。信頼しあえる仲間というのはお互いがWinWinである必要があります。
                        お互いの立場を尊重し共にビジネスの成長を支えあえるパートナー関係であり続けられる会社さまとお付き合いできたらと願っております。そのために私たちは日々、技術力を向上に努め顧客満足の最大を目指し「御社の向こう側にクライアント様がいる」ということも十分に配慮しながら技術の提供をさせていただきたいと考えております。
                    </p>
                </div>
            </div>
        </section>


        <section class="contact">
            <div class="inner contact-inner">
                <h1 class="section-title-2 contact-title">
                    CONTACT
                </h1>
                <div class="conpany-item">
                    <?php echo apply_shortcodes('[contact-form-7 id="5" title="コンタクトフォーム 1"]'); ?>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>