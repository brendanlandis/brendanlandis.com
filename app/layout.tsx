import type { Metadata } from 'next';
import localFont from 'next/font/local';
import './css/screen.css';
import Image from 'next/image';
import copperImage from './img/copper.jpg';
import { Yarn } from '@phosphor-icons/react/dist/ssr';

export const metadata: Metadata = {
  title: 'Brendan Landis',
  description: 'Designer, developer, musician, reader',
};

const fontMovementBlack = localFont({
  src: './fonts/Movement-DirectBlack.woff2',
  variable: '--font-movement-black',
});
const fontMovementThin = localFont({
  src: './fonts/Movement-Directthin.woff2',
  variable: '--font-movement-thin',
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
          ${fontMovementBlack.variable}
          ${fontMovementThin.variable}
        `}
      >
        <div id="bgTexture">
          <Image src={copperImage} alt="" width={2048} height={2048} />
        </div>
        <header>
          <div id="headerIcon">
            <Yarn size={100} weight="thin" />
          </div>
        </header>
        <main>{children}</main>
        <footer></footer>
      </body>
    </html>
  );
}
