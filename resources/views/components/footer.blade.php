<footer id="site-footer" class="nav-white-desktop" role="contentinfo">
    <div id="footer-wave"></div>

    <div class="footer-bg px-6 sm:px-0">

        <div class="footer-inner container-x m-auto">


            <div class="footer-top">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">

                    <div class="">
                        <div class="widget widget_text">
                            <div class="widget-content">
                                <div class="textwidget">
                                    <a href="{{ route('dashboard') }}">
                                        <x-application-logo class="block h-16 w-auto fill-current text-gray-800" />
                                    </a>
                                    <p class="text-sm my-4 font-normal text-[#a3a3a3]">
                                        Samm Cooper Security Services Limited is a rapidly growing leader in Defense,
                                        IT, and Security Solutions. We deliver customized, enterprise-grade solutions
                                        tailored for large-scale institutions, governmental bodies, small-to-medium
                                        enterprises, and startups</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="widget widget_text">
                            <div class="widget-content">
                                <h4 class="text-sm font-semibold">Contact Us</h4>
                                <div class="textwidget text-sm my-4 font-normal ">
                                    <p class="text-sm my-4 font-normal text-[#a3a3a3]">#60 Kwame Nkrumah Crescent,
                                        Asokoro District, Abuja F.C.T.
                                    </p>
                                    <div class="flex items-start">
                                        <p class="text-[#a3a3a3] my-0">Call Us:</p>
                                        <ul class="ml-2">
                                            <li class="mb-2">
                                                <strong>
                                                    <a href="tel:+23492902686 ">+234 92902686
                                                    </a></strong>
                                            </li>
                                            <li class="mb-2">
                                                <strong>
                                                    <a href="tel:+234 7064386315 ">+234 7064386315
                                                    </a></strong>
                                            </li>
                                            <li class="mb-2">
                                                <strong>
                                                    <a href="tel:+234 8037450060 ">+234 8037450060
                                                    </a></strong>
                                            </li>
                                        </ul>
                                    </div>

                                    <a class="text-[#a3a3a3]" href="info@sammcooperng.com">info@sammcooperng.com
                                    </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="widget widget_mc4wp_form_widget">
                            <div class="widget-content">
                                <h4 class="text-sm font-semibold">Important Links</h4>

                                <ul class="my-4 font-normal list-animation">
                                    <li class="my-1">
                                        <a class="hover:pl-1 transition-all text-[#a3a3a3] hover:text-primary"
                                            href="{{ route('services') }}">Our services</a>
                                    </li>
                                    <li class="my-1">
                                        <a class="hover:pl-1 transition-all text-[#a3a3a3] hover:text-primary"
                                            href="{{ route('contact') }}">Contact</a>
                                    </li>
                                    <li class="my-1">
                                        <a class="hover:pl-1 transition-all text-[#a3a3a3] hover:text-primary"
                                            href="{{ route('about') }}">About
                                            us</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div><!-- .footer-inner -->

    </div>


    <div class="footer-bottom text-center">

        <div class="footer-credits p-4">
            <p class="footer-copyright text-xs font-normal mb-0 text-[#a3a3a3]">Copyright © 2020 Samm Cooper Security
                Services Limited. All rights reserved.
            </p>
        </div>
    </div>
</footer>


<script>
    gsap.registerPlugin(ScrollTrigger)

    ScrollTrigger.batch(".list-animation li", {
        onEnter: elements => {
            gsap.from(elements, {
                autoAlpha: 0,
                stagger: 0.15,
                delay: 0.5,
            });
        },
        once: true
    });
</script>
