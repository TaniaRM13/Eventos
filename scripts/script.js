document.addEventListener("DOMContentLoaded", function() {
    revisarSelected();
});

function revisarSelected() {
    const checkBoxes = document.querySelectorAll('.selector');
    console.log(checkBoxes);
    checkBoxes.forEach(box => {
        box.addEventListener("click", e => e.target.checked === true ? habilitar(e.target) : deshabilitar(e.target));
    });
}

function habilitar(node) {
    const parentN = node.parentNode.parentNode;
    const arr = parentN.querySelectorAll('.entrada');
    arr.forEach( a => a.removeAttribute('disabled'));
}

function deshabilitar(node) {
    const parentN = node.parentNode.parentNode;
    const arr = parentN.querySelectorAll('.entrada');
    arr.forEach( a => a.setAttribute('disabled',''));
}