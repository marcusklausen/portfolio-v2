
let header = document.querySelector("#header");

let hero = document.querySelector("#hero");

let modalBackdrop = document.querySelector('#modal-backdrop');
let modalContainer = document.querySelector('#modal-container');
let closeModalButton;

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



function addEventlistenersToWorkItems() {

let workItems = document.querySelectorAll('.open-work-item');

    workItems.forEach(
        function(workItem, index){
            workItem.addEventListener("click", function(e) {
                e.preventDefault();
                let workItemId = workItem.getAttribute('href');
                modalBackdrop.style.display = 'flex';
                getModalContentFrom(workItemId);
                disableScroll();
            })
        }
    );
}



function getModalContentFrom(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {

        // If AJAX response is OK
        if (this.readyState == 4 && this.status == 200) {
            modalContainer.innerHTML = this.responseText;

            closeModalButton = document.querySelector('#close-modal');
            closeModalButton.addEventListener('click', (event) => {
            event.preventDefault();
            closeModal();
        })

           } else {
               console.log('rekt');
           }
        
    };

    xhttp.open("GET", `get-item.php?id=${id}`, true);
    xhttp.send();
    
}

function getAllWorkItems() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {

        let workShowcase = document.querySelector(".work-showcase");

        // If AJAX response is OK
        if (this.readyState == 4 && this.status == 200) {

            workShowcase.innerHTML = this.responseText;
            addEventlistenersToWorkItems();

           } else {
               console.log('rekt');
           }
        
    };

    xhttp.open("GET", `get-all-items.php`, true);
    xhttp.send();
    
}



function getAllFeaturedItems() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {

        let featuredShowcase = document.querySelector(".featured-showcase");

        // If AJAX response is OK
        if (this.readyState == 4 && this.status == 200) {

            featuredShowcase.innerHTML = this.responseText;
            getAllWorkItems();

           } else {
               console.log('rekt');
           }
        
    };

    xhttp.open("GET", `get-featured-items.php`, true);
    xhttp.send();
    
}

getAllFeaturedItems();


modalContainer.addEventListener('click', function(e) {
    e.stopPropagation();
});

modalBackdrop.addEventListener('click', function() {
    closeModal();
})



function closeModal() {
    modalBackdrop.style.display = 'none';
    modalContainer.innerHTML = '';
    enableScroll();
}

// helper functions


function disableScroll() {
    // Get the current page scroll position
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
  
        // if any scroll is attempted, set this to the previous value
        window.onscroll = function() {
            window.scrollTo(scrollLeft, scrollTop);
        };
}
  
function enableScroll() {
    window.onscroll = function() {};
}