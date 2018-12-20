function getAjax(url, success) {
    var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    xhr.open('GET', url);
    xhr.onreadystatechange = function() {
        if (xhr.readyState>3 && xhr.status==200) success(xhr.responseText);
    };
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.send();
    return xhr;
}



var elements = document.querySelectorAll('.add-block'),
    buliderZoneEl = document.querySelector('#page-builder-zone');

if(elements.length) {
    for (let i = 0; i < elements.length; i++) {
        const element = elements[i];

        element.addEventListener('click', function(e) {
            e.preventDefault();

            const el = e.currentTarget,
            action = el.href;;

            getAjax(action, function(response) {
                console.log(buliderZoneEl);
                buliderZoneEl.innerHTML += response;
            });
        });
        
    }
}


// $().on('click', function() {
//     $.get(($(this).data('href')), function (data) {
//         $("#page-builder-zone").append(data);
//     });
// });
