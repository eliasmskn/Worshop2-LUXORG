<?php
/**
 * Created by PhpStorm.
 * User: inglow
 * Date: 05/04/2017
 * Time: 14:57
 */
echo "easy";
?>
<!--<p id="timer"></p>

<button onclick="changeInterval(myVar)">Stop time</button>-->

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
 /*   var duree = [1000, 3000, 7000];

        setTimeout(function () {
            for(var i= 0; i < duree.length; i++) {
                alert("Hello"+i);
            }
        }, 3000);


*/

</script>
<button onclick="start()">Lancer le décompte</button>
<div id="bip" class="display"></div>

<script>
    var counter = 0;
    var intervalId = null;
    function action()
    {

    }
    function bip()
    {
        document.getElementById("bip").innerHTML = counter + " secondes restantes";
        counter++;
        console.log("test");
        console.log(counter);

    }
    function start()
    {
        intervalId = setInterval(bip, 1000);
        setTimeout(action, counter * 1000);

    }
</script>