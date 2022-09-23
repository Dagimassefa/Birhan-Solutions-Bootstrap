function sendMail(params) {
    var tempParams = {
        message: document.getElementById("sus_email").value,

    };
    if (document.getElementById("sus_email").value != "") {
        var email = document.getElementById('sus_email');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(email.value)) {
            alert('Please provide a valid email address');
        }
        else {
            emailjs.send('service_djxgh0d', 'template_76co85s', tempParams).then(function (res) {
                console.log("sucess", res.status);

            })
            alert("you have successfully subscribed!")
        }
    }
    else {
        alert("please enter an email address");
    }

    // document.getElementById("sus_email").value = "";
    // document.getElementById("sus_email").value = "";
}
