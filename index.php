<!doctype html>
<head>

</head>
<body>
    <script src="https://algorithmia.com/v1/clients/js/algorithmia-0.2.1.js" type="text/javascript"></script>

    <h2>Ülesanne 1</h2>
    <b>Siin saab tekstist kuupäeva ja kellaaja välja kuvada.</b><br><br>
    Formaat peab olema ameerikapärane (13th March 2020 7:30pm)<br><br>

    <textarea id="andmed" rows="3" cols="40" placeholder="To the cinema at January 4th, 2017, 8:00pm"></textarea><br>
    <button id="nupp" onclick="sendData()">Vajuta</button><br><br>
    <span id="tulemus"></span>

<!--<script>
    function sendData() {
    Algorithmia.client("simHd9YXZD/sRRdzCI2aVGlMmF11")
        .algo("rokilaps/Hello/0.1.0?timeout=300") // timeout is optional
        .pipe(document.getElementById('data').value)
        .then(function(output) { document.querySelector('body').innerHTML = output.result })};
</script>-->
<script>
    function sendData(){
        var input = document.getElementById("andmed").value
        Algorithmia.client("simHd9YXZD/sRRdzCI2aVGlMmF11")
        .algo("PetiteProgrammer/DateExtractor/0.1.0?timeout=300") // timeout is optional
        .pipe(input)
        .then(function(output) { document.getElementById('tulemus').innerHTML = output.result; })};
</script>
</body>