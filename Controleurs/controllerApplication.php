<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<!--<p id="timer"></p>

<button onclick="changeInterval(myVar)">Stop time</button>-->
<div class="content">Tâche précdente <span class='value'></span></div>
<script>
    /*    var x = ["un", "deux", "trois" ];
     var myVar = setInterval(myTimer ,1000);
     function myTimer() {
     var d = new Date();
     document.getElementById("timer").innerHTML = d.toLocaleTimeString();
     var elt = document.getElementById('timer');
     var monTexte = elt.innerText || elt.textContent;
     //console.log(monTexte);
     for(var i= 0; i < x.length; i++)
     {
     //console.log(x[i]);
     }

     }
     function changeInterval(myVar2)
     {
     console.log(myVar2);

     }*/

/*

    var duree = [1000, 3000, 7000];
    function tache() {
        var items = [
            ["café", 5000],
            ["rideaux", 10000],
            ["voiture", 15000]
        ];
        console.log(items);

        for (var i = 0; i < items.length; i++) {
            var dureetime = items[i][1];
            var libelle = items[i][0];
            setTimeout(function () {
                alert("votre "+libelle+" a terminé");
            }, dureetime);
            console.log(dureetime);
            console.log(libelle);
        }
    }

    tache();
    var d = new Date(); // for now
    var time=d.getHours(); // => 9
    d.getMinutes(); // =>  30
    d.getSeconds(); // => 51
    console.log(time);
    console.log(d);
*/


</script>


<button onclick="start()">Lancer l' Alarme</button>
<div id="bip" class="display"></div>

<script>
    var counter = 0;
    var intervalId = null;
    function action()
    {

    }
    function dateHMS(time) {
        var addZero = function(v) { return v<10 ? '0' + v : v; };
        var d = new Date(time * 1000); // js fonctionne en milisecondes
        var t = [];
        t.push(addZero(d.getHours())-1);
        t.push(addZero(d.getMinutes()));
        t.push(addZero(d.getSeconds()));
        return t.join(':');
    }
    function bip()
    {
        var items = [
            ["café", 5],
            ["rideaux", 10],
            ["voiture", 100]
        ];


        for (var i = 0; i < items.length; i++) {
            var dureetime = items[i][1];
            var libelle = items[i][0];
            $("#bip").html(dateHMS(counter));
           if(counter==dureetime)
           {
               console.log(libelle);
               $(".content .value").html(libelle);

               alert(libelle);
           }
        }

        counter++;
        console.log(counter);

    }
    function start()
    {
        intervalId = setInterval(bip, 1000);
        setTimeout(action, counter * 1000);

    }
</script>