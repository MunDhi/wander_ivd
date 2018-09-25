'use strict';

var _aos = require('./../sass/aos.scss');

var _aos2 = _interopRequireDefault(_aos);

var _lodash = require('lodash.throttle');

var _lodash2 = _interopRequireDefault(_lodash);

var _lodash3 = require('lodash.debounce');

var _lodash4 = _interopRequireDefault(_lodash3);

var _observer = require('./libs/observer');

var _observer2 = _interopRequireDefault(_observer);

var _detector = require('./helpers/detector');

var _detector2 = _interopRequireDefault(_detector);

var _handleScroll = require('./helpers/handleScroll');

var _handleScroll2 = _interopRequireDefault(_handleScroll);

var _prepare = require('./helpers/prepare');

var _prepare2 = _interopRequireDefault(_prepare);

var _elements = require('./helpers/elements');

var _elements2 = _interopRequireDefault(_elements);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Private variables
 */
/**
 * *******************************************************
 * AOS (Animate on scroll) - wowjs alternative
 * made to animate elements on scroll in both directions
 * *******************************************************
 */

var $aosElements = [];

// Modules & helpers

var initialized = false;

/**
 * Default options
 */
var options = {
  offset: 120,
  delay: 0,
  easing: 'ease',
  duration: 400,
  disable: false,
  once: false,
  startEvent: 'DOMContentLoaded',
  throttleDelay: 99,
  debounceDelay: 50,
  disableMutationObserver: false
};

/**
 * Refresh AOS
 */
var refresh = function refresh() {
  var initialize = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;

  // Allow refresh only when it was first initialized on startEvent
  if (initialize) initialized = true;

  if (initialized) {
    // Extend elements objects in $aosElements with their positions
    $aosElements = (0, _prepare2.default)($aosElements, options);
    // Perform scroll event, to refresh view and show/hide elements
    (0, _handleScroll2.default)($aosElements, options.once);

    return $aosElements;
  }
};

/**
 * Hard refresh
 * create array with new elements and trigger refresh
 */
var refreshHard = function refreshHard() {
  $aosElements = (0, _elements2.default)();
  refresh();
};

/**
 * Disable AOS
 * Remove all attributes to reset applied styles
 */
var disable = function disable() {
  $aosElements.forEach(function (el, i) {
    el.node.removeAttribute('data-aos');
    el.node.removeAttribute('data-aos-easing');
    el.node.removeAttribute('data-aos-duration');
    el.node.removeAttribute('data-aos-delay');
  });
};

/**
 * Check if AOS should be disabled based on provided setting
 */
var isDisabled = function isDisabled(optionDisable) {
  return optionDisable === true || optionDisable === 'mobile' && _detector2.default.mobile() || optionDisable === 'phone' && _detector2.default.phone() || optionDisable === 'tablet' && _detector2.default.tablet() || typeof optionDisable === 'function' && optionDisable() === true;
};

/**
 * Initializing AOS
 * - Create options merging defaults with user defined options
 * - Set attributes on <body> as global setting - css relies on it
 * - Attach preparing elements to options.startEvent,
 *   window resize and orientation change
 * - Attach function that handle scroll and everything connected to it
 *   to window scroll event and fire once document is ready to set initial state
 */
var init = function init(settings) {
  options = Object.assign(options, settings);

  // Create initial array with elements -> to be fullfilled later with prepare()
  $aosElements = (0, _elements2.default)();

  // Detect not supported browsers (<=IE9)
  // http://browserhacks.com/#hack-e71d8692f65334173fee715c222cb805
  var browserNotSupported = document.all && !window.atob;

  /**
   * Don't init plugin if option `disable` is set
   * or when browser is not supported
   */
  if (isDisabled(options.disable) || browserNotSupported) {
    return disable();
  }

  /**
   * Set global settings on body, based on options
   * so CSS can use it
   */
  document.querySelector('body').setAttribute('data-aos-easing', options.easing);
  document.querySelector('body').setAttribute('data-aos-duration', options.duration);
  document.querySelector('body').setAttribute('data-aos-delay', options.delay);

  /**
   * Handle initializing
   */
  if (options.startEvent === 'DOMContentLoaded' && ['complete', 'interactive'].indexOf(document.readyState) > -1) {
    // Initialize AOS if default startEvent was already fired
    refresh(true);
  } else if (options.startEvent === 'load') {
    // If start event is 'Load' - attach listener to window
    window.addEventListener(options.startEvent, function () {
      refresh(true);
    });
  } else {
    // Listen to options.startEvent and initialize AOS
    document.addEventListener(options.startEvent, function () {
      refresh(true);
    });
  }

  /**
   * Refresh plugin on window resize or orientation change
   */
  window.addEventListener('resize', (0, _lodash4.default)(refresh, options.debounceDelay, true));
  window.addEventListener('orientationchange', (0, _lodash4.default)(refresh, options.debounceDelay, true));

  /**
   * Handle scroll event to animate elements on scroll
   */
  window.addEventListener('scroll', (0, _lodash2.default)(function () {
    (0, _handleScroll2.default)($aosElements, options.once);
  }, options.throttleDelay));

  /**
   * Observe [aos] elements
   * If something is loaded by AJAX
   * it'll refresh plugin automatically
   */
  if (!options.disableMutationObserver) {
    (0, _observer2.default)('[data-aos]', refreshHard);
  }

  return $aosElements;
};

/**
 * Export Public API
 */

module.exports = {
  init: init,
  refresh: refresh,
  refreshHard: refreshHard
};