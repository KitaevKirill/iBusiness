var elem1 = document.getElementById('shadow1');
var elem2 = document.getElementById('shadow2')
var cas1 = document.getElementById('li3');
var cas2 = document.getElementById('li6');

cas1.onmousemove = func;
cas1.onmouseout = funcOut;

cas2.onmousemove = func2;
cas2.onmouseout = funcOut2;

function func() {
    elem1.style.display = 'block';
    elem1.style.top = event.pageY-390 +'px';
    elem1.style.left = event.pageX+10 +'px';
}

function func2() {
    elem2.style.display = 'block';
    elem2.style.top = event.pageY-390 +'px';
    elem2.style.left = event.pageX+10 +'px';
}

function funcOut2() {
    elem2.style.display = 'none';
}

function funcOut() {
    elem1.style.display = 'none';
}

// window.onload = function() {
//     var elements = getElementsByClass('body');
//     for (var i=0; i<elements.length; i++)  {
//         elements[i].className = elements[i].className.replace('body', 'pBody')
//     }
// }


