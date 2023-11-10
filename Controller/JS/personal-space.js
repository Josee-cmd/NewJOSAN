let index = 1;
const cantidadFotos = document.querySelectorAll(".gallery-items").length;

function mostrarFotos(n) {
    index = (index + n + cantidadFotos) % cantidadFotos;
    console.log(index)
    cambiarFoto();
}
let cambiarFoto = () => {
    let fotos = document.querySelectorAll(".gallery-items");
    fotos.forEach((foto, i) => {
        foto.style.opacity = i === index ? 1 : 0.4;
        foto.style.height = i === index ? '230px' : '200px';
        foto.style.width = i === index ? '230px' : '200px';
        foto.style.boxShadow = i === index ? '-2px 5px 33px 6px rgba(0,0,0,0.35)' : 'none';
    });
}
cambiarFoto();

let campana = document.querySelector('#campana');
campana.addEventListener("click", () => {
    campana.style.animation = 'vibrarCampana 0.3s alternate infinite ease-in';
})