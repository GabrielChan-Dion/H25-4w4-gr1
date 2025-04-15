(function(){
console.log ("carrousel.js")
let hero__radio__input = document.querySelectorAll(".hero__radio__input")
console.log("hero__radio__input.length = ", hero__radio__input.length)

hero__radio__input.forEach(elm=>{
    console.log("elm.id_carrousel = ",elm.dataset.id_carrousel)
})
})()