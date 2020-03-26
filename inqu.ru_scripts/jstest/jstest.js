$('document').ready(function() {

    // Добавить элемент в body
    // $('body').append('<a href="https://inqu.ru">Main page</a>');

    // Удаление элементов
    // $('p, h1, h2').remove();
    // $('#message').remove();

    // Копирование элементов
    // var pClone = $('p').clone();
    // $('body').append(pClone);

    $('button').on('click', function() {
        var value1 = parseInt($('#val1').val())
        var value2 = parseInt($('#val2').val())

        result = value1 + value2;

        alert(result)
    })
})
