<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 */
?>

        <section class="text-white bg-blue">
            <div class="px-4 py-8 mx-auto md:py-24 max-w-7xl"><div class="md:w-1/2"><h2 class="text-lg font-bold md:text-xl lg:text-2xl">Our amazing sponsors</h2><p class="mt-6">Thanks to our sponsors who help making these events happening and offering you beers.</p></div><div class="mt-6 md:mt-16 grid md:grid-cols-3 gap-6"><a href="https://liip.ch/" target="_blank" rel="noopener" class="flex items-center justify-center h-40 lg:h-60 bg-blue-dark transition-colors md:hover:bg-blue-light"><img src="https://webmardi.ch/vectors/liip.svg" alt="Liip AG" class="w-auto" width="147" height="54"></a><a href="https://hidora.io/" target="_blank" rel="noopener" class="flex items-center justify-center h-40 lg:h-60 bg-blue-dark transition-colors md:hover:bg-blue-light"><img src="https://webmardi.ch/vectors/hidora.svg" alt="Hidora" class="w-auto" width="248" height="58"></a><div class="flex items-center justify-center h-40 lg:h-60 bg-blue-light"><div class="text-center lg:mx-20"><p>Do you wish to support us ?</p><a target="_blank" rel="noopener" href="/pdf/sponsoring_factsheet_2024.pdf" itemprop="url" class="mt-5 text-sm inline-block font-bold transition-colors whitespace-nowrap px-4 py-2 border border-blue md:hover:border-cyan md:hover:bg-cyan focus:bg-cyan bg-blue text-white focus:text-blue-dark md:hover:text-blue">See sponsoring packages</a></div></div></div></div>
        </section>

        <footer class="px-4 mx-auto py-9 md:pt-24 max-w-7xl">
            <div class="lg:grid grid-cols-12 gap-6">
                <div class="col-span-6">
                    <h2 class="text-lg font-bold md:text-xl lg:text-2xl">Newsletter</h2>
                    <p class="mt-4 md:mt-7">Sign up to be informed about upcoming events.</p>
                    <form class="w-full mt-6 sm:flex lg:mt-16 space-y-4 sm:space-y-0">
                        <label for="email-address" class="sr-only">E-mail</label><input id="email-address" name="email" type="email" autocomplete="email" required="" class="w-full px-4 py-2 mr-5 text-sm md:text-base placeholder-blue border border-blue focus:ring-blue-dark focus:border-blue-dark" placeholder="E-mail" value="">
                        <div class="flex-shrink-0"><button type="submit" class="inline-block font-bold transition-colors whitespace-nowrap px-4 py-2 border border-blue md:hover:border-cyan md:hover:bg-cyan focus:bg-cyan bg-blue text-white focus:text-blue-dark md:hover:text-blue">Subscribe</button></div>
                    </form>
                </div>
                <div class="flex flex-col mt-12 col-span-5 col-start-8 lg:mt-0">
                    <h2 class="text-lg font-bold md:text-xl lg:text-2xl">Be a speaker</h2>
                    <p class="mt-4 md:mt-7">Let your voice be heard at our events and beyond.</p>
                    <div class="mt-6 lg:mt-auto space-y-4 sm:space-y-0">
                        <a href="mailto:contact@webmardi.ch" target="_blank" rel="noopener" class="mr-5 xl:px-10 inline-block font-bold transition-colors whitespace-nowrap px-4 py-2 border border-blue md:hover:bg-blue text-blue md:hover:text-white hover:border-white focus:bg-blue-dark focus:text-white bg-white">Contact us</a>
                        <a href="https://bit.ly/webmardi-talk" target="_blank" rel="noopener" class="inline-block font-bold transition-colors whitespace-nowrap px-4 py-2 border border-cyan md:hover:border-blue md:hover:bg-white bg-cyan text-blue focus:text-blue-dark md:hover:text-blue-lighter">Submit your paper</a>
                    </div>
                </div>
            </div>
            <address class="items-center justify-between mt-12 text-sm not-italic md:flex md:mt-32 link">
                <p>Webmardi © 2023</p>
            </address>
        </footer>

    </div><!-- /content -->

<?php wp_footer(); ?>

</body>
</html>
