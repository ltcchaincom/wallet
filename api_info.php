<?
include('header.php');
?>
<br>
 
<table style="border-collapse: collapse; font: bold 24px sans-serif; width: 1160px; margin-left: 10px;">
    <tr valign="top">
        <td style="height: 40px; background: #3E5AA8; border-radius: 10px 10px 0px 0px; color: #fff; font: bold 24px sans-serif;" valign="middle">
            &nbsp; <b>Request API Key</b>
        </td>
    </tr>
    <tr valign="top">
        <td style="background-color:rgb(255, 255, 255); padding: 10px 10px 0px 15px; font: normal 16px sans-serif; line-height: 30px;">
            <table><tr>
                <td><font color='#3E5AA8'><a href='https://ltcchain.com/requestapikey' style='text-decoration: none; color: #3E5AA8;'><mark> > Request a New API Key </mark></a></font>
                <font color='#a9a9a9'>&nbsp; Instant activation</font>
                <br></td>
                </tr></table>
        </td>
    </tr>
    <tr>
        <td style="height: 20px; background-color:rgba(255, 255, 255, 0.85); border-radius: 0px 0px 20px 20px;"></td>
    </tr>
</table>

<br>


<table style="border-collapse: collapse; font: bold 24px sans-serif; width: 1160px; margin-left: 10px;">
    <tr valign="top">
        <td style="height: 40px; background: #3E5AA8; border-radius: 10px 10px 0px 0px; color: #fff; font: bold 24px sans-serif;" valign="middle">
            &nbsp; <b>Basic APIs</b>
        </td>
    </tr>
    <tr valign="top">
        <td style="background-color:rgb(255, 255, 255); padding: 10px 10px 0px 15px; font: normal 16px sans-serif; line-height: 30px;">
            <u><b><font size='5'>Address Balance</font></b></u><br>
            <font color='grey'>Returns amount ever received minus amount ever sent by a given address.</font><br>
            URL<br>
            <font color='#3E5AA8'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/balance/<font color='blue'>{address}</font></font><br>
            Example<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/balance/La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>Z6exHksPXM</font>/balance/<font color='blue'>La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu</font></a></font><br>
            <br>
            
            <u><b><font size='5'>Address Total Received</font></b></u><br>
            <font color='grey'>Returns the amount ever received by a given address. including unconfirmed transactions.</font><br>
            URL<br>
            <font color='#3E5AA8'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/received/<font color='blue'>{address}</font></font><br>
            Example<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/received/La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>Z6exHksPXM</font>/received/<font color='blue'>La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu</font></a></font><br>
            <br>

            <u><b><font size='5'>Address Confirmed Total Received</font></b></u><br>
            <font color='grey'>Returns the amount ever received by a given address. only confirmed transactions.</font><br>
            URL<br>
            <font color='#3E5AA8'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/confirmed/<font color='blue'>{address}</font></font><br>
            Example<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/confirmed/La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>Z6exHksPXM</font>/confirmed/<font color='blue'>La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu</font></a></font><br>
            <br>
            
            <u><b><font size='5'>Address Info</font></b></u><br>
            <font color='grey'>Returns the information for a given address.</font><br>
            URL<br>
            <font color='#3E5AA8'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/addressinfo/<font color='blue'>{address}</font>/<font color='blue'>{noTxList}</font></font><br>
            Example<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/addressinfo/La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu/0' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>Z6exHksPXM</font>/addressinfo/<font color='blue'>La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu</font>/<font color='blue'>0</font></a></font><br>
            <br>
            
            <u><b><font size='5'>Address Transactions</font></b></u><br>
            <font color='grey'>Returns the transactions for a given address.</font><br>
            URL<br>
            <font color='#3E5AA8'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/txs/<font color='blue'>{address}</font>/<font color='blue'>{page-num}</font></font><br>
            Example<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/txs/La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu/1' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>Z6exHksPXM</font>/txs/<font color='blue'>La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu</font>/<font color='blue'>1</font></a></font><br>
            <br>
            
            <u><b><font size='5'>Address UTXOs</font></b></u><br>
            <font color='grey'>Returns the unspent transaction outputs for a given address.</font><br>
            URL<br>
            <font color='#3E5AA8'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/utxo/<font color='blue'>{address}</font></font><br>
            Example<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/utxo/La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>Z6exHksPXM</font>/utxo/<font color='blue'>La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu</font></a></font><br>
            <br>
            
            <u><b><font size='5'>Transaction Info</font></b></u><br>
            <font color='grey'>Returns the information for a given transaction id.</font><br>
            URL<br>
            <font color='#3E5AA8'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/txid/<font color='blue'>{transaction}</font></font><br>
            Example<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/txid/59a102ae40ade48fcda99eb9c5f7e3c5199a159e77ea32dd821967474f6064ac' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>Z6exHksPXM</font>/txid/<font color='blue'>59a102ae40ade48fcda99eb9c5f7e3c5199a159e77ea32dd821967474f6064ac</font></a></font><br>
            <br>
            
            <u><b><font size='5'>Generate a New Address</font></b></u><br>
            <font color='grey'>Returns random address with the private key.</font><br>
            URL<br>
            <a style='text-decoration: none;' href='https://ltcchain.com/api/Z6exHksPXM/getnewaddress'><font color='#3E5AA8'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/getnewaddress</font></a><br>
            <br>
            
        </td>
    </tr>
    <tr>
        <td style="height: 20px; background-color:rgba(255, 255, 255, 0.85); border-radius: 0px 0px 20px 20px;"></td>
    </tr>
</table>

<br>


<table style="border-collapse: collapse; font: bold 24px sans-serif; width: 1160px; margin-left: 10px;">
    <tr valign="top">
        <td style="height: 40px; background: #3E5AA8; border-radius: 10px 10px 0px 0px; color: #fff; font: bold 24px sans-serif;" valign="middle">
            &nbsp; <b>Blockchain APIs</b>
        </td>
    </tr>
    <tr valign="top">
        <td style="background-color:rgb(255, 255, 255); padding: 10px 10px 0px 15px; font: normal 16px sans-serif; line-height: 30px;">
            
        <u><b><font size='5'>Recent-Block Height</font></b></u><br>
            <font color='grey'>Returns the latest block height in the chain.</font><br>
            URL<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/height' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/height</a></font><br>
            <br>

            <u><b><font size='5'>Recent-Block Info</font></b></u><br>
            <font color='grey'>Returns the latest block in the chain.</font><br>
            URL<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/block' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/block</a></font><br>
            <br>
            
            <u><b><font size='5'>Recent X Blocks Info</font></b></u><br>
            <font color='grey'>Returns information about the latest {num} blocks in the chain.</font><br>
            URL<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/blocks/10' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/blocks/<font color='green'>{num}</font></a></font><br>
            <br>
            
            <u><b><font size='5'>Block Info</font></b></u><br>
            <font color='grey'>Returns the information for a given block hash.</font><br>
            URL<br>
            <font color='#3E5AA8'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/blockinfo/<font color='blue'>{block}</font></font><br>
            Example<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/blockinfo/44bf14fb9a3587b60c153965d2770e6c3ae3efeb07a4743870821a2ac9b231cb' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>Z6exHksPXM</font>/blockinfo/<font color='blue'>44bf14fb9a3587b60c153965d2770e6c3ae3efeb07a4743870821a2ac9b231cb</font></a></font><br>
            <br>
            
            <u><b><font size='5'>Difficulty</font></b></u><br>
            <font color='grey'>Returns the last solved block's difficulty.</font><br>
            URL<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/difficulty' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/difficulty</a></font><br>
            <br>
            
            <u><b><font size='5'>Chain Info</font></b></u><br>
            <font color='grey'>Returns information about the chain.</font><br>
            URL<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/getinfo' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/getinfo</a></font><br>
            <br>
            
            <u><b><font size='5'>Mempool</font></b></u><br>
            <font color='grey'>Returns transactions from the mempool.</font><br>
            URL<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/mempool/0' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/mempool/{show-details}</a></font><br>
            Example<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/mempool/0' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>Z6exHksPXM</font>/mempool/<font color='blue'>0</font></a></font><br>
            <br>
            
    </td>
    </tr>
    <tr>
        <td style="height: 20px; background-color:rgba(255, 255, 255, 0.85); border-radius: 0px 0px 20px 20px;"></td>
    </tr>
</table>

<br>


<table style="border-collapse: collapse; font: bold 24px sans-serif; width: 1160px; margin-left: 10px;">
    <tr valign="top">
        <td style="height: 40px; background: #3E5AA8; border-radius: 10px 10px 0px 0px; color: #fff; font: bold 24px sans-serif;" valign="middle">
            &nbsp; <b>Push Raw Transaction</b>
        </td>
    </tr>
    <tr valign="top">
        <td style="background-color:rgb(255, 255, 255); padding: 10px 10px 0px 15px; font: normal 16px sans-serif; line-height: 30px;">
            <u><b><font size='5'>Send a Raw Transaction</font></b></u><br>
            <font color='grey'>Push raw transaction onto network.</font><br>
            URL<br>
            <font color='#3E5AA8'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/rawtx/<font color='blue'>{raw}</font></font><br>
            Example<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/rawtx/0400008085202f89037f153fa00000000003932b94a2e0e6e7b09b0000000000d048f47c62c20532bb000000006a473044022047a82af66478b071325a00000000009fc9455bc5e1f74e0000000000639ccbd002207760000000000eee20d7f99274f7c0000000000b5610587459784ef50000000000010328ba543ae508500000000005727bdd2d6c25417000000000029bea9860fe2a7efffffff000000000021acae13a325b42a00000000005ea23d6fa36c871d4f0000000000b000000006a473040000000000baf45c7b9ebaf040d191d2ba5fa616fef0000000000d2c9d5decc7e4d17022040000000000c5505fd1ebbf9e00000000002d2c3380417e64560000000000a9e03210328ba5430000000000d0dad75727b00000000007d4733a482c29b00000000007effffffff580000000000e98fb83116d03ab7443182526cf7010000000000622bd3c5e38d0100000060000000000100e7540522f628f9b0766ca5ce314da0000000000f1b9584d278b900000000000302200171ac53baf2000000000099f44c32851688c7a0620000000000710bc20c953f0000000000043ae5085aecdd0dad75727bdd2d600000000003a482c29bea9860fe2a7e0000000000a086010000000000197600000000005a245a733504d0c4365bb697fab1000000000050262f0000000000197d8c73c2804000000000000000000009a23de18d77bf3e88ac50c30000000000000000000000000000000000' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>Z6exHksPXM</font>/rawtx/<font color='blue'>xxxxx-raw-data-xxxxx</font></a></font><br>
            <br>
            
            <u><b><font size='5'>Decode Raw Transaction</font></b></u><br>
            <font color='grey'>Read content of the raw transaction.</font><br>
            URL<br>
            <font color='#3E5AA8'>https://ltcchain.com/api/<font color='green'>{api-key}</font>/decode/<font color='blue'>{raw}</font></font><br>
            Example<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/decode/01000000013f261df0188468aa4f617f45de1af66c6de32a6662044bb333ef4e96b8931a39010000006b483045022100919e6c4d0dcf024491f6ec2c403019987cc4b723843df23adfccd7f0ddecef8702205d61dda8370b34b468db4f06c48b3f2698f98eab073ad6b1ebff348915706e9c012102146bb77df047806045d70ce7a1ce5af0802f85ec556171976e77e74faec60621ffffffff02204e0000000000001976a9149266e4042bee112ba8cc2dd93b69d59dd52e3a0a88ac76310100000000001976a914a271fbfb3269b346a0ab6de74462e8d3db9d842688ac00000000' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='green'>Z6exHksPXM</font>/decode/<font color='blue'>xxxxx-raw-data-xxxxx</font></a></font><br>
        </td>
    </tr>
    <tr>
        <td style="height: 20px; background-color:rgba(255, 255, 255, 0.85); border-radius: 0px 0px 20px 20px;"></td>
    </tr>
</table>

<br>

<table style="border-collapse: collapse; font: bold 24px sans-serif; width: 1160px; margin-left: 10px;">
    <tr valign="top">
        <td style="height: 40px; background: #3E5AA8; border-radius: 10px 10px 0px 0px; color: #fff; font: bold 24px sans-serif;" valign="middle">
            &nbsp; <b>Create / Send a Transaction</b>
        </td>
    </tr>
    <tr valign="top">
        <td style="background-color:rgb(255, 255, 255); padding: 10px 10px 0px 15px; font: normal 16px sans-serif; line-height: 30px;">
            <u><b><font size='5'>rawtx-build</font></b></u><br>
            <font color='grey'>Build raw transaction by a given address key & outputs data.</font><br>
            URL<br>
            <font color='#3E5AA8'>https://ltcchain.com/api/<font color='cyan'>{api-key}</font>/rawtxbuild/<font color='red'>pkey</font>/<font color='blue'>toaddress</font>/<font color='green'>amount</font>/<font color='Magenta'>fees</font>/<font color='orange'>send</font><br>
            Parameters Example:<br>
            <table>
                <tr><td width="250">#1 &nbsp; API Key =</td> <td> <a href='requestapikey'><font color='#1fd3de'>Get one instantly</font></a></td></tr>
                <tr><td>#2 &nbsp; From Private Key =</td> <td><font color='red'>L4SSfAAJzeHzHvD6UYfggpCTbWsofAzP79qvJCi6Uy7Sh29AX98g</font></td></tr>
                <tr><td>#3 &nbsp; To Address(es) =</td> <td><font color='blue'>La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu</font>_Address2_Address3</td></tr>
                <tr><td>#4 &nbsp; Amount to Spend (LTC) =</td> <td><font color='green'>0.25</font>_Amount2_Amount3</td></tr>
                <tr><td>#5 &nbsp; Transaction Fees (LTC) =</td> <td><font color='Magenta'>0.00000001</font></td></tr>
                <tr><td>#6 &nbsp; Send ( 0 or 1 ) =</td> <td><font color='orange'>0</font> &nbsp; &nbsp; <font color='grey'>// 0: Returns raw transaction. 1: Push and returns Txid.</font></td></tr>
                <tr><td>#7 &nbsp; Memo (optional) =</td> <td> Description <font color='grey'>// Payment+From+My+Site (use + instead of space).</font></td></tr>
            </table>
            Example URL:<br>
            <font color='#3E5AA8'><a href='https://ltcchain.com/api/Z6exHksPXM/rawtxbuild/T4AYG2T1g3SpyikBhwNDbm2pxv7RaxHGsw3sTk4jhAowLjPeZXQa/LYa4BC1YEkxhVMH4sJhee6FEXevNZ4QjBh/0.001/0.000007/0/For+Testing' style='text-decoration: none; color: #3E5AA8;'>https://ltcchain.com/api/<font color='#1fd3de'>Z6exHksPXM</font>/rawtxbuild/<font color='red'>T4AYG2....PeZXQa</font>/<font color='blue'>LYa4BC1YEkxhVMH4sJhee6FEXevNZ4QjBh</font>/<font color='green'>0.001</font>/<font color='Magenta'>0.000007</font>/<font color='orange'>0</font>/For+Testing</a></font>
        </td>
    </tr>
    <tr>
        <td style="height: 20px; background-color:rgba(255, 255, 255, 0.85); border-radius: 0px 0px 20px 20px;"></td>
    </tr>
</table>

</div></center>

<? include('footer.php'); ?>

</body>
</html>