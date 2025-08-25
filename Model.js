const ModelView_1 = document.getElementById("ViewModel_1");
const ModelView_2 = document.getElementById("ViewModel_2");
const ModelView_3 = document.getElementById("ViewModel_3");
const ModelView_4 = document.getElementById("ViewModel_4");
const ModelView_5 = document.getElementById("ViewModel_5");
const ModelView_6 = document.getElementById("ViewModel_6");
const ModelView_7 = document.getElementById("ViewModel_7");
const ModelView_8 = document.getElementById("ViewModel_8");
const ModelView_9 = document.getElementById("ViewModel_9");

let isAdded = false;

ModelView_1.addEventListener("click", function () {
    if (!isAdded) {
        const menu = document.getElementById("menu1");
        const menu_2 = document.createElement("li");
        const closeButton = document.createElement("button");
        const img = document.createElement("img");
        const img_2 = document.createElement("img");
        const img_3 = document.createElement("img");

        img.setAttribute("class", "img1-css");
        img_2.setAttribute("class", "img1-css");
        img_3.setAttribute("class", "img1-css");
        img.src = "./img_Model/imageScer.png";
        img_2.src = "./img_Model/Scar/sa.png";
        img_3.src = "./img_Model/Scar/sac.png";

        menu_2.setAttribute("class", "menu-js");

        closeButton.innerText = "Close";
        closeButton.setAttribute("class", "Close-css");
        
        closeButton.addEventListener("click", function() {
            menu.removeChild(menu_2);
            isAdded = false;
        });

        menu.appendChild(menu_2);
        menu_2.appendChild(closeButton);
        menu_2.appendChild(img);
        menu_2.appendChild(img_2);
        menu_2.appendChild(img_3);
        isAdded = true;
    }
});

ModelView_2.addEventListener("click", function () {
    if (!isAdded) {
        const menu = document.getElementById("menu2");
        const menu_2 = document.createElement("li");
        const closeButton = document.createElement("button");
        const img = document.createElement("img");
        const img_2 = document.createElement("img");
        const img_3 = document.createElement("img");

        img.setAttribute("class", "img1-css");
        img_2.setAttribute("class", "img1-css");
        img_3.setAttribute("class", "img1-css");
        img.src = "./img/imagesdess.png";
        img_2.src = "./img_Model/FM_1/adsdsdsdsddddddddddddddddd.png";
        img_3.src = "./img_Model/FM_1/imagesdasdd.png";

        menu_2.setAttribute("class", "menu-js");

        closeButton.innerText = "Close";
        closeButton.setAttribute("class", "Close-css");
        
        closeButton.addEventListener("click", function() {
            menu.removeChild(menu_2);
            isAdded = false;
        });

        menu.appendChild(menu_2);
        menu_2.appendChild(closeButton);
        menu_2.appendChild(img);
        menu_2.appendChild(img_2);
        menu_2.appendChild(img_3);
        isAdded = true;
    }
});

ModelView_3.addEventListener("click", function () {
    if (!isAdded) {
        const menu = document.getElementById("menu4");
        const menu_2 = document.createElement("li");
        const closeButton = document.createElement("button");
        const img = document.createElement("img");
        const img_2 = document.createElement("img");
        const img_3 = document.createElement("img");

        img.setAttribute("class", "img1-css");
        img_2.setAttribute("class", "img1-css");
        img_3.setAttribute("class", "img1-css");
        img.src = "./img_Model/imageadwadaswdsadwds.png";
        img_2.src = "./img_Model/FM_2/as.png";
        img_3.src = "./img_Model/FM_2/ad.png";

        menu_2.setAttribute("class", "menu-js");

        closeButton.innerText = "Close";
        closeButton.setAttribute("class", "Close-css");
        
        closeButton.addEventListener("click", function() {
            menu.removeChild(menu_2);
            isAdded = false;
        });

        menu.appendChild(menu_2);
        menu_2.appendChild(closeButton);
        menu_2.appendChild(img);
        menu_2.appendChild(img_2);
        menu_2.appendChild(img_3);
        isAdded = true;
    }
});

ModelView_4.addEventListener("click", function () {
    if (!isAdded) {
        const menu = document.getElementById("menu4");
        const menu_2 = document.createElement("li");
        const closeButton = document.createElement("button");
        const img = document.createElement("img");
        const img_2 = document.createElement("img");
        const img_3 = document.createElement("img");

        img.setAttribute("class", "img1-css");
        img_2.setAttribute("class", "img1-css");
        img_3.setAttribute("class", "img1-css");
        img.src = "./img_Model/miku.png";
        img_2.src = "./img_Model/Mimukauwa-Nice-Try/image1.png";
        img_3.src = "./img_Model/Mimukauwa-Nice-Try/image2.png";

        menu_2.setAttribute("class", "menu-js");

        closeButton.innerText = "Close";
        closeButton.setAttribute("class", "Close-css");
        
        closeButton.addEventListener("click", function() {
            menu.removeChild(menu_2);
            isAdded = false;
        });

        menu.appendChild(menu_2);
        menu_2.appendChild(closeButton);
        menu_2.appendChild(img);
        menu_2.appendChild(img_2);
        menu_2.appendChild(img_3);
        isAdded = true;
    }
});

ModelView_5.addEventListener("click", function () {
    if (!isAdded) {
        const menu = document.getElementById("menu5");
        const menu_2 = document.createElement("li");
        const closeButton = document.createElement("button");
        const img = document.createElement("img");
        const img_2 = document.createElement("img");
        const img_3 = document.createElement("img");

        img.setAttribute("class", "img1-css");
        img_2.setAttribute("class", "img1-css");
        img_3.setAttribute("class", "img1-css");
        img.src = "./img_Model/ga.png";
        img_2.src = "./img_Model/lyq/ax.png";
        img_3.src = "./img_Model/lyq/xa.png";

        menu_2.setAttribute("class", "menu-js");

        closeButton.innerText = "Close";
        closeButton.setAttribute("class", "Close-css");
        
        closeButton.addEventListener("click", function() {
            menu.removeChild(menu_2);
            isAdded = false;
        });

        menu.appendChild(menu_2);
        menu_2.appendChild(closeButton);
        menu_2.appendChild(img);
        menu_2.appendChild(img_2);
        menu_2.appendChild(img_3);
        isAdded = true;
    }
});

ModelView_6.addEventListener("click", function () {
    if (!isAdded) {
        const menu = document.getElementById("menu6");
        const menu_2 = document.createElement("li");
        const closeButton = document.createElement("button");
        const img = document.createElement("img");
        const img_2 = document.createElement("img");
        const img_3 = document.createElement("img");

        img.setAttribute("class", "img1-css");
        img_2.setAttribute("class", "img1-css");
        img_3.setAttribute("class", "img1-css");
        img.src = "./img_Model/gun.png";
        img_2.src = "./img_Model/Solemn-Lament/image3.png";
        img_3.src = "./img_Model/Solemn-Lament/image4.png";

        menu_2.setAttribute("class", "menu-js");

        closeButton.innerText = "Close";
        closeButton.setAttribute("class", "Close-css");
        
        closeButton.addEventListener("click", function() {
            menu.removeChild(menu_2);
            isAdded = false;
        });

        menu.appendChild(menu_2);
        menu_2.appendChild(closeButton);
        menu_2.appendChild(img);
        menu_2.appendChild(img_2);
        menu_2.appendChild(img_3);
        isAdded = true;
    }
});

ModelView_7.addEventListener("click", function () {
    if (!isAdded) {
        const menu = document.getElementById("menu7");
        const menu_2 = document.createElement("li");
        const closeButton = document.createElement("button");
        const img = document.createElement("img");
        const img_2 = document.createElement("img");
        const img_3 = document.createElement("img");

        img.setAttribute("class", "img1-css");
        img_2.setAttribute("class", "img1-css");
        img_3.setAttribute("class", "img1-css");
        img.src = "./img_Model/GqQZsdBbAAM-1K6.png";
        img_2.src = "./img_Model/FM_3/GqQZn8NbAAIdglD.png";
        img_3.src = "./img_Model/FM_3/GqQZvcAbAAQJ45g.png";

        menu_2.setAttribute("class", "menu-js");

        closeButton.innerText = "Close";
        closeButton.setAttribute("class", "Close-css");
        
        closeButton.addEventListener("click", function() {
            menu.removeChild(menu_2);
            isAdded = false;
        });

        menu.appendChild(menu_2);
        menu_2.appendChild(closeButton);
        menu_2.appendChild(img);
        menu_2.appendChild(img_2);
        menu_2.appendChild(img_3);
        isAdded = true;
    }
});

ModelView_8.addEventListener("click", function () {
    if (!isAdded) {
        const menu = document.getElementById("menu8");
        const menu_2 = document.createElement("li");
        const closeButton = document.createElement("button");
        const img = document.createElement("img");
        const img_2 = document.createElement("img");
        const img_3 = document.createElement("img");
        const img_4 = document.createElement("img");
        const img_5 = document.createElement("img");

        img.setAttribute("class", "img1-css");
        img_2.setAttribute("class", "img1-css");
        img_3.setAttribute("class", "img1-css");
        img_4.setAttribute("class", "img1-css");
        img_5.setAttribute("class", "img1-css");
        img.src = "./img_Model/build-m.png";
        img_2.src = "./img_Model/build/image5.png";
        img_3.src = "./img_Model/build/image6.png";
        img_4.src = "./img_Model/build/image7.png";
        img_5.src = "./img_Model/build/image8.png";


        menu_2.setAttribute("class", "menu-js");

        closeButton.innerText = "Close";
        closeButton.setAttribute("class", "Close-css");
        
        closeButton.addEventListener("click", function() {
            menu.removeChild(menu_2);
            isAdded = false;
        });

        menu.appendChild(menu_2);
        menu_2.appendChild(closeButton);
        menu_2.appendChild(img);
        menu_2.appendChild(img_2);
        menu_2.appendChild(img_3);
        menu_2.appendChild(img_4);
        menu_2.appendChild(img_5);
        isAdded = true;
    }
});

ModelView_9.addEventListener("click", function () {
    if (!isAdded) {
        const menu = document.getElementById("menu9");
        const menu_2 = document.createElement("li");
        const closeButton = document.createElement("button");
        const img = document.createElement("img");
        const img_2 = document.createElement("img");
        const img_3 = document.createElement("img");

        img.setAttribute("class", "img1-css");
        img_2.setAttribute("class", "img1-css");
        img_3.setAttribute("class", "img1-css");
        img.src = "./img_Model/imageAK.png";
        img_2.src = "./img_Model/AK/image9.png";
        img_3.src = "./img_Model/AK/image10.png";

        menu_2.setAttribute("class", "menu-js");

        closeButton.innerText = "Close";
        closeButton.setAttribute("class", "Close-css");
        
        closeButton.addEventListener("click", function() {
            menu.removeChild(menu_2);
            isAdded = false;
        });

        menu.appendChild(menu_2);
        menu_2.appendChild(closeButton);
        menu_2.appendChild(img);
        menu_2.appendChild(img_2);
        menu_2.appendChild(img_3);
        isAdded = true;
    }
});