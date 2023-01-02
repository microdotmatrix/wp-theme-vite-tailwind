module.exports = {
  content: [
    // https://tailwindcss.com/docs/content-configuration
    './**/*.php',
    './inc/**/*.php',
    './templates/**/*.php',
    './safelist.txt'
    //'./**/*.php', // recursive search for *.php (be aware on every file change it will go even through /node_modules which can be slow, read doc)
  ],
  safelist: [
    'text-center'
    //{
    //  pattern: /text-(white|black)-(200|500|800)/
    //}
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        'primary': '#1ba3aa',
        'secondary': '#f84292',
        'light': '#f6f1cf',
        'mid': '#97acb7',
        'dark': '#232323',
        'caution': '#f6b437',
        'highlight': '#efc46c',
        'gray': '#4e4c4c',
        'dark': '#090b0c',
      }
    }
  },
  plugins: []
}