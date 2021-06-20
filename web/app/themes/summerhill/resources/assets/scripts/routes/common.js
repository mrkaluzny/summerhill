import handleMobileMenu from '../components/mobileMenu';
import initSlider from '../components/slider';
import initFormAddon from '../components/formAddon';

export default {
  init() {
    // JavaScript to be fired on all pages
    /* eslint-disable */
    require('../vendor/picker.js');
    require('../vendor/picker.date.js');
    /* eslint-enable */
    handleMobileMenu();
    initSlider();
    initFormAddon();
    require('../components/formHandler');
    require('../components/formsInteraction');
  },
  finalize() {
    require('../components/map');
  },
};
