(function(){

    console.log("vive le carrousel")
    let boite__carrousel = document.querySelector('.boite__carrousel')
    let boite__carrousel__ferme = document.querySelector('.boite__carrousel__ferme')
    let galerie__img = document.querySelectorAll('.galerie img')
    let boite__carrousel__navigation = document.querySelector('.boite__carrousel__navigation')
    let boite__carrousel__img = document.querySelector('.boite__carrousel__img')
    console.log(galerie__img.length)

    let elmImg = document.createElement('img')
    boite__carrousel.append(elmImg)
    /* On parcours chacunes des img de la galerie*/
    let index = 0

    for (const img of galerie__img) {
        /* Insertion des boutons radio dans la boite__carrousel__navigation */
        let bouton = document.createElement('input')
        bouton.setAttribute('type', 'radio')
        bouton.setAttribute('checked', '')
        bouton.setAttribute('name', 'bouton')
        bouton.setAttribute('class', 'bouton')
        bouton.dataset.index = index
        boite__carrousel__navigation.append(bouton)

        /* Insertion des elmImg de la galerie d'img dans boite__carrousel__img */
        let elmImg = document.createElement('img')
        elmImg.setAttribute('src', img.getAttribute('src'))
        /* ajout de la balise img dans boite carrousel */
        boite__carrousel__img.append(elmImg) 

        bouton.addEventListener('change', function(e){
            e.preventDefault
            console.log(e)
            console.log(this.getAttribute('cheked'))
            boite__carrousel__img.children[this.dataset.index].classList.remove('img__ouvrir')
            boite__carrousel__img.children[this.dataset.index].classList.add('img__ouvrir')
        })

        img.addEventListener('mousedown', function(){
            //console.log(this.tagName)
            boite__carrousel.classList.add('boite__carrousel__ouvrir')
            //console.log(this.getAttribute('src'))
            //elmImg.setAttribute('src', this.getAttribute('src'))

            boite__carrousel__img.children[0].classList.add('img__ouvrir')
        })
        index++
    }

    boite__carrousel__ferme.addEventListener('mousedown', function(){
        boite__carrousel.classList.remove('boite__carrousel__ouvrir')
    })

})()
