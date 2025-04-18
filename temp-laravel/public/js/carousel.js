console.log("test")


let main_pic = document.querySelector("#main")

let second_cadre = document.querySelectorAll(".second")

second_cadre.forEach((pic) => {
    pic.addEventListener('click',() => {
        console.log("carre")
        main_pic.src = pic.src
    })
})
