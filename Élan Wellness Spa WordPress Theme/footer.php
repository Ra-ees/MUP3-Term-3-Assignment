<footer class="text-white pt-20 pb-10" style="background-color:#556B5D;">

    <div class="max-w-7xl mx-auto px-8 grid md:grid-cols-2 lg:grid-cols-4 gap-12">


        <!-- Brand -->

        <div>

            <h3 class="font-heading text-3xl mb-5 text-white">

                <?php bloginfo('name'); ?>

            </h3>


            <p class="text-gray-200 leading-7">

                A luxury wellness destination offering personalised spa
                experiences that restore balance, promote relaxation,
                and inspire wellbeing.

            </p>

        </div>



        <!-- Quick Links -->

        <div>

            <h4 class="text-xl font-semibold mb-5 text-white">

                Quick Links

            </h4>


            <ul class="space-y-3 text-gray-200">


                <li>

                    <a href="<?php echo home_url(); ?>"
                       class="hover:text-secondary transition duration-300">

                        Home

                    </a>

                </li>



                <li>

                    <a href="<?php echo home_url('/about'); ?>"
                       class="hover:text-secondary transition duration-300">

                        About

                    </a>

                </li>



                <li>

                    <a href="<?php echo home_url('/services'); ?>"
                       class="hover:text-secondary transition duration-300">

                        Services

                    </a>

                </li>



                <li>

                    <a href="<?php echo home_url('/booking'); ?>"
                       class="hover:text-secondary transition duration-300">

                        Booking

                    </a>

                </li>



                <li>

                    <a href="<?php echo home_url('/contact'); ?>"
                       class="hover:text-secondary transition duration-300">

                        Contact

                    </a>

                </li>


            </ul>


        </div>




        <!-- Contact -->

        <div>


            <h4 class="text-xl font-semibold mb-5 text-white">

                Contact

            </h4>



            <ul class="space-y-4 text-gray-200">


                <li>

                    <i class="fa-solid fa-location-dot mr-2 text-secondary"></i>

                    27 Serenity Lane,
                    Constantia, Cape Town,
                    7806, South Africa

                </li>



                <li>

                    <i class="fa-solid fa-phone mr-2 text-secondary"></i>

                    +27 21 681 9425

                </li>



                <li>

                    <i class="fa-solid fa-envelope mr-2 text-secondary"></i>

                    info@elanwellnessspa.co.za

                </li>



            </ul>


        </div>





        <!-- Social -->


        <div>


            <h4 class="text-xl font-semibold mb-5 text-white">

                Follow Us

            </h4>



            <div class="flex gap-5 text-2xl">


                <a href="#"
                   class="hover:text-secondary transition duration-300">


                    <i class="fa-brands fa-facebook"></i>


                </a>




                <a href="#"
                   class="hover:text-secondary transition duration-300">


                    <i class="fa-brands fa-instagram"></i>


                </a>




                <a href="#"
                   class="hover:text-secondary transition duration-300">


                    <i class="fa-brands fa-x-twitter"></i>


                </a>




                <a href="#"
                   class="hover:text-secondary transition duration-300">


                    <i class="fa-brands fa-youtube"></i>


                </a>



            </div>


        </div>



    </div>





    <!-- Copyright -->


    <div class="border-t border-white/20 mt-16 pt-8 text-center text-gray-200">


        © <?php echo date('Y'); ?>

        <?php bloginfo('name'); ?>.

        All Rights Reserved.


    </div>



</footer>




<?php wp_footer(); ?>


</body>

</html>
