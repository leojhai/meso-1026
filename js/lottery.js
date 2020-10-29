var arrDiv = document.getElementsByClassName("small");
var oCj = document.getElementById("cj");
var num = 0;
var shijian = Math.random() * 5000 + 3200;
oCj.onclick = function () { //觸發
    oTime = setInterval(dianji, 50); //每 50  毫秒執行一次 dianji(跳格子)
}

function dianji() { //跳格子funtion
    num = num + 1;
    if (num > arrDiv.length - 1) {
        num = 0
    }
    for (j = 0; j < arrDiv.length; j++) {
        arrDiv[j].id = "";
    }
    arrDiv[num].id = "act";
    setTimeout(tingzhi, shijian);

    function tingzhi() {
        clearInterval(oTime)
    }
}