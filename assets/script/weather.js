fetch('https://api.tomorrow.io/v4/weather/forecast?location=42.3478,-71.0466&apikey=siQzSnOjLXySbo0W28znF17vdZ5lQyGe')
.then(response => response.json())
.then(data => console.log(data))