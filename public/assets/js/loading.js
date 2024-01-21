var i = setInterval(function () {
    clearInterval(i);
    document.getElementById("loading").style.display = "none";
    document.getElementById("preload").style.display = "block";
   
}, 2000);