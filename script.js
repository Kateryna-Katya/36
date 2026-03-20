/**
 * Project: eleven-one (Consulting Blog)
 * Language: Russian / Target: Germany
 * Version: 1.4.0 (3D Depth & Neural Edition)
 */

document.addEventListener('DOMContentLoaded', () => {

    // --- 1. ПРОВЕРКА БИБЛИОТЕК ---
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            disable: 'mobile'
        });
    }

    // --- 2. HERO: ГЛУБИННАЯ GSAP АНИМАЦИЯ (Z-Axis Load) ---
    if (typeof gsap !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        const heroTl = gsap.timeline({
            defaults: { ease: "power4.out" }
        });

        // Каскадное появление элементов из глубины
        heroTl.fromTo(".depth-load", 
            {
                opacity: 0,
                z: -800,           // Уводим далеко вглубь
                rotationX: 25,     // Наклон для усиления перспективы
                scale: 0.7
            }, 
            {
                duration: 2,
                opacity: 1,
                z: 0,
                rotationX: 0,
                scale: 1,
                stagger: 0.2,      // Задержка между элементами
                delay: 0.5,
                clearProps: "transform" // Очистка для мобильной отзывчивости
            }
        );

        // Легкое "парение" контента после загрузки
        gsap.to(".hero__content", {
            y: "-=10",
            duration: 2.5,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
    }

    // --- 3. HERO: НЕЙРОННАЯ СЕТЬ (CANVAS) ---
    const canvas = document.getElementById('hero-canvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let particles = [];
        const particleCount = window.innerWidth < 768 ? 35 : 75;
        const connectionDistance = 160;

        class Particle {
            constructor() {
                this.init();
            }
            init() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2 + 0.5;
                this.speedX = Math.random() * 0.6 - 0.3;
                this.speedY = Math.random() * 0.6 - 0.3;
            }
            update() {
                this.x += this.speedX;
                this.y += this.speedY;
                if (this.x > canvas.width) this.x = 0; else if (this.x < 0) this.x = canvas.width;
                if (this.y > canvas.height) this.y = 0; else if (this.y < 0) this.y = canvas.height;
            }
            draw() {
                ctx.fillStyle = 'rgba(207, 255, 4, 0.6)';
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        const setupCanvas = () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            particles = Array.from({ length: particleCount }, () => new Particle());
        };

        const animate = () => {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach((p, i) => {
                p.update();
                p.draw();
                for (let j = i; j < particles.length; j++) {
                    const dx = p.x - particles[j].x;
                    const dy = p.y - particles[j].y;
                    const dist = Math.sqrt(dx*dx + dy*dy);
                    if (dist < connectionDistance) {
                        ctx.strokeStyle = `rgba(207, 255, 4, ${0.15 * (1 - dist / connectionDistance)})`;
                        ctx.lineWidth = 0.8;
                        ctx.beginPath(); ctx.moveTo(p.x, p.y); ctx.lineTo(particles[j].x, particles[j].y); ctx.stroke();
                    }
                }
            });
            requestAnimationFrame(animate);
        };

        window.addEventListener('resize', setupCanvas);
        setupCanvas();
        animate();
    }

    // --- 4. BENTO GRID: ИНТЕРАКТИВНОЕ СВЕЧЕНИЕ ---
    document.querySelectorAll('.bento-item').forEach(item => {
        item.addEventListener('mousemove', (e) => {
            const rect = item.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            item.style.background = `radial-gradient(circle at ${x}px ${y}px, rgba(207, 255, 4, 0.12) 0%, rgba(26, 29, 35, 1) 70%)`;
            item.style.borderColor = "rgba(207, 255, 4, 0.3)";
        });
        item.addEventListener('mouseleave', () => {
            item.style.background = 'var(--bg-card)';
            item.style.borderColor = 'rgba(255, 255, 255, 0.05)';
        });
    });

    // --- 5. HEADER & NAVIGATION ---
    const header = document.getElementById('header');
    const burger = document.getElementById('burger');
    const nav = document.getElementById('nav');

    window.addEventListener('scroll', () => {
        header?.classList.toggle('scrolled', window.scrollY > 50);
    });

    const toggleMenu = () => {
        burger?.classList.toggle('active');
        nav?.classList.toggle('active');
        document.body.style.overflow = nav?.classList.contains('active') ? 'hidden' : '';
    };

    burger?.addEventListener('click', toggleMenu);
    document.querySelectorAll('.nav__link').forEach(link => {
        link.addEventListener('click', () => { if(nav?.classList.contains('active')) toggleMenu(); });
    });

    // --- 6. ФОРМА И КАПЧА ---
    const contactForm = document.getElementById('ajax-form');
    if (contactForm) {
        const n1 = Math.floor(Math.random() * 10) + 3;
        const n2 = Math.floor(Math.random() * 9) + 1;
        const sum = n1 + n2;
        const qEl = document.getElementById('captcha-question');
        if (qEl) qEl.textContent = `${n1} + ${n2}`;

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const ans = parseInt(document.getElementById('captcha-answer').value);
            const phone = document.getElementById('phone').value;
            const btn = contactForm.querySelector('button');

            if (!/^[0-9+]+$/.test(phone)) return alert('Только цифры в поле телефона');
            if (ans !== sum) return alert('Неверная капча');

            btn.disabled = true;
            btn.textContent = 'Отправка...';
            setTimeout(() => {
                contactForm.reset();
                btn.style.display = 'none';
                document.getElementById('form-success').style.display = 'block';
            }, 1500);
        });
    }

    // --- 7. COOKIE POPUP ---
    const cookiePopup = document.getElementById('cookie-popup');
    if (cookiePopup && !localStorage.getItem('cookies-accepted')) {
        setTimeout(() => cookiePopup.classList.add('active'), 2500);
    }
    document.getElementById('cookie-accept')?.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        cookiePopup.classList.remove('active');
    });

    // --- 8. ПЛАВНЫЙ ЯКОРНЫЙ СКРОЛЛ ---
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });
            }
        });
    });
});