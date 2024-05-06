document.getElementById('fetchScript').addEventListener('click', function() {
    fetch('./git-pull.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById('result').innerHTML = data;
    })
    .catch(error => console/error('Error: ', error));
    // document.getElementById('result').textContent = 'Fetching...';
});