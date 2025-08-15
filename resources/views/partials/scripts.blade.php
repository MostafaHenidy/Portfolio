<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#contactForm").submit(function(e) {

            e.preventDefault();

            var form = $(this);
            var actionUrl = form.attr('action');
            var alertBox = $('#alert');
            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(),
                success: function() {
                    alertBox.removeClass('d-none').text(
                        "✅ Your message has been sent successfully!");
                    setTimeout(function() {
                        alertBox.addClass('d-none');
                    }, 3000);
                    form.trigger("reset"); // clear form after submission
                },
                error: function() {
                    alertBox.removeClass('d-none alert-success')
                        .addClass('alert-danger')
                        .text("❌ Something went wrong. Please try again.");
                    setTimeout(function() {
                        alertBox.addClass('d-none');
                    }, 3000);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Smooth scrolling for anchor links
        $('a[href^="#"]').on('click', function(event) {
            event.preventDefault();
            var target = $(this.getAttribute('href'));
            if (target.length) {
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });

        // Highlight active section in navigation
        $(window).on('scroll', function() {
            var scrollPos = $(document).scrollTop();
            $('.nav-link').each(function() {
                var section = $($(this).attr('href'));
                if (section.length && section.position().top <= scrollPos && section.position()
                    .top + section.outerHeight() > scrollPos) {
                    $('.nav-link').removeClass('active');
                    $(this).addClass('active');
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        @if (app()->getLocale() === 'ar')
        
            $('p, strong,h1,h2,h3 ,div,li').attr('dir', 'rtl');
            $('i').addClass('ms-2');
        @endif
    });
</script>
