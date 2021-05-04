
let header = document.querySelector("#header");



document.addEventListener("scroll", () => {
    let hero = document.querySelector("#hero");
    let heroRect = hero.getBoundingClientRect();
    console.log("top", heroRect.bottom)

    if (heroRect.bottom < 58) {
        header.style = "animation: full-width-menu 2000ms ease infinite alternate;"
        header.classList.add('header-br');
    }

    if (heroRect.bottom > 58) {
        header.style = "grid-template-columns: 66% auto"
        header.classList.remove('header-br');
    }
  });