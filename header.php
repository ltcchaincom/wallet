<?
$useragent=$_SERVER['HTTP_USER_AGENT'];
$IsMobile = 0;
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) $IsMobile = 1;
?>
<html>
    <head>
        <title>LTCchain - Litecoin Blockchain Explorer</title>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="https://ltcchain.com/css/style.css" />
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        
        <meta name="viewport" content="width=device-width, initial-scale=0.33">
        
    </head>
<body>
<br>
<center>

<? if($IsMobile == 1) { ?>
<style>
        body {
          font-family: 'Courier New', monospace;
          background: #ecf0f1;
          min-width:700px;
        }
</style>
<? if (empty($site) || $site == "blocks" || $site == "home") { ?>
<table style="width: 95%;">
<tr><td width="1"></td>
    <td width="85"><center><a href="https://ltcchain.com/" style='text-decoration: none;'><img src="https://ltcchain.com/img/logo.png" width="80" height="80"></a></center></td>
        <td>
            <a href="https://ltcchain.com/" style='text-decoration: none; color:000;'><div style="height:100%;width:100%">
            <font size='6' color='#5D6ECC'><b><font color='#3E5AA8'>LTC</font>chain</b></font><br>
            <font color='grey' size='2'>Litecoin explorer</font>
            </div></a>
        </td>
        <td width="5%"></td>
        <td width="95%" aligh="center" valign="middle">
            <table width="95%" ><tr><td colspan="3">
            <form id="searchform" style="display: inline-block; width: 100%;" action="https://ltcchain.com/">
                <table style="width: 100%;">
                    <tr>
                        <td><input type="text" style='width:100%' name="searchinfo" class="submit_b1" value="" placeholder="Type here to search…" title="Search for Addresses, Transactions, Blocks,...etc"></td>
                        <td width="34" style="text-align: right;"><img id="searchimgbtc" src="https://ltcchain.com/img/search32.png" alt="Search" style="cursor: pointer;" width="30" onclick="document.getElementById('searchform').submit();" onmouseover="document.getElementById('searchimgbtc').src='https://ltcchain.com/img/search32-2.png';" onmouseout="document.getElementById('searchimgbtc').src='https://ltcchain.com/img/search32.png';"></td>
                    </tr>
                </table>
            </form>
            </td></tr><tr>
            <td width="33%"><a href="https://ltcchain.com/home" style="text-decoration:none;"><div style="margin-left: 4px; margin-top: -20px; width: 100%; height: 35px; font-size: 20px; text-align: center; background-color: #385299; color: #fff; border-bottom-left-radius: 10px; padding-top: 10px;"><b>HOME</b></div></a></td>
            <td width="34%"><a href="https://ltcchain.com/mob-wallet" style="text-decoration:none;"><div style="margin-left: 4px; margin-top: -20px; width: 100%; height: 35px; font-size: 20px; text-align: center; background-color: #385299; color: #fff; padding-top: 10px;"><b>WALLET</b></div></a></td>
            <td width="33%"><a href="https://ltcchain.com/api_info" style="text-decoration:none;"><div style="margin-left: 4px; margin-right: 2px; margin-top: -20px; width: 100%; height: 35px; font-size: 20px; text-align: center; background-color: #385299; color: #fff; border-bottom-right-radius: 10px; padding-top: 10px;"><b>API</b></div></a></td>
            </tr></table>
        </td>
        
        </tr></table>
    </td>
</tr>
</table>
<? } else { ?>
<table style="width: 90%;">
<tr>
    <td width="120"><center><a href="https://ltcchain.com/" style='text-decoration: none;'><img src="https://ltcchain.com/img/logo.png" width="110" height="110"></a></center></td>
        <td width="250">
            <a href="https://ltcchain.com/" style='text-decoration: none; color:000;'><div style="height:100%;width:100%">
            <font size='7' color='#5D6ECC'><b><font color='#3E5AA8'>LTC</font>chain</b></font><br>
            <font color='#5D5D73' size='4'>Litecoin explorer</font>
            </div></a>
        </td>
        <td width="5%"></td>
        <td aligh="center" valign="middle">
            <table width="100%"><tr>
            <td width="33%"><a href="https://ltcchain.com/home" style="text-decoration:none;"><div style="margin-left: 4px; margin-top: -20px; width: 100%; height: 50px; font-size: 26px; text-align: center; background-color: #385299; color: #fff; border-bottom-left-radius: 10px; border-top-left-radius: 10px; padding-top: 20px;"><b>HOME</b></div></a></td>
            <td width="34%"><a href="https://ltcchain.com/mob-wallet" style="text-decoration:none;"><div style="margin-left: 4px; margin-top: -20px; width: 100%; height: 50px; font-size: 26px; text-align: center; background-color: #385299; color: #fff; padding-top: 20px;"><b>WALLET</b></div></a></td>
            <td width="33%"><a href="https://ltcchain.com/api_info" style="text-decoration:none;"><div style="margin-left: 4px; margin-right: 2px; margin-top: -20px; width: 100%; height: 50px; font-size: 26px; text-align: center; background-color: #385299; color: #fff; border-bottom-right-radius: 10px; border-top-right-radius: 10px; padding-top: 20px;"><b>API</b></div></a></td>
            </tr></table>
        </td>
        
        </tr></table>
    </td>
</tr>
</table>

<? } } else { ?>

<script src='https://ltcchain.com/css/TweenMax.min.js'></script>
<script type="text/javascript" src="https://ltcchain.com/css/canvasbg2.js"></script>
<canvas id="bg-animation"></canvas>

<? if(!isset($site) || $site == "home" || $site == "") { ?>

<script>
var i = 0;
var i2 = 33;
var i3 = 0;
var i4 = 33;
var txt = '-fees transactions explorer';
var txt2 = 'coin blockchain explorer';
var speed = 50;
function typeWriter() {
if (i2 > 4) {
document.getElementById("subtitle").innerHTML = document.getElementById("subtitle").innerHTML.substring(0, i2 - 1);
i2 = i2 -1;
setTimeout(typeWriter, speed);
}
  else if (i < txt.length) {
    document.getElementById("subtitle").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
} else {
setTimeout(typeWriter2, 4000);
}}
function typeWriter2() {
if (i4 > 4) {
document.getElementById("subtitle").innerHTML = document.getElementById("subtitle").innerHTML.substring(0, i4 - 1);
i4 = i4 -1;
setTimeout(typeWriter2, speed);
}
  else if (i4 < txt2.length) {
    document.getElementById("subtitle").innerHTML += txt2.charAt(i3);
    i3++;
    setTimeout(typeWriter2, speed);
  }
}

window.onload = setTimeout(typeWriter,3000);
</script>
<? } ?>

<style>
.shimmer {
		background: -webkit-gradient(linear, left top, right top, from(#222), to(#111), color-stop(0.5, #6371A8));
		-webkit-background-size: 50px 100%;
		-moz-background-size: 50px 100%;
		background-size: 50px 100%;
		-webkit-background-clip: text;
		-moz-background-clip: text;
		background-clip: text;
		-webkit-animation-name: shimmer;
		-moz-animation-name: shimmer;
		animation-name: shimmer;
		-webkit-animation-duration: 60s;
		-moz-animation-duration: 60s;
		animation-duration: 60s;
		-webkit-animation-iteration-count: infinite;
		-moz-animation-iteration-count: infinite;
		animation-iteration-count: infinite;
		background-repeat: no-repeat;
		background-position: 0 0;
		background-color: #222;
}

@-moz-keyframes shimmer {
		0% {
				background-position: -100px;
		}
		12% {
				background-position: -100px;
		}
		16% {
				background-position: 180px;
		}
		100% {
				background-position: 180px;
		}
}
@-webkit-keyframes shimmer {
		0% {
				background-position: -100px;
		}
		12% {
				background-position: -100px;
		}
		16% {
				background-position: 180px;
		}
		100% {
				background-position: 180px;
		}
}

@-o-keyframes shimmer {
		0% {
				background-position: -100px;
		}
		12% {
				background-position: -100px;
		}
		16% {
				background-position: 180px;
		}
		100% {
				background-position: 180px;
		}
}

@keyframes shimmer {
		0% {
				background-position: -100px;
		}
		12% {
				background-position: -100px;
		}
		16% {
				background-position: 180px;
		}
		100% {
				background-position: 180px;
		}
}
</style>

<div style="z-index: 99; position: absolute; left: 0; top: 28px; padding: 0px; margin: 0px; border-spacing: 0px; width: 100%; height: 80px;" border="0" cellpadding="0" cellspacing="0" >
<table style="width: 1170;"><tr><td width="85" style="padding-left:3px;">
    <a href="https://ltcchain.com/" style='text-decoration: none;'><img src="https://ltcchain.com/img/logo.gif" width="80" height="80"></a></td>
        <td width="272">
            <a href="https://ltcchain.com/" style='text-decoration: none; color:000;'><div style="height:100%;width:100%">
            <font size='6' class="shimmer" color='#5D6ECC'><b><font color='#3E5AA8'>LTC</font>chain</b></font><br>
            <font color='#5D5D73' size='2' id="subtitle">Litecoin blockchain explorer</font>
        </div></a>
        </td>
        <td width="40"></td>
        
        <td aligh="center" valign="middle">
            <a href="https://ltcchain.com/home"><div class="navhome2">EXPLORER</div></a>
            <a href="https://ltcchain.com/wallet"><div class="navsec2">WALLET</div></a>
            <a href="https://ltcchain.com/api_info"><div class="navsec2">API</div></a>
            <div class="navlast2" style="vertical-align:middle; display:block;">
                
            <form id="searchform" style="display: block; width: 100%;" action="https://ltcchain.com/">
                <table style="width: 100%;">
                    <tr>
                        <td style="text-align: right; padding-top:2px;"><input type="text" style='width:90%;' name="searchinfo" class="submit_b4" value="" placeholder="Type here to search…" title="Search for Addresses, Transactions, Blocks,...etc"></td>
                        <td width="34" style="text-align: right;"><img id="searchimgbtc" src="https://ltcchain.com/img/search32.png" alt="Search" style="cursor: pointer; padding-top:2px;" width="35" onclick="document.getElementById('searchform').submit();" onmouseover="document.getElementById('searchimgbtc').src='https://ltcchain.com/img/search32-2.png';" onmouseout="document.getElementById('searchimgbtc').src='https://ltcchain.com/img/search32.png';"></td>
                    </tr>
                </table>
            </form>

            </div>
        </td>
        
        
        </tr></table>
    </td>
</tr>
</table>
</div>
<? } ?>

<br>
