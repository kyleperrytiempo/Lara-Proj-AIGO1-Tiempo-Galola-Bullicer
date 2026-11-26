document.addEventListener("DOMContentLoaded", () => {

    const revealItems = document.querySelectorAll(".reveal");

    document.querySelectorAll(".image-Item").forEach((card, index) => {
        card.classList.add("reveal");
        card.style.setProperty("--reveal-delay", `${index * 120}ms`);
    });

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll(".reveal").forEach((item) => {
        revealObserver.observe(item);
    });

    document.querySelectorAll(".read-more-btn").forEach((btn) => {
        btn.addEventListener("click", () => {
            const bio = document.getElementById(btn.dataset.target);
            const isHidden = bio.hasAttribute("hidden");
            if (isHidden) {
                bio.removeAttribute("hidden");
                btn.textContent = btn.textContent.replace("More About", "Less About");
            } else {
                bio.setAttribute("hidden", "");
                btn.textContent = btn.textContent.replace("Less About", "More About");
            }
        });
    });

    const counters = document.querySelectorAll(".fact-number");
    let counted = false;

    function animateCounters() {
        counters.forEach((counter) => {
            const target = +counter.dataset.target;
            const duration = 1500;
            const start = performance.now();

            function update(now) {
                const progress = Math.min((now - start) / duration, 1);
                counter.textContent = Math.floor(progress * target).toLocaleString();
                if (progress < 1) requestAnimationFrame(update);
                else counter.textContent = target.toLocaleString();
            }
            requestAnimationFrame(update);
        });
    }

    const factsSection = document.getElementById("shop-facts");
    window.addEventListener("scroll", function onScroll() {
        if (!counted && factsSection.getBoundingClientRect().top < window.innerHeight) {
            counted = true;
            animateCounters();
            window.removeEventListener("scroll", onScroll);
        }
    });
});