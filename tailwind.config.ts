import type { Config } from 'tailwindcss';

export default {
  content: [
    './pages/**/*.{js,ts,jsx,tsx,mdx}',
    './components/**/*.{js,ts,jsx,tsx,mdx}',
    './app/**/*.{js,ts,jsx,tsx,mdx}',
  ],
  theme: {
    extend: {
      colors: {
        background: 'var(--background)',
        foreground: 'var(--foreground)',
      },
      fontFamily: {
        movementBlack: ['var(--font-movement-black)'],
        movementThin: ['var(--font-movement-thin)'],
        movementVariable: ['var(--font-movement-variable)'],
        synonym: ['var(--font-synonym)'],
      },
    },
  },
  plugins: [],
} satisfies Config;
