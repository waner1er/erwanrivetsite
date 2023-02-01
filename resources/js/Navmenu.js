function navmenu() {
    const navButton = document.querySelector('.nav-menu__burger');

    navButton.addEventListener('click', function () {
        document.querySelector('.nav-menu__overlay').classList.toggle('active');
        document.querySelector('.nav-menu').classList.toggle('active');
        document.querySelector('html').classList.toggle('no-scroll');
        this.classList.toggle('active');
    });
    window.onresize = function () {
        if (document.querySelector("body").clientWidth > 1170) {
            document.querySelector('.nav-menu__overlay').classList.remove('active');
            document.querySelector('.nav-menu').classList.remove('active');
            document.querySelector('html').classList.remove('no-scroll');
            document.querySelector('.nav-menu__burger').classList.remove('active');
        }
    };
}


navmenu();
