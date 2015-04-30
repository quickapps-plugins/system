function filterBy(type) {
    var type = type.replace('#show-', '');
    $('.filters a.btn').removeClass('active');
    $('.filters a.btn-' + type).addClass('active');
    $('.themes-list').hide();
    $('.' + type + '-themes').show();
}

$(window).hashchange(function () {
    filterBy(location.hash);
});

$(window).hashchange();