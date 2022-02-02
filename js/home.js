// change to php

var fs = require('fs');

const pages = fs.readdirSync('./html/pages/');

function init(){
    let images = document.createElement("div");
    images.className = "images";

    for(let i =0; i<pages.length;i++){
        
        let e = pages[i];

        let container = document.createElement("a");
        container.className = "container";
        container.setAttribute("href","./pages/"+e);

        let image = document.createElement("img");
        image.className = "image"
        image.setAttribute("src","../resources/"+ e.split(".")[0] +"/lead.jpg")

        let overlay = document.createElement("div");
        overlay.className="overlay"

        let text = document.createElement("div");
        text.className = "text";

        container.appendChild(image.appendChild(overlay.appendChild(text)));

        images.appendChild(container);
        console.log(images);
    }
    // pages.forEach(e => {
    //     let container = document.createElement("a");
    //     container.className = "container";
    //     container.setAttribute("href","./pages/"+e);

    //     let image = document.createElement("img");
    //     image.className = "image"
    //     image.setAttribute("src","../resources/"+ e.split(".")[0] +"/lead.jpg")

    //     let overlay = document.createElement("div");
    //     overlay.className="overlay"

    //     let text = document.createElement("div");
    //     text.className = "text";

    //     container.appendChild(image.appendChild(overlay.appendChild(text)));

    //     images.appendChild(container);
    // });

    document.getElementById("content").innerHTML = "HELLO";
    document.getElementById("content").innerHTML = images;
}