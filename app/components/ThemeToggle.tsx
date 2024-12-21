'use client';
import { useTheme } from '../hooks/useTheme';
import { MoonStars, SunHorizon } from '@phosphor-icons/react';

export default function ThemeToggle() {
  const { theme, toggleTheme } = useTheme();

  return (
    <button onClick={toggleTheme} id="themeToggle">
      {theme === 'light' ? <MoonStars size={40} weight="regular" /> : <SunHorizon size={40} weight="regular" />}
    </button>
  );
}
