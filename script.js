// JavaScript source code
function sendMail() {
    var params = {
        from_name: document.getElementById("fullName").value,
        email_id: document.getElementById("email_id").value,
        message: decument.getElementById("message").value
    }

    emailjs.send("service_gg56ywr", "template_sz7eceg", params).then(function (res) {
        alert("Success! " + res.status);
    })
}}