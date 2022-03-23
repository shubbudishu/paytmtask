	
  console.log("hello")
  // search-box2 open close js code
    let navbar = document.querySelector(".navbar");
    //let searchBox = document.querySelector(".search-box2 .bx-search");
    // let searchBoxCancel = document.querySelector(".search-box2 .bx-x");
    
       /* searchBox.addEventListener("click", ()=>{
          navbar.classList.toggle("showInput");
          if(navbar.classList.contains("showInput")){
            searchBox.classList.replace("bx-search" ,"bx-x");
          }else {
            searchBox.classList.replace("bx-x" ,"bx-search");
          }
        });
        */

    // sidebar open close js code
    let navLinks = document.querySelector(".nav-links");
    let menuOpenBtn = document.querySelector(".navbar .bx-menu");
    let menuCloseBtn = document.querySelector(".nav-links .bx-x");
    menuOpenBtn.onclick = function() {
    navLinks.style.left = "0";
    }
    menuCloseBtn.onclick = function() {
    navLinks.style.left = "-100%";
    }
    
    