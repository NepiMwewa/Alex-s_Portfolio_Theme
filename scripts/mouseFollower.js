
  const mouseDiv = document.getElementById("mouseBackground");
  document.body.onpointermove = event => {
    const { clientX, clientY} = event;

    mouseDiv.animate({
      left: `${clientX}px`,
      top: `${clientY}px`
    }, {duration: 3000, fill: "forwards"});
  }

