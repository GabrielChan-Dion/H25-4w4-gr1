(function () {
    let hero__radio__input = document.querySelectorAll(".hero__radio__input");
    let hero__carrousels = document.querySelectorAll(".hero__carrousel");
    const hero__contenu_anim = document.querySelector(".hero__contenu__anim");



    hero__radio__input.forEach(elm => {
        elm.addEventListener('change', () => {
            if (elm.checked) {
                const index = parseInt(elm.dataset.id_carrousel);

                hero__carrousels.forEach(carrousel => {
                    carrousel.classList.remove("hero__carrousel--active");
                });
                const target = hero__carrousels[index];
                if (target) {
                    target.classList.add("hero__carrousel--active");
                }
                
                if (hero__contenu_anim) {
                    hero__contenu_anim.classList.remove("animate");
                    void hero__contenu_anim.offsetWidth; // Force reflow
                    hero__contenu_anim.classList.add("animate");
                }
            }
        });
    });
    (function () {
        const hero__radio__input = document.querySelectorAll(".hero__radio__input");
        let currentIndex = Array.from(hero__radio__input).findIndex(input => input.checked);
    
        setInterval(() => {
            currentIndex = (currentIndex + 1) % hero__radio__input.length;
            hero__radio__input[currentIndex].checked = true;
            hero__radio__input[currentIndex].dispatchEvent(new Event("change"));
        }, 5000);
    })();
    document.querySelector(".hero__radio__input:checked")?.dispatchEvent(new Event("change"));
})();