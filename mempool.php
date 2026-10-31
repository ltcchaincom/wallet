<?php
include('header.php');

?>

<style>
.myProgress {
  width: 100%;
  background-color: #ccc;
}
.myBar {
  width: 0%;
  height: 30px;
  background-color: #4e8b59;
  transition: width 1s linear;
}
</style>

<br>
    <table style="border-collapse: collapse;">
        <tr valign="top">
            <td colspan="3" style="width: 1130px; margin-left: 10px; height: 45px; background: #3E5AA8; border-radius: 10px 10px 0px 0px; color: #fff; font: bold 24px sans-serif; padding-left: 20px; vertical-align:middle;" valign="middle">
                <b>Mempool Fees Distribution</b>
            </td>
        </tr>
        <tr>
            <td style="width: 270px; height: 50px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 20px;">
                0 to 100 Latoshi(s)
            </td>
            <td style="height: 50px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 10px;">
                <div class="myProgress"> <div class="myBar" id="TxR0"></div> </div>
            </td>
            <td style="width: 150px; height: 50px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 10px;">
                <title1 id="TxRn0"></title1> Tx(s)
            </td>
        </tr>
        <tr>
            <td style="width: 270px; height: 50px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 20px;">
                101 to 1,000 Latoshi(s)
            </td>
            <td style="height: 50px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 10px;">
                <div class="myProgress"> <div class="myBar" id="TxR1"></div> </div>
            </td>
            <td style="width: 150px; height: 50px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 10px;">
                <title1 id="TxRn1"></title1> Tx(s)
            </td>
        </tr>
        <tr>
            <td style="width: 270px; height: 50px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 20px;">
                1,001 to 10,000 Latoshi(s)
            </td>
            <td style="height: 50px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 10px;">
                <div class="myProgress"> <div class="myBar" id="TxR2"></div> </div>
            </td>
            <td style="width: 150px; height: 50px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 10px;">
                <title1 id="TxRn2"></title1> Tx(s)
            </td>
        </tr>
        <tr>
            <td style="width: 270px; height: 50px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 20px;">
                10,001 to 100,000 Latoshi(s)
            </td>
            <td style="height: 50px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 10px;">
                <div class="myProgress"> <div class="myBar" id="TxR3"></div> </div>
            </td>
            <td style="width: 150px; height: 50px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 10px;">
                <title1 id="TxRn3"></title1> Tx(s)
            </td>
        </tr>
        <tr>
            <td style="width: 270px; height: 50px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 20px;">
                100,000+ Latoshi(s)
            </td>
            <td style="height: 50px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 10px;">
                <div class="myProgress"> <div class="myBar" id="TxR4"></div> </div>
            </td>
            <td style="width: 150px; height: 50px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 10px;">
                <title1 id="TxRn4"></title1> Tx(s)
            </td>
        </tr>
        
        <tr>
            <td colspan="3" style="height: 12px; background-color:rgba(255, 255, 255, 0.85); border-radius: 0px 0px 10px 10px;"></td>
        </tr>
    </table>
    
    <br><br>
    
    <table style="border-collapse: collapse;">
        <tr valign="top">
            <td style="width: 1130px; margin-left: 10px; height: 45px; background: #3E5AA8; border-radius: 10px 10px 0px 0px; color: #fff; font: bold 24px sans-serif; padding-left: 20px; vertical-align:middle;" valign="middle">
                <b>Unconfirmed Transactions <title1 id="mempoolNum"></title1></b>
            </td>
        </tr>
        <tr valign="top">
            <td style="width: 1130px; height: 400px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 10px; border-radius: 0px 0px 10px 10px;">
                <div style="width: 1130px; height: 400px; overflow-y: scroll; overflow-x: hidden; margin: 0px 0px 10px 0px; ">
                <table id="MempoolTxids" style="width: 1130px;">
                </table>
                </div>
            </td>
        </tr>
    </table>
    

<br>

</div></center>

<script>
RefreshMempool();
setInterval(function() { RefreshMempool(); }, 60000);

var TxsR0 = 0; // 0
var TxsR1 = 0; // 1 to 10
var TxsR2 = 0; // 11 to 100
var TxsR3 = 0; // 101 to 1000
var TxsR4 = 0; // 1001 to 10000
var TxsR5 = 0; // 10001+

    function RefreshMempool() {
    TxsR0 = 0;
    TxsR1 = 0;
    TxsR2 = 0;
    TxsR3 = 0;
    TxsR4 = 0;
    TxsR5 = 0;
    $.get({
        	url: "statistics/mempool_t.data", cache: false,
        	beforeSend: function (xhr) {
               xhr.overrideMimeType('text/html');
            },
        	success: function(rawresult){
        	    if(typeof rawresult === 'object') rawresult = JSON.stringify(rawresult);
        	    const JsonResult = JSON.parse(rawresult);
        	    var MempoolTxids = document.getElementById("MempoolTxids");
        	    MempoolTxids.innerHTML = "";
        	    var TxNum = Object.keys(JsonResult).length;
        	    document.getElementById("mempoolNum").innerHTML = " (" + TxNum + ")";
        	    var rowBox = MempoolTxids.insertRow(-1);
            	    rowBox.style = "height: 30px;";
            	        var CellBoxH1 = rowBox.insertCell(0);
            	        CellBoxH1.style = "width: 50px; font-weight: bold;";
            	        CellBoxH1.innerHTML = "#";
            	        
        	            CellBoxH1 = rowBox.insertCell(1);
            	        CellBoxH1.innerHTML = "Transaction";
            	        CellBoxH1.style = "font-weight: bold;";
            	        
        	            CellBoxH1 = rowBox.insertCell(2);
            	        CellBoxH1.innerHTML = "Weight";
            	        CellBoxH1.style = "width: 200px; font-weight: bold;";
            	        
        	            CellBoxH1 = rowBox.insertCell(3);
            	        CellBoxH1.innerHTML = "Fees (Zatoshi)";
            	        CellBoxH1.style = "width: 250px; font-weight: bold;";
        	            
        	    for (var i = 0; i < TxNum; i++) {
            	    var rowBox = MempoolTxids.insertRow(-1);
            	    rowBox.style = "height: 30px;";
            	        var CellBoxH1 = rowBox.insertCell(0);
            	        CellBoxH1.innerHTML = i;
            	        CellBoxH1.className = "td_row";
        	            CellBoxH1 = rowBox.insertCell(1);
            	        CellBoxH1.innerHTML = "<a style='text-decoration: none; color: inherit;' href='tx/"+Object.keys(JsonResult)[i]+"'>" + Object.keys(JsonResult)[i] + "</a>";
            	        CellBoxH1.className = "td_row";
            	        CellBoxH1 = rowBox.insertCell(2);
            	        CellBoxH1.innerHTML = "<a style='text-decoration: none; color: inherit;' href='tx/"+Object.keys(JsonResult)[i]+"'>" + JsonResult[Object.keys(JsonResult)[i]].weight + "</a>";
            	        CellBoxH1.className = "td_row";
            	        CellBoxH1 = rowBox.insertCell(3);
            	        var TxFees = parseInt(100000000*JsonResult[Object.keys(JsonResult)[i]].fee);
            	        CellBoxH1.innerHTML = "<a style='text-decoration: none; color: inherit;' href='tx/"+Object.keys(JsonResult)[i]+"'>" + TxFees + "</a>";
            	        CellBoxH1.className = "td_row";
            	        
            	        if (TxFees >= 0 && TxFees <= 100) TxsR0++;
            	        if (TxFees >= 101 && TxFees <= 1000) TxsR1++;
            	        if (TxFees >= 1001 && TxFees <= 10000) TxsR2++;
            	        if (TxFees >= 10001 && TxFees <= 100000) TxsR3++;
            	        if (TxFees >= 10001) TxsR4++;
            	        
        	    }
        	    
        	    document.getElementById("TxRn0").innerHTML = TxsR0;
        	    document.getElementById("TxR0").style.width = (TxsR0 * 100 / TxNum).toString() + "%";
        	    document.getElementById("TxRn1").innerHTML = TxsR1;
        	    document.getElementById("TxR1").style.width = (TxsR1 * 100 / TxNum).toString() + "%";
        	    document.getElementById("TxRn2").innerHTML = TxsR2;
        	    document.getElementById("TxR2").style.width = (TxsR2 * 100 / TxNum).toString() + "%";
        	    document.getElementById("TxRn3").innerHTML = TxsR3;
        	    document.getElementById("TxR3").style.width = (TxsR3 * 100 / TxNum).toString() + "%";
        	    document.getElementById("TxRn4").innerHTML = TxsR4;
        	    document.getElementById("TxR4").style.width = (TxsR4 * 100 / TxNum).toString() + "%";

        	}
    	});
    
    }
</script>

<? include('footer.php'); ?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PJ3R93EH4S"></script>
<script>
window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-PJ3R93EH4S');
</script>

</body>
</html>