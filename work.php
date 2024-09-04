<? include $_SERVER['DOCUMENT_ROOT'] . "/igaming/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT'] . "/igaming/inc/header.php"; ?>

    <div class="cursor"></div>

    <div id="selectWr" class="select__wr">
        <div class="select">
            <select id="moveSelect" class="move__select" onchange="moveToSection()">
                <option value="project">Project Highlights</option>
                <option value="section3">Categories</option>
                <option value="webUx">Web / UX</option>
                <option value="branding">Branding</option>
                <option value="app">App / Multimedia</option>
                <option value="Advertising">Advertising</option>
                <option value="Motion_Graphics">Motion Graphics</option>
                <option value="Other_Project">Other Projects</option>
            </select>
            <div class="select_arrow"></div>
        </div>
    </div>

    <div class="wrap">
        <section class="section work__sec">
            <article id="project" class="cont cont1">
                <div class="inner">
                    <div class="textBox__">
                        <span class="Mtext topText trsText_">A Selection of Works by iGaming Studio</span>
                        <span class="Mtext botText text_ trsText_">A few highlighted projects, followed by a selection of the jobs completed in recent years for clients of iGS. Explore the categorised works gallery below our featured projects.</span>
                    </div>
                </div>
            </article>

            <article class="cont cont2">
                <div class="inner">
                    <div class="row__box">
                        <div class="row">
                            <div class="infomation__wr">
                                <span class="title_">BestOdds.com</span>
                                <div class="information_">
                                    <p class="text_">Branding, an iOS app, and a complex affiliate web presence were designed for BestOdds.com with industry-leading looks, in the form of magazine-style layouts.</p>
                                    <p class="text_">The brand was sold for $3.6M soon after its renewal.</p>
                                </div>

                                <a href="<?=DIR?>/work_view.php" class="view_">View Project</a>
                            </div>
                            <div class="picture__wr">
                                <a href="<?=DIR?>/work_view.php" class="clip__ img__">
                                    <img src="<?= DIR ?>/img/cont5_img1.webp" alt="BestOdds.com 이미지">
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="infomation__wr">
                                <span class="title_">QuickBet.co</span>
                                <div class="information_">
                                    <p class="text_">A new sportsbook design was delivered for QuickBet.com's launch.
                                        The project also included a full UI refresh of their white label sportsbook integration.</p>
                                </div>

                                <a href="#none" class="view_">View Project</a>
                            </div>
                            <div class="picture__wr">
                                <a href="#none" class="clip__ img__">
                                    <img src="<?= DIR ?>/img/cont4_img2.webp" alt="BestOdds.com 이미지">
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="infomation__wr">
                                <span class="title_">QuickBet.co</span>
                                <div class="information_">
                                    <p class="text_">A new sportsbook design was delivered for QuickBet.com's launch.
                                        The project also included a full UI refresh of their white label sportsbook integration.</p>
                                </div>

                                <a href="#none" class="view_">View Project</a>
                            </div>
                            <div class="picture__wr">
                                <a href="#none" class="clip__ img__">
                                    <img src="<?= DIR ?>/img/cont3_img2.webp" alt="BestOdds.com 이미지">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article id="section3" class="cont cont3">
                <div class="inner">
                    <ul class="category__move_list">
                        <li><a href="#webUx">Web / UX</a></li>
                        <li><a href="#branding">Branding</a></li>
                        <li><a href="#app">App / Multimedia</a></li>
                        <li><a href="#Advertising">Advertising</a></li>
                        <li><a href="#Motion_Graphics">Motion Graphics</a></li>
                        <li><a href="#Other_Projects">Other Project</a></li>
                    </ul>
                </div>
            </article>

            <article id="category_Wrap" class="cont cont4">
                <div class="inner">
                    <div class="row__box__list">
                        <div id="webUx" class="row">
                            <div class="information__box__wr">
                                <span class="in__title">Web / UX</span>
                                <div class="in__text__box">
                                    <p class="text_ subText_ trsText_">Web and UX design are the essence of what makes an iGaming product great. It is also the most frequently requested service from iGaming Studio.</p>
                                    <p class="text_ subText_ trsText_">We always aim to deliver digital products that are outstanding in their respective fields—not just with their looks but also with their unmatched performance.</p>
                                </div>
                            </div>

                            <div class="row__box">
                                <div class="row">
                                    <div class="infomation__wr">
                                        <span class="title_">BestOdds.com</span>
                                        <div class="information_">
                                            <p class="text_">Branding, an iOS app, and a complex affiliate web presence were designed for BestOdds.com with industry-leading looks, in the form of magazine-style layouts.</p>
                                            <p class="text_">The brand was sold for $3.6M soon after its renewal.</p>
                                        </div>

                                        <a href="#none" class="view_">View Project</a>
                                    </div>
                                    <div class="picture__wr">
                                        <a href="#none" class="clip__ img__">
                                            <img src="<?= DIR ?>/img/cont5_img1.webp" alt="BestOdds.com 이미지">
                                        </a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="infomation__wr">
                                        <span class="title_">QuickBet.co</span>
                                        <div class="information_">
                                            <p class="text_">A new sportsbook design was delivered for QuickBet.com's launch.
                                                The project also included a full UI refresh of their white label sportsbook integration.</p>
                                        </div>

                                        <a href="#none" class="view_">View Project</a>
                                    </div>
                                    <div class="picture__wr">
                                        <a href="#none" class="clip__ img__">
                                            <img src="<?= DIR ?>/img/cont4_img2.webp" alt="BestOdds.com 이미지">
                                        </a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="infomation__wr">
                                        <span class="title_">QuickBet.co</span>
                                        <div class="information_">
                                            <p class="text_">A new sportsbook design was delivered for QuickBet.com's launch.
                                                The project also included a full UI refresh of their white label sportsbook integration.</p>
                                        </div>

                                        <a href="#none" class="view_">View Project</a>
                                    </div>
                                    <div class="picture__wr">
                                        <a href="#none" class="clip__ img__">
                                            <img src="<?= DIR ?>/img/cont3_img2.webp" alt="BestOdds.com 이미지">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="branding" class="row">
                            <div class="branding__box">
                                <span class="in__title">Branding</span>

                                <ul class="branding__list">
                                    <li>
                                        <span class="box"></span>
                                        <p class="information__text">New logo for CasinoCasino inspired by the original double orange, with a modern take.</p>
                                        <a href="#none" class="viewBtn">View Project</a>
                                    </li>
                                    <li>
                                        <span class="box"></span>
                                        <p class="information__text">New logo for CasinoCasino inspired by the original double orange, with a modern take.</p>
                                        <a href="#none" class="viewBtn">View Project</a>
                                    </li>
                                    <li>
                                        <span class="box"></span>
                                        <p class="information__text">New logo for CasinoCasino inspired by the original double orange, with a modern take.</p>
                                        <a href="#none" class="viewBtn">View Project</a>
                                    </li>
                                    <li>
                                        <span class="box"></span>
                                        <p class="information__text">New logo for CasinoCasino inspired by the original double orange, with a modern take.</p>
                                        <a href="#none" class="viewBtn">View Project</a>
                                    </li>
                                    <li>
                                        <span class="box"></span>
                                        <p class="information__text">New logo for CasinoCasino inspired by the original double orange, with a modern take.</p>
                                        <a href="#none" class="viewBtn">View Project</a>
                                    </li>
                                    <li>
                                        <span class="box"></span>
                                        <p class="information__text">New logo for CasinoCasino inspired by the original double orange, with a modern take.</p>
                                        <a href="#none" class="viewBtn">View Project</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div id="app" class="row">
                            <div class="information__box__wr">
                                <span class="in__title">App / Multimedia</span>
                                <div class="in__text__box">
                                    <p class="text_ subText_ trsText_">Some of iGS' previous works extend to different platforms, from iOS and Android apps to native desktop applications.</p>
                                    <p class="text_ subText_ trsText_">We are also more than ready to deliver photorealistic AR, VR, and XR experiences to our clients.</p>
                                </div>
                            </div>

                            <div class="row__box">
                                <div class="row">
                                    <div class="infomation__wr">
                                        <span class="title_">Decal, an Interactive App for Sigma</span>
                                        <div class="information_">
                                            <p class="text_">A standalone Windows and MacOS application was delivered to Sigma for an exciting vehicle decal showcasing experience. Work done in 2018.</p>
                                        </div>
                                    </div>
                                    <div class="picture__wr">
                                        <a href="#none" class="clip__ img__">
                                            <video controls muted src="<?=DIR?>/img/works_video_1.mp4" alt="Works video"></video>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="Advertising" class="row">
                            <div class="branding__box">
                                <span class="in__title">Advertising</span>

                                <ul class="branding__list">
                                    <li>
                                        <span class="box h900"></span>
                                        <p class="information__text">New logo for CasinoCasino inspired by the original double orange, with a modern take.</p>
                                        <a href="#none" class="viewBtn">View Project</a>
                                    </li>
                                    <li>
                                        <span class="box h950"></span>
                                        <p class="information__text">New logo for CasinoCasino inspired by the original double orange, with a modern take.</p>
                                        <a href="#none" class="viewBtn">View Project</a>
                                    </li>
                                    <li>
                                        <span class="box h650"></span>
                                        <p class="information__text">New logo for CasinoCasino inspired by the original double orange, with a modern take.</p>
                                        <a href="#none" class="viewBtn">View Project</a>
                                    </li>
                                    <li>
                                        <span class="box h650"></span>
                                        <p class="information__text">New logo for CasinoCasino inspired by the original double orange, with a modern take.</p>
                                        <a href="#none" class="viewBtn">View Project</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div id="Motion_Graphics" class="row">
                            <div class="information__box__wr">
                                <span class="in__title">Motion Graphics</span>
                                <div class="in__text__box">
                                    <p class="text_ subText_ trsText_">iGaming events are the most common occasions where our clients want to showcase their brands and/or their services in the form of a short animated video.</p>
                                    <p class="text_ subText_ trsText_">The following works were done for our clients' stands at Sigma, ICE, or the London Affiliate Conference.</p>
                                </div>
                            </div>

                            <div class="row__box">
                                <div class="row">
                                    <div class="infomation__wr">
                                        <span class="title_">BestOdds.com</span>
                                        <div class="information_">
                                            <p class="text_">Branding, an iOS app, and a complex affiliate web presence were designed for BestOdds.com with industry-leading looks, in the form of magazine-style layouts.</p>
                                            <p class="text_">The brand was sold for $3.6M soon after its renewal.</p>
                                        </div>

                                        <a href="#none" class="view_">View Project</a>
                                    </div>
                                    <div class="picture__wr">
                                        <a href="#none" class="clip__ img__">
                                            <img src="<?= DIR ?>/img/cont6_img2.webp" alt="BestOdds.com 이미지">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="Other_Projects" class="row">
                            <div class="information__box__wr">
                                <span class="in__title">Other Projects</span>
                                <div class="in__text__box">
                                    <p class="text_ subText_ trsText_">Some projects don't fit into the usual iGaming topics, but we still think they are worth showcasing.</p>
                                    <p class="text_ subText_ trsText_">In this section, you'll find some exciting works, a few of them even won design and development awards. The sites are archived for preservation, so the links point to our client area.</p>
                                </div>
                            </div>

                            <div class="row__box">
                                <div class="row">
                                    <div class="infomation__wr">
                                        <span class="title_">Recruiting Site for Cbet</span>
                                        <div class="information_">
                                            <p class="text_">A futuristic-themed, horizontally scrolling one-page website was delivered to Cbet to help their recruitment efforts.</p>
                                        </div>

                                        <a href="#none" class="view_">View Project</a>
                                    </div>
                                    <div class="picture__wr">
                                        <a href="#none" class="clip__ img__">
                                            <img src="<?= DIR ?>/img/works_img1.webp" alt="BestOdds.com 이미지">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>

    <? include $_SERVER['DOCUMENT_ROOT'] . "/igaming/inc/footer.php"; ?>
</body>
</html>