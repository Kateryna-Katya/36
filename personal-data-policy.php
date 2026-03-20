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
            <span class="insight-tag" data-aos="fade-up">Безопасность и GDPR</span>
            <h1 data-aos="fade-up">Политика обработки персональных данных</h1>

            <div class="legal-content">
                <section data-aos="fade-up" data-aos-delay="100">
                    <h2>1. Общие положения</h2>
                    <p>
                        Настоящая политика обработки персональных данных (далее —
                        «Политика») определяет порядок и условия обработки персональных
                        данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                        устанавливает меры по обеспечению безопасности этих данных.
                    </p>
                    <p>
                        1.1. Важнейшей целью и условием осуществления своей деятельности
                        Оператор считает соблюдение прав и свобод человека и гражданина при
                        обработке его персональных данных, в том числе защиты прав на
                        неприкосновенность частной жизни, личную и семейную тайну.
                    </p>
                    <p>
                        1.2. Настоящая Политика применяется ко всей информации, которую
                        Оператор может получить о посетителях (далее — «Пользователи»)
                        веб-сайта <strong><?= $fullDomain ?></strong>.
                    </p>
                </section>

                <section data-aos="fade-up" data-aos-delay="150">
                    <h2>2. Основные понятия</h2>
                    <ul class="legal-list">
                        <li>
                            <strong>Веб-сайт</strong> — совокупность графических и
                            информационных материалов, обеспечивающих доступность в сети интернет по адресу
                            <span class="text-accent"><?= $fullDomain ?></span>.
                        </li>
                        <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                        <li>
                            <strong>Персональные данные</strong> — любая информация,
                            относящаяся прямо или косвенно к Пользователю.
                        </li>
                        <li>
                            <strong>Безопасность данных</strong> — защищенность
                            персональных данных от неправомерного доступа, уничтожения или изменения.
                        </li>
                    </ul>
                </section>

                <section data-aos="fade-up" data-aos-delay="200">
                    <h2>3. Данные, которые мы обрабатываем</h2>
                    <p>Оператор может обрабатывать следующие категории данных:</p>
                    <ul class="legal-list">
                        <li>
                            <strong>Предоставляемые Пользователем:</strong>
                            Ф.И.О., Email, а также номера телефонов (валидация по стандартам Германии и ЕС).
                        </li>
                        <li>
                            <strong>Собираемые автоматически:</strong>
                            Обезличенные данные о посетителях (файлы «cookie») с помощью сервисов
                            Google Аналитика для улучшения качества консалтинг-блога.
                        </li>
                    </ul>
                </section>

                <section data-aos="fade-up" data-aos-delay="250">
                    <h2>4. Цели обработки</h2>
                    <p>Основные цели платформы <strong><?= $domainTitle ?></strong>:</p>
                    <ul class="legal-list">
                        <li>Идентификация Пользователя для доступа к экспертным материалам.</li>
                        <li>Обеспечение обратной связи и экспертная поддержка на всех этапах.</li>
                        <li>Информирование о новых стратегиях роста и AI-инструментах.</li>
                    </ul>
                </section>

                <section data-aos="fade-up" data-aos-delay="300">
                    <h2>5. Правовые основания</h2>
                    <p>
                        Оператор обрабатывает данные только при наличии добровольного согласия Пользователя, 
                        выраженного путем заполнения форм на сайте <strong><?= $domainTitle ?></strong>, 
                        а также при условии, что сохранение файлов «cookie» разрешено в браузере.
                    </p>
                </section>

                <div class="legal-footer-box" data-aos="fade-up">
                    <h2>Отзыв согласия</h2>
                    <p>
                        Пользователь может в любой момент отозвать свое согласие, направив 
                        Оператору уведомление на электронную почту:
                    </p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="btn btn--secondary" style="margin-top: 15px;">
                        hello@<?= $fullDomain ?>
                    </a>
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