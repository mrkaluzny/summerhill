export default function handleMobileMenu() {
  console.log('Initiated mobile menu');
  $('#hamburger').on('click', function () {
    console.log('burger clicked');
    let $parent = $(this).parent();
    $parent.toggleClass('is-menu-open');
    const overflow = $parent.hasClass('is-menu-open') ? 'hidden' : 'scroll';
    document.body.style.overflowY = overflow;
  });
}
