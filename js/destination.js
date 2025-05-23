(function(){

    let categoryId = 3; 
    const domaine = document.querySelector('base').getAttribute('href')
    
    //Afficher la france comme défaut
    const paysParDefaut = "France";
    chargerArticles(paysParDefaut, "search");

    mon_fetch(categoryId)
    const categorie__ul__li = document.querySelectorAll(".categorie__ul__li")

    categorie__ul__li.forEach(li => {
        li.addEventListener("mousedown",function(){
            console.log(li.dataset.id) 
            categoryId = li.dataset.id
            mon_fetch(categoryId, "categories");
        })
    })

     const listePays = [ //Tableau des pays
        "France", "États-Unis", "Canada", "Argentine", "Chili",
        "Belgique", "Maroc", "Mexique", "Japon", "Italie",
        "Islande", "Chine", "Grèce", "Suisse"
    ];

    const menuPays = document.querySelector(".categorie__ul");
    const menuCategorie = document.querySelector(".categorie__ul");

    for (const pays of listePays) {
        const li = document.createElement("li");
        li.classList.add("categorie__ul__li");
        li.textContent = pays;
        li.dataset.nom = pays;
        li.addEventListener("click", () => {
            chargerArticles(pays, "search");
        });
        menuPays.appendChild(li);
    }
    
        function mon_fetch(valeur, type) {
        let apiUrl = "";

        if (type === "categories") {
            apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${valeur}`;
        } else {
            apiUrl = `${domaine}/wp-json/wp/v2/posts?search=${encodeURIComponent(valeur)}`;
        }

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = "";

                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.classList.add("accordeon-item");
                    articleElement.innerHTML = `
                         <button class="accordeon-titre">${article.title.rendered}</button>
                        <div class="accordeon-contenu" style="display: none;">
                            <p>${article.excerpt.rendered}</p>
                            <a href="${article.link}" target="_blank">Lire plus</a>
                        </div>
                    `;
                    destinationList.appendChild(articleElement);
                });

                activerAccordeon();
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }
function activerAccordeon() {
        const titres = document.querySelectorAll(".accordeon-titre");
        titres.forEach(titre => {
            titre.addEventListener("click", function () {
                const contenu = this.nextElementSibling;
                const estOuvert = contenu.style.display === "block";
                document.querySelectorAll(".accordeon-contenu").forEach(el => el.style.display = "none");
                contenu.style.display = estOuvert ? "none" : "block";
            });
        });
    }

})()
