<!doctype html>
<head>

</head>
<body>
<script src="https://algorithmia.com/v1/clients/js/algorithmia-0.2.1.js" type="text/javascript"></script>

<h2>Ülesanne 1</h2>
<b>Siin saab tekstist kuupäeva ja kellaaja välja kuvada.</b><br><br>
Formaat peab olema ameerikapärane (13th March 2020 7:30pm)<br><br>

<textarea id="andmed" rows="3" cols="40" placeholder="To the cinema at January 4th, 2017, 8:00pm"></textarea><br>
<button id="nupp" onclick="sendData()">Vajuta</button>
<br><br>
<span id="tulemus"></span>

<script>
    function sendData() {
        var input = document.getElementById("andmed").value
        Algorithmia.client("simHd9YXZD/sRRdzCI2aVGlMmF11")
            .algo("PetiteProgrammer/DateExtractor/0.1.0?timeout=300") // timeout is optional
            .pipe(input)
            .then(function (output) {
                document.getElementById('tulemus').innerHTML = output.result;
            })
    };
</script>

<h2>Ülesanne 2</h2>

<p>
    <input type="text" name="number" id="number"><br><br>
    <input type="submit" name="sumbit" id="submit" value="Sisesta">
    <input type="submit" name="reload" onclick="location.reload()" value="Uuesti"><br>

    <span id="output">
    </span><br>
    <span id="output2"></span>

</p>

<script type="text/javascript">

    const randNr = Math.floor(Math.random() * 100 + 1);

    document.getElementById("submit").onclick = function () {
        let number = document.getElementById("number").value;

        if (number > randNr) {
            document.getElementById('output2').innerHTML = "Arv peab olema väiksem";
        } else if (number < randNr) {
            document.getElementById('output2').innerHTML = "Arv peab olema suurem";
        } else {
            document.getElementById('output2').innerHTML = "Arvasid ära!";
        }
    }
</script>

</body>