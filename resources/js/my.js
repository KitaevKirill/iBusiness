var nameplates = document.getElementsByClassName('nameplate');
// var hoveres = document.getElementsByClassName('hover');
var elem1 = document.getElementById('shadow3');

nameplates.forEach(function(element) {
    element.onmousemove = func;
    element.onmouseout = funcOut;
});

function func() {
    elem1.style.display = 'block';
    elem1.style.top = event.pageY-390 +'px';
    elem1.style.left = event.pageX+10 +'px';
}

function funcOut() {
    elem1.style.display = 'none';
}




// var elem1 = document.getElementById('shadow3');
// var cas1 = document.getElementById('li3');
//
// cas1.onmousemove = func;
// cas1.onmouseout = funcOut;

// function func1() {
//     elem1.style.display = 'block';
//     elem1.style.top = event.pageY-390 +'px';
//     elem1.style.left = event.pageX+10 +'px';
// }
//
// function funcOut1() {
//     elem1.style.display = 'none';
// }




// var elem2 = document.getElementById('shadow6')
//
// var cas2 = document.getElementById('li6');
//
// cas2.onmousemove = func;
// cas2.onmouseout = funcOut;
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



// window.onload = function() {
//     var elements = getElementsByClass('body');
//     for (var i=0; i<elements.length; i++)  {
//         elements[i].className = elements[i].className.replace('body', 'pBody')
//     }
// }


