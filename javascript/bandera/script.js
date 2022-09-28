var parrafo = document.createElement("p");
parrafo.innerHTML = "Hola Mundo!";

//document.body.appendChild(parrafo);

var app = document.getElementById("app");
app.appendChild(parrafo);

var bloque = document.createElement("div");
bloque.style.width = "100%";
bloque.style.height = "400px";
bloque.style.background = "yellow";
bloque.innerHTML = "<h1>Broque Amarillo░░░░</h1>";
app.appendChild(bloque);

var bloque2 = document.createElement("div");
bloque2.style.width = "100%";
bloque2.style.height = "200px";
bloque2.style.background = "blue";
bloque2.innerHTML = "<h1>Broque Azul</h1>";
app.appendChild(bloque2);

var bloque3 = document.createElement("div");
bloque3.style.width = "100%";
bloque3.style.height = "200px";
bloque3.style.background = "red";
bloque3.innerHTML = "<h1>Broque Rojo</h1>";
app.appendChild(bloque3);

bloque.innerHTML = `
<ul>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
</ul>
`;
