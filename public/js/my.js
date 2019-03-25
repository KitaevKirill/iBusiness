// var nameplates = document.getElementsByClassName('nameplate');
// var hoveres = document.getElementsByClassName('hover');
// // var elem1 = document.getElementById('shadow3');
//
// for (key in nameplates) {
//     nameplates[key].onmousemove = func();
//     // nameplates[key].onmouseout = funcOut();
// }
//
// function func() {
//     alert(nameplates[key].id);
//     // alert(hoveres[1].id)
//     // hoveres['shadow3'].style.display = 'block';
//     // hoveres['shadow3'].style.top = event.pageY-390 +'px';
//     // hoveres['shadow3'].style.left = event.pageX+10 +'px';
// }
//
// // function funcOut() {
// //     hoveres['shadow3'].style.display = 'none';
// // }




var elem1 = document.getElementById('shadow3');
var cas1 = document.getElementById('li3');

cas1.onmousemove = func1;
cas1.onmouseout = funcOut1;

function func1() {
    elem1.style.display = 'block';
    elem1.style.top = event.pageY-390 +'px';
    elem1.style.left = event.pageX+10 +'px';
}

function funcOut1() {
    elem1.style.display = 'none';
}




var elem2 = document.getElementById('shadow6')

var cas2 = document.getElementById('li6');

cas2.onmousemove = func2;
cas2.onmouseout = funcOut2;

function func2() {
    elem2.style.display = 'block';
    elem2.style.top = event.pageY-390 +'px';
    elem2.style.left = event.pageX+10 +'px';
}

function funcOut2() {
    elem2.style.display = 'none';
}



// window.onload = function() {
//     var elements = getElementsByClass('body');
//     for (var i=0; i<elements.length; i++)  {
//         elements[i].className = elements[i].className.replace('body', 'pBody')
//     }
// }


