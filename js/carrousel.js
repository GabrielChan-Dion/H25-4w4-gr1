(function () {
    let hero__radio__input = document.querySelectorAll(".hero__radio__input");
    console.log("hero__radio__input.length = ", hero__radio__input.length)
    let hero__carrousels = document.querySelectorAll(".hero__carrousel");

    hero__radio__input.forEach(elm=>{
        console.log("elm.id_carrousel = ",elm.dataset.id_carrousel)
    })

    hero__radio__input.forEach(elm => {
        elm.addEventListener('change', () => {
            if (elm.checked) {
                const index = elm.dataset.id_carrousel;

                hero__carrousels.forEach(carrousel => {
                    carrousel.classList.remove("hero__carrousel--active");
                });

                const target = hero__carrousels[index];
                if (target) {
                    target.classList.add("hero__carrousel--active");
                }
            }
        });
    });
    document.querySelector(".hero__radio__input:checked")?.dispatchEvent(new Event("change"));
})();