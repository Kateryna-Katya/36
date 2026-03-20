document.addEventListener('DOMContentLoaded', () => {
    // --- 1. AOS ---
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 900,
            once: true,
            offset: 80,
            disable: 'mobile'
        });
    }

    // --- 2. HERO GSAP: ПЛАВНОЕ PREMIUM-ПОЯВЛЕНИЕ ---
    if (typeof gsap !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        const hero = document.querySelector('.hero');
        const heroBadge = document.querySelector('.hero__badge');
        const heroTitle = document.querySelector('.hero__title');
        const heroText = document.querySelector('.hero__text');
        const heroBtns = document.querySelector('.hero__btns');
        const heroContent = document.querySelector('.hero__content');

        if (hero && heroContent) {
            const heroTl = gsap.timeline({
                defaults: {
                    ease: 'power3.out'
                }
            });

            heroTl
                .fromTo(heroBadge,
                    {
                        opacity: 0,
                        y: 24,
                        filter: 'blur(8px)'
                    },
                    {
                        opacity: 1,
                        y: 0,
                        filter: 'blur(0px)',
                        duration: 0.8
                    }
                )
                .fromTo(heroTitle,
                    {
                        opacity: 0,
                        y: 36,
                        filter: 'blur(12px)'
                    },
                    {
                        opacity: 1,
                        y: 0,
                        filter: 'blur(0px)',
                        duration: 1
                    },
                    '-=0.45'
                )
                .fromTo(heroText,
                    {
                        opacity: 0,
                        y: 28,
                        filter: 'blur(10px)'
                    },
                    {
                        opacity: 1,
                        y: 0,
                        filter: 'blur(0px)',
                        duration: 0.9
                    },
                    '-=0.55'
                )
                .fromTo(heroBtns,
                    {
                        opacity: 0,
                        y: 20
                    },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.7
                    },
                    '-=0.45'
                );

            // Лёгкий параллакс контента по мышке
            let mouseX = 0;
            let mouseY = 0;
            let currentX = 0;
            let currentY = 0;
            let rafId = null;

            const animateParallax = () => {
                currentX += (mouseX - currentX) * 0.08;
                currentY += (mouseY - currentY) * 0.08;

                gsap.set(heroContent, {
                    x: currentX,
                    y: currentY
                });

                rafId = requestAnimationFrame(animateParallax);
            };

            const handleMouseMove = (e) => {
                const rect = hero.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                mouseX = ((x / rect.width) - 0.5) * 18;
                mouseY = ((y / rect.height) - 0.5) * 18;
            };

            const resetMouse = () => {
                mouseX = 0;
                mouseY = 0;
            };

            hero.addEventListener('mousemove', handleMouseMove);
            hero.addEventListener('mouseleave', resetMouse);

            animateParallax();

            // Плавный скролл-параллакс
            gsap.to(heroContent, {
                yPercent: 8,
                ease: 'none',
                scrollTrigger: {
                    trigger: hero,
                    start: 'top top',
                    end: 'bottom top',
                    scrub: 1.2
                }
            });
        }
    }

    // --- 3. HERO CANVAS: БОЛЕЕ ЛЁГКАЯ И ДОРОГАЯ АНИМАЦИЯ ---
    const canvas = document.getElementById('hero-canvas');

    if (canvas) {
        const ctx = canvas.getContext('2d');
        let particles = [];
        let animationFrameId = null;
        let isHeroVisible = true;

        const heroSection = document.querySelector('.hero');
        const isMobile = window.innerWidth < 768;
        let particleCount = isMobile ? 26 : 46;
        let connectionDistance = isMobile ? 100 : 140;
        let dpr = Math.min(window.devicePixelRatio || 1, 1.5);

        class Particle {
            constructor() {
                this.reset();
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
            }

            reset() {
                this.size = Math.random() * 1.8 + 0.6;
                this.speedX = (Math.random() - 0.5) * 0.22;
                this.speedY = (Math.random() - 0.5) * 0.22;
            }

            update() {
                this.x += this.speedX;
                this.y += this.speedY;

                if (this.x < 0) this.x = canvas.width;
                if (this.x > canvas.width) this.x = 0;
                if (this.y < 0) this.y = canvas.height;
                if (this.y > canvas.height) this.y = 0;
            }

            draw() {
                ctx.beginPath();
                ctx.fillStyle = 'rgba(207, 255, 4, 0.45)';
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        const resizeCanvas = () => {
            const rect = heroSection.getBoundingClientRect();
            dpr = Math.min(window.devicePixelRatio || 1, 1.5);

            canvas.width = rect.width * dpr;
            canvas.height = rect.height * dpr;
            canvas.style.width = `${rect.width}px`;
            canvas.style.height = `${rect.height}px`;

            ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

            particleCount = window.innerWidth < 768 ? 26 : 46;
            connectionDistance = window.innerWidth < 768 ? 100 : 140;

            particles = Array.from({ length: particleCount }, () => new Particle());
        };

        const drawConnections = () => {
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);

                    if (dist < connectionDistance) {
                        const opacity = 0.1 * (1 - dist / connectionDistance);
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(207, 255, 4, ${opacity})`;
                        ctx.lineWidth = 0.7;
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();
                    }
                }
            }
        };

        const render = () => {
            if (!isHeroVisible) return;

            ctx.clearRect(0, 0, canvas.width, canvas.height);

            for (const particle of particles) {
                particle.update();
                particle.draw();
            }

            drawConnections();
            animationFrameId = requestAnimationFrame(render);
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                isHeroVisible = entry.isIntersecting;

                if (isHeroVisible && !animationFrameId) {
                    render();
                }

                if (!isHeroVisible && animationFrameId) {
                    cancelAnimationFrame(animationFrameId);
                    animationFrameId = null;
                }
            });
        }, { threshold: 0.1 });

        if (heroSection) {
            observer.observe(heroSection);
        }

        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                resizeCanvas();
                if (isHeroVisible && !animationFrameId) {
                    render();
                }
            }, 150);
        });

        resizeCanvas();
        render();
    }

    // --- 4. BENTO GRID: ИНТЕРАКТИВНОЕ СВЕЧЕНИЕ ---
    document.querySelectorAll('.bento-item').forEach(item => {
        item.addEventListener('mousemove', (e) => {
            const rect = item.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            item.style.background = `radial-gradient(circle at ${x}px ${y}px, rgba(207, 255, 4, 0.12) 0%, rgba(26, 29, 35, 1) 70%)`;
            item.style.borderColor = 'rgba(207, 255, 4, 0.3)';
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
        link.addEventListener('click', () => {
            if (nav?.classList.contains('active')) toggleMenu();
        });
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
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));

            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
});