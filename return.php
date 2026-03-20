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
            <span class="insight-tag" data-aos="fade-up">Гарантии и сервис</span>
            <h1 data-aos="fade-up">Политика возврата средств</h1>

            <div class="legal-content">
                <section data-aos="fade-up" data-aos-delay="100">
                    <h2>Условия для оформления возврата</h2>
                    <p>
                        Вы можете претендовать на полный или частичный возврат средств в
                        следующих ситуациях:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <strong>Несоответствие программы описанию:</strong> Если содержание
                            предоставленной консультации существенно отличается от программы,
                            заявленной на сайте <strong><?= $domainTitle ?></strong>.
                        </li>
                        <li>
                            <strong>Технические неисправности:</strong> При возникновении критических 
                            проблем на платформе <span class="text-accent"><?= $fullDomain ?></span>, которые делают доступ к сессиям 
                            невозможным и не были устранены в разумные сроки.
                        </li>
                        <li>
                            <strong>Период охлаждения:</strong> Если вы решили отказаться от участия 
                            в течение 14 календарных дней с момента оплаты, при условии отсутствия 
                            доступа к полному объему материалов.
                        </li>
                    </ul>
                </section>

                <section data-aos="fade-up" data-aos-delay="150">
                    <h2>Процедура запроса на возврат</h2>
                    <p>
                        Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, 
                        пожалуйста, выполните следующие шаги:
                    </p>
                    <ol class="legal-ordered-list">
                        <li>
                            Составьте письмо на наш официальный email:
                            <a href="mailto:hello@<?= $fullDomain ?>" class="text-accent">hello@<?= $fullDomain ?></a>.
                        </li>
                        <li>В теме письма укажите: «Запрос на возврат средств».</li>
                        <li>Предоставьте данные: имя, фамилию и email, использованный при регистрации.</li>
                        <li>Подробно опишите причину запроса со ссылкой на условия политики.</li>
                        <li>Служба поддержки свяжется с вами в течение 3-х рабочих дней.</li>
                    </ol>
                </section>

                <section data-aos="fade-up" data-aos-delay="200">
                    <h2>Сроки и способ возврата</h2>
                    <p>
                        После одобрения запроса, возврат будет произведен в течение 
                        <span class="text-accent">7–14 рабочих дней</span> тем же способом, которым была совершена оплата. 
                        Фактический срок зачисления зависит от регламента вашего банка в <strong>Германии</strong> или стране пребывания.
                    </p>
                </section>

                <section data-aos="fade-up" data-aos-delay="250">
                    <h2>Исключения и ограничения</h2>
                    <p>Возврат средств не осуществляется, если:</p>
                    <ul class="legal-list">
                        <li>Запрос подан по истечении 14 календарных дней с момента оплаты.</li>
                        <li>Вы уже изучили или скачали более 50% материалов программы.</li>
                        <li>Причиной являются технические проблемы на стороне пользователя.</li>
                        <li>Нарушены условия Пользовательского соглашения <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </section>

                <div class="legal-footer-box" data-aos="fade-up">
                    <h2>Свяжитесь с нами</h2>
                    <p>По всем вопросам условий консультаций обращайтесь в службу поддержки:</p>
                    <ul class="contact-mini-list">
                        <li><i class="fa-solid fa-envelope"></i> Email: <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                        <li><i class="fa-solid fa-phone"></i> Телефон: <a href="tel:+493092215086">+49 30 92215086</a></li>
                    </ul>
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