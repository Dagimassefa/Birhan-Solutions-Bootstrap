function sendMails(params) {
    var tempParams = {
        first_name: document.getElementById("fname").value,
        last_name: document.getElementById("lname").value,
        email: document.getElementById("email").value,
        phonenumber: document.getElementById("phones").value,
        message: document.getElementById("message").value,

    };
    if (document.getElementById("fname").value != "" && document.getElementById("lname").value != "" && document.getElementById("email").value != "" && document.getElementById("message").value != "") {
        var regfname = /^[a-zA-Z]+$/;
        var fname = document.getElementById('fname').value;
        if (!regfname.test(fname)) {
            alert('Invalid first name given.');
        } else {
            var lname = document.getElementById('lname').value;
            var reglname = /^[a-zA-Z]+$/;
            if (!reglname.test(lname)) {
                alert('Invalid last name given.');
            } else {
                var email = document.getElementById('email');
                var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (!filter.test(email.value)) {
                    alert('Please provide a valid email address');
                }
                else {

                    emailjs.send('service_djxgh0d', 'template_wjb707a', tempParams).then(function (res) {
                        console.log("sucess", res.status);


                    })
                    // alert("all things look good!")
                    document.getElementById("fname").value = "";
                    document.getElementById("lname").value = "";
                    document.getElementById("email").value = "";
                    document.getElementById("phone").value = "";
                    document.getElementById("message").value = "";
                }
            }


        }
    }
    else {
        alert("all inputs except phone number are mandatory!!!")
        document.getElementById("fname").value = "";
        document.getElementById("lname").value = "";
        document.getElementById("email").value = "";
        document.getElementById("phone").value = "";
        document.getElementById("message").value = "";
    }


}