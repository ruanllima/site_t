/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      keyframes: {
        shake: {
         '0%': { transform: 'translate(10px)'},
          '10%': { transform: 'translate(-10px)'},
          '20%': { transform: 'translate(-7px)'},
          '30%': { transform: 'translate(7px)'},
          '40%': { transform: 'translate(10px)'},
          '50%': { transform: 'translate(-10px)'},
          '60%': { transform: 'translate(-7px)'},
          '70%': { transform:' translate(7px)'},
          '80%': { transform: 'translate(-10px)'},
          '90%': { transform: 'translate(10px)'},
          '100%': { transform: 'translate(10px)'},
        },
        bounce_alert: {
         '10%': { transform:'translateY(0%)'},
         '30%': { transform:'translateY(-15%)'},
         '40%': { transform:'translateY(0%)'},
         '55%': { transform:'translateY(-7%)'},
         '70%': { transform:'translateY(0%)'},
         '80%': { transform:'translateY(-3%)'},
          '90%': { transform:'translateY(0)'},
      },
      fadeIn: {
        '0%': { opacity: '0' },
        '100%': { opacity: '1' },
      },
      fadeOut: {
        '0%': { opacity: '1' },
        '100%': { opacity: '0' },
      },
      keys_loading: {
          '0%, 80%, 100%': {
            opacity: '0.75',
            boxShadow: '0 0 #076fe5',
            height: '8rem',
          },
          '40%': {
            opacity: '1',
            boxShadow: '0 -2rem #076fe5',
            height: '10rem',
          },
        },
      },
      animation: {
        'shake-animation': 'shake 700ms ease-out',
        'bounce-alert': 'bounce_alert 1s ease-in-out',
        'fadeIn': 'fadeIn 1s ease-in-out',
        'fadeOut': 'fadeOut 2s ease-in-out',
        'keys-loading': 'keys_loading 0.8s infinite ease-in-out'
      }
    },
  },
  plugins: [
  ],
}

