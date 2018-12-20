var ajax;
function getVideoByUser() {

    ajax = new XMLHttpRequest();
    var url = "http://localhost/videoLibrary/PHP/API.php?command=getVideosByUser";
    ajax.open("GET", url, true);
    ajax.onreadystatechange = handleResponse;
    ajax.send();
}

function handleResponse() {
    if (ajax.readyState === 4) { // Data returned from the server.
        if (ajax.status === 200) { // There is no error.

            var response = JSON.parse(ajax.responseText);
            console.log(response);
            if (Array.isArray(response)) {

                createTable(response);
            } else {
                alert(response.message);
            }

        } else { // There is some error...
            alert("Error! Status: " + ajax.status + ", Message: " + ajax.statusText);
        }
    }
}

function createTable(videos) {

    var emptyTable = document.getElementById("emptyTable")
    var tableVideos = document.getElementById("tableVideos");
    var headerTR = "<tr><th scope='col'>Title</th><th scope='col'>Category</th><th scope='col'>Description</th><th scope='col'>Action</th></tr>";
    var tableContent = headerTR;

    for (var i = 0; i < videos.length; i++) {
        var titleTD = "<td>" + videos[i].VideoTitle + "</td>";
        var categoryTD = "<td>" + videos[i].CategoryName + "</td>";
        var descriptionTD = "<td>" + videos[i].Description + "</td>";
        //addig  buttons in the table for Play(redirect)/Edit(redirect)/Delete
        var actionTD = "<td> <a class='btn btn-success btn-lg' role='button' href='http://localhost/videoLibrary/PHP/API.php?command=playVideo&videoID=" + videos[i].VideoID + "'><i class='fa fa-play'></i></a> <a class='btn btn-info btn-lg' role='button' href='editVideo.php?videoID=" + videos[i].VideoID + "&catname=" + videos[i].CategoryName + "'><i class='fa fa-edit'></i></a> <a class='btn btn-danger btn-lg' role='button' onclick=deleteVideo(" + videos[i].VideoID + ") ><i class='fa fa-trash'></i></a> </td>";
        var videoTR = "<tr>" + titleTD + categoryTD + descriptionTD + actionTD + "</tr>";
        tableContent += videoTR;
    }

    tableVideos.innerHTML = tableContent;
}

function deleteVideo(videoID) {
    if (confirm("are you sure you want to delete this Video?")) {
        ajax = new XMLHttpRequest();
        var url = "http://localhost/videoLibrary/PHP/API.php?command=deleteVideo&videoID=" + videoID;
        ajax.open("GET", url, true);
        ajax.onreadystatechange = handleResponse;
        ajax.send();
        location.reload();
    }
}

function searchVideo() {

    var searchBox = document.getElementById("searchBox");
    var searchQ = searchBox.value;
    ajax = new XMLHttpRequest();
    var url = "http://localhost/videoLibrary/PHP/API.php?command=searchVideo&searchQ=" + searchQ;
    ajax.open("GET", url, true);
    ajax.onreadystatechange = handleResponse;
    ajax.send();
}

function validRegister() {
    var regFirstnameBox = document.getElementById("regFirstname");
    var regLastnameBox = document.getElementById("regLastname");
    var regUsernameBox = document.getElementById("regUsername");
    var regPasswordBox = document.getElementById("regPassword");
    var regFirstnameError = document.getElementById("regFirstnameError");
    var regLastnameError = document.getElementById("regLastnameError");
    var regUsernameError = document.getElementById("regUsernameError");
    var regPasswordError = document.getElementById("regPasswordError");
    var regFirstname = regFirstnameBox.value;
    var regLastname = regLastnameBox.value;
    var regUsername = regUsernameBox.value;
    var regPassword = regPasswordBox.value;

    regFirstnameBox.style.backgroundColor = "";
    regLastnameBox.style.backgroundColor = "";
    regUsernameBox.style.backgroundColor = "";
    regPasswordBox.style.backgroundColor = "";
    regFirstnameError.innerText = "";
    regLastnameError.innerText = "";
    regUsernameError.innerText = "";
    regPasswordError.innerText = "";

    if (regFirstname == "") {
        alert("Error!\n First Name is missing.");
        regFirstnameBox.style.backgroundColor = "rgb(255, 163, 179)";
        regFirstnameError.innerText = "**Please enter First Name";
        regFirstnameError.style.color = "red";
        return false;
    }

    if (regLastname == "") {
        alert("Error!\n Last Name is missing.");
        regLastnameBox.style.backgroundColor = "rgb(255, 163, 179)";
        regLastnameError.innerText = "**Please enter Last Name";
        regLastnameError.style.color = "red";
        return false;
    }

    if (regUsername == "") {
        alert("Error!\n Username is missing.");
        regUsernameBox.style.backgroundColor = "rgb(255, 163, 179)";
        regUsernameError.innerText = "**Please enter Username";
        regUsernameError.style.color = "red";
        return false;
    }

    if (regPassword == "") {
        alert("Error!\n Password is missing.");
        regPasswordBox.style.backgroundColor = "rgb(255, 163, 179)";
        regPasswordError.innerText = "**Please enter Password";
        regPasswordError.style.color = "red";
        return false;
    }



}

function validLogin() {

    var logUsernameBox = document.getElementById("logUsername");
    var logPasswordBox = document.getElementById("logPassword");
    var logUsernameError = document.getElementById("logUsernameError");
    var logPasswordError = document.getElementById("logPasswordError");
    var logUsername = logUsernameBox.value;
    var logPassword = logPasswordBox.value;

    logUsernameBox.style.backgroundColor = "";
    logPasswordBox.style.backgroundColor = "";
    logUsernameError.innerText = "";
    logPasswordError.innerText = "";

    if (logUsername == "") {
        alert("Error!\n Username is missing.");
        logUsernameBox.style.backgroundColor = "rgb(255, 163, 179)";
        logUsernameError.innerText = "**Please enter Username";
        logUsernameError.style.color = "red";
        return false;
    }

    if (logPassword == "") {
        alert("Error!\n Password is missing.");
        logPasswordBox.style.backgroundColor = "rgb(255, 163, 179)";
        logPasswordError.innerText = "**Please enter Password";
        logPasswordError.style.color = "red";
        return false;
    }
}

function validAdd() {

    var addTitleBox = document.getElementById("addTitle");
    var addLinkBox = document.getElementById("addLink");
    var addTitleError = document.getElementById("addTitleError");
    var addLinkError = document.getElementById("addLinkError");
    var addTitle = document.getElementById("addTitle").value;
    var addLink = document.getElementById("addLink").value;
    var regExp = /(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([A-Za-z0-9]{11})/;


    addTitleBox.style.backgroundColor = "";
    addLinkBox.style.backgroundColor = "";
    addTitleError.innerText = "";
    addLinkError.innerText = "";

    if (addTitle == "") {
        alert("Error!\n Video Title is missing.");
        addTitleBox.style.backgroundColor = "rgb(255, 163, 179)";
        addTitleError.innerText = "**Please enter Video Title";
        addTitleError.style.color = "red";
        return false;
    }
    if (addLink == "") {
        alert("Error!\n Video Link is missing.");
        addLinkBox.style.backgroundColor = "rgb(255, 163, 179)";
        addLinkError.innerText = "**Please enter Video Link";
        addLinkError.style.color = "red";
        return false;
    }

    if (regExp.test(addLink) == 0) {
        alert("Error!\n Video Link is invalid.");
        addLinkBox.style.backgroundColor = "rgb(255, 163, 179)";
        addLinkError.innerText = "**Video Link is invalid";
        addLinkError.style.color = "red";
        return false;
    }

}

function validEdit() {

    var editLinkBox = document.getElementById("editLink");
    var editLinkError = document.getElementById("editLinkError");
    var editLink = document.getElementById("editLink").value;
    var regExp = /(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([A-Za-z0-9]{11})/;

    editLinkBox.style.backgroundColor = "";
    editLinkError.innerText = "";

    if (regExp.test(editLink) == 0) {
        alert("Error!\n Video Link is invalid.");
        editLinkBox.style.backgroundColor = "rgb(255, 163, 179)";
        editLinkError.innerText = "**Video Link is invalid";
        editLinkError.style.color = "red";
        return false;
    }

}

