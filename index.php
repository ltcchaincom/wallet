<?
include('connect_sql.php');

$useragent=$_SERVER['HTTP_USER_AGENT'];
$IsMobile = 0;
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) $IsMobile = 1;
if($IsMobile == 1) {
include('index-mob.php');
} else {

if (isset($_GET['searchinfo'])) {

$searchinfo = $_GET['searchinfo'];
$searchinfo = trim($searchinfo);

    if( strlen($searchinfo) == 34 || strlen($searchinfo) == 43 ) {
        header("Location: https://ltcchain.com/address/".$searchinfo);
        exit();
    }

    if( strlen($searchinfo) == 64) {
        header("Location: https://ltcchain.com/tx/".$searchinfo);
        exit();
    }

}

include('header.php');

$pagehtml = file_get_contents("statistics/nodes_info.data");

$pieces = explode('total":', $pagehtml);
$pieces = explode(',', $pieces[1]);
$TotalNodes = $pieces[0];
?>

<script src="/js/highcharts.js"></script>

<br>

<table style="border-collapse: collapse; font: bold 24px sans-serif; width: 1200px; margin-left: 40px;">
<tr>
    <td valign="top">
        <table><tr><td>
            
            <table style="border-collapse: collapse;">
                <tr valign="top">
                    <td style="width: 650px; height: 45px; background: #3E5AA8; border-radius: 8px 8px 0px 0px; color: #fff; font: bold 24px sans-serif; padding-left: 20px; vertical-align:middle;" valign="middle">
                        <b>Latest Blocks</b>
                    </td>
                </tr>
                <tr valign="top">
                    <td style="width: 650px; height: 250px; background-color:rgb(255, 255, 255); padding: 5px 10px 5px 10px;"><center>
                        <table style="width: 640px; padding-top:10px; color: #3E5AA8;">
                            <tr><td class="td_head1" width="20%" style="background: #bdc3c7; border-radius: 5px 0px 0px 0px;"><center> Height </center></td>
                                <td class="td_head1" width="30%" style="background: #bdc3c7;"><center> Age </center></td>
                                <td class="td_head1" width="20%" style="background: #bdc3c7;"><center> Transactions </center></td>
                                <td class="td_head1" style="background: #bdc3c7; border-radius: 0px 5px 0px 0px;"><center> Size </center></td>
                            </tr>
                            <? for ($x = 0; $x <= 12; $x++) { ?>
                            <tr class="tr_row"><td class="td_row"><center> <title1 id="block_<?=$x;?>_h"></title1> </center></td>
                                <td class="td_row"><center> <title1 id="block_<?=$x;?>_a"></title1> </center></td>
                                <td class="td_row"><center> <title1 id="block_<?=$x;?>_t"></title1> </center></td>
                                <td class="td_row"><center> <title1 id="block_<?=$x;?>_s"></title1> </center></td>
                            </tr>
                            <? } ?>
                        </table>
                    </center></td>
                </tr>
                <tr>
                    <td style="width: 650px; height: 14px; background-color:rgba(255, 255, 255, 0.85); border-radius: 0px 0px 10px 10px;"></td>
                </tr>
            </table>
            
            <br>
            
            <table style="border-collapse: collapse;">
                <tr valign="top">
                    <td style="width: 650px; height: 45px; background: #3E5AA8; border-radius: 8px 8px 0px 0px; color: #fff; font: bold 24px sans-serif; padding-left: 20px; vertical-align:middle;" valign="middle">
                        <b><a href="mempool" style="text-decoration: none; color: #fff;">Unconfirmed Transactions <title1 id="mempoolNum"></title1></a></b>
                    </td>
                </tr>
                <tr valign="top">
                    <td style="width: 650px; height: 252px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 10px; border-radius: 0px 0px 10px 10px;">
                        <div style="width: 650px; height: 242px; overflow-y: scroll; overflow-x: hidden; margin: 0px 0px 10px 0px; ">
                        <table id="MempoolTxids" style="width: 650px; padding-top:10px; color: #3E5AA8;">
                        </table>
                        </div>
                    </td>
                </tr>
            </table>
            
        </td></tr>
        <tr><td height="20"></td></tr>
        <tr>
            <td>
                <table style="border-collapse: collapse; font: 18px Courier New;">
                    <tr>
                        <td>
                        <table>
                        <tr><td width="300">
                        <font color="grey">Built with</font></br>
                        &nbsp;<a href="https://nodejs.org/" target="_blank"><img src="/img/nodejs.png" width="130"></a>
                        <a href="#" target="_blank"><img src="/img/bitcoinlib.png" width="140"></a> 
                        </td></tr>
                        </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr></table>
    </td>
    <td valign="top" align="right">
        <table>
            <tr>
                <td>
                    <table style="border-collapse: collapse; font: 18px Courier New;">
                        <tr valign="top">
                            <td style="width: 430px; height: 45px; background: #3E5AA8; border-radius: 8px 8px 0px 0px; color: #fff; font: bold 24px sans-serif; padding-left: 20px; vertical-align:middle;" valign="middle">
                                <b>Info</b>
                            </td>
                        </tr>
                        <tr valign="top">
                            <td style="width: 430px; height: 250px; background-color:rgb(255, 255, 255); padding: 0px 0px 0px 0px; color:#385299;" valign="middle">
                            <center><br>
                            <title1 id="stat_info_price"><font size='6'><b>0 USD</b></font></title1><br>
                            Last trade price</a></br><br>
                            <title1 id="stat_info_blocks"><font size='6'><b>0</b></font></title1><br>
                            Blocks in chain</a></br><br>
                            <title1 id="stat_info_diff"><font size='6'><b>0</b></font></title1><br>
                            Mining Difficulty</a></br><br>
                            <title1 id="stat_info_hash"><font size='6'><b>0</b></font></title1><br>
                            Network Hashrate</a></br><br>
                            </center>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 430px; height: 10px; background-color:rgba(255, 255, 255, 0.85); border-radius: 0px 0px 10px 10px;"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr><td height="20"></td></tr>
            <tr>
                <td>
                    <table style="border-collapse: collapse;">
                        <tr valign="top">
                            <td style="width: 430px; height: 45px; background: #3E5AA8; border-radius: 8px 8px 0px 0px; color: #fff; font: bold 24px sans-serif; padding-left: 20px; vertical-align:middle;" valign="middle">
                                <b>Mining Pools</b>
                            </td>
                        </tr>
                        <tr valign="top">
                            <td style="width: 300px; height: 310px; background-color:rgb(255, 255, 255); padding: 10px 0px 0px 0px;" valign="middle">
                            <center>
                            <div id="pools_chart" style="width: 300px; height: 300px; margin: 0; padding: 0;"></div>
                            </center>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 430px; height: 12px; background-color:rgba(255, 255, 255, 0.85); border-radius: 0px 0px 10px 10px;"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            
        </table>
    </td>
    <td width="40"></td>
</tr>
</table>

<br>

<script>

RefreshLatestBlocks();
setInterval(function() { RefreshLatestBlocks(); }, 60000);

function timeSince(date) {

  var seconds = Math.floor((new Date() - date) / 1000);

  var interval = seconds / 31536000;

  if (interval > 1) {
    return Math.floor(interval) + " years";
  }
  interval = seconds / 2592000;
  if (interval > 1) {
    return Math.floor(interval) + " months";
  }
  interval = seconds / 86400;
  if (interval > 1) {
    return Math.floor(interval) + " days";
  }
  interval = seconds / 3600;
  if (interval > 1) {
    if(Math.floor(interval) == 1) {
        return "one hour ago";
    } else {
        return Math.floor(interval) + " hours";
    }
  }
  interval = seconds / 60;
  if (interval > 1) {
    if(Math.floor(interval) == 1) {
        return "a minute ago";
    } else {
        return Math.floor(interval) + " minutes";
    }
  }
  //return Math.floor(seconds) + " seconds";
  return "few seconds ago";
}

    function formatHashrate(hashrate) {
        if (hashrate >= 1e12) {
            return (hashrate / 1e12).toLocaleString('en-US', {maximumFractionDigits: 2}) + " TH/s";
        }
        if (hashrate >= 1e9) {
            return (hashrate / 1e9).toLocaleString('en-US', {maximumFractionDigits: 2}) + " GH/s";
        }
        return (hashrate / 1e6).toLocaleString('en-US', {maximumFractionDigits: 2}) + " MH/s";
    }

    function RefreshLatestBlocks() {
    $.get({
        	url: "/statistics/blocks.data", cache: false,
        	success: function(rawresult){
        	    if(typeof rawresult === 'object') rawresult = JSON.stringify(rawresult);
        	    const JsonResult = JSON.parse(rawresult);
        	    var MyTimeHoursDiff = 0;
        	    for (let i = 0; i <= 12; i++) {
        	        document.getElementById("block_"+i+"_h").innerHTML = '<a href="block/' + JsonResult.blocks[i].hash + '" style="text-decoration: none; color: inherit;">' + JsonResult.blocks[i].height.toLocaleString('en-US', {maximumFractionDigits: 0}) + '</a>';
        	        
        	        let unix_timestamp = JsonResult.blocks[i].time;
                    document.getElementById("block_"+i+"_a").innerHTML = timeSince(unix_timestamp*1000);
                    
                    document.getElementById("block_"+i+"_t").innerHTML = '<a href="block/' + JsonResult.blocks[i].hash + '" style="text-decoration: none; color: inherit;">' + JsonResult.blocks[i].txlength.toLocaleString('en-US', {maximumFractionDigits: 0}) + '</a>';
                    document.getElementById("block_"+i+"_s").innerHTML = JsonResult.blocks[i].size.toLocaleString('en-US', {maximumFractionDigits: 0});
        	    }
        	    document.getElementById("stat_info_blocks").innerHTML = "<font size='6'><b>"+JsonResult.blocks[0].height.toLocaleString('en-US', {maximumFractionDigits: 0})+"</font></b>";
        	    document.getElementById("stat_info_diff").innerHTML = "<font size='6'><b>"+JsonResult.blocks[0].difficulty.toLocaleString('en-US', {maximumFractionDigits: 0})+"</font></b>";
        	    document.getElementById("stat_info_hash").innerHTML = "<font size='6'><b>"+formatHashrate(JsonResult.hashrate)+"</font></b>";
        	}
    	});
    	
    
    $.get({
        	url: "statistics/mempool.data", cache: false,
        	beforeSend: function (xhr) {
               xhr.overrideMimeType('text/html');
            },
        	success: function(rawresult){
        	    const JsonResult = JSON.parse(rawresult);
        	    var MempoolTxids = document.getElementById("MempoolTxids");
        	    MempoolTxids.innerHTML = "";
        	    var TxNum = JsonResult.length;
        	    document.getElementById("mempoolNum").innerHTML = " (" + TxNum + ")";
        	    var rowBox = MempoolTxids.insertRow(-1);
            	    rowBox.style = "height: 30px;";
            	        var CellBoxH1 = rowBox.insertCell(0);
            	        CellBoxH1.style = "width: 30px; background: #bdc3c7; border-radius: 5px 0px 0px 0px;";
            	        CellBoxH1.innerHTML = "<center>#</center>";
        	            var CellBoxH2 = rowBox.insertCell(1);
        	            CellBoxH2.style = "background: #bdc3c7; border-radius: 0px 5px 0px 0px;";
            	        CellBoxH2.innerHTML = " &nbsp;Transaction";
        	    
        	    for (var i = 0; i < TxNum; i++) { 
            	    var rowBox = MempoolTxids.insertRow(-1);
            	    rowBox.style = "height: 30px;";
            	        var CellBoxH1 = rowBox.insertCell(0);
            	        CellBoxH1.style = "width: 30px;";
            	        CellBoxH1.innerHTML = "<center>"+(i+1)+"</center>";
            	        CellBoxH1.className = "td_row";
        	            var CellBoxH2 = rowBox.insertCell(1);
            	        CellBoxH2.innerHTML = "<a style='text-decoration: none; color: inherit;' href='tx/"+JsonResult[i]+"'>" + JsonResult[i] + "</a>";
            	        CellBoxH2.className = "td_row";
        	    }
        	}
    	});
    
    }
    
        $.get({
        	url: "statistics/price.data", cache: false,
        	beforeSend: function (xhr) {
               xhr.overrideMimeType('text/html');
            },
        	success: function(rawresult){
        	    const JsonResult = JSON.parse(rawresult);
        	    document.getElementById("stat_info_price").innerHTML = "<font size='6'><b>" + JsonResult.USD + " USD</b></font>";
        	}
    	});
    	
    	$.get({
        	url: "statistics/pools_info.data", cache: false,
        	beforeSend: function (xhr) {
               xhr.overrideMimeType('text/html');
            },
        	success: function(rawresult){
        	    const JsonResult = JSON.parse(rawresult);
        	    
        	    var MinersPoolsArr = [];
        	    
        	    //var TotalHashRate = 0;
        	    //for (let i = 0; i < JsonResult.data.length; i++) {
        	    //    TotalHashRate = TotalHashRate + JsonResult.data[i].hashrate;
        	    //}
        	    
        	    for (let i = 0; i < JsonResult.length; i++) {
        	        //MinersPoolsArr.push( [JsonResult[i].poolName, parseFloat((JsonResult[i].share).toFixed(2)) ] );
        	        MinersPoolsArr.push( [JsonResult[i].poolName, JsonResult[i].avgHashrate ] );
        	    }
        	    
        	    MinersPoolsArr.sort(compareSecondColumn);
        	    
        	    var chart = new Highcharts.Chart({
                    chart: {
                        renderTo: 'pools_chart',
                        
                        margin: [0, 0, 0, 0],
                        spacingTop: 0,
                        spacingBottom: 0,
                        spacingLeft: 0,
                        spacingRight: 0
                    },
                    credits: { enabled: false},
                    title: { text: null},
                    tooltip: {
                            headerFormat: 'Hashrate',
                            pointFormat: '<br>{point.name}: <b>{point.percentage:.1f}%</b>'
                        },
                    plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                dataLabels: {
                                    enabled: false,
                                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                },
                                showInLegend: false
                            }
                        },
                    series: [{
                        type: 'pie',
                        name: 'Hashrate',
                        data: MinersPoolsArr}]    
                });
        	    
        	}
    	});
    
    function compareSecondColumn(a, b) {
        if (a[1] === b[1]) {
            return 0;
        }
        else {
            return (a[1] > b[1]) ? -1 : 1;
        }
    }
    
</script>

</div></center>

<? include('footer.php'); ?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PJ3R93EH4S"></script>
<script>
window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-PJ3R93EH4S');
</script>

</body>
</html>
<? } ?>