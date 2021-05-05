function handleMobileMenu() {
  const hamburger = document.getElementById('hamburger');

  hamburger.addEventListener('click', function () {
    if (window.outerWidth > 1200) return;
    this.parentNode.classList.toggle('is-menu-open');
    const overflow = this.parentNode.classList.contains('is-menu-open')
      ? 'hidden'
      : 'scroll';
    document.body.style.overflowY = overflow;
  });
}
export default function initMobile() {
  handleMobileMenu();
}
