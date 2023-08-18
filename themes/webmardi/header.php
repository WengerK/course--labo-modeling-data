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
</head>

<body <?php body_class(); ?> class="flex min-h-full">
<?php wp_body_open(); ?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main flex w-full flex-col">
            <!-- Header menu with logo and CTA for Meetup -->
            <header class="relative z-50 flex-none lg:pt-11">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-wrap items-center justify-center sm:justify-between lg:flex-nowrap">
                    <div class="mt-10 lg:mt-0 lg:grow lg:basis-0">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 183 48" class="h-12 w-auto text-slate-900" width="207" height="33" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.624 10.258L8.256 27.56h.537l3.48-17.302h7.766L23.52 27.56h.534l2.635-17.302h5.622L27.94 32.376h-8.034l-3.48-17.303h-.537l-3.48 17.303H4.373L0 10.258h5.624zM49.851 19.043c-.402-2.81-2.188-4.593-5.088-4.593-3.17 0-4.821 1.873-5.267 4.593H49.85zm-5.043-9.41c6.425 0 10.755 4.505 10.755 11.149v2.185H39.452c.223 2.943 2.32 5.217 5.534 5.217 3.124 0 4.775-1.739 5.534-3.3l4.597 2.676C53.599 29.879 51.01 33 45.074 33c-6.605 0-11.38-4.994-11.38-11.861 0-6.689 4.597-11.506 11.114-11.506zM64.666 21.317c0 4.192 2.588 6.689 6.07 6.689 3.392 0 6.07-2.408 6.07-6.689 0-4.28-2.678-6.688-6.07-6.688-3.482 0-6.07 2.497-6.07 6.688zm0-20.156V13.38h.537c1.158-1.873 3.123-3.747 7.05-3.747 5.534 0 10.176 4.906 10.176 11.684 0 6.779-4.642 11.684-10.175 11.684-3.928 0-5.893-1.873-7.052-3.746h-.626v3.122h-5.533V1.16h5.623z" fill="#4040B8"/><path fill-rule="evenodd" clip-rule="evenodd" d="M110.5 32.376l-2.634-17.302h-.535l-3.481 17.302h-7.765l-3.482-17.302h-.536l-2.633 17.302h-5.623l4.374-22.119h8.033l3.48 17.303h.536l3.481-17.303h8.034l4.374 22.12H110.5zM127.629 28.363c3.927 0 6.115-2.32 6.115-5.351v-.357l-6.785.803c-2.098.267-3.124 1.025-3.124 2.318 0 1.516 1.295 2.587 3.794 2.587zm1.786-18.73c6.025 0 9.952 3.434 9.952 8.607v14.136h-5.535v-3.122h-.624c-.715 1.472-2.277 3.747-6.962 3.747-4.999 0-8.302-2.676-8.302-6.912 0-3.523 3.08-5.976 7.321-6.422l8.479-.936v-.535c0-2.096-1.608-3.747-4.642-3.747-2.945 0-4.775 1.517-6.159 3.836l-4.553-2.944c2.634-3.3 5.624-5.707 11.025-5.707zM149.631 13.469h.624c.848-2.453 2.723-3.3 5.535-3.3h2.142v5.083h-3.303c-2.857 0-4.909 1.516-4.909 4.638v12.486h-5.624V10.257h5.535v3.212zM164.402 21.317c0 4.28 2.678 6.689 6.07 6.689 3.481 0 6.07-2.497 6.07-6.689 0-4.191-2.589-6.688-6.07-6.688-3.392 0-6.07 2.407-6.07 6.688zm17.763 11.06h-5.534v-3.122h-.625c-1.161 1.873-3.125 3.746-7.051 3.746-5.536 0-10.177-4.905-10.177-11.684 0-6.778 4.641-11.684 10.177-11.684 3.926 0 5.89 1.874 7.051 3.747h.536V1.16h5.623v31.216zM187.16 32.377h5.624v-22.12h-5.624v22.12zM189.973 0c2.231 0 3.972 1.56 3.972 3.836 0 2.274-1.741 3.834-3.972 3.834-2.232 0-3.972-1.56-3.972-3.834 0-2.275 1.74-3.836 3.972-3.836zM200.951 1.254v.557h-1.741v4.646h-.61V1.81h-1.734v-.557h4.085zM202.776 1.254l1.509 4.549h.09l1.516-4.55H207v5.204h-.61V1.923h-.089l-1.51 4.534h-.915l-1.509-4.534h-.09v4.534h-.61V1.254h1.109z" fill="#00C9FF"/></svg>
                    </div>

                    <div class="order-first -mx-4 flex flex-auto basis-full overflow-x-auto whitespace-nowrap border-b border-blue-600/10 py-4 font-mono text-sm text-blue-600 sm:-mx-6 lg:order-none lg:mx-0 lg:basis-auto lg:border-0 lg:py-0">
                        <div class="mx-auto flex items-center gap-4 px-4">
                            <p>Season 2023</p>
                            <p>Switzerland</p>
                        </div>
                    </div>

                    <div class="hidden sm:mt-10 sm:flex lg:mt-0 lg:grow lg:basis-0 lg:justify-end">
                        <a target="_blank" class="inline-flex justify-center rounded-2xl bg-blue-600 p-4 text-base font-semibold text-white hover:bg-blue-500 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70" href="https://www.meetup.com/webmardi/">Checkout on Meetup</a>
                    </div>
            </header>
