$('.add-block').on('click', function() {
    $.get(($(this).data('href')), function (data) {
        $("#page-builder-zone").append(data);
    });
});

$('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
});