
let header = document.querySelector("#header");

let hero = document.querySelector("#hero");

document.addEventListener("scroll", () => {
    
    let heroRect = hero.getBoundingClientRect();
    
        console.log("bottom", heroRect.bottom)

        
        if (heroRect.bottom < 80) {

            if(document.documentElement.clientWidth >= 990) {

                header.setAttribute("style", "width:100%; background-color: #3b765f; padding-right:4em;");
                header.classList.add('header-br');
            }

            if(document.documentElement.clientWidth >= 1390) {
                header.setAttribute("style", "width:100%; background-color: #3b765f; padding-right:12em;");
                header.classList.add('header-br');
            }

            

            

            if(document.documentElement.clientWidth >= 1800) {
                header.setAttribute("style", "width:100%; background-color: #3b765f; padding-right:15em;");
                header.classList.add('header-br');
            }

            

            
        } else if (heroRect.bottom > 80 && document.documentElement.clientWidth >= 960) {
            header.style = "width:66%;"
            header.classList.remove('header-br');
        } 
        
        

        


    
});
