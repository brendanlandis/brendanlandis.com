import type { Metadata } from 'next';
import './css/screen.css';

export const metadata: Metadata = {
  title: 'Brendan Landis',
  description: 'Designer, developer, musician, reader',
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body>
        <header>
          <h1>Brendan Landis</h1>
        </header>
        <main>{children}</main>
        <footer>it's the footer wow</footer>
      </body>
    </html>
  );
}
