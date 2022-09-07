let carta_pais = document.getElementById('pais');
console.log(carta_pais.dataset.pais);

fetch("https://restcountries.com/v3.1/name/" + carta_pais.dataset.pais, {
})
    .then((result) => result.json())
    .then((data) => {
        cartaJugador1(data);
    });

function carta(data){
    console.log(data)
    document.getElementById('poblacion1').innerHTML = data[0].name.common;
    document.getElementById('area1').innerHTML = data[0].area;
    document.getElementById("img1").src=data[0].flags.png;
}
