/*fetch('https://api.tomorrow.io/v4/weather/forecast?location=42.3478,-71.0466&apikey=siQzSnOjLXySbo0W28znF17vdZ5lQyGe')
.then(response => response.json())
.then(data => console.log(data))*/

    (function(d, s, id) {
        if (d.getElementById(id)) {
            if (window.__TOMORROW__) {
                window.__TOMORROW__.renderWidget();
            }
            return;
        }
            const fjs = d.getElementsByTagName(s)[0];
            const js = d.createElement(s);
            js.id = id;
            js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";

            fjs.parentNode.insertBefore(js, fjs);
        })(document, 'script', 'tomorrow-sdk');
