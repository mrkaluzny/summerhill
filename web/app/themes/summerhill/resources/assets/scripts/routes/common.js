import handleMobileMenu from '../components/mobileMenu';
import initMap from '../components/map';
import initSlider from '../components/slider';
import initFormAddon from '../components/formAddon';

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    handleMobileMenu();
    initSlider();
    initFormAddon();
    require('../components/formHandler');
    // require('../components/formsInteraction');
    initMap();
  },
};
