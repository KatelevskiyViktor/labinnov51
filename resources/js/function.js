/*---------------------------------------------------------*/

function open_close_menu(click_class, toggle_class, swtch) {

    $(click_class).on('click', function () {
        let th = $(this);
        let icon = $('svg', this).attr('class');


        swtch === 1 ? th.siblings(toggle_class).slideToggle() : $(toggle_class).slideToggle('medium', function () {
            if (th.is(':visible')){
                th.css('display','flex');
            }
        });

        if(icon === 'svg-inline--fa fa-bars fa-w-14'){
            $('svg', this).removeClass(icon).addClass('svg-inline--fa fa-times fa-w-11');
        }else{
            $('svg', this).removeClass(icon).addClass('svg-inline--fa fa-bars fa-w-14');
        }
    });
}

/*---------------------------------------------------------*/


function active_link_to_menu(what_listen, add_class, remove_class='') {
    let location = document.location.href;
    let cur_url = 'https://' + location.split('/').slice(2).join('/');
    $(what_listen).each(function () {
        let link = $(this).find('a').attr('href');
        if (cur_url === link) {
            $(this).removeClass(remove_class).addClass(add_class);
        }
    });

}

/*---------------------------------------------------------*/

function up_search_form() {
    $('.search').on('click',function() {
        $('.form_search').bPopup();
    });
}

