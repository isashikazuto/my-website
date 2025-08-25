const ViedoView_1 = document.getElementById("ViedoView_1");
const ViedoView_2 = document.getElementById("ViedoView_2");
const ViedoView_3 = document.getElementById("ViedoView_3");
const ViedoView_4 = document.getElementById("ViedoView_4");
const ViedoView_5 = document.getElementById("ViedoView_5");
const ViedoView_6 = document.getElementById("ViedoView_6");

let isAdded = false;

ViedoView_1.addEventListener("click", function () {
    if (!isAdded) {
        const menu = document.getElementById("menu");
        const menu_2 = document.createElement("li");
        const closeButton = document.createElement("button");
        const video = document.createElement("video");

        video.setAttribute("class", "video1-css");
        video.src = "./video/v1.mp4";
        video.controls = true;
        video.width = 800;
        video.height = 500;

        menu_2.setAttribute("class", "menu-js");

        closeButton.innerText = "Close";
        closeButton.setAttribute("class", "Close-css");
        
        closeButton.addEventListener("click", function() {
            menu.removeChild(menu_2);
            isAdded = false;
        });

        menu.appendChild(menu_2);
        menu_2.appendChild(closeButton);
        menu_2.appendChild(video);
        isAdded = true;
    }
});

ViedoView_2.addEventListener("click", function () {
    if (!isAdded) {
        const menu = document.getElementById("menu2");
        const menu_2 = document.createElement("li");
        const closeButton = document.createElement("button");
        const video = document.createElement("video");

        video.setAttribute("class", "video1-css");
        video.src = "./video/v2.mp4";
        video.controls = true;
        video.width = 800;
        video.height = 500;

        menu_2.setAttribute("class", "menu-js");

        closeButton.innerText = "Close";
        closeButton.setAttribute("class", "Close-css");
        
        closeButton.addEventListener("click", function() {
            menu.removeChild(menu_2);
            isAdded = false;
        });

        menu.appendChild(menu_2);
        menu_2.appendChild(closeButton);
        menu_2.appendChild(video);
        isAdded = true;
    }
});

ViedoView_3.addEventListener("click", function () {
    if (!isAdded) {
        const menu = document.getElementById("menu3");
        const menu_2 = document.createElement("li");
        const closeButton = document.createElement("button");
        const video = document.createElement("video");

        video.setAttribute("class", "video1-css");
        video.src = "./video/v3.mp4";
        video.controls = true;
        video.width = 800;
        video.height = 500;

        menu_2.setAttribute("class", "menu-js");

        closeButton.innerText = "Close";
        closeButton.setAttribute("class", "Close-css");
        
        closeButton.addEventListener("click", function() {
            menu.removeChild(menu_2);
            isAdded = false;
        });

        menu.appendChild(menu_2);
        menu_2.appendChild(closeButton);
        menu_2.appendChild(video);
        isAdded = true;
    }
});

ViedoView_4.addEventListener("click", function () {
    if (!isAdded) {
        const menu = document.getElementById("menu4");
        const menu_2 = document.createElement("li");
        const closeButton = document.createElement("button");
        const video = document.createElement("video");

        video.setAttribute("class", "video1-css");
        video.src = "./video/ni_kakkak.mp4";
        video.controls = true;
        video.width = 800;
        video.height = 500;

        menu_2.setAttribute("class", "menu-js");

        closeButton.innerText = "Close";
        closeButton.setAttribute("class", "Close-css");
        
        closeButton.addEventListener("click", function() {
            menu.removeChild(menu_2);
            isAdded = false;
        });

        menu.appendChild(menu_2);
        menu_2.appendChild(closeButton);
        menu_2.appendChild(video);
        isAdded = true;
    }
});

ViedoView_5.addEventListener("click", function () {
    if (!isAdded) {
        const menu = document.getElementById("menu5");
        const menu_2 = document.createElement("li");
        const closeButton = document.createElement("button");
        const video = document.createElement("video");

        video.setAttribute("class", "video1-css");
        video.src = "./video/1.mp4";
        video.controls = true;
        video.width = 800;
        video.height = 500;

        menu_2.setAttribute("class", "menu-js");

        closeButton.innerText = "Close";
        closeButton.setAttribute("class", "Close-css");
        
        closeButton.addEventListener("click", function() {
            menu.removeChild(menu_2);
            isAdded = false;
        });

        menu.appendChild(menu_2);
        menu_2.appendChild(closeButton);
        menu_2.appendChild(video);
        isAdded = true;
    }
});

ViedoView_6.addEventListener("click", function () {
    if (!isAdded) {
        const menu = document.getElementById("menu6");
        const menu_2 = document.createElement("li");
        const closeButton = document.createElement("button");
        const video = document.createElement("video");

        video.setAttribute("class", "video1-css");
        video.src = "./video/v6.mp4";
        video.width = 800;
        video.height = 500;
        video.controls = true;


        menu_2.setAttribute("class", "menu-js");

        closeButton.innerText = "Close";
        closeButton.setAttribute("class", "Close-css");
        
        closeButton.addEventListener("click", function() {
            menu.removeChild(menu_2);
            isAdded = false;
        });

        menu.appendChild(menu_2);
        menu_2.appendChild(closeButton);
        menu_2.appendChild(video);
        isAdded = true;
    }
});