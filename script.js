
let header = document.querySelector("#header");





document.addEventListener("scroll", () => {

    
        let hero = document.querySelector("#hero");
        let heroRect = hero.getBoundingClientRect();
        console.log("top", heroRect.bottom)
    
        if (heroRect.bottom < 110) {

            if(document.documentElement.clientWidth >= 990) {

                header.style = "width:100%; background-color: #3b765f; padding-right:4em;"
                header.classList.add('header-br');
            }

            if(document.documentElement.clientWidth >= 1390) {
                header.setAttribute("style", "width:100%; background-color: #3b765f; padding-right:12em;");
            }

            if(document.documentElement.clientWidth >= 1800) {
                header.setAttribute("style", "width:100%; background-color: #3b765f; padding-right:25em;");
            }
        }
    
        if (heroRect.bottom > 58) {
            header.style = "width:66%;"
            header.classList.remove('header-br');
        }

        


    
});
