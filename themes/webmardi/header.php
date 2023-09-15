<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full bg-white antialiased">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                colors: {
                    cyan: '#00C9FF',
                    blue: {
                        lighter: '#4040B8',
                        light: '#3333B4',
                        DEFAULT: '#2525A5',
                        dark: '#1E1E85',
                    },
                    white: '#fff',
                },
                fontFamily: {
                    sans: [
                        'Space Grotesk',
                        'ui-sans-serif',
                        'system-ui',
                        '-apple-system',
                        'BlinkMacSystemFont',
                        '"Segoe UI"',
                        'Roboto',
                        '"Helvetica Neue"',
                        'Arial',
                        '"Noto Sans"',
                        'sans-serif',
                        '"Apple Color Emoji"',
                        '"Segoe UI Emoji"',
                        '"Segoe UI Symbol"',
                        '"Noto Color Emoji"',
                    ],
                },
                fontSize: {
                    xs: [
                        '12px',
                        { lineHeight: '15px' },
                    ],
                    sm: [
                        '17px',
                        {
                            lineHeight: '23px',
                            letterSpacing: '-0.15px',
                        },
                    ],
                    base: [
                        '22px',
                        {
                            lineHeight: '28px',
                            letterSpacing: '-0.15px',
                        },
                    ],
                    lg: [
                        '27px',
                        {
                            lineHeight: '35px',
                            letterSpacing: '-0.21px',
                        },
                    ],
                    xl: [
                        '37px',
                        {
                            lineHeight: '45px',
                            letterSpacing: '-0.3px',
                        },
                    ],
                    '2xl': [
                        '65px',
                        {
                            lineHeight: '72px',
                            letterSpacing: '-0.8px',
                        },
                    ],
                },
                underlineOffset: {
                    small: '1px',
                    medium: '3px',
                },
                extend: {
                    animation: {
                        'bounce': 'bounce 0.5s infinite',
                    },
                    keyframes: {
                        bounce: {
                            '0%, 100%': { transform: 'translateY(-10%)' },
                            '50%': { transform: 'translateY(0)' },
                        }
                    }
                }
            },
            variants: {
                underlineColors: ['hover', 'focus', 'active'],
            },
        }
    </script>
    <style type="text/tailwindcss">
        .link a {
        }
    </style>
    <style type="text/css">
        .Icon_default__gEkw6 {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            align-self: center;
            top: -0.1em;
            width: 1em;
            height: 1em;
        }
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&display=swap');
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="content" class="site-content overflow-x-hidden font-sans text-sm antialiased font-medium md:text-base text-blue">

    <!-- SVG collection -->
    <div style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 19" id="youtube"><path fill="currentColor" fill-rule="evenodd" d="M4.568.194c3.749-.258 12.11-.26 15.864 0C24.496.476 24.97 2.971 25 9.5c-.03 6.54-.508 9.025-4.568 9.306-3.754.26-12.114.258-15.864 0C.504 18.524.03 16.029 0 9.5.03 2.96.508.475 4.568.194zm13.14 9.299L9.375 5.278v8.444l8.333-4.23z" clip-rule="evenodd"></path></svg><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 20" id="twitter"><path fill="currentColor" d="M25 2.368c-.92.402-1.908.672-2.946.794A5.073 5.073 0 0 0 24.31.37c-.99.578-2.088.999-3.257 1.226A5.159 5.159 0 0 0 17.308 0c-3.311 0-5.745 3.041-4.996 6.199A14.638 14.638 0 0 1 1.74.924a5.008 5.008 0 0 0 1.586 6.741 5.169 5.169 0 0 1-2.322-.632c-.056 2.34 1.647 4.528 4.114 5.015a5.22 5.22 0 0 1-2.317.086c.652 2.006 2.546 3.465 4.792 3.506A10.43 10.43 0 0 1 0 17.732 14.687 14.687 0 0 0 7.862 20c9.523 0 14.904-7.917 14.579-15.018A10.353 10.353 0 0 0 25 2.368z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 11 7" id="technical"><path stroke="currentColor" d="M3.364 1.136 1 3.5l2.364 2.364m4 0L9.728 3.5 7.364 1.136"></path></svg><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 9 9" id="special_event"><circle cx="4.5" cy="4.5" r="4" stroke="currentColor"></circle><path stroke="currentColor" d="M6.5 4.5a2 2 0 1 1-4 0"></path></svg><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 9 9" id="for_everyone"><path fill="currentColor" d="M4 0h1v2H4zm0 7h1v2H4zm5-3v1H7V4zM2 4v1H0V4zM7.33.964l.706.707-1.414 1.415-.707-.707zm-4.95 4.95.706.707-1.414 1.414-.707-.707zm5.656 1.415-.707.707-1.415-1.414.707-.707zm-4.95-4.951-.707.708L.964 1.67l.707-.707z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 25" id="instagram"><path fill="currentColor" fill-rule="evenodd" d="M12.5 0C9.105 0 8.68.015 7.347.075 2.807.283.284 2.802.076 7.345.015 8.68 0 9.106 0 12.5c0 3.395.015 3.82.075 5.154.208 4.54 2.727 7.063 7.27 7.271 1.335.06 1.76.075 5.155.075 3.395 0 3.82-.015 5.154-.075 4.536-.208 7.065-2.727 7.27-7.27.061-1.334.076-1.76.076-5.155 0-3.395-.015-3.82-.075-5.153-.204-4.536-2.726-7.063-7.27-7.271C16.321.015 15.895 0 12.5 0zm0 2.253c3.338 0 3.733.013 5.052.073 3.388.154 4.97 1.762 5.124 5.124.06 1.318.072 1.714.072 5.051 0 3.339-.013 3.733-.072 5.051-.155 3.36-1.733 4.97-5.124 5.124-1.319.06-1.712.073-5.052.073-3.338 0-3.733-.012-5.051-.073-3.396-.155-4.97-1.77-5.124-5.125-.06-1.318-.073-1.712-.073-5.051 0-3.338.014-3.732.073-5.051.155-3.361 1.733-4.97 5.124-5.124 1.319-.06 1.713-.072 5.051-.072zM6.081 12.5a6.419 6.419 0 1 1 12.838 0 6.419 6.419 0 0 1-12.838 0zm6.419 4.167a4.166 4.166 0 1 1 0-8.333 4.166 4.166 0 0 1 0 8.333zm5.172-10.839a1.5 1.5 0 1 1 3.001.001 1.5 1.5 0 0 1-3.001 0z" clip-rule="evenodd"></path></svg><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 25" id="facebook"><path fill="currentColor" fill-rule="evenodd" d="M0 12.5C0 5.597 5.597 0 12.5 0S25 5.597 25 12.5 19.403 25 12.5 25 0 19.403 0 12.5zm14.219-4.167h1.406V5.208h-2.053c-2.185 0-3.155.962-3.155 2.804v2.405H8.333V12.5h2.084v7.292h3.125V12.5h1.865l.218-2.083h-2.083V9.144c0-.58.116-.81.677-.81z" clip-rule="evenodd"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" id="linkedin"><path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 9 9" id="design"><path fill="currentColor" d="M4 0h1v2H4zm0 7h1v2H4zm5-3v1H7V4zM2 4v1H0V4zM7.33.964l.706.707-1.414 1.415-.707-.707zm-4.95 4.95.706.707-1.414 1.414-.707-.707zm5.656 1.415-.707.707-1.415-1.414.707-.707zm-4.95-4.951-.707.708L.964 1.67l.707-.707z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" id="mastodon"><path fill="currentColor" d="M433 179.11c0-97.2-63.71-125.7-63.71-125.7-62.52-28.7-228.56-28.4-290.48 0 0 0-63.72 28.5-63.72 125.7 0 115.7-6.6 259.4 105.63 289.1 40.51 10.7 75.32 13 103.33 11.4 50.81-2.8 79.32-18.1 79.32-18.1l-1.7-36.9s-36.31 11.4-77.12 10.1c-40.41-1.4-83-4.4-89.63-54a102.54 102.54 0 0 1-.9-13.9c85.63 20.9 158.65 9.1 178.75 6.7 56.12-6.7 105-41.3 111.23-72.9 9.8-49.8 9-121.5 9-121.5zm-75.12 125.2h-46.63v-114.2c0-49.7-64-51.6-64 6.9v62.5h-46.33V197c0-58.5-64-56.6-64-6.9v114.2H90.19c0-122.1-5.2-147.9 18.41-175 25.9-28.9 79.82-30.8 103.83 6.1l11.6 19.5 11.6-19.5c24.11-37.1 78.12-34.8 103.83-6.1 23.71 27.3 18.4 53 18.4 175z"></path></svg></div>
    <!-- /SVG collection -->

    <header class="text-white bg-blue">
        <div class="px-4 py-4 mx-auto border-b md:py-10 max-w-7xl border-blue-lighter">
            <div class="items-center justify-between md:flex space-y-4 md:space-y-0">
                <a href="/"><img src="https://webmardi.ch/vectors/logo.svg" alt="Webmardi logotype" class="w-1/3 md:w-auto" width="207" height="33"></a>
                <p class="flex flex-col sm:flex-row sm:items-center">Don’t be shy, follow us
                    <span class="text-lg sm:pl-8 md:text-xl space-x-4 md:space-x-6">
                        <a href="https://www.facebook.com/webmardi" target="_blank" rel="noopener" class="inline-block focus:text-cyan transition-colors md:hover:motion-safe:animate-bounce">
                            <svg class="Icon_default__gEkw6 text-[0.7em]" aria-hidden="true"><use xlink:href="#facebook"></use></svg>
                            <span class="sr-only">facebook</span>
                        </a>
                        <a href="https://www.twitter.com/webmardi" target="_blank" rel="noopener" class="inline-block focus:text-cyan transition-colors md:hover:motion-safe:animate-bounce">
                            <svg class="Icon_default__gEkw6 text-[0.7em]" aria-hidden="true"><use xlink:href="#twitter"></use></svg>
                            <span class="sr-only">twitter</span>
                        </a>
                        <a href="https://tooting.ch/@webmardi" target="_blank" rel="noopener" class="inline-block focus:text-cyan transition-colors md:hover:motion-safe:animate-bounce">
                            <svg class="Icon_default__gEkw6 text-[0.7em]" aria-hidden="true"><use xlink:href="#mastodon"></use></svg>
                            <span class="sr-only">mastodon</span>
                        </a>
                        <a href="https://www.youtube.com/webmardi" target="_blank" rel="noopener" class="inline-block focus:text-cyan transition-colors md:hover:motion-safe:animate-bounce">
                            <svg class="Icon_default__gEkw6 text-[0.7em]" aria-hidden="true"><use xlink:href="#youtube"></use></svg>
                            <span class="sr-only">youtube</span>
                        </a>
                        <a href="https://www.instagram.com/webmardi" target="_blank" rel="noopener" class="inline-block focus:text-cyan transition-colors md:hover:motion-safe:animate-bounce">
                            <svg class="Icon_default__gEkw6 text-[0.7em]" aria-hidden="true"><use xlink:href="#instagram"></use></svg>
                            <span class="sr-only">instagram</span>
                        </a>
                        <a href="https://www.linkedin.com/company/webmardi" target="_blank" rel="noopener" class="inline-block focus:text-cyan transition-colors md:hover:motion-safe:animate-bounce">
                            <svg class="Icon_default__gEkw6 text-[0.7em]" aria-hidden="true"><use xlink:href="#linkedin"></use></svg>
                            <span class="sr-only">linkedin</span>
                        </a>
                    </span>
                </p>
            </div>
        </div>
    </header>
