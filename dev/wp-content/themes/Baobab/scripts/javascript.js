(function($){

    /* Quand je clique sur l'icône hamburger je rajoute une classe au body */
    $('#topbar__icon').click(function(e){
        e.preventDefault();
        $('body').toggleClass('with--sidebar');
    });

    /* Je veux pouvoir masquer le menu si on clique sur le cache */
    $('#site-cache').click(function(e){
        $('body').removeClass('with--sidebar');
    })

    $(".about__sous-title").lettering();

})(jQuery);
