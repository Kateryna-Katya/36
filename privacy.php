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
            <span class="insight-tag" data-aos="fade-up">Конфиденциальность</span>
            <h1 data-aos="fade-up">Политика конфиденциальности</h1>

            <div class="legal-content">
                <p data-aos="fade-up" data-aos-delay="100">
                    Политика конфиденциальности распространяется на персональные данные,
                    предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания различного рода
                    услуг по консалтингу, так и для других взаимодействий в электронном
                    формате, а также при участии клиентов в экспертных программах и акциях, оказывая
                    техническую поддержку и информационное сопровождение.
                </p>

                <p data-aos="fade-up" data-aos-delay="150">
                    <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                    в действующие положения Политики конфиденциальности. Предоставляя свои данные, вы даете полное согласие
                    на их обработку способами, предусмотренными настоящей Политикой в рамках правового поля Германии и ЕС.
                </p>

                <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения данных</h2>
                <p data-aos="fade-up">
                    <strong><?= $domainTitle ?></strong> собирает персональные данные только с согласия
                    пользователя и исключительно для предоставления качественных услуг: доступа к платформе,
                    участия в стратегических сессиях и внедрения инноваций. Максимальный срок хранения персональных данных составляет <span class="text-accent">75 лет</span>.
                </p>

                <h2 data-aos="fade-up">Техническая информация</h2>
                <ul class="legal-list" data-aos="fade-up">
                    <li>Время доступа и IP-адрес;</li>
                    <li>Источники обращения на интернет-ресурс <span class="text-accent"><?= $fullDomain ?></span>;</li>
                    <li>Интернет-страницы, посещаемые пользователем;</li>
                    <li>Иная техническая информация, предоставляемая браузером;</li>
                    <li>Номер телефона (в случае звонка по контактам, указанным на сайте).</li>
                </ul>

                <h2 data-aos="fade-up">Информация о действиях пользователя</h2>
                <ul class="legal-list" data-aos="fade-up">
                    <li>Информация о соглашениях и контрактах между клиентом и <strong><?= $domainTitle ?></strong>;</li>
                    <li>Данные о запросах, отправленных через формы на сайте;</li>
                    <li>Сведения о полученных консультациях и пройденных программах;</li>
                    <li>Произведенные платежи и иная финансовая информация, предусмотренная законодательством.</li>
                </ul>

                <h2 data-aos="fade-up">Цели обработки данных</h2>
                <ul class="legal-list" data-aos="fade-up">
                    <li>Предоставление консалтинговых услуг и доступа к аналитической платформе;</li>
                    <li>Учет пожеланий при разработке новых технологических решений;</li>
                    <li>Информирование об акциях и новых материалах в блоге через e-mail;</li>
                    <li>Обеспечение качественной экспертной поддержки.</li>
                </ul>

                <div class="legal-footer-box" data-aos="fade-up">
                    <h2>Права пользователя (GDPR)</h2>
                    <p>
                        Если вы хотите отредактировать свои данные или полностью прекратить их обработку в соответствии с нормами GDPR, 
                        пожалуйста, свяжитесь с командой <strong><?= $domainTitle ?></strong> по официальному адресу:
                    </p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="contact-link">
                        <i class="fa-solid fa-envelope"></i> hello@<?= $fullDomain ?>
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