
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

function showResult(number)
{
    document.getElementById('label-result').innerHTML = 'Result: ' + number;
}

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

function check(value, id){

    var nextElement = document.getElementById(id);

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