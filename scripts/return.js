const wrapper = document.getElementById("tiles");
const wrapperContainer = document.getElementById("tiles-container");
let columns = 0,
    rows = 0;

let toggled = false;
const handleOnClick = index => {

  toggled = !toggled;

  document.body.classList.toggle("toggled");

  anime({
    targets: "#tiles",
    opacity: toggled ? .1 : 1,
    delay: 50,
    easing: 'easeInOutQuad'
  })

  anime({
    targets: ".tile",
    opacity: toggled ? 0 : 1,
    scale: toggled ? [
      {value: .1, easing: 'easeOutSine', duration: 500},
      {value: 1, easing: 'easeInOutSine', duration: 100}
    ] : 1.2,
    rotateZ: toggled ? 0: anime.stagger([-45, 45], {grid: [columns, rows], from: index}),
    delay: anime.stagger(50, {
      grid: [columns, rows],
      from: index
    })
  })
}

const createTile = index => {
  const tile = document.createElement("div");

    tile.classList.add("tile");

    tile.onclick = e => handleOnClick(index);

    return tile;
  }

const createTiles = quantity => {
  Array.from(Array(quantity)).map((tile, index) => {
    wrapper.appendChild(createTile(index)); 
   });
}

const createGrid = () => {
  wrapper.innerHTML = "";

  columns = Math.floor(document.body.clientWidth / 128),
  rows = Math.floor(document.body.clientHeight / 128);

  wrapper.style.setProperty("--columns", columns);
  wrapper.style.setProperty("--rows", rows);

  createTiles(columns * rows);
}
 
window.onload = (event) => {
  document.getElementById("tiles").classList.remove("remove-opacity");

  createGrid();
  window.onresize = () => createGrid();

  let hamburgerMenu = document.getElementById("menu-toggle");
  let mainMenu = document.getElementById("main-menu");
  
  hamburgerMenu.addEventListener('keydown', (event) => escapeFromMenu(event));
  mainMenu.addEventListener('keydown', (event) => escapeFromMenu(event));

  windowChangedSize();

  let navLinks = document.getElementsByClassName("closeTab");
  for (var i = 0; i < navLinks.length; i++) {
    navLinks[i].addEventListener('click', addEventToLink, false);
  }

};
    
let menuToggle = false, isMobile = false;
//toggle menu open or closed
function toggleMenu(){
  let menuDiv = document.getElementById("menu-nav");
  let headerId = document.getElementById("header-id");
  let hamburgerMenu = document.getElementById("menu-toggle");
  if(!menuToggle){
    menuDiv.classList.add("menu-view");
    headerId.classList.remove("header-content");
    hamburgerMenu.ariaExpanded = true;
    menuToggle = true;
  }else{
    menuDiv.classList.remove("menu-view");
    headerId.classList.add("header-content");
    hamburgerMenu.ariaExpanded = false;
    menuToggle = false;
  }
}

function escapeFromMenu(event){
  if(event.key === "Escape" && menuToggle == true)
    {
      toggleMenu();
  }
}

let addEventToLink = function() {
  if(isMobile){
    toggleMenu();
  }
};

window.addEventListener("resize", windowChangedSize);


function windowChangedSize(){
  if(window.innerWidth <= 880){
    isMobile = true;
   
  }else{
    if(menuToggle){
      toggleMenu();
    }
    isMobile = false;
    
  }
}