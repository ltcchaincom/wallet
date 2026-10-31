<?php

$txid = $params[0];

if( strlen($txid) <> 64) {
    header("Location: https://ltcchain.com/home"); 
    exit();
}
 
include('header.php');
?>
<br>

<table style="border-collapse: collapse; font: bold 24px sans-serif; width: 1160px; margin-left: 10px;">
    <tr valign="top">
        <td style="height: 45px; background: #3E5AA8; border-radius: 10px 10px 0px 0px; color: #fff; font: bold 22px sans-serif;" valign="middle">
            &nbsp; <title1 id="bi_n"><b>Transaction #</b></title1>
        </td>
    </tr>
    <tr valign="top">
        <td style="height: 250px; background-color:rgb(255, 255, 255); padding: 10px 10px 0px 10px;">
            
            
<center><script>
fetch('https://zerads.com/ad/ad.php?ref=12323&width=728')
  .then(response => response.text())
  .then(data => {
    const elements = document.querySelectorAll('[id="ZerAds728"]');
    for (const element of elements) {
        if (element.style.display === 'none') {
        element.style.display = 'inline-block';
        if(data.includes("*BLANK*") == false) {
        data = data.replace('<meta http-equiv="refresh" content="280">', '');
        element.innerHTML = "<iframe style='border:none;' width='728' height='90'></iframe>";
        element.querySelector('iframe').srcdoc = data;
        } else {
        element.innerHTML = "<a href='https://zerads.com/index.php?view=site&id=12323' target='_blank'><div style='width: 728px; height: 50px; background-color: rgba(200, 200, 200, 0.1); position: relative;'><div style='position: absolute; color: #999; font-size: 30px; top: 17%; left: 35%; font-family: Arial; '><i>Advertise Here</i></div></div></a>";
        }
        break;
        }
    }
  });
</script>
<div id="ZerAds728" style="display: none;"></div><br></center>
            
            <table style="width: 100%; padding-left: 10px; font-size: 18px;">
                <tr class="tr_row"><td class="td_row td_row_2">Hash:</td> <td><title1 id="bi_hash" class="td_row td_row_2"></title1></td></tr>
                <tr class="tr_row"><td class="td_row td_row_2">Confirmations:</td> <td><title1 id="bi_conf" class="td_row td_row_2"></title1></td></tr>
                <?if(1==1){?>
                <tr class="tr_row"><td class="td_row td_row_2">Size:</td> <td><title1 id="bi_size" class="td_row td_row_2"></title1></td></tr>
                <?}?>
                <tr class="tr_row"><td class="td_row td_row_2">Fees:</td> <td><title1 id="bi_fees" class="td_row td_row_2"></title1>(LTC)</td></tr>
                <tr class="tr_row"><td class="td_row td_row_2">Time:</td> <td><title1 id="bi_date" class="td_row td_row_2"></title1></td></tr>
                <tr class="tr_row"><td class="td_row td_row_2">Number of inputs:</td> <td><title1 id="bi_inputs" class="td_row td_row_2"></title1></td></tr>
                <tr class="tr_row"><td class="td_row td_row_2">Total in:</td> <td><title1 id="bi_totinputs" class="td_row td_row_2"></title1>(LTC)</td></tr>
                <tr class="tr_row"><td class="td_row td_row_2">Number of outputs:</td> <td><title1 id="bi_outputs" class="td_row td_row_2"></title1></td></tr>
                <tr class="tr_row"><td class="td_row td_row_2">Total out:</td> <td><title1 id="bi_totoutputs" class="td_row td_row_2"></title1>(LTC)</td></tr>
                <tr class="tr_row"><td class="td_row td_row_2">Block Hash:</td> <td><title1 id="bi_blk2" class="td_row td_row_2"></title1></td></tr>
                <tr class="tr_row"><td class="td_row td_row_2">Version:</td> <td><title1 id="bi_ver" class="td_row td_row_2"></title1></td></tr>
                <tr class="tr_row"><td class="td_row td_row_2">LockTime:</td> <td><title1 id="bi_lock" class="td_row td_row_2"></title1></td></tr>
                <tr class="tr_row"><td class="td_row td_row_2">Memo:</td> <td><title1 id="bi_memo" class="td_row td_row_2"></title1></td></tr>

            </table>
            <br>
            
            
            
            <table style="width: 100%; font: bold 24px sans-serif;">
            <tr><td>&nbsp;Inputs:</td> <td></td> <td>Outputs:</td></tr>
            <tr>
            <td valign="top" style="width: 49%;">
            <table id="transaction_inputs" style="width: 100%; padding-left: 5px; font-size: 18px; display: inline-block; border-spacing: 0px;">
                <tr class="tr_row">
                    <td class="td_row td_row_2" width="30"><b>#</b></td> 
                    <td class="td_row td_row_2" width="120"><b>Amount</b></td>
                    <td class="td_row td_row_2" width="450"><b>From Address</b></td>
                </tr>
            </table>
            </td><td valign="middle" align="center" valign="middle" width="32"><img src='/img/arrow.png'></td>
            <td valign="top" style="width: 49%;">
            <table id="transaction_outputs" style="width: 100%; font-size: 18px; display: inline-block;">
                <tr class="tr_row">
                    <td class="td_row td_row_2" width="30"><b>#</b></td> 
                    <td class="td_row td_row_2" width="120"><b>Amount</b></td>
                    <td class="td_row td_row_2" width="450"><b>To Address</b></td>
                </tr>
            </table>
            </td>
            </tr></table>
            <br>
        </td>
    </tr>
    <tr>
        <td style="height: 20px; background-color:rgba(255, 255, 255, 0.85); border-radius: 0px 0px 20px 20px;"></td>
    </tr>
</table>

<br>

<script>

        $.get({
        	url: "/api/explorer_k/txid/<? echo $txid;?>", cache: false,
        	success: function(rawresult){
        	    if(typeof rawresult === 'object') rawresult = JSON.stringify(rawresult);
        	    const JsonResult = JSON.parse(rawresult);
        	    document.getElementById("bi_n").innerHTML = "<b>Transaction #" + JsonResult.txid + "</b>";
        	    document.getElementById("bi_hash").innerHTML = JsonResult.txid;
        	    if (JsonResult.confirmations == 0) {
        	    document.getElementById("bi_conf").innerHTML = "<font color='red'>Unconfirmed Transaction</font>";
        	    } else {
        	    document.getElementById("bi_conf").innerHTML = JsonResult.confirmations;
        	    }
        	    <?if(1==1){?>
        	    if(JsonResult.size == 0) {
        	    document.getElementById("bi_size").innerHTML = "-";
        	    } else {
        	    document.getElementById("bi_size").innerHTML = JsonResult.size + " (bytes)";
        	    }
        	    <?}?>
        	    if(typeof JsonResult.fees !== 'undefined') {
        	    document.getElementById("bi_fees").innerHTML = ConvertToFixed(JsonResult.fees);
        	    } else {
        	    document.getElementById("bi_fees").innerHTML = 'None';
        	    }
        	    var date1 = new Date(JsonResult.time*1000);
        	    document.getElementById("bi_date").innerHTML = date1;
        	    
        	    
        	    document.getElementById("bi_inputs").innerHTML = JsonResult.vin.length.toString();
        	    if(typeof JsonResult.valueIn !== 'undefined') {
        	    document.getElementById("bi_totinputs").innerHTML = JsonResult.valueIn.toString();
        	    } else {
        	        if(typeof JsonResult.valueOut !== 'undefined') {
        	        document.getElementById("bi_totinputs").innerHTML = JsonResult.valueOut.toString();
        	        } else {
        	        document.getElementById("bi_totinputs").innerHTML = 'None';
        	        }
        	    }
        	    
        	    document.getElementById("bi_outputs").innerHTML = JsonResult.vout.length.toString();
        	    document.getElementById("bi_totoutputs").innerHTML = JsonResult.valueOut.toString();
        	    
        	    if(typeof JsonResult.blockhash !== 'undefined') {
        	    document.getElementById("bi_blk2").innerHTML = "<a href='https://ltcchain.com/block/"+JsonResult.blockhash+"' style='text-decoration: none; color: #07729d;'>" + JsonResult.blockhash + "</a>";
        	    } else {
        	    document.getElementById("bi_blk2").innerHTML = "-";
        	    }
        	    document.getElementById("bi_ver").innerHTML = JsonResult.version;
        	    document.getElementById("bi_lock").innerHTML = JsonResult.locktime;

        	    
                fetch('/getmemo.php?tx=' + JsonResult.txid)
                  .then(response => response.text())
                  .then(data => {
                    document.getElementById('bi_memo').textContent = data || '-';
                  })
                  .catch(error => {
                    console.error('Error fetching memo:', error);
                    document.getElementById('bi_memo').textContent = '-';
                  });
                  
        	    
        	    var transaction_inputs = document.getElementById('transaction_inputs');
            	if(JsonResult.vin.length == 0) { //Shielded Inputs
            	    var row = transaction_inputs.insertRow(-1);
            	    row.className = "tr_row";
            	    var newcell = row.insertCell(0);
            	    newcell.className = "td_row td_row_2";
            	    newcell.innerHTML = parseInt(i+1).toString();;
            	    var newcell = row.insertCell(1);
            	    newcell.className = "td_row td_row_2";
            	    newcell.innerHTML = JsonResult.valueOut;
            	    var newcell = row.insertCell(2);
            	    newcell.className = "td_row td_row_2";
            	    newcell.innerHTML = "Shielded Inputs";
            	} else { // inputs
            	    for (var i = 0; i < JsonResult.vin.length; i++) {
                	    var row = transaction_inputs.insertRow(-1);
                	    row.className = "tr_row";
                	    var newcell = row.insertCell(0);
                	    newcell.className = "td_row td_row_2";
                	    if(typeof JsonResult.vin[i].txid !== "undefined") {
                	    newcell.innerHTML = "<a href='https://ltcchain.com/tx/"+JsonResult.vin[i].txid+"' style='text-decoration: none; color: #07729d;'>" + parseInt(i+1).toString() + "</a>";
                	    } else {
                	    newcell.innerHTML = parseInt(i+1).toString();
                	    }
                	    var newcell = row.insertCell(1);
                	    newcell.className = "td_row td_row_2";
                	    if(typeof JsonResult.vin[i].value !== 'undefined') {
                	    newcell.innerHTML = JsonResult.vin[i].value;
                	    } else {
                	    newcell.innerHTML = JsonResult.valueOut.toString();
                	    }
                	    var newcell = row.insertCell(2);
                	    newcell.className = "td_row td_row_2";
                	    if(typeof JsonResult.vin[i].addr !== 'undefined') {
                	    newcell.innerHTML = "<a href='https://ltcchain.com/address/"+JsonResult.vin[i].addr+"' style='text-decoration: none; color: #07729d;'>" + JsonResult.vin[i].addr + "</a>";
                	    } else {
                	    newcell.innerHTML = "New Generated Coins";
                	    }
                	}
            	}
        	    
        	    var transaction_outputs = document.getElementById('transaction_outputs');
            	for (var i = 0; i < JsonResult.vout.length; i++) {
            	    var row = transaction_outputs.insertRow(-1);
            	    row.className = "tr_row";
            	    var newcell = row.insertCell(0);
            	    newcell.className = "td_row td_row_2";
            	    newcell.innerHTML = parseInt(i+1).toString();
            	    
            	    var newcell = row.insertCell(1);
            	    newcell.className = "td_row td_row_2";
            	    if(typeof JsonResult.vout[i].value !== 'undefined') {
            	    newcell.innerHTML = JsonResult.vout[i].value;
            	    } else {
            	    newcell.innerHTML = JsonResult.valueOut.toString();
            	    }
            	    
            	    var newcell = row.insertCell(2);
            	    newcell.className = "td_row td_row_2";
            	    if(JsonResult.vout[i].scriptPubKey?.addr?.[0] !== undefined) {
            	    newcell.innerHTML = "<a href='https://ltcchain.com/address/"+JsonResult.vout[i].scriptPubKey.addr[0]+"' style='text-decoration: none; color: #07729d;'>" + JsonResult.vout[i].scriptPubKey.addr[0] + "</a>";
            	    } else {
            	        if(JsonResult.vout[i].scriptPubKey?.hex?.substring(0, 2) === "6a") {
            	            let hexString = JsonResult.vout[i].scriptPubKey.hex.substring(4);
            	            let str = '';
                            for (let i = 0; i < hexString.length; i += 2) {
                              str += String.fromCharCode(parseInt(hexString.substr(i, 2), 16));
                            }
            	            newcell.innerHTML = '<font size=2>hex:</font><font size=1>' + hexString + '</font>' + '</br><font size=2>decode:</font>' + str;
            	        } else {
            	            newcell.innerHTML = "No Output / MWEB";
            	        }
            	    }
            	    
            	}
            	if(JsonResult.vout.length == 0) {
            	    var row = transaction_outputs.insertRow(-1);
            	    row.className = "tr_row";
            	    var newcell = row.insertCell(0);
            	    newcell.className = "td_row td_row_2";
            	    var newcell = row.insertCell(1);
            	    newcell.className = "td_row td_row_2";
            	    var newcell = row.insertCell(2);
            	    newcell.className = "td_row td_row_2";
            	    newcell.innerHTML = "Shielded Outputs";
            	}
        	    
        	}
    	});
    
    function ConvertToFixed(n){
        var sign = +n < 0 ? "-" : "",
            toStr = n.toString();
        if (!/e/i.test(toStr)) {
            return n;
        }
        var [lead,decimal,pow] = n.toString()
            .replace(/^-/,"")
            .replace(/^([0-9]+)(e.*)/,"$1.$2")
            .split(/e|\./);
        return +pow < 0 
            ? sign + "0." + "0".repeat(Math.max(Math.abs(pow)-1 || 0, 0)) + lead + decimal
            : sign + lead + (+pow >= decimal.length ? (decimal + "0".repeat(Math.max(+pow-decimal.length || 0, 0))) : (decimal.slice(0,+pow)+"."+decimal.slice(+pow)))
    }

    
</script>

</div></center>

<? include('footer.php'); ?>

</body>
</html>