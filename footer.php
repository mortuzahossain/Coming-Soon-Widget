
    <script src="<?php echo get_template_directory_uri() ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/jquery.knob.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/jquery.throttle.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/jquery.classycountdown.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/mailchimp.js"></script>
    <script>
        $(document).ready(function() {
            $('#countdown').ClassyCountdown({
                now: '1498820312',
                end: '1521914400',
                labels: true,
                style: {
                    element: "",
                    textResponsive: .5,
                    days: {
                        gauge: {
                            thickness: .20,
                            bgColor: "rgba(0,0,0,0)",
                            fgColor: "#1abc9c",
                            lineCap: 'round'
                        },
                        textCSS: 'font-weight:300; color:#fff;'
                    },
                    hours: {
                        gauge: {
                            thickness: .15,
                            bgColor: "rgba(0,0,0,0)",
                            fgColor: "#05BEF6",
                            lineCap: 'round'
                        },
                        textCSS: ' font-weight:300; color:#fff;'
                    },
                    minutes: {
                        gauge: {
                            thickness: .10,
                            bgColor: "rgba(0,0,0,0)",
                            fgColor: "#8e44ad",
                            lineCap: 'round'
                        },
                        textCSS: ' font-weight:300; color:#fff;'
                    },
                    seconds: {
                        gauge: {
                            thickness: .05,
                            bgColor: "rgba(0,0,0,0)",
                            fgColor: "#f39c12",
                            lineCap: 'round'
                        },
                        textCSS: ' font-weight:300; color:#fff;'
                    }

                },
                onEndCallback: function() {
                    console.log("Time out!");
                }
            });
            $('#mc-form').ajaxChimp();
        });
    </script>
<?php wp_footer(); ?>
</body>
</html>
