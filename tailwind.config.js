/** @type {import('tailwindcss').Config} */

let font_base = 16;
let font_scale = 1.25;

let h6 = font_base / font_base;
let h5 = h6 * font_scale;
let h4 = h5 * font_scale;
let h3 = h4 * font_scale;
let h2 = h3 * font_scale;
let h1 = h2 * font_scale;

module.exports = {
  darkMode: ["class"],
  content: ["./**/*.html"],
  prefix: "",
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        xl: "1.5rem",
      },
      screens: {
        sm: "576px",
        md: "768px",
        lg: "1024px",
        xl: "1280px",
        "2xl": "1536px",
      },
    },
    extend: {
      colors: {
        border: "hsl(var(--border))",
        input: "hsl(var(--input))",
        ring: "hsl(var(--ring))",
        background: "hsl(var(--background))",
        foreground: "hsl(var(--foreground))",
        primary: {
          DEFAULT: "hsl(var(--primary))",
          foreground: "hsl(var(--primary-foreground))",
        },
        secondary: {
          DEFAULT: "hsl(var(--secondary))",
          foreground: "hsl(var(--secondary-foreground))",
        },
        destructive: {
          DEFAULT: "hsl(var(--destructive))",
          foreground: "hsl(var(--destructive-foreground))",
        },
        muted: {
          DEFAULT: "hsl(var(--muted))",
          foreground: "hsl(var(--muted-foreground))",
        },
        accent: {
          DEFAULT: "hsl(var(--accent))",
          foreground: "hsl(var(--accent-foreground))",
        },
        popover: {
          DEFAULT: "hsl(var(--popover))",
          foreground: "hsl(var(--popover-foreground))",
        },
        card: {
          DEFAULT: "hsl(var(--card))",
          foreground: "hsl(var(--card-foreground))",
        },
        link: "hsl(var(--link))",
      },
      fontSize: {
        xs: `${font_base - 4}px`,
        sm: `${font_base - 2}px`,
        base: `${font_base}px`,
        lg: `${font_base + 2}px`,
        xl: `${font_base + 4}px`,
        h1: h1 + "rem",
        "h1-sm": h1 * 0.77 + "rem",
        h2: h2 + "rem",
        "h2-sm": h2 * 0.77 + "rem",
        h3: h3 + "rem",
        "h3-sm": h3 * 0.77 + "rem",
        h4: h4 + "rem",
        h5: h5 + "rem",
        h6: h6 + "rem",
      },
      fontFamily: {
        body: ["'Montserrat'", "Arial", "sans-serif"],
        heading: ["'Bungee'", "serif"],
      },
      borderRadius: {
        lg: "var(--radius)",
        md: "calc(var(--radius) - 2px)",
        sm: "calc(var(--radius) - 4px)",
      },
    },
  },
  plugins: [],
};
