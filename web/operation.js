
$('#operationform-firstnumber').on('input', function() {
    check($(this).val(), "second");
});

$('#operationform-secondnumber').on('input', function() {
    check($(this).val(), 'third');
});

$('#button-save').on('click', function(e) {

    var data = {};
    data['orderId'] = 1;
    data['statusId'] = 1;

    $.ajax({
        'type': 'post',
        'dataType': 'json',
        'data': $('#w0').serialize()
    }).success(function(json) {
        showResult(json.result);
    });

    e.preventDefault();
});
//подставляем результат
function showResult(number)
{
    document.getElementById('label-result').innerHTML = 'Result: ' + number;
}
// проверяем на валидность
function validate(value){
    if(isNaN(value)){
        return false
    }else{
        var regex = /^[0-9]{3,15}$/gi;

        if(regex.exec(value)){
            return true
        }
    }

    return false;
}
// проверяем на валидность и показываем новые поля
function check(value, id){

    var nextElement = document.getElementById(id);

    if(id == 'second')
    {
        var thirdElement = document.getElementById('third');

        if(!validate(value))
        {
            if(thirdElement.style.display == '')
            {
                thirdElement.style.display = 'none';
            }
        }
    }

    if(validate(value))
    {
        if(nextElement.style.display == 'none')
        {
            nextElement.style.display = '';
        }
    }else{
        if(nextElement.style.display == '')
        {
            nextElement.style.display = 'none';
        }
    }
}
// запрещаем отправку форму по enter
$(document).ready(function() {
    $('#w0').keydown(function(event){
        if(event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });
});