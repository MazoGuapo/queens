const colors = require('tailwindcss/colors')

module.exports = {
  darkMode: false,
  theme: {
    screens: {
      'ipad': '768px',
      'ipadH': '1024px',
      'laptop': '1200px',
      'desktop': '1400px',
      'wide': '1600px'
    },
    colors: {
      primary: {
        light: '#948B82',
        DEFAULT: '#645E58',
        dark: '#433D37',
      },
      secondary: {
        light: '#FFFFFF',
        DEFAULT: '#FBF8EF',
        dark: '#D0C9BE',
      },
      button: {
        light: '#FBF8EF',
        DEFAULT: '#D0C9BE',
        dark: '#948B82',
      },
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.trueGray,
      indigo: colors.indigo,
      red: colors.rose,
      yellow: colors.amber,
    },
    maxWidth: {
      '10': '10%',
      '20': '20%',
      '25': '25%',
      '30': '30%',
      '40': '40%',
      '50': '50%',
      '60': '60%',
      '70': '70%',
      '75': '75%',
      '80': '80%',
      '90': '90%',
     },
    fontFamily: {
      primary: ['Canela', 'serif'],
      secondary: ['GTAmerica', 'sans-serif'],
    },
    fontSize: {
      h0: ['100px', '110px'],
      h1: ['45px', '47px'],
      h2: ['38px', '43px'],
      h3: ['30px', '36px'],
      h4: ['20px', '25px'],
      h5: ['18px', '24px'],
      h6: ['16px', '16px'],
      h7: ['14px', '20px'],
      h8: ['12px', '12px'],
      base: ['18px', '24px'],
      tiny: ['12px', '12px'],
    },
  },
}
