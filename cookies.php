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
            <span class="insight-tag" data-aos="fade-up">Прозрачность и данные</span>
            <h1 data-aos="fade-up">Политика использования файлов cookie</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                взаимодействия с нашим сайтом, обеспечить его корректную работу и
                анализировать активность пользователей, мы используем файлы cookie и
                схожие технологии. Настоящая политика подробно объясняет, какие
                именно технологии мы применяем, для каких целей, и как вы можете ими
                управлять.
            </p>

            <div class="legal-content" data-aos="fade-up" data-aos-delay="200">
                <h2>Что такое файлы cookie?</h2>
                <p>
                    Файл cookie — это небольшой фрагмент данных (текстовый файл),
                    который веб-сайт сохраняет на вашем устройстве (компьютере, планшете
                    или смартфоне), когда вы его посещаете. Это позволяет платформе 
                    <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                    (например, логин, язык, настройки региона Германия и другие параметры) 
                    в течение определенного времени, чтобы вам не приходилось вводить их 
                    повторно при каждом визите.
                </p>

                <h2>Какие типы файлов cookie мы используем?</h2>
                <p>
                    Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                    следующим категориям:
                </p>
                <ul class="legal-list">
                    <li>
                        <strong>Строго необходимые файлы cookie:</strong> Эти файлы
                        критически важны для функционирования сайта. Они позволяют вам
                        перемещаться по страницам <strong><?= $domainTitle ?></strong> и использовать его базовые возможности. 
                    </li>
                    <li>
                        <strong>Аналитические и производительные файлы cookie:</strong>
                        Эти файлы собирают анонимную информацию о том, как посетители
                        используют наш сайт, помогая нам улучшать контент нашего блога.
                    </li>
                    <li>
                        <strong>Функциональные файлы cookie:</strong> Эти файлы позволяют
                        сайту запоминать ваш выбор для предоставления более
                        персонализированного опыта в рамках консалтинговых услуг.
                    </li>
                    <li>
                        <strong>Рекламные (маркетинговые) файлы cookie:</strong> Эти файлы
                        используются для доставки объявлений, соответствующих вашим интересам.
                    </li>
                </ul>

                <h2>Зачем мы используем файлы cookie?</h2>
                <p>Основные цели использования файлов cookie на сайте <strong><?= $domainTitle ?></strong>:</p>
                <ul class="legal-list">
                    <li>Обеспечение стабильной и безопасной работы сайта.</li>
                    <li>Анализ пользовательского поведения для оптимизации структуры сайта.</li>
                    <li>Персонализация контента и настроек для удобства пользователей в Европе.</li>
                    <li>Предоставление релевантных маркетинговых и рекламных материалов.</li>
                </ul>

                <h2>Ваш выбор и управление cookie</h2>
                <p>
                    Вы имеете полный контроль над файлами cookie. Вы можете в любой
                    момент изменить свои настройки в браузере. Однако, обратите
                    внимание: отключение строго необходимых cookie может привести к
                    некорректной работе некоторых функций нашего сайта.
                </p>

                <h2>Файлы cookie третьих сторон</h2>
                <p>
                    На некоторых страницах <strong><?= $domainTitle ?></strong> мы можем использовать сервисы
                    сторонних компаний, например, Google Analytics или библиотеки визуализаций. 
                    Мы рекомендуем вам ознакомиться с их политиками конфиденциальности.
                </p>

                <div class="legal-footer-box">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики
                        использования файлов cookie на <strong><?= $domainTitle ?></strong>, пожалуйста, свяжитесь с нами:
                    </p>
                    <ul class="contact-mini-list">
                        <li><i class="fa-solid fa-envelope"></i> Email: <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                        <li><i class="fa-solid fa-phone"></i> Телефон: <a href="tel:+493092215086">+49 30 92215086</a></li>
                        <li><i class="fa-solid fa-location-dot"></i> Адрес: Kurfürstendamm 214, 10719 Berlin, Germany</li>
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