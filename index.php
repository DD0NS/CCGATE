<html>
<head>
	<title>𝐌𝐡𝐞𝐞𝐒𝐭𝐲𝐥𝐞 | 𝐋𝐈𝐕𝐄 𝐂𝐂 </title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<body background="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/items/70100/3cfd519cbf481dc734a2915e01875ab4c3e2ecf5.jpg">
	  
    
</head>
<body>
	<br>
		<div class="row col-md-12">
  &nbsp&nbsp&nbsp&nbsp
  <div class="card col-sm-7">
  <center>
  <h5 class="card-body h5">𝓢𝓾𝓹𝓱𝓪𝔀𝓪𝓽</h5>
  <div class="card-body">
    <span>ＣＣ ＬＩＶＥ ＯＲ ＤＥＡＤ</span>
<div class="md-form">
	<div class="col-md-9">
  <textarea type="text" style="text-align: center;" id="lista" class="md-textarea form-control" rows="2"></textarea>
</div>
&nbsp&nbsp
</div>
<center>
<button class="btn btn-primary" style="width: 150px; outline: none;" id="testar" onclick="enviar()" >𝓢𝓽𝓪𝓻𝓽</button>
<button class="btn btn-danger" style="width: 150px; outline: none;">𝓢𝓽𝓸𝓹</button>
</center>
  </div>
</div>
&nbsp&nbsp
<div class="card col-sm-2">
  <div class="card-body">
  <br>
  	<span>Status:</span>&nbsp
	<span class="badge badge-secondary">ONLINE.</span>
<div class="md-form">
	<span>LIVE:</span>&nbsp<span id="cLive" class="badge badge-success">0</span>
	<br>
	<span>Dead:</span>&nbsp<span id="cDie" class="badge badge-danger"> 0</span>
	<br>
	<span>Tested:</span>&nbsp<span id="total" class="badge badge-info">0</span>
	<br>
	<span>Total:</span>&nbsp<span id="carregadas" class="badge badge-dark">0</span>
  <br>
  <br>
  <br>
  <div class="footer-copyright text-center py-1">𝖬𝖺𝖽𝖾 𝖡𝖸  : <a href="https://www.facebook.com/MheeStyle">𝓢𝓾𝓹𝓱𝓪𝔀𝓪𝓽</a></div>
</div>
  </div>
</div>
</div>
<br>

<div class="col-md-9">
<div class="card">
<div style="position: absolute;
        top: 0;
        right: 0;">
	<button id="mostra" class="btn btn-primary">SHOW/HIDE</button>
</div>
  <div class="card-body">
    <h6 style="font-weight: bold;" class="card-title">Live - <span  id="cLive2" class="badge badge-success">0</span></h6>
    <div id="bode"><span id=".live" class="live"></span>
</div>
  </div>
</div>
</div>

<br>
<div class="col-md-9">
<div class="card">
	<div style="position: absolute;
        top: 0;
        right: 0;">
	<button id="mostra2" class="btn btn-primary">SHOW/HIDE</button>
</div>
  <div class="card-body">
    <h6 style="font-weight: bold;" class="card-title">Dead - <span id="cDie2" class="badge badge-danger">0</span></h6>
    <div id="bode2"><span id=".dead" class="dead"></span>
    </div>
  </div>
</div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){


    $("#bode").hide();
	$("#esconde").show();
	
	$('#mostra').click(function(){
	$("#bode").slideToggle();
	});

});

</script>

<script type="text/javascript">

$(document).ready(function(){


    $("#bode2").hide();
	$("#esconde2").show();
	
	$('#mostra2').click(function(){
	$("#bode2").slideToggle();
	});

});

</script>

<script title="ajax do checker">
    function enviar() {
        var linha = $("#lista").val();
        var linhaenviar = linha.split("\n");
        var total = linhaenviar.length;
        var ap = 0;
        var rp = 0;
        linhaenviar.forEach(function(value, index) {
            setTimeout(
                function() {
                    $.ajax({
                        url: 'api.php?lista=' + value,
                        type: 'GET',
                        async: true,
                        success: function(resultado) {
                            if (resultado.match("#Live")) {
                                removelinha();
                                ap++;
                                aprovadas(resultado + "");
                            }else {
                                removelinha();
                                rp++;
                                reprovadas(resultado + "");
                            }
                            $('#carregadas').html(total);
                            var fila = parseInt(ap) + parseInt(rp);
                            $('#cLive').html(ap);
                            $('#cDie').html(rp);
                            $('#total').html(fila);
                            $('#cLive2').html(ap);
                            $('#cDie2').html(rp);
                        }
                    });
                }, 500 * index);
        });
    }
    function aprovadas(str) {
        $(".live").append(str + "<br>");
    }
    function reprovadas(str) {
        $(".dead").append(str + "<br>");
    }
    function removelinha() {
        var lines = $("#lista").val().split('\n');
        lines.splice(0, 1);
        $("#lista").val(lines.join("\n"));
    }
</script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
</body>
<br>
<footer >	
  </footer>
</html>