let colors = {
  primary: "#0F749F",
  transparent: "transparent",
  white: "#ffffff",
  black: "#231B08",
  "black-darker": "#333333",
  "black-darkest": "#000000",
  "grey-darkest": "#464950",
  "grey-darker": "#5A5A5A",
  "grey-dark": "#707070",
  grey: "#B1B1B1",
  "grey-light": "#F0EDED",
  "grey-lighter": "#f1f5f8",
  "grey-lightest": "#F8F8F8",
  "grey-ultralight": "#ececec",
  "almost-white": "#fafafa",
  blue: "#0B7EAF",
  "blue-dark": "#546D85",
};

module.exports = {
  colors: colors,

  screens: {
    mobile: "414px",
    sm: "576px",
    md: "768px",
    lg: "1024px",
    xl: "1200px",
    xxl: "1400px",
  },
  fonts: {
    souvenir: [
      "ITC Souvenir STD",
      "system-ui",
      "BlinkMacSystemFont",
      "-apple-system",
      "Segoe UI",
      "Roboto",
      "Oxygen",
      "Ubuntu",
      "Cantarell",
      "Fira Sans",
      "Droid Sans",
      "Helvetica Neue",
      "sans-serif",
    ],
    roboto: [
      "Roboto",
      "system-ui",
      "BlinkMacSystemFont",
      "-apple-system",
      "Segoe UI",
      "Roboto",
      "Oxygen",
      "Ubuntu",
      "Cantarell",
      "Fira Sans",
      "Droid Sans",
      "Helvetica Neue",
      "sans-serif",
    ],
    secondary: [
      "system-ui",
      "BlinkMacSystemFont",
      "-apple-system",
      "Segoe UI",
      "Roboto",
      "Oxygen",
      "Ubuntu",
      "Cantarell",
      "Fira Sans",
      "Droid Sans",
      "Helvetica Neue",
      "sans-serif",
    ],
  },

  textSizes: {
    xs: "0.75rem",
    sm: "0.9375rem",
    base: "1rem",
    lg: "1.125rem",
    h6: "1.25rem",
    h5: "1.5rem",
    h4: "1.75rem",
    h3: "2.25rem",
    h2: "3rem",
    h1: "4rem",
  },

  fontWeights: {
    hairline: 100,
    thin: 200,
    light: 300,
    normal: 400,
    medium: 500,
    semibold: 600,
    bold: 700,
    extrabold: 800,
    black: 900,
  },

  leading: {
    none: 1,
    tight: 1.25,
    regular: 1.33,
    normal: 1.5,
    average: 1.66,
    medium: 1.75,
    loose: 2,
  },

  tracking: {
    tight: "-0.05em",
    normal: "0",
    wide: "0.05em",
    wider: "0.1em",
    widest: "0.2em",
  },

  textColors: colors,
  backgroundColors: colors,
  backgroundSize: {
    auto: "auto",
    cover: "cover",
    contain: "contain",
  },

  borderWidths: {
    default: "1px",
    0: "0",
    1: "0.5px",
    2: "2px",
    4: "4px",
    8: "8px",
  },

  borderColors: global.Object.assign({ default: colors["grey-light"] }, colors),

  borderRadius: {
    none: "0",
    sm: ".125rem",
    default: ".25rem",
    lg: ".5rem",
    3: "3px",
    full: "9999px",
  },

  width: {
    auto: "auto",
    px: "1px",
    1: "0.25rem",
    2: "0.5rem",
    3: "0.75rem",
    4: "1rem",
    5: "1.25rem",
    6: "1.5rem",
    8: "2rem",
    10: "2.5rem",
    12: "3rem",
    16: "4rem",
    24: "6rem",
    32: "8rem",
    48: "12rem",
    64: "16rem",
    "1/2": "50%",
    "1/3": "33.33333%",
    "2/3": "66.66667%",
    "1/4": "25%",
    "3/4": "75%",
    "1/5": "20%",
    "2/5": "40%",
    "3/5": "60%",
    "4/5": "80%",
    "1/6": "16.66667%",
    "5/6": "83.33333%",
    full: "100%",
    screen: "100vw",
  },

  /*
  |-----------------------------------------------------------------------------
  | Height                                  https://tailwindcss.com/docs/height
  |-----------------------------------------------------------------------------
  |
  | Here is where you define your height utility sizes. These can be
  | percentage based, pixels, rems, or any other units. By default
  | we provide a sensible rem based numeric scale plus some other
  | common use-cases. You can, of course, modify these values as
  | needed.
  |
  | Class name: .h-{size}
  |
  */

  height: {
    auto: "auto",
    px: "1px",
    1: "0.25rem",
    2: "0.5rem",
    3: "0.75rem",
    4: "1rem",
    5: "1.25rem",
    6: "1.5rem",
    8: "2rem",
    10: "2.5rem",
    12: "3rem",
    16: "4rem",
    24: "6rem",
    32: "8rem",
    48: "12rem",
    64: "16rem",
    full: "100%",
    screen: "100vh",
  },

  /*
  |-----------------------------------------------------------------------------
  | Minimum width                        https://tailwindcss.com/docs/min-width
  |-----------------------------------------------------------------------------
  |
  | Here is where you define your minimum width utility sizes. These can
  | be percentage based, pixels, rems, or any other units. We provide a
  | couple common use-cases by default. You can, of course, modify
  | these values as needed.
  |
  | Class name: .min-w-{size}
  |
  */

  minWidth: {
    0: "0",
    full: "100%",
  },

  /*
  |-----------------------------------------------------------------------------
  | Minimum height                      https://tailwindcss.com/docs/min-height
  |-----------------------------------------------------------------------------
  |
  | Here is where you define your minimum height utility sizes. These can
  | be percentage based, pixels, rems, or any other units. We provide a
  | few common use-cases by default. You can, of course, modify these
  | values as needed.
  |
  | Class name: .min-h-{size}
  |
  */

  minHeight: {
    0: "0",
    full: "100%",
    screen: "100vh",
  },

  /*
  |-----------------------------------------------------------------------------
  | Maximum width                        https://tailwindcss.com/docs/max-width
  |-----------------------------------------------------------------------------
  |
  | Here is where you define your maximum width utility sizes. These can
  | be percentage based, pixels, rems, or any other units. By default
  | we provide a sensible rem based scale and a "full width" size,
  | which is basically a reset utility. You can, of course,
  | modify these values as needed.
  |
  | Class name: .max-w-{size}
  |
  */

  maxWidth: {
    xs: "20rem",
    sm: "30rem",
    md: "40rem",
    lg: "50rem",
    xl: "60rem",
    "2xl": "70rem",
    "3xl": "80rem",
    "4xl": "90rem",
    "5xl": "100rem",
    full: "100%",
  },

  /*
  |-----------------------------------------------------------------------------
  | Maximum height                      https://tailwindcss.com/docs/max-height
  |-----------------------------------------------------------------------------
  |
  | Here is where you define your maximum height utility sizes. These can
  | be percentage based, pixels, rems, or any other units. We provide a
  | couple common use-cases by default. You can, of course, modify
  | these values as needed.
  |
  | Class name: .max-h-{size}
  |
  */

  maxHeight: {
    full: "100%",
    screen: "100vh",
  },

  /*
  |-----------------------------------------------------------------------------
  | Padding                                https://tailwindcss.com/docs/padding
  |-----------------------------------------------------------------------------
  |
  | Here is where you define your padding utility sizes. These can be
  | percentage based, pixels, rems, or any other units. By default we
  | provide a sensible rem based numeric scale plus a couple other
  | common use-cases like "1px". You can, of course, modify these
  | values as needed.
  |
  | Class name: .p{side?}-{size}
  |
  */

  padding: {
    px: "1px",
    0: "0",
    1: "0.25rem",
    2: "0.5rem",
    3: "0.75rem",
    4: "1rem",
    5: "1.25rem",
    6: "1.5rem",
    8: "2rem",
    10: "2.5rem",
    12: "3rem",
    14: "3.75rem",
    16: "4rem",
    20: "5rem",
    24: "6rem",
    32: "8rem",
  },

  /*
  |-----------------------------------------------------------------------------
  | Margin                                  https://tailwindcss.com/docs/margin
  |-----------------------------------------------------------------------------
  |
  | Here is where you define your margin utility sizes. These can be
  | percentage based, pixels, rems, or any other units. By default we
  | provide a sensible rem based numeric scale plus a couple other
  | common use-cases like "1px". You can, of course, modify these
  | values as needed.
  |
  | Class name: .m{side?}-{size}
  |
  */

  margin: {
    auto: "auto",
    px: "1px",
    0: "0",
    1: "0.25rem",
    2: "0.5rem",
    3: "0.75rem",
    4: "1rem",
    5: "1.25rem",
    6: "1.5rem",
    8: "2rem",
    10: "2.5rem",
    12: "3rem",
    14: "3.75rem",
    16: "4rem",
    20: "5rem",
    24: "6rem",
    32: "8rem",
  },

  /*
  |-----------------------------------------------------------------------------
  | Negative margin                https://tailwindcss.com/docs/negative-margin
  |-----------------------------------------------------------------------------
  |
  | Here is where you define your negative margin utility sizes. These can
  | be percentage based, pixels, rems, or any other units. By default we
  | provide matching values to the padding scale since these utilities
  | generally get used together. You can, of course, modify these
  | values as needed.
  |
  | Class name: .-m{side?}-{size}
  |
  */

  negativeMargin: {
    px: "1px",
    0: "0",
    1: "0.25rem",
    2: "0.5rem",
    3: "0.75rem",
    4: "1rem",
    5: "1.25rem",
    6: "1.5rem",
    8: "2rem",
    10: "2.5rem",
    12: "3rem",
    16: "4rem",
    20: "5rem",
    24: "6rem",
    32: "8rem",
  },

  /*
  |-----------------------------------------------------------------------------
  | Shadows                                https://tailwindcss.com/docs/shadows
  |-----------------------------------------------------------------------------
  |
  | Here is where you define your shadow utilities. As you can see from
  | the defaults we provide, it's possible to apply multiple shadows
  | per utility using comma separation.
  |
  | If a `default` shadow is provided, it will be made available as the non-
  | suffixed `.shadow` utility.
  |
  | Class name: .shadow-{size?}
  |
  */

  shadows: {
    default: "0px 3px 6px #00000029",
    header: "0 3px 10px rgba(0,0,0,0.16)",
    md: "0 3px 6px 0 rgba(0,0,0,0.11)",
    lg: "0px 3px 10px #00000029",
    inner: "inset 0 2px 4px 0 rgba(0,0,0,0.06)",
    outline: "0 0 0 3px rgba(82,93,220,0.3)",
    none: "none",
  },

  /*
  |-----------------------------------------------------------------------------
  | Z-index                                https://tailwindcss.com/docs/z-index
  |-----------------------------------------------------------------------------
  |
  | Here is where you define your z-index utility values. By default we
  | provide a sensible numeric scale. You can, of course, modify these
  | values as needed.
  |
  | Class name: .z-{index}
  |
  */

  zIndex: {
    auto: "auto",
    0: 0,
    10: 10,
    20: 20,
    30: 30,
    40: 40,
    50: 50,
  },

  /*
  |-----------------------------------------------------------------------------
  | Opacity                                https://tailwindcss.com/docs/opacity
  |-----------------------------------------------------------------------------
  |
  | Here is where you define your opacity utility values. By default we
  | provide a sensible numeric scale. You can, of course, modify these
  | values as needed.
  |
  | Class name: .opacity-{name}
  |
  */

  opacity: {
    0: "0",
    25: ".25",
    50: ".5",
    75: ".75",
    100: "1",
  },

  /*
  |-----------------------------------------------------------------------------
  | SVG fill                                   https://tailwindcss.com/docs/svg
  |-----------------------------------------------------------------------------
  |
  | Here is where you define your SVG fill colors. By default we just provide
  | `fill-current` which sets the fill to the current text color. This lets you
  | specify a fill color using existing text color utilities and helps keep the
  | generated CSS file size down.
  |
  | Class name: .fill-{name}
  |
  */

  svgFill: {
    current: "currentColor",
  },

  /*
  |-----------------------------------------------------------------------------
  | SVG stroke                                 https://tailwindcss.com/docs/svg
  |-----------------------------------------------------------------------------
  |
  | Here is where you define your SVG stroke colors. By default we just provide
  | `stroke-current` which sets the stroke to the current text color. This lets
  | you specify a stroke color using existing text color utilities and helps
  | keep the generated CSS file size down.
  |
  | Class name: .stroke-{name}
  |
  */

  svgStroke: {
    current: "currentColor",
  },

  /*
  |-----------------------------------------------------------------------------
  | Modules                  https://tailwindcss.com/docs/configuration#modules
  |-----------------------------------------------------------------------------
  |
  | Here is where you control which modules are generated and what variants are
  | generated for each of those modules.
  |
  | Currently supported variants:
  |   - responsive
  |   - hover
  |   - focus
  |   - active
  |   - group-hover
  |
  | To disable a module completely, use `false` instead of an array.
  |
  */

  modules: {
    appearance: ["responsive"],
    backgroundAttachment: ["responsive"],
    backgroundColors: ["responsive", "hover", "focus"],
    backgroundPosition: ["responsive"],
    backgroundRepeat: ["responsive"],
    backgroundSize: ["responsive"],
    borderCollapse: [],
    borderColors: ["responsive", "hover", "focus"],
    borderRadius: ["responsive"],
    borderStyle: ["responsive"],
    borderWidths: ["responsive"],
    cursor: ["responsive"],
    display: ["responsive"],
    flexbox: ["responsive"],
    float: ["responsive"],
    fonts: ["responsive"],
    fontWeights: ["responsive", "hover", "focus"],
    height: ["responsive"],
    leading: ["responsive"],
    lists: ["responsive"],
    margin: ["responsive"],
    maxHeight: ["responsive"],
    maxWidth: ["responsive"],
    minHeight: ["responsive"],
    minWidth: ["responsive"],
    negativeMargin: ["responsive"],
    opacity: ["responsive"],
    outline: ["focus"],
    overflow: ["responsive"],
    padding: ["responsive"],
    pointerEvents: ["responsive"],
    position: ["responsive"],
    resize: ["responsive"],
    shadows: ["responsive", "hover", "focus"],
    svgFill: [],
    svgStroke: [],
    tableLayout: ["responsive"],
    textAlign: ["responsive"],
    textColors: ["responsive", "hover", "focus"],
    textSizes: ["responsive"],
    textStyle: ["responsive", "hover", "focus"],
    tracking: ["responsive"],
    userSelect: ["responsive"],
    verticalAlign: ["responsive"],
    visibility: ["responsive"],
    whitespace: ["responsive"],
    width: ["responsive"],
    zIndex: ["responsive"],
  },

  /*
  |-----------------------------------------------------------------------------
  | Plugins                                https://tailwindcss.com/docs/plugins
  |-----------------------------------------------------------------------------
  |
  | Here is where you can register any plugins you'd like to use in your
  | project. Tailwind's built-in `container` plugin is enabled by default to
  | give you a Bootstrap-style responsive container component out of the box.
  |
  | Be sure to view the complete plugin documentation to learn more about how
  | the plugin system works.
  |
  */

  plugins: [
    require("tailwindcss/plugins/container")({
      center: true,
      padding: "1rem",
    }),
  ],

  /*
  |-----------------------------------------------------------------------------
  | Advanced Options         https://tailwindcss.com/docs/configuration#options
  |-----------------------------------------------------------------------------
  |
  | Here is where you can tweak advanced configuration options. We recommend
  | leaving these options alone unless you absolutely need to change them.
  |
  */

  options: {
    prefix: "",
    important: "body",
    separator: ":",
  },
};
