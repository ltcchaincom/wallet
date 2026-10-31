<?php
include('header.php');

$pagehtml = file_get_contents("statistics/nodes_info.data");

$pieces = explode('total":', $pagehtml);
$pieces = explode(',', $pieces[1]);
$TotalNodes = $pieces[0];

$pieces = explode('ipv4":', $pagehtml);
$pieces = explode(',', $pieces[1]);
$NodesIPV4 = $pieces[0];

$pieces = explode('ipv6":', $pagehtml);
$pieces = explode(',', $pieces[1]);
$NodesIPV6 = $pieces[0];

$pieces = explode('onion":', $pagehtml);
$pieces = explode('}', $pieces[1]);
$NodesIPO = $pieces[0];

$NodesNet = explode('network":"', $pagehtml);
$NodesIP = explode('ip":"', $pagehtml);
$NodesAdd = explode('addr":"', $pagehtml);

$pagehtml = file_get_contents("statistics/price.data");

?>

<style>
pre {
  width: 1000px; 
  background: #303030;
  color: #f1f1f1;
  padding: 10px 16px;
  border-radius: 2px;
  border-top: 4px solid #00aeef;
  -moz-box-shadow: inset 0 0 10px #000;
  box-shadow: inset 0 0 10px #000;
  counter-reset: line;
}
pre span {
  display: block;
}
pre span:before {
  counter-increment: line;
  content: counter(line);
  display: inline-block;
  border-right: 1px solid #ddd;
  padding: 0 0.5em;
  margin-right: 1.5em;
  color: #888
}
</style>

<script src="https://zerochain.info/js/highcharts.js"></script>
<br>

<table style="border-collapse: collapse; font: bold 24px sans-serif; width: 1200px; margin-left: 40px;">
<tr>
    <td valign="top">
        <table><tr><td>
            <table style="border-collapse: collapse; width: 100%;">
                <tr valign="top">
                    <td style="width: 650px; height: 45px; background: #2980b9; border-radius: 10px 10px 0px 0px; color: #fff; font: normal 24px sans-serif; padding-left: 20px; vertical-align:middle;" valign="middle">
                        <b>List of Master Nodes</b>
                    </td>
                </tr>
                <tr valign="top">
                    <td style="width: 650px; height: 635px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 10px;">
                        <div style="width: 100%; height: 635px; overflow-y: scroll;">
                        <table style="width: 650px;">
                            <tr><td class="td_head1" width="30">#</td>
                                <td class="td_head1" width="70"> Network </td>
                                <td class="td_head1" width="100"> IP </td>
                                <td class="td_head1"> Address </td>
                            </tr>
                            <? for ($x = 1; $x <= $TotalNodes; $x++) {
                            $piecesN = explode('"', $NodesNet[$x]);
                            $piecesI = explode('"', $NodesIP[$x]);
                            $piecesA = explode('"', $NodesAdd[$x]);
                            ?>
                            <tr class="tr_row"><td class="td_row"><?=$x;?> </td>
                                <td class="td_row"> <?=$piecesN[0];?> </td>
                                <td class="td_row"> <?=$piecesI[0];?> </td>
                                <td class="td_row"> <a href="address/<?=$piecesA[0];?>" style="text-decoration: none; color: inherit;"><?=$piecesA[0];?></a> </td>
                            </tr>
                            <? } ?>
                        </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 650px; height: 12px; background-color:rgba(255, 255, 255, 0.85); border-radius: 0px 0px 10px 10px;"></td>
                </tr>
            </table>
        </td></tr>
        </table>
    <td height="20"></td>
    <td valign="top" align="right">
        <table>
            <tr>
                <td>
                    <table style="border-collapse: collapse; font: 18px Courier New;">
                        <tr valign="top">
                            <td style="width: 430px; height: 45px; background: #2980b9; border-radius: 10px 10px 0px 0px; color: #fff; font: normal 24px sans-serif; padding-left: 20px; vertical-align:middle;" valign="middle">
                                <b>Info</b>
                            </td>
                        </tr>
                        <tr valign="top"> 
                            <td style="width: 430px; height: 110px; background-color:rgb(255, 255, 255); padding: 0px 0px 0px 0px;" valign="middle">
                            <center><br>
                            <title1><font size='6'><b><? echo $TotalNodes;?></b> Total Nodes</font></title1><br>
                            <b><? echo $NodesIPV4;?></b> IPV4/ <b><? echo $NodesIPV6;?></b> IPV6/ <b><? echo $NodesIPO;?></b> Onion</br>
                            <br></center>
                            </td>
                        </tr>
                        <tr valign="top">
                            <td style="width: 430px; height: 110px; background-color:rgb(255, 255, 255); padding: 0px 0px 0px 0px;" valign="middle">
                            <center><br>
                            <title1><font size='5'><b>1 Node Earnings:</b></font></title1><br><br>
                            <b><? echo number_format(245 / ($TotalNodes+1),2);?></b> ZER = <b>$<? echo number_format($pagehtml * 245 / ($TotalNodes+1),2);?></b> per day</br>
                            <b><? echo number_format(30 * 245 / ($TotalNodes+1),2);?></b> ZER = <b>$<? echo number_format($pagehtml * 30 * 245 / ($TotalNodes+1),2);?></b> per month</br>
                            <br></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 430px; height: 12px; background-color:rgba(255, 255, 255, 0.85); border-radius: 0px 0px 10px 10px;"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td height="20"></td>
            </tr>
            <tr>
                <td>
                    <table style="border-collapse: collapse;">
                        <tr valign="top">
                            <td style="width: 430px; height: 45px; background: #2980b9; border-radius: 10px 10px 0px 0px; color: #fff; font: bold 24px sans-serif; padding-left: 20px; vertical-align:middle;" valign="middle">
                                <b>Master Nodes</b>
                            </td>
                        </tr>
                        <tr valign="top">
                            <td style="width: 300px; height: 300px; background-color:rgb(255, 255, 255); padding: 10px 0px 0px 0px;" valign="middle">
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

    <table style="border-collapse: collapse; width: 1150px;">
                <tr valign="top">
                    <td style="height: 45px; background: #2980b9; border-radius: 10px 10px 0px 0px; color: #fff; font: normal 24px sans-serif; padding-left: 20px; vertical-align:middle;" valign="middle">
                        <b>How to setup your own node ?</b>
                    </td>
                </tr>
                <tr valign="top">
                    <td style="height: 635px; background-color:rgb(255, 255, 255); padding: 0px 10px 0px 10px; font: normal 18px sans-serif; line-height: 1.8; padding: 20px;">
                        1- Start a new server with OS <b><mark>Ubuntu 18.04.6 LTS</mark></b>.<br>
                        2- Run commands to install ZERO-Cli <br>
                        <pre>
                          <span>sudo apt update && sudo apt upgrade -y</span>
                          <span>sudo apt-get install \
      build-essential pkg-config libc6-dev m4 g++-multilib \
      autoconf libtool ncurses-dev unzip git python python-zmq \
      zlib1g-dev wget bsdmainutils automake cmake curl</span>
                          <span>wget -q -O - http://zerochain.app/zeronode/zeronode_install.sh | bash</span>
                        </pre>
                        
                        <br>3- install PHP <br>
                        <pre>
                            <span>sudo apt update</span>
                            <span>sudo apt install php libapache2-mod-php</span>
                            <span>sudo apt-get install php-curl</span>
                        </pre>
                        
                        <br>4- Open HTTP (80/443) Ports <br>
                        <pre>
                            <span>sudo systemctl restart apache2</span>
                            <span>iptables --flush</span>
                            <span>sudo /sbin/iptables -I INPUT -p tcp -m tcp --dport 80 -j ACCEPT</span>
                            <span>sudo /sbin/iptables -I INPUT -p tcp --dport 443 -j ACCEPT</span>
                        </pre>
                        
                        <br>5- Optional Commands (to restart the node if needed) <br>
                        <pre>
                            <span>zero-cli getinfo</span>
                            <span>zero-cli stop</span>
                            <span>zerod -daemon -txindex=1 -experimentalfeatures=1 -insightexplorer=1 -addressindex=1 -spentindex=1 -reindex=1</span>
                            <span>zero-cli getinfo</span>
                        </pre>
                        
                        <br>6- Upload files using FileZilla. (optional) <br>
                    </td>
                </tr>
                <tr>
                    <td style="height: 12px; background-color:rgba(255, 255, 255, 0.85); border-radius: 0px 0px 10px 10px;"></td>
                </tr>
            </table>
        </td></tr>
        </table>

</div></center>

<script>
        $.get({
        	url: "statistics/nodes_country.data", cache: false,
        	beforeSend: function (xhr) {
               xhr.overrideMimeType('text/html');
            },
        	success: function(rawresult){
        	    const JsonResult = JSON.parse(rawresult);
        	    
        	    var MinersPoolsArr = [];
        	    for (const [key, value] of Object.entries(JsonResult)) {
        	        MinersPoolsArr.push( [key, value] );
        	    }

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
                            headerFormat: '',
                            pointFormat: '<b>{point.name}: {point.percentage:.1f}%</b>'
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
                        name: 'Country',
                        data: MinersPoolsArr}]    
                });
        	    
        	}
    	});
</script>

<? include('footer.php'); ?>

</body>
</html>