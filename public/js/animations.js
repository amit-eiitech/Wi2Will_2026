// Register GSAP ScrollTrigger plugin
gsap.registerPlugin(ScrollTrigger);

// ==========================================
// REUSABLE - Letter-by-letter reveal
// ==========================================

function animateLetterReveal() {
    const headings = document.querySelectorAll(".letter-reveal");

    headings.forEach((heading) => {
        // Get all text nodes and preserve existing HTML styling
        const walker = document.createTreeWalker(heading, NodeFilter.SHOW_TEXT);

        const textNodes = [];

        while (walker.nextNode()) {
            textNodes.push(walker.currentNode);
        }

        const letters = [];

        textNodes.forEach((textNode) => {
            const text = textNode.textContent;
            const fragment = document.createDocumentFragment();

            [...text].forEach((char) => {
                const span = document.createElement("span");

                span.textContent = char === " " ? "\u00A0" : char;
                span.style.display = "inline-block";

                fragment.appendChild(span);
                letters.push(span);
            });

            textNode.parentNode.replaceChild(fragment, textNode);
        });

        // Initial state
        gsap.set(letters, {
            opacity: 0,
            y: 30,
        });

        // Scroll-triggered animation
        gsap.to(letters, {
            scrollTrigger: {
                trigger: heading,
                start: "top 80%",
                toggleActions: "play none none reverse",
                // toggleActions: "play none none none",
            },
            opacity: 1,
            y: 0,
            duration: 0.5,
            stagger: 0.05,
            ease: "power3.out",
        });
    });
}

function animateRevealText() {
    const elements = gsap.utils.toArray(".reveal-up");

    if (!elements.length) return;

    gsap.set(elements, {
        opacity: 0,
        y: 28,
    });

    elements.forEach((element) => {
        gsap.to(element, {
            scrollTrigger: {
                trigger: element,
                start: "top 88%",
                toggleActions: "play none none reverse",
            },
            opacity: 1,
            y: 0,
            duration: 0.8,
            ease: "power3.out",
        });
    });
}

function animateConceptGridItems() {
    const grid = document.querySelector(".concept-points-grid");

    if (!grid) return;

    const items = gsap.utils.toArray(
        ".concept-points-grid > .concept-point-item",
    );

    if (!items.length) return;

    gsap.set(items, {
        opacity: 0,
        y: 36,
    });

    gsap.to(items, {
        scrollTrigger: {
            trigger: grid,
            start: "top 78%",
            toggleActions: "play none none reverse",
        },
        opacity: 1,
        y: 0,
        duration: 0.75,
        stagger: 0.14,
        ease: "power3.out",
    });
}

// ==========================================
// CONCEPT - Marquee animations
// ==========================================

const marqueeDistance = 33.333;

gsap.fromTo(
    ".concept-marquee-top",
    { xPercent: -50 },
    {
        xPercent: -50 - marqueeDistance,
        duration: 18,
        ease: "none",
        repeat: -1,
    },
);

gsap.fromTo(
    ".concept-marquee-bottom",
    { xPercent: -50 - marqueeDistance },
    {
        xPercent: -50,
        duration: 20,
        ease: "none",
        repeat: -1,
    },
);

// ==========================================
// NAVBAR - Scroll effect
// ==========================================

const header = document.getElementById("site-header");

const handleScroll = () => {
    if (!header) return;

    if (window.scrollY > 40) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
};

// ==========================================
// ABOUT - Circular Rotating Text
// ==========================================

function animateAboutOrbit() {
    const orbit = document.querySelector(".about-orbit");

    if (!orbit) return;

    gsap.to(orbit, {
        rotation: 360,
        duration: 18,
        ease: "none",
        repeat: -1,
    });
}

function animateHeroArrows() {
    const hero = document.querySelector(".hero-section");
    const topArrow = hero?.querySelector(".hero-arrow-top");
    const bottomArrow = hero?.querySelector(".hero-arrow-bottom");

    if (!hero || !topArrow || !bottomArrow) return;

    // Top arrow - slightly longer movement
    gsap.fromTo(
        topArrow,
        {
            x: -200,
        },
        {
            x: 80,
            ease: "none",
            scrollTrigger: {
                trigger: hero,
                start: "top 85%",
                end: "bottom 15%",
                scrub: 1,
                invalidateOnRefresh: true,
            },
        },
    );

    // Bottom arrow - faster and longer movement
    gsap.fromTo(
        bottomArrow,
        {
            x: () => -window.innerWidth * 0.3,
        },
        {
            x: 700,
            ease: "none",
            scrollTrigger: {
                trigger: hero,
                start: "top 85%",
                end: "bottom 15%",
                scrub: 1,
                invalidateOnRefresh: true,
            },
        },
    );
}

function initBusinessMarquees() {
    const rows = gsap.utils.toArray(".business-row");

    const marquees = [];

    rows.forEach((row) => {
        const track = row.querySelector(".business-track");
        const originalContent = row.querySelector(".business-images");

        const template = originalContent.cloneNode(true);

        const direction = row.dataset.direction || "left";
        const duration = Number(row.dataset.speed) || 60;

        let tween;

        function createMarquee() {
            // Remove previous animation
            if (tween) {
                tween.kill();
            }

            // Reset original content
            const content = template.cloneNode(true);

            track.replaceChildren(content);

            // Make sure there are enough images to cover the viewport
            const originalImages = Array.from(content.children);

            while (content.scrollWidth < window.innerWidth * 1.5) {
                originalImages.forEach((img) => {
                    content.appendChild(img.cloneNode(true));
                });
            }

            // Duplicate the complete sequence
            const secondContent = content.cloneNode(true);

            secondContent.setAttribute("aria-hidden", "true");

            secondContent.querySelectorAll("img").forEach((img) => {
                img.alt = "";
            });

            track.appendChild(secondContent);

            // Calculate exact width of one sequence
            const distance = content.offsetWidth;

            // Animate seamlessly
            if (direction === "right") {
                tween = gsap.fromTo(
                    track,
                    {
                        x: -distance,
                    },
                    {
                        x: 0,
                        duration: duration,
                        ease: "none",
                        repeat: -1,
                    },
                );
            } else {
                tween = gsap.to(track, {
                    x: -distance,
                    duration: duration,
                    ease: "none",
                    repeat: -1,
                });
            }
        }

        marquees.push(createMarquee);

        // Rebuild after viewport changes
        row._rebuildMarquee = createMarquee;
    });

    // Initialize after images have loaded
    const images = Array.from(
        document.querySelectorAll(".business-images img"),
    );

    Promise.all(
        images.map((img) => {
            if (img.complete) {
                return Promise.resolve();
            }

            return new Promise((resolve) => {
                img.addEventListener("load", resolve, { once: true });
                img.addEventListener("error", resolve, { once: true });
            });
        }),
    ).then(() => {
        marquees.forEach((init) => init());
    });

    // Recalculate widths on resize
    let resizeTimer;

    window.addEventListener("resize", () => {
        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(() => {
            rows.forEach((row) => {
                row._rebuildMarquee();
            });
        }, 250);
    });
}

// ==========================================
// INITIALIZE - DOM Ready
// ==========================================

document.addEventListener("DOMContentLoaded", () => {
    // Initialize Lucide icons
    if (typeof lucide !== "undefined") {
        lucide.createIcons();
    }

    // Add navbar scroll listener
    window.addEventListener("scroll", handleScroll, {
        passive: true,
    });

    handleScroll();

    // Initialize About Us heading animation
    // Initialize About animations
    animateLetterReveal();
    animateRevealText();
    animateConceptGridItems();
    animateAboutOrbit();
    animateHeroArrows();
    initBusinessMarquees();
});
