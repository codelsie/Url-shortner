document.getElementById('urlForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var url = document.getElementById('url').value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "shorten.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var shortUrl = xhr.responseText;
            document.getElementById('shortUrl').value = shortUrl;
            document.getElementById('shortUrl').style.display = 'block';
            document.getElementById('submitButton').style.display = 'none';
            document.getElementById('copyButton').style.display = 'block';
        }
    };
    xhr.send("url=" + encodeURIComponent(url));
});

function copyToClipboard() {
    var shortUrl = document.getElementById('shortUrl');
    shortUrl.select();
    shortUrl.setSelectionRange(0, 99999); // For mobile devices
    document.execCommand("copy");
    alert("Copied the URL: " + shortUrl.value);
}
