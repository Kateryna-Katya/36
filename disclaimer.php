<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> | Экспертный консалтинг в Германии
    </title>
<link rel="icon"
    href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><rect x='10' y='10' width='12' height='12' rx='2' fill='%23cfff04'/><circle cx='16' cy='6' r='3' fill='%23cfff04' opacity='0.5'/><circle cx='16' cy='26' r='3' fill='%23cfff04' opacity='0.5'/><circle cx='6' cy='16' r='3' fill='%23cfff04' opacity='0.5'/><circle cx='26' cy='16' r='3' fill='%23cfff04' opacity='0.5'/></svg>"
    type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Plus+Jakarta+Sans:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <?= $domainTitle ?>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#insights" class="nav__link">Инсайты</a></li>
                    <li><a href="./#strategies" class="nav__link">Стратегии</a></li>
                    <li><a href="./#expertise" class="nav__link">Экспертиза</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">Связаться</a>

            <button class="burger" id="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <span class="insight-tag" data-aos="fade-up">Правовая информация</span>
            <h1 data-aos="fade-up">Отказ от ответственности (Дисклеймер)</h1>

            <div class="legal-content">
                <p data-aos="fade-up" data-aos-delay="100">
                    <strong class="text-accent">Общая информация:</strong> Все материалы, статьи и сведения,
                    опубликованные на сайте <strong><?= $domainTitle ?></strong>, носят исключительно
                    информационно-ознакомительный характер. Они не являются и не должны
                    рассматриваться как персональная инвестиционная рекомендация,
                    профессиональный юридический или финансовый совет, публичная оферта или призыв к совершению
                    каких-либо финансовых операций.
                </p>

                <p data-aos="fade-up" data-aos-delay="150">
                    <strong class="text-accent">Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий
                    относительно точности, полноты или актуальности представленной в блоге
                    информации. Любые упоминания потенциального карьерного роста, программ пассивного дохода или прошлых
                    результатов наших клиентов не гарантируют аналогичных результатов в будущем. 
                    Индивидуальные итоги вашей деятельности зависят от множества факторов, включая рыночные условия в Германии и ЕС, и могут существенно
                    отличиться от приведенных примеров.
                </p>

                <p data-aos="fade-up" data-aos-delay="200">
                    <strong class="text-accent">Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong>,
                    его владельцы и аффилированные лица не несут ответственности за
                    любые прямые или косвенные убытки, решения или действия,
                    предпринятые вами на основе информации с этого ресурса. Вся
                    ответственность за использование предложенных методологий и возможные последствия
                    лежит исключительно на пользователе. Контент платформы <strong><?= $domainTitle ?></strong> собирается из
                    источников, которые считаются надежными и общедоступными на момент публикации.
                </p>

                <p data-aos="fade-up" data-aos-delay="250">
                    <strong class="text-accent">Предупреждение о рисках:</strong> Любая деятельность, направленная на
                    изменение финансового статуса или инвестиции в новые проекты, сопряжена с
                    определенным уровнем риска. Перед принятием
                    любых важных стратегических решений мы настоятельно рекомендуем провести
                    собственное исследование и проконсультироваться с квалифицированным
                    независимым специалистом в соответствующей области.
                </p>

                <p data-aos="fade-up" data-aos-delay="300">
                    <strong class="text-accent">Подтверждение пользователя:</strong> Продолжая использовать
                    сайт <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                    действуете по собственной воле, полностью осознаете и принимаете все
                    упомянутые риски и условия данного отказа от ответственности.
                </p>

                <div class="legal-footer-box" data-aos="fade-up">
                    <p style="font-size: 0.9rem; margin-bottom: 0; opacity: 0.8;">
                        <i class="fa-solid fa-clock-rotate-left" style="color: var(--accent); margin-right: 8px;"></i>
                        Последнее обновление: Февраль 2026
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__dot"></span>
                    <?= $domainTitle ?>
                </a>
                <p class="footer__desc">Технологии нового поколения для трансформации вашего бизнеса и личного роста в
                    условиях европейского рынка.</p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#insights">Инсайты</a></li>
                    <li><a href="./#strategies">Стратегии</a></li>
                    <li><a href="./#expertise">Экспертиза</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact">
                    <li><i class="fa-solid fa-phone"></i> <a href="tel:+493092215086">+493092215086</a></li>
                    <li><i class="fa-solid fa-envelope"></i> <a href="mailto:hello@<?= $fullDomain ?>">hello@
                            <?= $fullDomain ?>
                        </a></li>
                    <li><i class="fa-solid fa-location-dot"></i> Kurfürstendamm 214, 10719 Berlin, Germany</li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026
                <?= $domainTitle ?>. Все права защищены. Платформа уже доступна в Европе.
            </p>
        </div>
    </footer>
<div id="cookie-popup" class="cookie-popup">
    <div class="cookie-popup__content">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.</p>
        <button id="cookie-accept" class="btn btn--primary">Принять</button>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
</body>

</html>