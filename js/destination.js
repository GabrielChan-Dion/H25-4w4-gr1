(function(){

    let categoryId = 3; 
    const domaine = document.querySelector('base').getAttribute('href')
    const boutonPays = document.getElementById("bouton-pays");
    const listePays = [ //Tableau des pays
        "France", "États-Unis", "Canada", "Argentine", "Chili",
        "Belgique", "Maroc", "Mexique", "Japon", "Italie",
        "Islande", "Chine", "Grèce", "Suisse"
    ];
    mon_fetch(categoryId)
    const categorie__ul__li = document.querySelectorAll(".categorie__ul__li")
    console.log("categorie__ul__li.length", categorie__ul__li.length)
    categorie__ul__li.forEach(li => {
        li.addEventListener("mousedown",function(){
            console.log(li.dataset.id) 
            categoryId = li.dataset.id
            mon_fetch(categoryId)
        })
    })

        function mon_fetch(categoryId)
        {
        apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`; //remplacer
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                //  <div>${article.excerpt.rendered}</div>
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = ""
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.innerHTML = `
                        <h3>${article.title.rendered}</h3>
                        <p>${article.excerpt.rendered}</p>

                        <a href="${article.link}">Lire plus</a>
                    `;
                    destinationList .appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
        }

})()