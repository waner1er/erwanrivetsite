function navmenu() {
    const navButton = document.querySelector('.nav-menu__burger');

    navButton.addEventListener('click', function () {
        document.querySelector('.nav-menu__overlay').classList.toggle('active');
        document.querySelector('.nav-menu').classList.toggle('active');
        document.querySelector('html').classList.toggle('no-scroll');
        this.classList.toggle('active');
    });
}

navmenu();
