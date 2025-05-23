(function(){

    let categoryId = 3; 
    const domaine = document.querySelector('base').getAttribute('href')
    
    let paysParDefaut = "France";
    mon_fetch(paysParDefaut, "search");

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

    const boutonPays = document.getElementById("bouton-pays");
    const menuCategorie = document.querySelector(".categorie__ul");

    if (boutonPays) {
        boutonPays.addEventListener("click", function () {
            menuCategorie.innerHTML = "";
            listePays.forEach(nomPays => {
                const element = document.createElement("li");
                element.textContent = nomPays;
                element.classList.add("categorie__ul__li");
                element.dataset.nom = nomPays;
                element.addEventListener("click", () => {
                    mon_fetch(nomPays, "search"); à
                });
                menuCategorie.appendChild(element);
            });
        });
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

                    articleElement.innerHTML = `
                        <div class="accordeon-item">
                            <button class="accordeon-titre">${article.title.rendered}</button>
                            <div class="accordeon-contenu" style="display:none;">
                                <p>${article.excerpt.rendered}</p>
                                <a href="${article.link}" target="_blank">Lire plus</a>
                            </div>
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