function addGridColClasses() {
    let gridCol = document.querySelectorAll('.filament-tiptap-grid');
    gridCol.forEach((col) => {
        let gridColValue = col.attributes.cols.value;

        if (col.attributes.type.value === 'responsive') {
            col.classList.add('filament-tiptap-grid-' + gridColValue);
        }
        if (col.attributes.type.value === 'fixed') {
            col.classList.add('filament-tiptap-grid-fixed-' + gridColValue);
        }

        if (col.attributes.type.value === "asymetric-right-thirds") {
            col.classList.add('filament-tiptap-grid-asymetric-right-thirds');
        } else if (col.attributes.type.value === "asymetric-left-thirds") {
            col.classList.add('filament-tiptap-grid-asymetric-left-thirds');
        } else if (col.attributes.type.value === "asymetric-right-fourths") {
            col.classList.add('filament-tiptap-grid-asymetric-right-fourths');
        } else if (col.attributes.type.value === "asymetric-left-fourths") {
            col.classList.add('filament-tiptap-grid-asymetric-left-fourths');
        }

    });
}



function tiptapHurdleColors() {
    let hurdle = document.querySelectorAll('.filament-tiptap-hurdle');
    hurdle.forEach((hurdle) => {

        let hurdleColor = hurdle.dataset.color;
        hurdle.classList.add(hurdleColor);
    });
}
addGridColClasses();
tiptapHurdleColors();
