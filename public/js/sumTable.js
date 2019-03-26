// var table = document.getElementsByClassName('innerTable');
// for (var i = 0; i < table.length; i++) {
//     table[i].onclick = func;
// }

var table = document.getElementsByClassName('innerTable');
for (var i = 0; i < table.length; i++) {
    table[i].addEventListener('click', func);
}

function func() {
    if (this.style.fontSize > '13px') {
        this.style.fontSize = '6px';
    } else {
        this.style.fontSize = '14px';
    }
}


