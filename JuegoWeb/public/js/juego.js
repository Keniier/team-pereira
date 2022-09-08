let carta_pais1 = document.getElementById('pais1');
let carta_pais2 = document.getElementById('pais2');
let carta_pais3 = document.getElementById('pais3');
let carta_pais4 = document.getElementById('pais4');
let carta_pais5 = document.getElementById('pais5');
let carta_pais6 = document.getElementById('pais6');
let carta_pais7 = document.getElementById('pais7');


const cartas = [];

// de manera muy artesanal XD llamos los datos de las cartas de los jugadores
// discupas por no utilizar ciclos pero no hay tiempo
if (carta_pais1 != null) {
fetch("https://restcountries.com/v3.1/name/" + carta_pais1.dataset.pais, {
})
    .then((result) => result.json())
    .then((data) => {
        carta1(data);
        cartas.push(data[0].area)
    });
}
if (carta_pais2 != null) {
fetch("https://restcountries.com/v3.1/name/" + carta_pais2.dataset.pais, {
})
    .then((result) => result.json())
    .then((data) => {
        carta2(data);
        cartas.push(data[0].area)

    });
}
if (carta_pais3 != null) {
fetch("https://restcountries.com/v3.1/name/" + carta_pais3.dataset.pais, {
})
    .then((result) => result.json())
    .then((data) => {
        carta3(data);
        cartas.push(data[0].area)

    });
}
if (carta_pais4 != null) {
fetch("https://restcountries.com/v3.1/name/" + carta_pais4.dataset.pais, {
})
    .then((result) => result.json())
    .then((data) => {
        carta4(data);
        cartas.push(data[0].area)
    });
}
if (carta_pais5 != null) {
fetch("https://restcountries.com/v3.1/name/" + carta_pais5.dataset.pais, {
})
    .then((result) => result.json())
    .then((data) => {
        carta5(data);
        cartas.push(data[0].area)
    });
}
if (carta_pais6 != null) {
fetch("https://restcountries.com/v3.1/name/" + carta_pais6.dataset.pais, {
})
    .then((result) => result.json())
    .then((data) => {
        carta6(data);
        cartas.push(data[0].area)
    });
}
if (carta_pais7 != null) {
fetch("https://restcountries.com/v3.1/name/" + carta_pais7.dataset.pais, {
})
    .then((result) => result.json())
    .then((data) => {
        carta7(data);
        cartas.push(data[0].area)
    });
}

function sig_ronda(){
    console.log(cartas);
}










function carta1(data){
    document.getElementById('poblacion1').innerHTML = data[0].name.common;
    document.getElementById('area1').innerHTML = data[0].area;
    document.getElementById("img1").src=data[0].flags.png;
}
function carta2(data){
    document.getElementById('poblacion2').innerHTML = data[0].name.common;
    document.getElementById('area2').innerHTML = data[0].area;
    document.getElementById("img2").src=data[0].flags.png;
}
function carta3(data){
    document.getElementById('poblacion3').innerHTML = data[0].name.common;
    document.getElementById('area3').innerHTML = data[0].area;
    document.getElementById("img3").src=data[0].flags.png;
}
function carta4(data){
    document.getElementById('poblacion4').innerHTML = data[0].name.common;
    document.getElementById('area4').innerHTML = data[0].area;
    document.getElementById("img4").src=data[0].flags.png;
}
function carta5(data){
    document.getElementById('poblacion5').innerHTML = data[0].name.common;
    document.getElementById('area5').innerHTML = data[0].area;
    document.getElementById("img5").src=data[0].flags.png;
}
function carta6(data){
    document.getElementById('poblacion6').innerHTML = data[0].name.common;
    document.getElementById('area6').innerHTML = data[0].area;
    document.getElementById("img6").src=data[0].flags.png;
}
function carta7(data){
    document.getElementById('poblacion7').innerHTML = data[0].name.common;
    document.getElementById('area7').innerHTML = data[0].area;
    document.getElementById("img7").src=data[0].flags.png;
}

