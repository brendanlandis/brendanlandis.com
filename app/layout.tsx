import type { Metadata } from 'next';
import localFont from 'next/font/local';
import './css/screen.css';
import Image from 'next/image';
import copperImage from './img/copper.jpg';
import { Yarn } from '@phosphor-icons/react/dist/ssr';
import ThemeToggle from './components/themeToggle';

export const metadata: Metadata = {
  title: 'Brendan Landis',
  description: 'Designer, developer, musician, reader',
};

const fontMovementVariable = localFont({
  src: './fonts/MovementV.ttf',
  variable: '--font-movement-variable',
});
const fontSynonym = localFont({
  src: './fonts/Synonym-Variable.woff2',
  variable: '--font-synonym',
});

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body
        className={`
          ${fontMovementVariable.variable}
          ${fontSynonym.variable}
        `}
      >
        <div id="bgTexture">
          <Image src={copperImage} alt="" width={2048} height={2048} />
        </div>
        <header>
          <ThemeToggle />
          <div id="headerIcon">
            <Yarn size={80} weight="thin" />
          </div>
        </header>
        <main>{children}</main>
        <footer></footer>
      </body>
    </html>
  );
}
