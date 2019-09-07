// Vanilla JavaScript Scroll to Anchor
// @ https://perishablepress.com/vanilla-javascript-scroll-anchor/

(function() {
    scrollTo();


    window.addEventListener("scroll", event => {
      let fromTop = window.scrollY + 300;

      const links = document.querySelectorAll('.scroll');

      links.forEach(link => {
        let section = document.querySelector(link.hash);

        if (
          section.offsetTop <= fromTop &&
          section.offsetTop + section.offsetHeight > fromTop
        ) {
          link.classList.add("site-navigation__link--active");
        } else {
          link.classList.remove("site-navigation__link--active");
        }
      });
    });

    const responsiveMenuLinks = document.querySelectorAll('.site-navigation__mobile .site-navigation__link');
    responsiveMenuLinks.forEach(each => (each.onclick = openResponsiveMenu));

})();

function openResponsiveMenu(e) {
    e.preventDefault();
    console.log('here');
    var link = this;
    var html = link.innerHTML;
    link.innerHTML = (html=='Menu') ? 'Close' : 'Menu';
    const nav = document.querySelector('.site-navigation');
    nav.classList.toggle('site-navigation--expanded');
    const menu = document.querySelector('.site-navigation__menu');
    menu.classList.toggle('tr-basic--enter');
    const logol = document.querySelector('.site-navigation__logo__left');
    logol.classList.toggle('site-navigation__logo__expanded');
    const logor = document.querySelector('.site-navigation__logo__right');
    logor.classList.toggle('site-navigation__logo__expanded');

}

function scrollTo() {
    const links = document.querySelectorAll('.scroll');
    links.forEach(each => (each.onclick = scrollAnchors));
}

function scrollAnchors(e, respond = null) {
    const distanceToTop = el => Math.floor(el.getBoundingClientRect().top);
    e.preventDefault();
    var targetID = (respond) ? respond.getAttribute('href') : this.getAttribute('href');
    const targetAnchor = document.querySelector(targetID);
    if (!targetAnchor) return;
    const originalTop = distanceToTop(targetAnchor);
    var link = this;
    window.scrollBy({ top: originalTop, left: 0, behavior: 'smooth' });
    const checkIfDone = setInterval(function() {
        const atBottom = window.innerHeight + window.pageYOffset >= document.body.offsetHeight - 2;
        if (distanceToTop(targetAnchor) === 0 || atBottom) {
            targetAnchor.tabIndex = '-1';
            targetAnchor.focus();
            window.history.pushState('', '', targetID);
            clearInterval(checkIfDone);
        }
    }, 250);
}
