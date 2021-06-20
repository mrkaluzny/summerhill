import handleMobileMenu from '../components/mobileMenu';
import initSlider from '../components/slider';
import initFormAddon from '../components/formAddon';

export default {
  init() {
    // JavaScript to be fired on all pages
    handleMobileMenu();
    initSlider();
    initFormAddon();
    require('../components/formHandler');
  },
  finalize() {
    require('../components/map');
  },
};
