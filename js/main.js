$('#send').click(function () {
    var name, email, issue, message, error, success, msjAlert, send, body;
    name = document.getElementById('name').value;
    email = document.getElementById('email').value;
    issue = document.getElementById('issue').value;
    message = document.getElementById('message').value;
    error = document.getElementById('error');
    success = document.getElementById('success');
    msjAlert = document.getElementById('msjAlert');
    send = document.getElementById('send-email');

    expresionEmail = /\w+@\w+\.+[a-z]/;

    if (name == '' || email == '' || issue == '' || message == '') {
        error.style.opacity = '1';
        msjAlert.innerHTML = 'Todos los campos son obligatorios';
        setTimeout(function () {
            error.style.opacity = '0';
        }, 4000);
        return false;
    } else if (name.length > 20) {
        error.style.opacity = '1';
        msjAlert.innerHTML = 'Nombre demasiado largo';
        setTimeout(function () {
            error.style.opacity = '0';
        }, 4000);
        return false;
    } else if (!expresionEmail.test(email)) {
        error.style.opacity = '1';
        msjAlert.innerHTML = 'El email es invalido';
        setTimeout(function () {
            error.style.opacity = '0';
        }, 4000);
        return false;
    } else if (issue.length > 30) {
        error.style.opacity = '1';
        msjAlert.innerHTML = 'Asunto demasiado largo';
        setTimeout(function () {
            error.style.opacity = '0';
        }, 4000);
        return false;
    } else if (message.length > 80) {
        error.style.opacity = '1';
        msjAlert.innerHTML = 'Mensaje demasiado largo';
        setTimeout(function () {
            error.style.opacity = '0';
        }, 4000);
        return false;
    } else {
        $.ajax({
            url: '../email/email.php',
            type: 'POST',
            data: $('#send-email').serialize(),
            success: function () {
                success.style.opacity = '1';
                send.reset();
                setTimeout(function () {
                    success.style.opacity = '0';
                }, 4000);
            }
        });
    }
});