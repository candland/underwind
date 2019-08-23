const config = {
  plugins: {
    'postcss-import': {},
    'tailwindcss': 'tailwind.config.js',
    'postcss-nested': {},
    'autoprefixer': {}
  }
}

if (process.env.NODE_ENV === 'production') {
  config.plugins['@fullhuman/postcss-purgecss'] = {
    content: ['./src/**/*.php', './src/**/*.svg', './src/**/*.js'],
    extractors: [
      {
        extensions: ['php', 'svg', 'js'],
        extractor: class TailwindExtractor {
          static extract (content) {
            return content.match(/[A-Za-z0-9-_:/]+/g) || []
          }
        }
      }
    ]
  }
  config.plugins['cssnano'] = {}
}

module.exports = config
