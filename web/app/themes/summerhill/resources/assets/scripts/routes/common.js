import initMobile from '../components/mobileMenu';
import initSlider from '../components/slider';
import initFormAddon from '../components/formAddon';

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    initMobile();
    initSlider();
    initFormAddon();
    require('../components/formHandler');
    require('../components/formsInteraction');
    require('../components/map');
  },
};
