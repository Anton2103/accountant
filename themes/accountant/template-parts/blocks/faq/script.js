(function($) {
    $(document).ready(function() {
        // Accordion variables
        let accordion = {
            content: '.accordion-content',
            active: '.accordion-active',
            title: '.accordion-title'
        }

        // Accordion

        $(accordion.title).on("click", function(e) {

            e.preventDefault();
            let $this = $(this);
            if (!$this.hasClass(accordion.active)) {
                $(accordion.content).slideUp(400);
                $(accordion.title).removeClass(accordion.active);
            }
            $this.toggleClass(accordion.active);
            $this.next().slideToggle();
        });
    });
})(jQuery);