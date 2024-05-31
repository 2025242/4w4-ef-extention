(function () {
    console.log("REST API pour les pays");

    let lien__categorie = document.querySelectorAll('.lien__categorie');
    for (const elm of lien__categorie) {
        console.log(elm.id);
        elm.addEventListener('mousedown', function () {
            const id = elm.id.split("_")[1];
            console.log(id);
            let url = `https://gftnth00.mywhc.ca/tim11/wp-json/wp/v2/posts?categories=${id}`;
            mon_fetch(url);
        });
    }

    function mon_fetch(url) {
        fetch(url)
            .then(function (response) {
                if (!response.ok) {
                    throw new Error("La requête a échoué avec le statut " + response.status);
                }
                return response.json();
            })
            .then(function (data) {
                console.log(data);
                let restapi = document.querySelector(".contenu__restapi");
                restapi.innerHTML = "";

                data.forEach(function (article, index) {
                    let titre = article.title.rendered;
                    let contenu = article.excerpt.rendered.substring(0, 100);
                    console.log(titre);
                    let carte = document.createElement("div");
                    carte.classList.add("restapi__carte");

                    carte.innerHTML = `
                        <h2>${titre}</h2>
                        <p>${contenu}</p>
                    `;

                    restapi.appendChild(carte);

                    setTimeout(() => {
                        carte.classList.add("visible");
                    }, 100 * index);
                });
            })
            .catch(function (error) {
                console.error("Erreur lors de la récupération des données :", error);
            });
    }
})();
