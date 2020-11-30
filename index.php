<!doctype html>
<head>

</head>
<body>
<script src="https://algorithmia.com/v1/clients/js/algorithmia-0.2.1.js" type="text/javascript"></script>

<h2>Kuupäev ja kellaaeg</h2>
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

<h2>Numbri arvamine</h2>

<p>
    Sisesta kasti number vahemikus 1-100.
</p>

<p>
    <input type="text" name="number" id="number"><br><br>
    <input type="submit" name="sumbit" id="submit" value="Sisesta">
    <input type="submit" name="reload" onclick="location.reload()" value="Uuesti"><br>

    <span id="answer">
    </span><br>

</p>

<script type="text/javascript">

    const randNr = Math.floor(Math.random() * 100 + 1);

    document.getElementById("submit").onclick = function () {
        let number = document.getElementById("number").value;

        if (number > randNr) {
            document.getElementById('answer').innerHTML = "Arv peab olema väiksem";
        } else if (number < randNr) {
            document.getElementById('answer').innerHTML = "Arv peab olema suurem";
        } else {
            document.getElementById('answer').innerHTML = "Arvasid ära!";
        }
    }
</script>

<h2>Fibonacci jada</h2>

<p>
    Sisesta kasti arv, milleni tahad Fibonacci jada välja printida.
</p>
<input type="text" name="fibo" id="fibo"><br><br>
<input type="submit" name="sumbitFibo" id="submitFibo" value="Sisesta"><br><br>
<span id="fiboSec"></span>

<script type="text/javascript">

    document.getElementById("submitFibo").onclick = function() {
        let number = document.getElementById("fibo").value;
        let value = document.getElementById("fiboSec");

        let n0 = 0;
        let n1 = 1;
        let n2;
        let jada = "0 ";

        for(let i = 0; i < number; i++) {
            n2 = n0 + n1;
            n0 = n1;
            n1 = n2;
            jada += n0 + " ";
        }
        value.innerHTML = jada;
    }

</script>

<p>
    <a href="https://github.com/eliandre/algoritmid" target="_blank">Repo link</a>
</p>
</body>