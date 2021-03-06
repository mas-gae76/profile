<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="На сайте CrazyDeveloper Вы сможете ознакомиться с реализованными проектами
    и оставить рекомендации по улучшению этого сайта">
    <meta name="keywords" content="Веб-разработка, сайт, проекты, frontend, backend, fullstack, HTML, CSS, JavaScript, PHP, MySQL">
    <title>CrazyDeveloper : : Web development</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
</head>
<body>
    <header id="head">
        <div class="logo"><img src="images/logo.png" alt="Логотип сайта">
            <div class="logo_container">
                <div class="box_logo">
                    <div class="title">
                        <span class="block"></span>
                        <h2 translate="no">CrazyDeveloper<span></span></h2>
                    </div>
                    <div class="role">
                        <div class="block"></div>
                        <p translate="no">Web development</p>
                    </div>
                </div>
            </div>
        </div>
        <label><input type="checkbox" name="" class="btn"></label>
        <nav>
            <ol>
                <li class="menu_projects_hover">
                    <a class="menu_projects">Проекты</a>
                    <div class="submenu_projects" style="display: none">
                        <?php
                            require_once 'functions.php';
                            echo get_projects();
                        ?>
                    </div>
                </li>
                <li><a href="#" class="menu_item">Разработчикам</a></li>
                <li><a href="#" class="menu_item">Обо мне</a></li>
                <li><a href="#" class="menu_item">Связь</a></li>
            </ol>
        </nav>
    </header>

    <main>

        <p class="heading">Описание</p>
        <article class="description">
            <div class="desc_content">
            <?php
                require_once "functions.php";
                echo get_description();
            ?>
            </div>
            <div class="desc_img">
                <img src="images/growth.jpg" alt="">
            </div>
        </article>

        <p class="heading">Этапы разработки</p>
        <div class="steps">
            <div class="wrap">
                <div class="cube">
                    <div class="front">
                        <div class="desc_img"><img src="images/discussion.jpg" alt=""></div>
                        <div class="desc_content">
                            <p>Составление ТЗ</p>
                            <p>На данном этапе обговариваются
                                условия сотрудничества между заказчиком и исполнителем</p>
                        </div>
                        <div class="arrow_detail">
                            <div class="arrow">&#8594;</div>
                        </div>
                    </div>
                    <div class="right">
                        Right side
                    </div>
                </div>
            </div>

            <div class="wrap">
                <div class="cube">
                    <div class="front">
                        <div class="desc_img"><img src="images/execution.jpg" alt=""></div>
                        <div class="desc_content">
                            <p>Составление ТЗ</p>
                            <p>На данном этапе обговариваются
                                условия сотрудничества между заказчиком и исполнителем</p>
                        </div>
                        <div class="arrow_detail">
                            <div class="arrow">&#8594;</div>
                        </div>
                    </div>
                    <div class="right">
                        Right side
                    </div>
                </div>
            </div>

            <div class="wrap">
                <div class="cube">
                    <div class="front">
                        <div class="desc_img"><img src="images/deadline.jpg" alt=""></div>
                        <div class="desc_content">
                            <p>Составление ТЗ</p>
                            <p>На данном этапе обговариваются
                                условия сотрудничества между заказчиком и исполнителем</p>
                        </div>
                        <div class="arrow_detail">
                            <div class="arrow">&#8594;</div>
                        </div>
                    </div>
                    <div class="right">
                        Right side
                    </div>
                </div>
            </div>
        </div>
        <a class="arrow_up" title="Наверх" style="display: none">&#8593;</a>
    </main>

    <footer>

    </footer>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>