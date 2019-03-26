var nameplates = document.getElementsByClassName('nameplate');
for (var i = 0; i < nameplates.length; i++) {
    nameplates[i].onmousemove = func;
    nameplates[i].onmouseout = funcOut;
}

function func() {
    this.childNodes[3].style.display = 'block';
    this.childNodes[3].style.top = event.pageY-390 +'px';
    this.childNodes[3].style.left = event.pageX+10 +'px';
}

function funcOut() {
    this.childNodes[3].style.display = 'none';
}




//
//
// var nameplates = document.getElementsByClassName('nameplate');
// var hoveres = document.getElementsByClassName('hover');
// for (var i = 0; i < nameplates.length; i++) {
//     nameplates[i].addEventListener('mousemove', func);
//     nameplates[i].addEventListener('mouseout', funcOut);
//     var nowHovers = hoveres[i];
// }
//
// function func() {
//     nowHovers.style.display = 'block';
//     nowHovers.style.top = event.pageY-390 +'px';
//     nowHovers.style.left = event.pageX+10 +'px';
// }
//
// function funcOut() {
//     nowHovers.style.display = 'none';
// }










//
// var elem1 = document.getElementById('shadow3');
// var cas1 = document.getElementById('li3');
//
// cas1.onmousemove = func1;
// cas1.onmouseout = funcOut1;
//
// function func1() {
//     elem1.style.display = 'block';
//     elem1.style.top = event.pageY-390 +'px';
//     elem1.style.left = event.pageX+10 +'px';
// }
//
// function funcOut1() {
//     elem1.style.display = 'none';
// }
//
//
//
//
// var elem2 = document.getElementById('shadow6')
//
// var cas2 = document.getElementById('li6');
//
// cas2.onmousemove = func2;
// cas2.onmouseout = funcOut2;
//
// function func2() {
//     elem2.style.display = 'block';
//     elem2.style.top = event.pageY-390 +'px';
//     elem2.style.left = event.pageX+10 +'px';
// }
//
// function funcOut2() {
//     elem2.style.display = 'none';
// }
//


