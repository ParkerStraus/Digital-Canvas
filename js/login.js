function login() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", './php/getUser.php?username=' + username + '&password=' + password, true);
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4) {
            if (xhttp.status === 200) {
                const result = JSON.parse(xhttp.responseText);

                console.log('Raw Response: ' + result);

                var combo = username + " " + password;

                if (combo === result) {
                    window.location.href = "./employeeDashboard.php";
                } else {
                    document.getElementById('incorrect').style.display = "block";
                }
            } else {
                console.error('Error: ' + xhttp.status);
            }
        }
    };
    xhttp.send();
}
