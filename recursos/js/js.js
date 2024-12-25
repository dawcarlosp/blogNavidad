// Función para aplicar el fondo guardado
function aplicarFondo() {
  const selectedValue = localStorage.getItem("selectedValue");
  if (selectedValue) {
    const baseUrl =
      window.location.origin +
      window.location.pathname.replace(/\/[^\/]*$/, "/");
    let trozos = baseUrl.split("/").filter(Boolean);
    if (
      trozos[trozos.length - 1] === "alta" ||
      trozos[trozos.length - 1] === "altaUsuarioForm"
    ) {
      let urlCustom = baseUrl.split("/");
      urlCustom.pop();
      urlCustom.pop();
      urlCustom.pop();
      let newBase = urlCustom.join("/");
      document.body.style.backgroundImage = `url('${newBase}/recursos/imagenes/${selectedValue}')`;
    } else {
      document.body.style.backgroundImage = `url('${baseUrl}recursos/imagenes/${selectedValue}')`;
      
    }
    document.body.style.color = "white";
    document.body.style.margin = "0";
    document.body.style.padding = "0";
    document.body.style.backgroundSize = "100% auto";
    document.body.style.backgroundPosition = "center top";
    document.body.style.backgroundRepeat = "repeat-y";
    document.body.style.height = "100vh";

    if (selectedValue === "semanaSanta.png") {
      let colorTexto = "black";
      document
        .querySelectorAll("p")
        .forEach((el) => (el.style.color = colorTexto));
      document
        .querySelectorAll("h1")
        .forEach((el) => (el.style.color = colorTexto));
      document
        .querySelectorAll("h2")
        .forEach((el) => (el.style.color = colorTexto));
      document
        .querySelectorAll("h3")
        .forEach((el) => (el.style.color = colorTexto));
      //Para formularios
      document
        .querySelectorAll("label,input,textarea")
        .forEach((el) => (el.style.color = colorTexto));
      //hover de los imput submit
      document.querySelectorAll(".boton").forEach((b) =>
        b.addEventListener("mouseenter", () => {
          b.style.background = "#e4c283";
        })
      );
      document.querySelectorAll(".boton").forEach((b) =>
        b.addEventListener("mouseleave", () => {
          b.style.background = "#ffffff";
        })
      );
      //Cuando cargue al principio
      document.querySelectorAll(".boton").forEach((b) => (b.style.background = "#ffffff"));
    }else if(selectedValue === "navidad.png"){
        document.querySelectorAll("p,h1,h2,h3").forEach(e => {
            e.style.color = '#445130';
           });
       document.querySelectorAll(".boton").forEach(e => {
        e.classList.add("botonNavidad")
       });
       document.querySelectorAll(".boton").forEach(e=> e.addEventListener("mouseenter", () => {
        e.classList.add("hoverNavidad");
        e.classList.remove("botonNavidad");
       }));
       document.querySelectorAll(".boton").forEach(e=> e.addEventListener("mouseleave", () => {
        e.classList.add("botonNavidad");
        e.classList.remove("hoverNavidad");
       }));
    }
  }
}

window.addEventListener("load", aplicarFondo);

if (document.getElementById("tema") != null) {
  document.getElementById("tema").addEventListener("change", function () {
    const selectedValue = this.value + ".png";
    if (selectedValue != ".png") {
      localStorage.setItem("selectedValue", selectedValue);
    }
    aplicarFondo();
  });
}else{
    aplicarFondo();
}

/*
http://localhost/ProyectosPhp/MVCAnimales/
http://localhost/ProyectosPhp/MVCAnimales/index.php/alta/
http://localhost/ProyectosPhp/MVCAnimales/index.php/altaUsuarioForm/
*/
