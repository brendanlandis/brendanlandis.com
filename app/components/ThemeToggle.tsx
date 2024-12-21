'use client';
import { useTheme } from '../hooks/useTheme';
import { MoonStars, SunHorizon } from '@phosphor-icons/react';

export default function ThemeToggle() {
  const { theme, toggleTheme } = useTheme();

  return (
    <button onClick={toggleTheme} className="themeToggle">
      {theme === 'light' ? <MoonStars size={40} weight="thin" /> : <SunHorizon size={40} weight="thin" />}
    </button>
  );
}
