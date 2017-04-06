
<?php


include("../Vues/Vue_application.php");
?>
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
<style>
    #bip{
        background-color:black;
        color:#1CD06E;
        display:inline;
        font-size:60px;
        padding:10px;
        border: 3px solid red;
    }
</style>