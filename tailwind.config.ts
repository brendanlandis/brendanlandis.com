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
        tanker: ['var(--font-tanker)'],
        bea: ['var(--font-bea)'],
        fortune: ['var(--font-fortune)'],
        roadrunner: ['var(--font-roadrunner)'],
        rosemary: ['var(--font-rosemary)'],
        tommytokyo: ['var(--font-tommytokyo)'],
      },
    },
  },
  plugins: [require('@tailwindcss/forms')],
} satisfies Config;
