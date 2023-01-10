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

  columns = Math.floor(document.body.clientWidth / 50),
  rows = Math.floor(document.body.clientHeight / 50);

  wrapper.style.setProperty("--columns", columns);
  wrapper.style.setProperty("--rows", rows);

  createTiles(columns * rows);
}

createGrid();
window.onresize = () => createGrid();