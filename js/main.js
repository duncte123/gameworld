function _(el) {
    return document.getElementById(el);
}

function sendMailForm() {
    //Disable the submit button
    _("submit").disabled = true;
    //A nice status message
    _("ajaxStatus").innerHTML = 'please wait ...';
    //Use the FormData object to get the data
    var formdata = new FormData();
    //Obfuscated variable names
    formdata.append("n", _("n").value);
    formdata.append("e", _("e").value);
    formdata.append("m", _("m").value);
    //Create an ajax object
    var ajax = new XMLHttpRequest();
    //Open a connection to our parser
    ajax.open("POST", "/php_parsers/sendMail.php");
    //Handle the response
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4 && ajax.status === 200) {
            if (ajax.responseText === "success") {
                _("mailForm").innerHTML = '<h2>Thanks ' + _("n").value + ', your message has been sent.</h2><br />' +
                "<p>Please check your email as we have send a copy of this email to you.</p>" +
                "<p>HINT: If you can't find the mail, check your spambox.</p>";
            } else {
                _("ajaxStatus").innerHTML = ajax.responseText;
                _("submit").disabled = false;
            }
        }
    };
    //Send the form data to our parser
    ajax.send(formdata);
}