
<?php


include("../Vues/Vue_application.php");
?>
<script>
    var k=0;
    var counter = 0;
    var intervalId = null;
    var items = [
        ["cafe", 1],

        ["voiture", 5]
    ];
    for (var i = 0; i < items.length; i++) {
        var dureetime = items[i][1];
        var libelle = items[i][0];

    }
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


        for (var i = 0; i < items.length; i++) {
            var dureetime = items[i][1];
            var libelle = items[i][0];
            $("#bip").html(dateHMS(counter));
           if(counter==dureetime)
           {
               console.log(libelle);
               var j=i+1;

               var calc=items[j][1]-items[i][1];

               $(".content .value").html(calc);
               $(".tacheprecedente .value").html(items[i][0]);
               $(".tachesuivante .value").html(items[j][0]);
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
        font-size:9em;
        padding:10px;
        border: 3px solid red;
    }
    #précedente
    {

        float: right;
    }
</style>