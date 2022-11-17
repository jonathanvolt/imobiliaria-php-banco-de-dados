/* 
Integrantes:
Bruno Tai da Cruz Wong
Gabriel de Melo Faustino Santos
Geraldo Vicente do Nascimento Neto
Igor de Almeida Fernandes Barreira 
Jonathan Bruno Tavares de Oliveira 
Matheus Lui Zago 	
*/

let cadastro = document.getElementById("cadastrar");
let fechar = document.getElementById("fechar");
let menu = document.getElementById("menu")

console.log(cadastro)

cadastro.addEventListener("click", (e) => {
    menu.classList = "menu open"
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
})

fechar.addEventListener("click", (e) => {
    menu.classList ="menu"
    document.body.style.backgroundColor = "white";
})