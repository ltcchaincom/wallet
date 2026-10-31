<?php

$API_URL = "https://litecoinspace.org/api";

include('header-wallet.php');
?>
<br>

<div id="qrCamScan" style="display: none; position: absolute; top: 0; left: 0; width: 100%;"></div>

<script src="https://ltcchain.com/js/qrcode.js"></script>
<script src="https://ltcchain.com/js/appltc.js?ref=16"></script>
<script src="https://ltcchain.com/js/html5-qrcode.min.js"></script>
<script src="https://ltcchain.com/js/jspdf.min.js"></script>


<div id="AutoLoginWarning" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.8);">
    <div style="background-color: #E0FFFF; margin: 6% auto; padding: 10px; border: 5px solid lightblue; width: 800px; line-height:32px;">
        <center>
        <br><b><font size="4">Save login details in your browser?</font></b>
        <br><font size="3">
        Login details will be encrypted and stored in your browser's LocalStorage.</br>It's secure as long as your browser and computer is secure.
        <br><br>
        <div onclick="document.getElementById('savelogincb').checked=false; document.getElementById('AutoLoginWarning').style.display='none';" style="width: 350px; height:35px; display: inline-block; padding-top: 8px; background-color: #50AD4D; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Disable Auto-login</div>
        <font size='2'></br>recommended, no data will be stored.</font>
        <br><br>
        <div onclick="document.getElementById('savelogincb').checked=true; document.getElementById('AutoLoginWarning').style.display='none';" style="width: 350px; height:35px; display: inline-block; padding-top: 8px; background-color: #f36f6f; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Enable Auto-login</div>
        <font size='2'></br>encrypted data will be stored in your browser.</font>
        </br><br>
        <div onclick="document.getElementById('savelogincb').checked=false; document.getElementById('AutoLoginWarning').style.display='none';" style="width: 180px; height:35px; display: inline-block; padding-top: 8px; background-color: #f36f6f; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Close</div>
        <br>&nbsp;</font>
        </center>
    </div>
</div>


<table style="border-collapse: collapse; font: bold 24px sans-serif; margin-left: 10px;">
    <tr valign="top">
        <td width="770" style="height: 45px; background: #3E5AA8; border-radius: 10px 0px 0px 0px; color: #fff; font: bold 24px sans-serif; padding-left: 20px; vertical-align:middle;" valign="middle">
            <b>Litecoin Wallet</b>
        </td>
        <td width="300" style="background: #3E5AA8; color: #fff; font: bold 24px sans-serif; padding-right: 12px; vertical-align:middle;" valign="middle" align="right">
            <title1 id="total_balance" title="Total Balance"></title1>
        </td>
        <td width="40" style="background: #3E5AA8; vertical-align:middle;" valign="middle">
            <img id="LogoutBtn" src="https://ltcchain.com/img/logout_btn.png" width="30" height="30" onclick="ExitMyWallet();" style="cursor: pointer; display: none;" title="Logout">
        </td>
        <td width="40" style="background: #3E5AA8; border-radius: 0px 10px 0px 0px; vertical-align:middle;" valign="middle">
            <img id="RefreshBtn" src="https://ltcchain.com/img/refresh_btn.png" width="30" height="30" onclick="displayMyWallet();" style="cursor: pointer; display: none;" title="Refresh">
        </td>
    </tr>
    <tr valign="top">
        <td colspan="4" style="height: 250px; background-color:rgb(255, 255, 255); padding: 10px 10px 0px 10px; border-radius: 0px 0px 20px 20px; " align="center">
            <center>
            <table id="LoginBox" style="width: 920px; font: bold 24px sans-serif;">
                <tr>    <td colspan="2"><center>
                <p style='text-align:center;
                  margin-bottom: 2px; text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5); border: 1px solid #ffe6cc; border-radius: 4px; color: #cc6600; background-color: #ffe6cc; border-color: #ffc180; padding: 5px;font-size: 14px; font-family: arial;font-weight:nornal'>IMPORTANT</br>
                This is Client-side Javascript Wallet Generator.</br>
                Do Not Forget Your ID and Password.</br>
                Password is Case Sensitive, Any change in password will generate /access a different wallet.</br>
                Keep Backup In Safe Place. We Can Not Restore Your Balance If You Forget Your Login.</br></p>
            </center><br></td></tr>
                <tr height="50">
                <td>Wallet ID:</td> <td><input id="EntropyId" name="EntropyId" size="40" class="submit_b1" style="font: bold 18px sans-serif; background-color: lightyellow;" placeholder="Enter your Wallet ID" ></td>
            </tr><tr height="50">
                <td><font color='#bbb' size='4'>Do not have an Wallet ID ?</font></td> <td>
                    <div onclick="GenerateNewWalletID();" style="width: 200px; display: inline-block; padding: 6px; background-color: #2980b9; cursor: pointer; border-radius: 10px; font: bold 18px sans-serif; color: #fff; text-align: center;">Generate a New ID</div>
                    </td>
            </tr><tr height="50">
                <td>Password:</td> <td><input id="PassPhrase" name="PassPhrase" type="password" size="40" class="submit_b1" style="font: bold 18px sans-serif; background-color: lightyellow;" placeholder="Enter Wallet Password" ></td>
            </tr><tr height="80">
                <td></td>
                <td><div id="loginbutton" onclick="LoginPaperWallet();" class="buttonlog" style="width: 280px; height:40px; display: inline-block; padding-top: 10px; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Login My Wallet</div>
                
                <input type="checkbox" style="width:14px; height:14px;" id="savelogincb" name="savelogincb" value="Auto-login" onclick="document.getElementById('AutoLoginWarning').style.display='block';" ><label for="savelogincb"><font color='grey' size='2'> Auto-login</font></label><br>
                
                <br><hr style="width: 500px; margin-left: 0; background-color: #85A9B9; border: none; height: 2px;">
                <div onclick="ImportWLT();" style="width: 160px; display: inline-block; padding: 6px; background-color: #85A9B9; cursor: pointer; border-radius: 10px; font: bold 18px sans-serif; color: #fff; text-align: center;">Import .wlt File</div>
                <div onclick="ImportSeed();" style="width: 160px; display: inline-block; padding: 6px; background-color: #85A9B9; cursor: pointer; border-radius: 10px; font: bold 18px sans-serif; color: #fff; text-align: center;">Import 12 words</div>
                
                </td>
            </tr><tr>

            <td colspan="2"><br><center>
                <p style='text-align:center;
                  margin-bottom: 2px; text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5); border: 1px solid #DDFBD5; border-radius: 4px; color: #358247; background-color: #D5F0D7; border-color: #B0E8A2; padding: 5px;font-size: 14px; font-family: arial;font-weight:nornal'>
                You can use rememberable ID and Password.</br>
                example : ID <b>Donald</b> and Password <b>trump</b>.</br>
                Your wallet is encrypted and can only be decrypted with your password.</br>
                It's recommended to set a random ID and strong Password to keep your wallet secured.</br></p>
            </center><br></td>
            
            </tr><tr><td colspan="2">
            <font size="5" color="#525252"><img src="img/star.jpg" width="30" style="vertical-align:middle; padding-bottom:6px;"> Features<br></font><br>
            <table><tr>
            <td width="215" style="vertical-align: top;"><center><font size="5" color="#525252"><img src="img/secure.jpg" width="100" height="100"><br>Secure<br>
            <font size="4" color="grey">All generated wallets are encrypted and can only be decrypted with password.</font></font></center></td>
            <td width="10"></td>
            <td width="215" style="vertical-align: top;"><center><font size="5" color="#525252"><img src="img/earth.jpg" width="100" height="100"><br>Worldwide access<br>
            <font size="4" color="grey">Going on holiday or business trip? You can access your coins from all over the world.</font></font></center></td>
            <td width="10"></td>
            <td width="215" style="vertical-align: top;"><center><font size="5" color="#525252"><img src="img/privacy.jpg" width="100" height="100"><br>Privacy<br>
            <font size="4" color="grey">We have no control over your wallet. You're 100% in charge of your own wallet.</font></font></center></td>
            <td width="10"></td>
            <td width="215" style="vertical-align: top;"><center><font size="5" color="#525252"><img src="img/like.jpg" width="100" height="100"><br>Easy<br>
            <font size="4" color="grey">We make it really easy to use your online wallet and perform various operations with it.</font></font></center></td>
            </tr>
            <tr><td colspan="7"><center><br><a href="mob-wallet" style="text-decoration:none;"><font color="#3E5AA8" size="2"><br>MOBILE VERSION</font></a></br><br></center></td></tr>
            </table>
            </td>
            
            </tr></table>
            
            <table id="ImportSeedBox" style="width: 920px; font: bold 24px sans-serif; display: none;">
                <tr height="50">
                    <td width="920">
                        <br>Login with seed words :<br><br>
                        <input id="SeedWords" size="85" class="submit_b1" style="font: bold 18px sans-serif; background-color: lightyellow;" placeholder="Enter 12 / 24 seed words" onchange="UpdateSeedWords();">
                        <br><br>
                        <title1 id="1st_address" style="font-size: 18px; color: grey;"></title1><br><br>
                        <select id="SeedPath" style="font: bold 24px sans-serif;" onchange="UpdateSeedWords();">
                            <option value="" disabled>Select Derivation Path</option>
                            <option value="m/44'/2'/0'/0" selected>BIP44: Legacy (P2PKH)</option>
                            <option value="m/49'/2'/0'/0">BIP49: Nested SegWit (P2SH-P2WPKH)</option>
                            <option value="m/84'/2'/0'/0">BIP84: Native SegWit (Bech32)</option>
                        </select>
                        
                        <br><br>
                        <center>
                        <div id="loginbutton" onclick="ImportSeedBack();" class="buttonlog2" style="width: 100px; height:35px; display: inline-block; padding-top: 10px; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Back</div>
                        &nbsp; &nbsp; &nbsp;
                        <div id="loginbutton" onclick="LoginSeedWords();" class="buttonlog" style="width: 280px; height:35px; display: inline-block; padding-top: 10px; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Login Wallet</div>
                        </center>
                    </td>
            </tr><tr height="50">
            </table>
            
            </center>
            
            <div id="WalletBox" style="font: bold 24px sans-serif; display: none;">
                <table style="font: bold 24px sans-serif;"><tr><td>
                    <font color="#898989">&nbsp;&nbsp;&nbsp;Address: </font><select id="AddressList" style="font: 24px Courier New; width: 910px; height:40px;" onchange="ActiveAddressID = this.value; UpdateWalletInfoTrans();"></select>
                </td>
                <td>
                    &nbsp;<img src="https://ltcchain.com/img/add_btn.png" width="35" height="35" onclick="InsertNextWalletAddress();" style="cursor: pointer; ">
                </td>
                </tr></table>
                <table><tr>
                    <td valign="middle" width="220" height="220" align="left"><div id="qrcode" width="192" height="192" style="width: 192px; height: 192px; padding-left: 20px; vertical-align:middle;"></div></td>
                    <td>
                        <table style="padding-left: 10px; font-size: 18px; display: inline-block; ">
                            <tr class="tr_row"><td class="td_row td_row_2" colspan="2"><input type="radio" id="protocol1" name="wlt_protocol" value="m/44'/2'/0'/0" checked onchange="UpdateWalletKeyPath();"><label for="protocol1">Legacy</label> &nbsp; &nbsp; <input type="radio" id="protocol2" name="wlt_protocol" value="m/49'/2'/0'/0" onchange="UpdateWalletKeyPath();"><label for="protocol2">Nested SegWit</label> &nbsp; &nbsp; <input type="radio" id="protocol3" name="wlt_protocol" value="m/84'/2'/0'/0" onchange="UpdateWalletKeyPath();"><label for="protocol3">Native SegWit</label></td></tr>
                            <tr class="tr_row"><td class="td_row td_row_2">Address:</td> <td><title1 id="bi_hash" class="td_row td_row_2"></title1> <span onclick='copyAdrs();'><img draggable='false' <img class='hovrble' draggable='false' src='img/copy.svg' alt='copy'></span></td></tr>
                            <tr class="tr_row"><td class="td_row td_row_2" width="240">Balance:</td> <td width="460"><title1 id="bi_bal" class="td_row td_row_2"></title1></td></tr>
                            <tr class="tr_row"><td id="bi_unbal0" class="td_row td_row_2">Unconfirmed Balance:</td> <td><title1 id="bi_unbal" class="td_row td_row_2"></title1></td></tr>
                        </table>
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td width="12"></td>
                                <td><div onclick="ShowSendBox();" class="buttonlog" style="width: 130px; height:45px; padding-top: 16px; margin-bottom: 25px; cursor: pointer; border-radius: 10px; font: 24px sans-serif; color: #f4fff5; text-align: center;" title="Send a Transaction"><img src="img/sendbtn.png" width="26" style="vertical-align:top; display:inline;"> SEND</div></td>
                            </tr><tr>
                                <td align="right" valign="middle" style="vertical-align:middle;"><img id="BackupNewAccount" src="img/dot.gif" width="10" height="10" style="visibility: hidden;" title="Don't forget to backup your wallet"></td>
                                <td><div id="BackupNewAccountBtn" onclick="document.getElementById('backupmessage').innerHTML = 'Backup your wallet :'; document.getElementById('exclose').style.display = 'inline-block'; document.getElementById('ModalBackup').style.display = 'block';" style="width: 130px; height:30px; padding-top: 6px; background-color: #50AD4D; cursor: pointer; border-radius: 10px; font: 20px sans-serif; color: #f4fff5; text-align: center;" title="Export Private Keys">EXPORT</div></td>
                            </tr><tr>
                                <td></td>
                                <td><div onclick="ImportPKBox();" style="width: 130px; height:30px; padding-top: 6px; background-color: #50AD4D; cursor: pointer; border-radius: 10px; font:  20px sans-serif; color: #f4fff5; text-align: center;" title="Import a Private Key">IMPORT</div></td>
                            </tr>
                        </table>
                    </td>
                </tr></table>
                
                <br>
                <div id="TransactionsBox" style="text-align: left;">
                    &nbsp;&nbsp;Transactions (<title1 id="bi_txn"></title1>) &nbsp;<span onclick='refreshAdrs();'><img class='hovrble' draggable='false' id="RefreshTxs" src="https://ltcchain.com/img/refresh_btn2.png" width="25" height="25" onclick="this.src='https://ltcchain.com/img/loading.gif'; UpdateWalletInfoTrans(0);" style="vertical-align:middle; display:inline; cursor: pointer;" title="Refresh"></span><br>
                    <table id="adr_txs" style="width: 1130px; padding-left: 10px; padding-top: 10px; font-size: 18px; border: none; border-spacing: 0px;">
                    </table>
                    <center>
                    <div id="PrevButton" onclick="PrevPage();" style="width: 120px; display: inline-block; padding: 6px; background-color: #ccc; border-radius: 10px; font: bold 18px Arial; color: #fff; text-align: center;">Prev</div>
                    <div id="SkipPages" style="width: 160px; display: inline-block; padding: 6px; border-radius: 10px; font: bold 18px Arial; color: #555; text-align: center;"></div>
                    <div id="NextButton" onclick="NextPage();" style="width: 120px; display: inline-block; padding: 6px; background-color: #3E5AA8; cursor: pointer; border-radius: 10px; font: bold 18px Arial; color: #fff; text-align: center;">Next</div>
                    </br><br></center>
                </div><center>
                <div id="SendBox" style="background-color: #f9f9f9; border: 3px solid #f6f6bf; border-radius: 5px; padding:10px; margin-bottom:20px; width:1105px; display: none;">
                    <center>
                    Send a Transaction <br>
                    <table style="font-size: 18px; padding: 10px 6px 0px 10px;"><tr>
                        <td width="80" height="50">From: </td>
                        <td width="560"> <title1 id="send_from"></title1> </td>
                        <td width="150" colspan="4"></td>
                    </tr><tr>
                        <td>To: </td>
                        <td>
                            <div id="SendToAddressList" style="font: bold 18px Courier New; display: inline-block;">
                                <input id="SendToAd_0" size="42" class="submit_b3" placeholder="Type Address Send To..." >&nbsp;
                                <input id="SendToAm_0" size="10" class="submit_b3" placeholder="Type Amount">
                            </div>
                        </td>
                        <td align="left" valign="bottom">
                            <div id="MaxAmountBtn" onclick="SendMaxAmountSet();" style="width: 50px; height:27px; display: inline-block; padding-top: 8px; margin-bottom: 1px; border-radius: 5px; font: 16px sans-serif;" class="submit_b2">Max</div>
                        </td>
                        <td width="30" align="left" valign="bottom" style="padding-bottom:3px;">
                            <img src="https://ltcchain.com/img/camscan.jpg" width="30" height="30" onclick='document.getElementById("qrCamScan").style.display = "block"; html5QrCode1.start({ facingMode: "environment" }, { fps: 10 }, qrCodeSuccessCallback);' title="Scan QR">
                        </td>
                        <td width="30" align="left" valign="bottom" style="padding-bottom:3px;">
                            <div id="RemoveAddress" style="display:none;"><img src="https://ltcchain.com/img/min_btn.png" width="30" height="30" onclick="RemoveOutputAddress(); CalcTotalOutputs();" title="Remove Address"></div>
                        </td>
                        <td width="40" align="left" valign="bottom" style="padding-bottom:3px;">
                            <img src="https://ltcchain.com/img/add_btn.png" width="30" height="30" onclick="AddNewOutputAddress();" title="Add Output Address">
                        </td>
                    </tr><tr>
                    <td width="80" height="50">Fees: </td>
                        <td width="500"> 
                            <table style="width: 490px;"><tr>
                                <td width="365"><input id="Send_Fees" size="10" class="submit_b3" style="background-color: #fdf1f9;" placeholder="Fees Amount" value="0.00001" onchange="ForceMinimumFees();" > </td>
                                <td><title1 id="total_outputs" style="text-align: right;"></title1></td>
                            </tr></table>
                        </td>
                        <td width="150" colspan="4"><font color='#909090' size='3' id='showadv' onclick='show_new_form1()' style='cursor: pointer;'>&#8643; advanced options &#8642;</font></td>
                    </tr>
                    </table>
                    </br>
                    
                    <div id="advancedoptions" style="display: none;">
                    <table style="font-size: 18px; padding: 0px 6px 10px 10px; width:830px;">
                    <tr>
                        <td width="135">Memo: </td>
                        <td>
                            <div style="font: bold 18px Courier New; display: inline-block;">
                                <input id="SendMeme" size="47" class="submit_b3" placeholder="Type a memo/note with this transaction (Off-chain)" >
                            </div>
                        </td>
                    </tr>
                    </table>
                    <br></div>
                    
                    <script>
                    var showadvop = 0;
                        function show_new_form1() {
                            if(showadvop == 0) {
                        	document.getElementById('advancedoptions').style.display='block';
                        	document.getElementById('showadv').innerHTML="<font color=#bfbfbf style='cursor: pointer;'>&#8639; advanced options &#8638;</font>";
                        	showadvop = 1;
                            } else {
                        	document.getElementById('advancedoptions').style.display='none';
                        	document.getElementById('showadv').innerHTML="<font color=#909090 style='cursor: pointer;'>&#8643; advanced options &#8642;</font>";
                        	showadvop = 0;
                            }
                        }
                    </script>
                    
                    
                    
                    <div onclick="CancelTransaction();" class="buttonlog2" style="width: 100px; height:35px; display: inline-block; padding-top: 8px; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Cancel</div>
                    
                    <div id="sendbutton" onclick="GenerateTransaction();" class="buttonlog" style="width: 250px; height:35px; display: inline-block; padding-top: 8px; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Send Transaction</div>
                    
                    <br>&nbsp;
                    </center>
                </div></center>
                
                <div id="ExportKeysBox" style="background-color: #f9f9f9; border: 3px solid #f6f6bf; border-radius: 5px; padding:10px; margin-bottom:20px; width:1105px; display: none;">
                    <center>
                    Private Keys / Backup <br><br>
                    <div id="PrivKeysList" style="font: bold 18px Courier New; display: inline-block; text-align: left;">
                    </div>
                    <br>
                    <div onclick="CancelTransaction();" style="width: 100px; height:35px; display: inline-block; padding-top: 8px; background-color: #f36f6f; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Close</div>
                    
                    <div onclick="ExportPDF();" style="width: 200px; height:35px; display: inline-block; padding-top: 8px; background-color: #50AD4D; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Save as PDF</div>
                    
                    <br>&nbsp;
                </div>
                
                <div id="ImportPaperWallet" style="background-color: #f9f9f9; border: 3px solid #f6f6bf; border-radius: 5px; padding:10px; margin-bottom:20px; width:1105px; display: none;">
                    <center>
                    Import Paper Wallet (Private Key) <br>
                    <br>
                    <font size='4'>Private Key:</font>
                    <input id="SweepPK" size="70" class="submit_b1" placeholder="Type Private Key ..." onchange="ImportSweepPKchange();" >
                    <br>
                    <title1 id="priv_add"></title1>
                    <br><br>
                    <font size='4'>Sweep Balance to Address:</font> <br>
                    <input id="SweepToAd" size="42" class="submit_b1" placeholder="Type Address" >
                    <br><br>
                    <div onclick="CancelTransaction();" style="width: 100px; height:35px; display: inline-block; padding-top: 8px; background-color: #f36f6f; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Close</div>
                    
                    <div onclick="ImportSweepPK();" style="width: 250px; height:35px; display: inline-block; padding-top: 8px; background-color: #50AD4D; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Sweep Balance</div>
                    
                    <br>&nbsp;
                    </center>
                </div>
                
            </div>
            
        </div>
    </td>
    </tr></table>

<script>
document.getElementById('PassPhrase').addEventListener('keydown', function(event) {
    if (event.key === 'Enter') LoginPaperWallet();
});
function LoginSeedWords() {
    document.getElementById("ImportSeedBox").style.display = 'none';
    document.getElementById("EntropyId").value = document.getElementById("SeedWords").value;
    document.getElementById("PassPhrase").value = "";
    
    KeyPath = document.getElementById("SeedPath").value;
    if(KeyPath == "m/44'/2'/0'/0") { // BIP44
        document.getElementById("protocol1").checked = true;
    } else if (KeyPath === "m/49'/2'/0'/0") { // BIP49: Nested SegWit P2SH-P2WPKH
        document.getElementById("protocol2").checked = true;
    } else if (KeyPath === "m/84'/2'/0'/0") { // BIP84: Native SegWit P2WPKH
        document.getElementById("protocol3").checked = true;
    }
    
    document.getElementById("loginbutton").style.cursor = "wait";
    setTimeout(function(){
    document.getElementById("EntropyId").loginup.call();
    }, 50);
    document.getElementById("headw").style.display = "none";
    document.getElementById("headwrefresh").style.display = "block";
}
function UpdateWalletKeyPath() {
    KeyPath = document.querySelector('input[name="wlt_protocol"]:checked').value;
    
        document.getElementById("adr_txs").innerHTML = "";
        document.getElementById('PrevButton').style.display = "none";
        document.getElementById('NextButton').style.display = "none";
        document.getElementById('SkipPages').style.display = "none";
        document.getElementById("bi_txn").innerHTML = ""
        
    displayMyWallet();
}
function ImportSeed() {
    document.getElementById("LoginBox").style.display = 'none';
    document.getElementById("ImportSeedBox").style.display = 'block';
}
function ImportSeedBack() {
    document.getElementById("LoginBox").style.display = 'block';
    document.getElementById("ImportSeedBox").style.display = 'none';
    KeyPath = "m/44'/2'/0'/0";
}

function UpdateSeedWords() {
    //document.getElementById("PassPhrase").value = "";
    //document.getElementById("EntropyId").value = document.getElementById("SeedWords").value;
    KeyPath = document.getElementById("SeedPath").value;
    
    var mnemonic = new Mnemonic("english");
    seed = mnemonic.toSeed(document.getElementById("SeedWords").value, '');
    
    bip32RootKey = libs.bitcoin.HDNode.fromSeedHex(seed.toString("hex"), libs.bitcoin.networks.ltc);
    bip32ExtendedKey = calcBip32ExtendedKey(KeyPath, bip32RootKey);
    
    var keyPair = bip32ExtendedKey.derive(0).keyPair;
    
    if(KeyPath == "m/44'/2'/0'/0") { // BIP44
        var address = keyPair.getAddress().toString();
    } else if (KeyPath === "m/49'/2'/0'/0") { // BIP49: Nested SegWit P2SH-P2WPKH
        var pubKeyHash = libs.bitcoin.crypto.hash160(keyPair.getPublicKeyBuffer());
        var redeemScript = libs.bitcoin.script.compile([0x00,pubKeyHash]);
        var scriptHash = libs.bitcoin.crypto.hash160(redeemScript);
        var scriptPubKey = libs.bitcoin.script.compile([0xa9,scriptHash,0x87]);
        var address = libs.bitcoin.address.fromOutputScript(scriptPubKey,libs.bitcoin.networks.ltc);
    } else if (KeyPath === "m/84'/2'/0'/0") { // BIP84: Native SegWit P2WPKH
        var pubKeyHash = libs.bitcoin.crypto.hash160(keyPair.getPublicKeyBuffer());
        var scriptPubKey = libs.bitcoin.script.compile([0x00,pubKeyHash]);
        var address = libs.bitcoin.address.fromOutputScript(scriptPubKey,libs.bitcoin.networks.ltc);
    } else {
        alert("Unsupported Litecoin derivation path: " + KeyPath);
    }
    
    document.getElementById("1st_address").innerHTML = "#1st Address: " + address;
}
function calcBip32ExtendedKey(path, bip32RootKey) {
    if (!bip32RootKey) {
        return bip32RootKey;
    }
    var extendedKey = bip32RootKey;
    // Derive the key from the path
    var pathBits = path.split("/");
    for (var i=0; i<pathBits.length; i++) {
        var bit = pathBits[i];
        var index = parseInt(bit);
        if (isNaN(index)) {
            continue;
        }
        var hardened = bit[bit.length-1] == "'";
        var isPriv = !(extendedKey.isNeutered());
        var invalidDerivationPath = hardened && !isPriv;
        if (invalidDerivationPath) {
            extendedKey = null;
        }
        else if (hardened) {
            extendedKey = extendedKey.deriveHardened(index);
        }
        else {
            extendedKey = extendedKey.derive(index);
        }
    }
    return extendedKey;
}

</script>

<div id="ModalBackup" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.8);">
    <div style="background-color: #E0FFFF; margin: 6% auto; padding: 10px; border: 5px solid lightblue; width: 600px; line-height:32px;">
        <center>
        <br><b><aa1 id="backupmessage">Please backup your wallet before using</aa1></b> <br>
        <br>
        <div onclick="ExportPDF();" style="width: 380px; height:35px; display: inline-block; padding-top: 8px; background-color: #50AD4D; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Save Wallet Info as PDF</div>
        <br><font color='grey' size='2'>Download PDF document includes your login details and private keys</font>
        <br>- or -<br>
        <div onclick="ExportFile();" style="width: 380px; height:35px; display: inline-block; padding-top: 8px; background-color: #50AD4D; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Download Wallet File (.wlt)</div>
        <br><font color='grey' size='2'>Download wallet keystore file, can be used for login access</font>
        <br>- or -<br>
        <div onclick="ExportPKBox();" style="width: 380px; height:35px; display: inline-block; padding-top: 8px; background-color: #50AD4D; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Export Private Keys</div>
        <br><font color='grey' size='2'>Export private keys for your generated addresses</font>
        <br><br>
        <div id="exclose" onclick="document.getElementById('ModalBackup').style.display='none';" style="display: none; width: 150px; height:35px; padding-top: 8px; background-color: #f36f6f; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Close</div>
        <br>&nbsp;
        </center>
    </div>
</div>


<div id="ExportFile" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.8);">
    <div style="background-color: #E0FFFF; margin: 7% auto; padding: 10px; border: 5px solid lightblue; width: 600px; line-height:32px;">
        <center>
        <br><b><aa1 id="backupmessage">Do you want to encrypt KeyStore file with a Password ?</aa1></b> <br><br>
        <div onclick="ExportFile2(2);" style="width: 320px; height:35px; display: inline-block; padding-top: 8px; background-color: #50AD4D; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Set Password</div>
        <br><font color='grey' size='2'>Password will be required to unlock your wallet.</font>
        <br><br><div onclick="ExportFile2(1);" style="width: 320px; height:35px; display: inline-block; padding-top: 8px; background-color: #50AD4D; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Without Password</div>
        <br><font color='grey' size='2'>This file will unlock your wallet without any password.</font>
        <br><br>
        <div id="exclose" onclick="document.getElementById('ExportFile').style.display='none'; document.getElementById('ModalBackup').style.display='block';" style="width: 150px; height:35px; padding-top: 8px; background-color: #f36f6f; cursor: pointer; border-radius: 10px; font: bold 24px sans-serif; color: #fff; text-align: center;">Back</div>
        <br>&nbsp;
        </center>
    </div>
</div>


<style>
.toast-notification{
  min-width: 380px;
  width: fit-content;
  height:47px;
  font-size:22px;
  background-color:white;
  border-radius: 10px;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  bottom:20;
  margin-bottom:20px;
  margin-left:20;
  position:fixed;
  z-index:1;
  display:flex;
  flex-direction:row;
}
.message-container{
  width: auto;
  padding:10px 20px 0px 20px;
  font-family:'Roboto';
  color:white;
}
</style>


<script>
function TxIDCopiedNote() {
  new Toast("Transaction ID copied " ,ToastType.Succes,4000);
  Notificount++;
}

function AdrsCopiedNote() {
  new Toast("Address copied " ,ToastType.Succes,4000);
  Notificount++;
}
function refreshAdrs() {
  new Toast("Address refreshed " ,ToastType.Succes,4000);
  Notificount++;
}
function rebroadcasted() {
  new Toast("Tx re-broadcasted " ,ToastType.Succes,4000);
  Notificount++;
}

function PaymentSentNote() {
    setTimeout(function() {
        new Toast("Transaction sent " ,ToastType.Succes,4000);
        Notificount++;
    }, 800);
}
function NoBalanceNote() {
  new Toast("No enough balance " ,ToastType.Danger,4000);
  Notificount++;
}
function NoBalanceSweepNote(dsd) {
  new Toast("No balance to sweep" ,ToastType.Danger,4000);
  Notificount++;
}
function SendErrorNote(tmpMessage = "Error sending payment", tmpTime = 4000) {
    if(tmpMessage == "Error: dust") tmpMessage = "Too small amount";
  new Toast(tmpMessage.replace("Error: ", ""),ToastType.Danger, tmpTime);
  Notificount++;
}
function LoggedOut() {
    setTimeout(function() {
        new Toast("Logged out" ,ToastType.Danger,4000);
        Notificount++;
    }, 500);
}



class Toast {
  constructor(message,color,time){
    this.message = message;
    this.color = color;
    this.time = time;
    this.element = null;
    var element = document.createElement('div');
    element.className = "toast-notification";
    this.element = element;
    var countElements = document.getElementsByClassName("toast-notification");
    element.style.opacity=0.8;
    element.style.marginBottom = (countElements.length * 55) + "px";
    element.style.backgroundColor = this.color;
    var message = document.createElement("div");
    message.className = "message-container";
    message.textContent = this.message;
    element.appendChild(message);
    document.body.appendChild(element);
    setTimeout(function() {
      element.remove();
    }, this.time);
  }
}
const ToastType = {
  Danger : "#eb3b5a",
  Succes : "#00b894",
}

var Notificount = 0;

var html5QrCode1 = new Html5Qrcode("qrCamScan");
function qrCodeSuccessCallback (decodedText, decodedResult) {
    if(decodedText.includes(":") == true) {
        const myArray = decodedText.split(":");
        decodedText = myArray[1];
    }
    var LastAddressN1 = SendToAddressNum - 1;
    document.getElementById("SendToAd_"+LastAddressN1).value=decodedText;
    SendToAddress[LastAddressN1] = decodedText;
    html5QrCode1.stop();
    html5QrCode1.clear();
    document.getElementById("qrCamScan").style.display = "none"; 
};
</script>

<script src="https://ltcchain.com/js/bitcoin-lib.js"></script>

<script>
var KeyPath = "m/44'/2'/0'/0";
libs.bitcoin.networks.ltc = {
  messagePrefix: '\x18Litecoin Signed Message:\n',
  bip32: {
      public: 0x019da462,
      private: 0x019d9cfe
  },
    pubKeyHash: 0x30,
    scriptHash: 0x32,
    wif: 0xb0,
};

libs.bitcoin.networks.ltc.p2pkh = {
  messagePrefix: '\x18Litecoin Signed Message:\n',
  bip32: {
      public: 0x019da462,
      private: 0x019d9cfe
  },
    pubKeyHash: 0x30,
    scriptHash: 0x32,
    wif: 0xb0,
};
libs.bitcoin.networks.ltc.bech32 = "ltc";
</script>

<script src="https://ltcchain.com/js/sjcl_crypto.js"></script>

<script src="https://ltcchain.com/js/wallet_generate.js"></script>

<script>(function() {
    var mnemonic = new Mnemonic("english");
    var DOM_phrase;

    function init() {
        document.getElementById("EntropyId").loginup = function(){setMnemonicFromEntropy();};
    }

    function phraseUpdate() {
        seed = mnemonic.toSeed(DOM_phrase, document.getElementById("PassPhrase").value);
        
        bip32RootKey = libs.bitcoin.HDNode.fromSeedHex(seed.toString("hex"), libs.bitcoin.networks.ltc);
        bip32ExtendedKey = calcBip32ExtendedKey(KeyPath);
        //bip32ExtendedKey = calcBip32ExtendedKey("m/44'/60'/0'/0"); // LTC2
        displayMyWallet();
    }

    function calcBip32ExtendedKey(path) {
        if (!bip32RootKey) {
            return bip32RootKey;
        }
        var extendedKey = bip32RootKey;
        // Derive the key from the path
        var pathBits = path.split("/");
        for (var i=0; i<pathBits.length; i++) {
            var bit = pathBits[i];
            var index = parseInt(bit);
            if (isNaN(index)) {
                continue;
            }
            var hardened = bit[bit.length-1] == "'";
            var isPriv = !(extendedKey.isNeutered());
            var invalidDerivationPath = hardened && !isPriv;
            if (invalidDerivationPath) {
                extendedKey = null;
            }
            else if (hardened) {
                extendedKey = extendedKey.deriveHardened(index);
            }
            else {
                extendedKey = extendedKey.derive(index);
            }
        }
        return extendedKey;
    }

    function setMnemonicFromEntropy() {
        // Get entropy value
        var entropyStr = document.getElementById("EntropyId").value;
        
        if(entropyStr.trim().split(/\s+/).length === 12) { // if 12 words, keep it as 12 words
            DOM_phrase = entropyStr
        } else {
            // Work out minimum base for entropy
            var entropy = null;
                entropy = Entropy.fromString(entropyStr);
            if (entropy.binaryStr.length == 0) {
                return;
            }
            // Use entropy hash if not using raw entropy
            var bits = entropy.binaryStr;
            var mnemonicLength = "12";
            if (mnemonicLength != "raw") {
                // Get bits by hashing entropy with SHA256
                var hash = sjcl.hash.sha256.hash(entropy.cleanStr);
                var hex = sjcl.codec.hex.fromBits(hash);
                bits = libs.BigInteger.BigInteger.parse(hex, 16).toString(2);
                while (bits.length % 256 != 0) {
                    bits = "0" + bits;
                }
                // Truncate hash to suit number of words
                mnemonicLength = parseInt(mnemonicLength);
                var numberOfBits = 32 * mnemonicLength / 3;
                bits = bits.substring(0, numberOfBits);
            }
            
            // Discard trailing entropy
            var bitsToUse = Math.floor(bits.length / 32) * 32;
            var start = bits.length - bitsToUse;
            var binaryStr = bits.substring(start);
            // Convert entropy string to numeric array
            var entropyArr = [];
            for (var i=0; i<binaryStr.length / 8; i++) {
                var byteAsBits = binaryStr.substring(i*8, i*8+8);
                var entropyByte = parseInt(byteAsBits, 2);
                entropyArr.push(entropyByte)
            }
            // Convert entropy array to mnemonic
            DOM_phrase = mnemonic.toMnemonic(entropyArr);
        }
        phraseUpdate();
    }

    init();

})();

</script>

<script>
    var seed = null;
    var bip32RootKey = null;
    var bip32ExtendedKey = null;
    var AddressListNum = 0;
    var MyAddresses = [];
    var MyAddressesTxs = [];
    var MyAddressesBalance = [];
    var ActiveAddressID = 0;

    var TxPage = 1;
    var TxPageNum = 1;
    var TxNum = 0;
    var TxValue = [];
    var TxValuesSwitch = 0;
    var ZeroPrice = -1;
    var WalletBalance = 0;
    var WalletBalanceTR = 0;
    var SelectList = document.getElementById('AddressList');
    var copytype = 1;
    
    var SendToAddressNum = 0;
    var SendToAddress = [];
    var SendToAmount = [];
    
    var NewWalletBackup = 1;
    var RequireRefreshTx = 0;
    var WalletBackedUpBefore = 0;
    
    var refreshtimer = setInterval(function() {
        if(RequireRefreshTx == 1 && TxPage == 1) UpdateWalletInfoTrans(0);
    }, 60000);
    
    setInterval(function() {
        if(AddressListNum >= 1 && RequireRefreshTx == 0 && TxPage == 1) UpdateWalletInfoTrans(0);
    }, 300000);
    
    function numberWithCommas(x) {
        var parts = x.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }
    
    function uuid() {
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
            return v.toString(16);
          });
    }
    
    function GenerateNewWalletID() {
        document.getElementById("EntropyId").value = uuid();
    }
    
    function LoginPaperWallet() {
        document.getElementById("loginbutton").style.cursor = "wait";

        setTimeout(function(){
        document.getElementById("EntropyId").loginup.call();
        }, 50);
        
        document.getElementById("headw").style.display = "none";
        document.getElementById("headwrefresh").style.display = "block";

        if(document.getElementById("savelogincb").checked == true) {
        SaveAutoLogin();
        }
    }
    
    function displayMyWallet() {
        document.getElementById("loginbutton").style.cursor = "pointer";
        document.getElementById("LoginBox").style.display = "none";
        document.getElementById("WalletBox").style.display = "table";
        AddressListNum = 0;
        
        document.getElementById("RefreshBtn").src = "https://ltcchain.com/img/loading.gif";
        document.getElementById("RefreshBtn").style.display = "block";
        document.getElementById("LogoutBtn").style.display = "block";
        
        var i, L = SelectList.options.length - 1;
        for(i = L; i >= 0; i--) {
            SelectList.remove(i);
        }
        InsertNextWalletAddress(1);
    }
    
    function InsertNextWalletAddress(FirstLoadWallet = 0) {
        if(AddressListNum >= 1) {
            if(MyAddressesTxs[AddressListNum-1] == 0) {
                SendErrorNote("Please use the last address generated before adding a new one.");
                SelectList.selectedIndex = AddressListNum-1;
                ActiveAddressID = AddressListNum-1; UpdateWalletInfoTrans();
                return;
            }
        }
        
        var key = "NA";
                key = bip32ExtendedKey.derive(AddressListNum);
            var keyPair = key.keyPair;
            
            //var address = keyPair.getAddress().toString();
            
            if(KeyPath == "m/44'/2'/0'/0") { // BIP32
                var address = keyPair.getAddress().toString();
            } else if (KeyPath === "m/49'/2'/0'/0") { // BIP49: Nested SegWit P2SH-P2WPKH
                var pubKeyHash = libs.bitcoin.crypto.hash160(keyPair.getPublicKeyBuffer());
                var redeemScript = libs.bitcoin.script.compile([0x00,pubKeyHash]);
                var scriptHash = libs.bitcoin.crypto.hash160(redeemScript);
                var scriptPubKey = libs.bitcoin.script.compile([0xa9,scriptHash,0x87]);
                
                var address = libs.bitcoin.address.fromOutputScript(scriptPubKey,libs.bitcoin.networks.ltc);
            } else if (KeyPath === "m/84'/2'/0'/0") { // BIP84: Native SegWit P2WPKH
                var pubKeyHash = libs.bitcoin.crypto.hash160(keyPair.getPublicKeyBuffer());
                var scriptPubKey = libs.bitcoin.script.compile([0x00,pubKeyHash]);
                var address = libs.bitcoin.address.fromOutputScript(scriptPubKey,libs.bitcoin.networks.ltc);
            } else {
                alert("Unsupported Litecoin derivation path: " + KeyPath);
            }
            
            var privkey = keyPair.toWIF();
        
        MyAddresses[AddressListNum] = address;
        MyAddressesTxs[AddressListNum] = 0;
        MyAddressesBalance[AddressListNum] = 0;
        
        var opt = document.createElement('option');
            opt.value = AddressListNum;
            opt.innerHTML = parseInt(AddressListNum+1).toString() + "# " + address + " (0 LTC)";
        SelectList.appendChild(opt);
        SelectList.selectedIndex = AddressListNum;
        
        document.getElementById("bi_hash").innerHTML = address;
        
        ActiveAddressID = AddressListNum;
        
        AddressListNum++;
        
        UpdateWalletInfoTrans(FirstLoadWallet);
    }
    
    function UpdateWalletInfoTrans(FirstLoadWallet = 0) {
        document.getElementById("qrcode").innerHTML = "";
        var qrcode = new QRCode("qrcode", {
                    text: MyAddresses[ActiveAddressID],
                    width: 192,
                    height: 192,
                    colorDark : "#000000",
                    colorLight : "#ffffff",
                    correctLevel : QRCode.CorrectLevel.H
                });
        
        $.get({
        	url: "/api/wallet_key/addressinfo/"+MyAddresses[ActiveAddressID]+"/1", cache: false,
        	success: function(rawresult){
        	    if(typeof rawresult === 'object') rawresult = JSON.stringify(rawresult);
        	    const JsonResult = JSON.parse(rawresult);
        	    
        	    WalletBalance = JsonResult.balance;
        	    WalletBalanceTR = JsonResult.lastReceived;
        	    
                SelectList.options[ActiveAddressID].innerHTML = parseInt(1+parseInt(ActiveAddressID)).toString() + "# " + MyAddresses[ActiveAddressID] + " ("+numberWithCommas(WalletBalance)+" LTC)";
                
        	    MyAddressesBalance[ActiveAddressID] = WalletBalance;
                MyAddressesTxs[ActiveAddressID] = JsonResult.txApperances + JsonResult.unconfirmedTxApperances;
        	    
        	    document.getElementById("bi_hash").innerHTML = MyAddresses[ActiveAddressID];
        	    document.getElementById("bi_bal").innerHTML = "<b>"+numberWithCommas(WalletBalance) + "</b> LTC";
        	    document.getElementById("bi_txn").innerHTML = JsonResult.txApperances + JsonResult.unconfirmedTxApperances;
        	    
        	    document.getElementById("send_from").innerHTML = MyAddresses[ActiveAddressID];
        	    
        	    MyAddressesBalance[ActiveAddressID] = MyAddressesBalance[ActiveAddressID] + JsonResult.unconfirmedBalance;
        	    
        	    if(JsonResult.unconfirmedBalance < 0) {
        	    document.getElementById("bi_unbal").innerHTML = "<b>" + numberWithCommas(JsonResult.unconfirmedBalance) + "</b> LTC";
        	    document.getElementById("bi_unbal0").style.color = 'red';
        	    } else if(JsonResult.unconfirmedBalance > 0) {
        	    document.getElementById("bi_unbal").innerHTML = "<b>" + numberWithCommas(JsonResult.unconfirmedBalance) + "</b> LTC";
        	    document.getElementById("bi_unbal0").style.color = 'green';
        	    } else {
        	    document.getElementById("bi_unbal").innerHTML = "<font color='grey'>" + numberWithCommas(JsonResult.unconfirmedBalance) + " LTC</font>";
        	    document.getElementById("bi_unbal0").style.color = 'grey';
        	    }
        	    
        	    if(MyAddressesTxs[ActiveAddressID] > 0) WalletBackedUpBefore = 1;
        	    
        	    if(FirstLoadWallet == 1) {
        	        
        	        if(JsonResult.txApperances + JsonResult.unconfirmedTxApperances > 0) {
        	            NewWalletBackup = 0;
        	            InsertNextWalletAddress(1);
        	        } else {
        	            
        	            if(AddressListNum == 1) {
        	                NewWalletBackup = 1;
        	                UpdateTxs(1, 0, 0);
        	            } else {
        	                NewWalletBackup = 0;
        	                SelectList.remove(SelectList.length-1);
        	                SelectList.remove(SelectList.length-1);
        	                AddressListNum = AddressListNum - 2;
        	                InsertNextWalletAddress(0);
        	            }
        	            
        	        }
        	        
        	        if(AddressListNum == 1 && NewWalletBackup == 1 && WalletBackedUpBefore == 0) { // New wallet
        	            //document.getElementById("BackupNewAccount").style.visibility = 'visible';
        	            //document.getElementById("BackupNewAccountBtn").style.border = '1px dotted red';
        	            //document.getElementById("BackupNewAccountBtn").style.width = '120px';
        	            document.getElementById("ModalBackup").style.display = 'block';
        	            WalletBackedUpBefore = 1;
        	        } else {
        	            document.getElementById("BackupNewAccount").style.visibility = 'hidden';
        	            //document.getElementById("BackupNewAccountBtn").style.borderWidth = '0px';
        	            //document.getElementById("BackupNewAccountBtn").style.width = '120px';
        	        }
        	        
        	    } else {
        	        UpdateTxs(1, 0, 1);
        	    }
        	    document.getElementById("RefreshTxs").src = "https://ltcchain.com/img/refresh_btn2.png";
        	}
        
        	});
    document.getElementById("sendbutton").innerHTML  = "Send Transaction";
    }

function copyTX() {
    copytype=1;
    copyToClipboard(document.getElementById("copyTX"));
    }
function copyAdrs() {
    copytype=2;
    copyToClipboard(document.getElementById("bi_hash"));
    }
function copyToClipboard(e) {
    var tempItem = document.createElement('input');
    tempItem.setAttribute('type','text');
    tempItem.setAttribute('display','none');
    let content = e;
    if (e instanceof HTMLElement) {
    		content = e.innerText;
    }
    tempItem.setAttribute('value',content);
    document.body.appendChild(tempItem);
    tempItem.select();
    document.execCommand('Copy');
    tempItem.parentElement.removeChild(tempItem);
    
    if(copytype == '1') {
    TxIDCopiedNote();
    } else if(copytype == '2') {
    AdrsCopiedNote();
    }
    
}
    
let intervalStarted = false;
    
    function UpdateTxs(PageId, ClickedButton, NewSentPayment) {
        RequireRefreshTx = 0;
        TxPage = PageId;
        
        $.get({
        	url: "/api/wallet_key/txs/"+MyAddresses[ActiveAddressID]+"/"+PageId, cache: false,
        	success: function(rawresult){
        	    if(typeof rawresult === 'object') rawresult = JSON.stringify(rawresult);
        	    const JsonResult = JSON.parse(rawresult);
        	    adr_txs = document.getElementById("adr_txs");
        	    adr_txs.innerHTML = "";
        	    document.getElementById("adr_txs").style.opacity = "";
        	    
        	    TxNum = JsonResult.txs.length;
        	    TxPageNum = JsonResult.pagesTotal;
        	    
        	    if(TxPageNum <= 1) {
                    document.getElementById('PrevButton').style.display = "none";
                    document.getElementById('NextButton').style.display = "none";
                    document.getElementById('SkipPages').style.display = "none";
                } else {
                    document.getElementById('PrevButton').style.cursor = "";
                    document.getElementById('PrevButton').style.backgroundColor = "#ccc";
                    document.getElementById('NextButton').style.cursor = "pointer";
                    document.getElementById('NextButton').style.backgroundColor = "#3E5AA8";
                    document.getElementById('PrevButton').style.display = "inline-block";
                    document.getElementById('NextButton').style.display = "inline-block";
                    document.getElementById('SkipPages').style.display = "inline-block";
                    
                    document.getElementById('SkipPages').innerHTML = "Page <input type='text' size='2' value='"+parseInt(PageId).toString()+"' style='text-align:center; border: 1px solid #555; font-size: 14px; font-weight: bold; padding-bottom: 2px;' onchange='clearInterval(intervalID); intervalID=setInterval(JumpToPage, 500, this.value);' onkeyup='clearInterval(intervalID); intervalID=setInterval(JumpToPage, 500, this.value);' > of "+parseInt(TxPageNum).toString();
                }
        	    
        	    for (var i = 0; i < TxNum; i++) {

        	    // Head
        	    var rowBox = adr_txs.insertRow(-1);
        	    rowBox.style = "height: 35px;";
        	    var CellBoxH1 = rowBox.insertCell(0);
        	    CellBoxH1.style = "border-top-left-radius: 10px; padding-left: 12px; background-color: #e4e6e8; vertical-align: middle;";

        	    if(JsonResult.txs[i].confirmations == 0 && i==0) {
        	    CellBoxH1.innerHTML = "<a href='https://ltcchain.com/tx/"+JsonResult.txs[i].txid+"' target='_blank' style='text-decoration: none; color: #07729d;' id='copyTX'> " + JsonResult.txs[i].txid + "</a> &nbsp;<span onclick='copyTX()');'><img draggable='false' <img class='hovrble' draggable='false' src='img/copy.svg' alt='copy'></span>";
        	    } else {
        	    CellBoxH1.innerHTML = "<a href='https://ltcchain.com/tx/"+JsonResult.txs[i].txid+"' target='_blank' style='text-decoration: none; color: #07729d;'> " + JsonResult.txs[i].txid + "</a>";
        	    }
        	    var CellBoxH2 = rowBox.insertCell(1);
                CellBoxH2.style = "border-top-right-radius: 10px; padding-right: 12px; text-align: right; background-color: #e4e6e8; color:#a9a9a9; vertical-align: middle; font-size: 14px;"
        	    var dateTimeFormat = new Intl.DateTimeFormat('en-US', { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric' });
        	    CellBoxH2.innerHTML = dateTimeFormat.format(JsonResult.txs[i].time*1000);
        	    
        	    // Inputs Outputs
        	    var rowBox = adr_txs.insertRow(-1);
        	    var CellBoxIO = rowBox.insertCell(0);
        	    CellBoxIO.style= "width: 100%; padding: 20px 6px 20px 10px; border: 3px solid #e4e6e8; border-width: 3px 12px 6px 12px;";
        	    CellBoxIO.colSpan = "2";
        	    
        	    var TbLeft = document.createElement('table');
        	    TbLeft.style = "display: inline-block; vertical-align: top; font: bold 13px Courier New; ";
        	    CellBoxIO.appendChild(TbLeft);
        	    
        	    var LastAddressAdded = "";
        	    var CellLeft0;
        	    var CellLeft1;
        	    var AddressInOut = 0;
        	    LastAddressAdded = "";
        	    var LastAddressBalance = 0;
        	    
        	    if(JsonResult.txs[i].vin.length == 0) {
        	        var rowLeft = TbLeft.insertRow(-1);
            	    CellLeft0 = rowLeft.insertCell(0);
            	    CellLeft0.innerHTML = "Shielded Inputs";
            	    CellLeft0.style = "width: 340px;";
            	    CellLeft1 = rowLeft.insertCell(1);
            	    CellLeft1.style = "width: 140px; text-align: right;";
            	    CellLeft1.innerHTML = "";
        	    }
        	    
        	    for (var j = 0; j < JsonResult.txs[i].vin.length; j++) {
        	    
        	    if(typeof JsonResult.txs[i].vin[j].addr != "undefined") {
        	        
        	        if(JsonResult.txs[i].vin[j].addr == MyAddresses[ActiveAddressID]) {
        	            AddressInOut = AddressInOut - JsonResult.txs[i].vin[j].value;
        	        }
        	        
            	    if(LastAddressAdded != JsonResult.txs[i].vin[j].addr) {
            	    LastAddressAdded = JsonResult.txs[i].vin[j].addr;
            	    LastAddressBalance = JsonResult.txs[i].vin[j].value;
            	    
            	    var rowLeft = TbLeft.insertRow(-1);
            	    CellLeft0 = rowLeft.insertCell(0);
            	    CellLeft0.style = "width: 340px;";
            	    
                	    if(JsonResult.txs[i].vin[j].addr == MyAddresses[ActiveAddressID]) {
                	    CellLeft0.innerHTML = JsonResult.txs[i].vin[j].addr;
                	    } else {
                	    CellLeft0.innerHTML = "<a href='https://ltcchain.com/address/"+JsonResult.txs[i].vin[j].addr+"' target='_blank' style='text-decoration: none; color: #07729d;'>" + JsonResult.txs[i].vin[j].addr + "</a>";
                	    }
                	    
                	    CellLeft1 = rowLeft.insertCell(1);
            	        CellLeft1.style = "width: 140px; text-align: right;";
                	    
            	        CellLeft1.innerHTML = JsonResult.txs[i].vin[j].value + " LTC";
            	    } else {
            	        LastAddressBalance = LastAddressBalance + JsonResult.txs[i].vin[j].value;
            	        CellLeft1.innerHTML = parseFloat(LastAddressBalance.toFixed(8)) + " LTC";
            	    }
            	    
        	    } else {
        	        LastAddressAdded = "";
        	        var rowLeft = TbLeft.insertRow(-1);
            	    CellLeft0 = rowLeft.insertCell(0);
            	    CellLeft1 = rowLeft.insertCell(1);
            	    CellLeft0.innerHTML = "Newly Generated Coins";
            	    CellLeft0.style = "width: 340px;";
            	    CellLeft1.innerHTML = "";
            	    CellLeft1.style = "width: 140px;";
        	    }
        	    
        	    }
        	    
        	    var img1 = document. createElement('img');
        	    img1.src = "https://ltcchain.com/img/arrow.png";
        	    img1.style = "margin: 0px 20px 0px 20px;"
        	    CellBoxIO.appendChild(img1);
        	    
        	    var TbRight = document.createElement('table');
        	    TbRight.style = "display: inline-block; vertical-align: top; font: bold 13px Courier New;";
        	    CellBoxIO.appendChild(TbRight);
        	    
        	    var CellRight0;
        	    var CellRight1;
        	    var OnChainMemo = '';
        	    
        	    if(JsonResult.txs[i].vout.length == 0) {
        	        // No Outputs
        	        var rowRight = TbRight.insertRow(-1);
            	    CellRight0 = rowRight.insertCell(0);
            	    CellRight0.innerHTML = "Shielded Outputs";
            	    CellRight1 = rowRight.insertCell(1);
            	    CellRight1.style = "width: 140px; text-align: right;";
            	    CellRight1.innerHTML = "";
            	    
        	    } else {
        	    for (var j = 0; j < JsonResult.txs[i].vout.length; j++) {
        	        if (JsonResult?.txs?.[i]?.vout?.[j]?.scriptPubKey?.addresses?.[0] !== undefined) {
        	        
            	        if(JsonResult.txs[i].vout[j].scriptPubKey.addresses[0] == MyAddresses[ActiveAddressID]) {
            	            AddressInOut = AddressInOut + parseFloat(JsonResult.txs[i].vout[j].value);
            	        }
            	        
                	    var rowRight = TbRight.insertRow(-1);
                	    CellRight0 = rowRight.insertCell(0);
                	    CellRight0.style = "width: 340px;";
                    	    if(JsonResult.txs[i].vout[j].scriptPubKey.addresses[0] == MyAddresses[ActiveAddressID]) {
                    	    CellRight0.innerHTML = JsonResult.txs[i].vout[j].scriptPubKey.addresses[0];
                    	    } else {
                    	    CellRight0.innerHTML = "<a href='https://ltcchain.com/address/"+JsonResult.txs[i].vout[j].scriptPubKey.addresses[0]+"' target='_blank' style='text-decoration: none; color: #07729d;'>" + JsonResult.txs[i].vout[j].scriptPubKey.addresses[0] + "</a>";
                    	    }
                	    CellRight1 = rowRight.insertCell(1);
                	    CellRight1.style = "width: 140px; text-align: right;";
                	    CellRight1.innerHTML = JsonResult.txs[i].vout[j].value + " LTC";
        	        }
        	    }
        	    }
        	    
        	    // Footer
        	    var rowBox = adr_txs.insertRow(-1);
        	    rowBox.style = "height: 40px; ";
        	    var CellBoxF1 = rowBox.insertCell(0);
        	    CellBoxF1.style = "border-bottom-left-radius: 10px; padding-left: 10px; background-color: #e4e6e8; vertical-align: middle; font-size: 14px;";
        	    if(typeof JsonResult.txs[i].fees != "undefined") {
        	        if(JsonResult.txs[i].fees == 0) {
        	        CellBoxF1.innerHTML = "<font color='grey'>Fees: 0 LTC</font>";
        	        } else {
        	        CellBoxF1.innerHTML = "<font color='grey'>Fees: " + parseFloat(JsonResult.txs[i].fees.toFixed(8)).toString() + " LTC</font>";
        	        }
        	    } else {
        	    CellBoxF1.innerHTML = "<font color='grey'>Fees: 0 LTC</font>";
        	    }
        	    
        	    // Footer Meme Message
        	    if(OnChainMemo == "") {
        	        CellBoxF1.innerHTML = CellBoxF1.innerHTML + "<font color='grey'><mefoot class='MemeFooter' name='" + JsonResult.txs[i].txid + "'></mefoot></font>";
        	    } else {
        	        CellBoxF1.innerHTML = CellBoxF1.innerHTML + "<font color='grey'> &nbsp;|&nbsp; " + OnChainMemo + "</font>";
        	    }
        	    
        	    var CellBoxF2 = rowBox.insertCell(1);
        	    CellBoxF2.style = "border-bottom-right-radius: 10px; padding-right: 10px; background-color: #e4e6e8; vertical-align: top; text-align: right;";
        	    if(JsonResult.txs[i].confirmations == 0) {
        	        CellBoxF2.innerHTML = "<font color='red' size='3'>Unconfirmed Transaction </font> &nbsp; &nbsp; ";
        	        CellBoxF2.id = "UT_" + JsonResult.txs[i].txid;
        	        RequireRefreshTx = 1;
        	    } else if(JsonResult.txs[i].confirmations <= 1000) {
        	        CellBoxF2.innerHTML = "<font color='grey' size='3'>" + JsonResult.txs[i].confirmations + " Confirmations </font> &nbsp; &nbsp; ";
        	    }
        	    
        	    if(AddressInOut > 0) {
        	    var Color_1 = "#40a745";
        	    CellBoxIO.style.backgroundColor = "#eafaf1";
        	    CellBoxH1.style.backgroundColor = "#ceffe3";
        	    CellBoxH2.style.backgroundColor = "#ceffe3";
        	    CellBoxF1.style.backgroundColor = "#ceffe3";
        	    CellBoxF2.style.backgroundColor = "#ceffe3";
        	    CellBoxIO.style.borderColor = "#ceffe3";
        	    } else {
        	    var Color_1 = "#be3333";
        	    CellBoxIO.style.backgroundColor = "#fdedec";
        	    CellBoxH1.style.backgroundColor = "#ffd7d5";
        	    CellBoxH2.style.backgroundColor = "#ffd7d5";
        	    CellBoxF1.style.backgroundColor = "#ffd7d5";
        	    CellBoxF2.style.backgroundColor = "#ffd7d5";
        	    CellBoxIO.style.borderColor = "#ffd7d5";
        	    }
        	    
        	    TxValue[i] = parseFloat(AddressInOut.toFixed(8));
        	    CellBoxF2.innerHTML = CellBoxF2.innerHTML + "<div id='txval_"+i+"' onclick='SwitchValues();' style='width: 200px; display: inline-block; cursor: pointer; padding: 6px; background-color: "+Color_1+"; border-radius: 10px; font: bold 18px Arial; color: #fff; text-align: center; '>" + parseFloat(AddressInOut.toFixed(8)).toString() + " LTC</div>";
        	    
        	    // Space
        	    var rowBox = adr_txs.insertRow(-1);
        	    rowBox.style = "height: 50px; ";
        	    var CellBox = rowBox.insertCell(0);
        	    CellBox.colSpan = "2";
        	    
        	    }
        	    
        	    document.getElementById('NextButton').style.cursor = "pointer";
                document.getElementById('NextButton').style.backgroundColor = "#3E5AA8";
                document.getElementById('PrevButton').style.cursor = "pointer";
                document.getElementById('PrevButton').style.backgroundColor = "#3E5AA8";
                
        	    if(PageId >= TxPageNum) {
                    document.getElementById('NextButton').style.cursor = "";
                    document.getElementById('NextButton').style.backgroundColor = "#ccc";
                }
        	    if(PageId <= 1) {
                    document.getElementById('PrevButton').style.cursor = "";
                    document.getElementById('PrevButton').style.backgroundColor = "#ccc";
                }
        	    
        	    UpdateValuesZerUSD();
        	    RefreshTotalBalance();
        	    
        	    if (!intervalStarted) {
        	        setInterval(ReadNextFooterMeme, 1000);
        	        intervalStarted = true;
                }
                
        	    if(ClickedButton == 1) document.getElementById("bi_txn").scrollIntoView();
        	    
        	}
    	});
    }

function ReadNextFooterMeme() {
    FooterMemes = document.getElementsByClassName("MemeFooter");
    let MaxReadFooters = FooterMemes.length;
    if(MaxReadFooters >= 4) MaxReadFooters = 4; // maximum 4 txs
	for (i=0 ; i < MaxReadFooters; i++) {
		if (FooterMemes[i].innerHTML == "") {
			$.get("/getmemo.php", { tx: FooterMemes[i].attributes.name.value}, function(memoResult) {
			if(memoResult == '') {
				FooterMemes[i].innerHTML = ' ';
			} else {
				FooterMemes[i].innerHTML = ' &nbsp;|&nbsp; ' + memoResult;
			}
			});
			break;
		}
	}
}

function NextPage() {
    if(TxPage+1 <= TxPageNum) {
        document.getElementById('NextButton').style.cursor = "wait";
        document.getElementById('NextButton').style.backgroundColor = "#888";
        TxPage++;
        UpdateTxs(TxPage, 1, 0);
    }
}
function PrevPage() {
    if(TxPage > 1) {
        document.getElementById('PrevButton').style.cursor = "wait";
        document.getElementById('PrevButton').style.backgroundColor = "#888";
        TxPage--;
        UpdateTxs(TxPage, 1, 0);
    }
}

var intervalID;
function JumpToPage(PageID) {
    if(PageID != "") {
    TxPage = PageID;
    UpdateTxs(TxPage, 1, 0);
    clearInterval(intervalID);
    }
}

function RefreshTotalBalance() {
    var MyTotalBalance = 0;
    for (var i = 0; i < AddressListNum; i++) {
        MyTotalBalance = MyTotalBalance + MyAddressesBalance[i];
    }
    
    document.getElementById("total_balance").innerHTML = "<b>"+numberWithCommas(parseFloat(MyTotalBalance.toFixed(4)).toString()) + "</b> LTC";
    
    document.getElementById("RefreshBtn").src = "https://ltcchain.com/img/refresh_btn.png";
}

function SwitchValues() {
    if(TxValuesSwitch == 0) {
        TxValuesSwitch = 1;
    } else {
        TxValuesSwitch = 0;
    }
    if(ZeroPrice == -1) {
        $.get({
        	url: "/statistics/price.data",
        	success: function(rawresult){
        	    if(typeof rawresult === 'object') rawresult = JSON.stringify(rawresult);
                const JsonResult = JSON.parse(rawresult);
        	    ZeroPrice = JsonResult.USD;
        	    UpdateValuesZerUSD();
        	}
    	});
    } else {
        UpdateValuesZerUSD();
    }
}

function UpdateValuesZerUSD() {
    for (var i = 0; i < TxNum; i++) {
        if(TxValuesSwitch == 0) {
        document.getElementById('txval_' + i).innerHTML = TxValue[i].toString() + " LTC";
        } else {
        document.getElementById('txval_' + i).innerHTML = parseFloat((TxValue[i]*ZeroPrice).toFixed(8)).toString() + " USD";
        }
    }
    if(TxValuesSwitch == 1) {
        document.getElementById("bi_bal").innerHTML = "<b>"+numberWithCommas(parseFloat((WalletBalance*ZeroPrice).toFixed(8)).toString()) + "</b> USD";
    } else {
        document.getElementById("bi_bal").innerHTML = "<b>"+numberWithCommas(WalletBalance) + "</b> LTC";
    }
}

var SendBoxDisp = 0;
function ShowSendBox() {
    if(SendBoxDisp == 0) {
    SendBoxDisp = 1;
    document.getElementById("TransactionsBox").style.display = "none";
    document.getElementById("SendBox").style.display = "block";
    document.getElementById("send_from").innerHTML = MyAddresses[ActiveAddressID];
    document.getElementById("ExportKeysBox").style.display = "none";
    document.getElementById("ImportPaperWallet").style.display = "none";
    
    //document.getElementById("Send_Fees").value = ConvertToFixed((Math.random() * 0.000001).toFixed(8));
    document.getElementById("Send_Fees").value = 0.00001;

    SendToAddressNum = 0;
    document.getElementById("SendToAddressList").innerHTML = "";
    AddNewOutputAddress();
} }

function AddNewOutputAddress() {
    SendToAddress[SendToAddressNum] = "";
    SendToAmount[SendToAddressNum] = "";
    SendToAddressNum++;
    RefreshOutputAddressesList();
    if(SendToAddressNum >= 2) {
    document.getElementById("MaxAmountBtn").style.display = "none";
    document.getElementById("RemoveAddress").style.display = "block";
    }
}

function RemoveOutputAddress() {
    if(SendToAddressNum > 1) {
        SendToAddressNum--;
        RefreshOutputAddressesList();
    }
    if(SendToAddressNum == 1) {
        document.getElementById("MaxAmountBtn").style.display = "block";
    }
}

function SendMaxAmountSet() {
    document.getElementById("SendToAm_0").value = (MyAddressesBalance[ActiveAddressID] - parseFloat(document.getElementById("Send_Fees").value)).toFixed(8);
    SendToAmount[0]=parseFloat(document.getElementById("SendToAm_0").value).toFixed(8);
    CalcTotalOutputs();
}

function RefreshOutputAddressesList() {
    document.getElementById("SendToAddressList").innerHTML = "";
        for (var i = 0; i < SendToAddressNum; i++) {
            document.getElementById("SendToAddressList").innerHTML = document.getElementById("SendToAddressList").innerHTML + '<input id="SendToAd_'+i+'" size="40" class="submit_b3" style="background-color: #f1f8fe;" placeholder="Type Address Send To..." onchange="SendToAddress['+i+']=this.value;" value="'+SendToAddress[i]+'" >&nbsp;<input id="SendToAm_'+i+'" size="10" class="submit_b3" style="background-color: #f0fef1;" placeholder="Amount" onkeyup="SendToAmount['+i+']=this.value; CalcTotalOutputs();" onchange="SendToAmount['+i+']=this.value; CalcTotalOutputs();" value="'+SendToAmount[i]+'" ><br>';
        }
}

function CalcTotalOutputs() {
    var TotalSentSat = 0;
    for (var i = 0; i < SendToAddressNum; i++) {
        var Output1 = parseFloat(SendToAmount[i]);
        TotalSentSat = TotalSentSat + Output1;
    }
    TotalSentSat = parseFloat(TotalSentSat.toFixed(8));
    if(SendToAddressNum <= 1) {
    document.getElementById("total_outputs").innerHTML = "";
    } else {
    document.getElementById("total_outputs").innerHTML = "Total: " + TotalSentSat + " LTC";
    }
}

function ForceMinimumFees() {
    if(document.getElementById('Send_Fees').value != "") {
        const feesInput = document.getElementById('Send_Fees');
        const currentValue = parseFloat(feesInput.value);
            if (currentValue < 0.0000055) feesInput.value = '0.0000055';
    }
}

function GenerateTransaction() {
    SendBoxDisp = 0;
    var addrvalue = document.getElementById("SendToAd_0").value;
    var sendbutton = document.getElementById("sendbutton").innerHTML;
    if(sendbutton == "Send Transaction") {
    document.getElementById("sendbutton").innerHTML  = "sending.";
    
    ForceMinimumFees();
    
    if((addrvalue.substring(0, 1) == "L") && (addrvalue.length == 34) || (addrvalue.substring(0, 1) == "M") && (addrvalue.length == 34) || (addrvalue.substring(0, 3) == "ltc") && (addrvalue.length == 43)) {
    $.get({
        url: "/api/wallet_key/utxo/"+MyAddresses[ActiveAddressID], cache: false,
        success: function(rawresult){
            if(typeof rawresult === 'object') rawresult = JSON.stringify(rawresult);
            const JsonResult = JSON.parse(rawresult);
            
        	if(JsonResult.length == 0) {
                document.getElementById("sendbutton").innerHTML  = "Send Transaction";
                NoBalanceNote();
        	    return;
        	}
        	
        	var WalletBalance1 = 0;
        	
        	var InputTxs = [];
        	var InputTxV = [];
        	var InputBal = [];
        	for (var i = 0; i < JsonResult.length; i++) {
        	    InputTxs.push( JsonResult[i].txid );
        	    InputTxV.push( parseInt(JsonResult[i].vout) );
        	    InputBal.push( parseInt(JsonResult[i].satoshis) );
        	    WalletBalance1 = WalletBalance1 + parseInt(JsonResult[i].satoshis);
        	}
        	
        	var key = "NA";
                key = bip32ExtendedKey.derive(parseInt(ActiveAddressID));
            var keyPair = key.keyPair;
            var privkey = keyPair.toWIF();
        	
        	var OutputAddresses0 = [];
        	for (var i = 0; i < SendToAddressNum; i++) {
        	    OutputAddresses0[i] = SendToAddress[i];
        	}
        	
        	var TotalSentSat = 0;
        	
        	var OutputAmount0 = [];
        	var Output1 = 0;
        	for (var i = 0; i < SendToAddressNum; i++) {
        	    Output1 = parseFloat(SendToAmount[i]);
        	    Output1 = parseInt(Output1 * 100000000);
        	    OutputAmount0.push( parseInt(Output1) );
        	    TotalSentSat = parseInt(TotalSentSat + Output1);
        	}
        	
        	var FeesAmount = parseInt(document.getElementById("Send_Fees").value * 100000000);
        	
        	Output1 = parseInt(WalletBalance1 - TotalSentSat - FeesAmount);
        	
        	if(Output1 > 0) {
        	OutputAddresses0.push( MyAddresses[ActiveAddressID] );
        	OutputAmount0.push( parseInt(Output1) );
        	}
        	
            	var RawTransaction = foo.myFunction(InputTxs, InputTxV, InputBal, privkey, OutputAddresses0, OutputAmount0, MyAddresses[ActiveAddressID], [], KeyPath);

        	var SendMeme = document.getElementById("SendMeme").value;
        	
        	BroadcastTransaction(RawTransaction, 1, SendMeme);
        }
        
    });
    } else if(addrvalue.substring(0, 1) == "z") {
          alert("We dont support send to privacy address");
          document.getElementById("sendbutton").innerHTML  = "Send Transaction";
    } else {
      alert("Wrong (to) wallet address");
      document.getElementById("sendbutton").innerHTML  = "Send Transaction";
    }
} }

function BroadcastTransaction(RawTxData, PaymentNote, OffchainMeme) {
    document.getElementById("sendbutton").innerHTML  = "sending..";
    $.post({
        url: "/api/wallet_key/rawtx/"+RawTxData, cache: false,
        success: function(rawresult){
            document.getElementById("SendBox").style.display = "none";
            
            if(typeof rawresult === 'object') rawresult = JSON.stringify(rawresult);
            let JsonResult;
                try {
                  JsonResult = JSON.parse(rawresult);
                } catch (e) {
                  JsonResult = rawresult;
                }
                
            if (JsonResult.toLowerCase().includes("error")) {
                document.getElementById("sendbutton").innerHTML  = "Send Transaction";
                SendErrorNote();
                SendErrorNote(JsonResult, 6000);
                document.getElementById("TransactionsBox").style.display = "block";
            } else {
                document.getElementById("TransactionsBox").style.display = "block";
                if(PaymentNote == 1) PaymentSentNote();
                $.post({
                    url: "setmemo.php", cache: false,
                    data: "rawtx="+RawTxData+"&memo="+OffchainMeme,
                });
                setTimeout(() => {
                    UpdateWalletInfoTrans();
                }, 800);
            }
        },
        error: function(rawresult){
            if(typeof rawresult === 'object') rawresult = JSON.stringify(rawresult);
            let JsonResult;
                try {
                  JsonResult = JSON.parse(rawresult);
                } catch (e) {
                  JsonResult = rawresult;
                }
            SendErrorNote();
            SendErrorNote(JsonResult.responseText, 6000);
            document.getElementById("TransactionsBox").style.display = "block";
            document.getElementById("sendbutton").innerHTML  = "Send Transaction";
        }
    });
}

function CancelTransaction() {
    SendBoxDisp = 0;
    document.getElementById("SendBox").style.display = "none";
    document.getElementById("ExportKeysBox").style.display = "none";
    document.getElementById("TransactionsBox").style.display = "block";
    document.getElementById("ImportPaperWallet").style.display = "none";
    
    UpdateWalletInfoTrans();
}

function ExitMyWallet() {
    AddressListNum = 0;
    RequireRefreshTx = 0;
    document.getElementById("PassPhrase").value = "";

    document.getElementById("SendBox").style.display = "none";
    document.getElementById("ExportKeysBox").style.display = "none";
    document.getElementById("TransactionsBox").style.display = "block";
    document.getElementById("ImportPaperWallet").style.display = "none";
    
    document.getElementById("total_balance").innerHTML = "";
    document.getElementById("RefreshBtn").style.display = "none";
    document.getElementById("LogoutBtn").style.display = "none";
    
    document.getElementById("LoginBox").style.display = "table";
    document.getElementById("WalletBox").style.display = "none";
    
    RemoveAutoLogin();
}

function ExportPKBox() {
    document.getElementById("SendBox").style.display = "none";
    document.getElementById("ExportKeysBox").style.display = "block";
    document.getElementById("TransactionsBox").style.display = "none";
    document.getElementById("ImportPaperWallet").style.display = "none";
    
    document.getElementById("PrivKeysList").innerHTML = "<u>Your Login Details:</u></br>Wallet ID: " + document.getElementById("EntropyId").value + "<br>" + "Password: " + document.getElementById("PassPhrase").value + "<br><br><u>Private Keys:</u></br>";
    
    var MinimumPKs = AddressListNum;
    if(MinimumPKs <= 3) MinimumPKs = 3;
    
    for (var i = 0; i < MinimumPKs; i++) {
        var key = "NA";
        key = bip32ExtendedKey.derive(parseInt(i));
        var keyPair = key.keyPair;
        //var address = keyPair.getAddress().toString();
        if(KeyPath == "m/44'/2'/0'/0") { // BIP32
            var address = keyPair.getAddress().toString();
        } else if (KeyPath === "m/49'/2'/0'/0") { // BIP49: Nested SegWit P2SH-P2WPKH
            var pubKeyHash = libs.bitcoin.crypto.hash160(keyPair.getPublicKeyBuffer());
            var redeemScript = libs.bitcoin.script.compile([0x00,pubKeyHash]);
            var scriptHash = libs.bitcoin.crypto.hash160(redeemScript);
            var scriptPubKey = libs.bitcoin.script.compile([0xa9,scriptHash,0x87]);
            var address = libs.bitcoin.address.fromOutputScript(scriptPubKey,libs.bitcoin.networks.ltc);
        } else if (KeyPath === "m/84'/2'/0'/0") { // BIP84: Native SegWit P2WPKH
            var pubKeyHash = libs.bitcoin.crypto.hash160(keyPair.getPublicKeyBuffer());
            var scriptPubKey = libs.bitcoin.script.compile([0x00,pubKeyHash]);
            var address = libs.bitcoin.address.fromOutputScript(scriptPubKey,libs.bitcoin.networks.ltc);
        } else {
            alert("Unsupported Litecoin derivation path: " + KeyPath);
        }
        var privkey = keyPair.toWIF();
        
        document.getElementById("PrivKeysList").innerHTML = document.getElementById("PrivKeysList").innerHTML + "Address #" + parseInt(i+1).toString() + ": " + address + "<br>PK: " + privkey + "<br><br>";
    }
    
    document.getElementById("ModalBackup").style.display = 'none';
}

function ImportPKBox() {
    document.getElementById("SendBox").style.display = "none";
    document.getElementById("ExportKeysBox").style.display = "none";
    document.getElementById("TransactionsBox").style.display = "none";
    document.getElementById("ImportPaperWallet").style.display = "block";
}

function ImportSweepPKchange() {
    document.getElementById("priv_add").innerHTML = "<br>";
    
    var privkey = document.getElementById("SweepPK").value;
    var address = libs.bitcoin.ECPair.fromWIF(privkey,libs.bitcoin.networks.ltc).getAddress();
    
    document.getElementById("priv_add").innerHTML = "<br><font size='4' color='grey' weight='normal'>" + address + "</font>";
    
    $.get({
        url: "/api/wallet_key/balance/"+address, cache: false,
        success: function(rawresult){
            document.getElementById("priv_add").innerHTML = "<br><font size='4' color='grey' weight='normal'>" + address + " : <font color='blue'><b>"+Number((rawresult / 100000000).toFixed(8)).toString()+" LTC</b></font></font>";
        }
        
    });
}

function ImportSweepPK() {
    
    var privkey = document.getElementById("SweepPK").value;
    var SendToAddress1 = document.getElementById("SweepToAd").value;
    
    var address = libs.bitcoin.ECPair.fromWIF(privkey,libs.bitcoin.networks.ltc).getAddress();
    
    $.get({
        url: "/api/wallet_key/utxo/"+address, cache: false,
        success: function(rawresult){
            if(typeof rawresult === 'object') rawresult = JSON.stringify(rawresult);
            const JsonResult = JSON.parse(rawresult);
            
        	if(JsonResult.length == 0) {
        	    NoBalanceSweepNote();
        	    return;
        	}
        	
        	var InputTxs = [];
        	var InputTxV = [];
        	var InputBal = [];
        	var Output1 = 0;
        	for (var i = 0; i < JsonResult.length; i++) {
        	    InputTxs.push( JsonResult[i].txid );
        	    InputTxV.push( parseInt(JsonResult[i].vout) );
        	    InputBal.push( parseInt(JsonResult[i].satoshis) );
        	    Output1 = Output1 + parseInt(JsonResult[i].satoshis);
        	}
        	
        	var OutputAddresses0 = [];
        	    OutputAddresses0.push ( SendToAddress1 );
        	
        	var OutputAmount0 = [];
        	    OutputAmount0.push ( parseInt(Output1)-1000 ); // 1000 Latoshi tx fees
        	
        	var RawTransaction = foo.myFunction(InputTxs, InputTxV, InputBal, privkey, OutputAddresses0, OutputAmount0, '', [], KeyPath);
        	
        	BroadcastTransaction(RawTransaction, 1, 'Import PrivateKey');
        }
        
    });
    
}

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

function encryptTXT(text, key){
    return [...text].map((x, i) => 
    (x.codePointAt() ^ key.charCodeAt(i % key.length) % 255)
     .toString(16)
     .padStart(2,"0")
   ).join('')
}
function decryptTXT(text, key){
    return String.fromCharCode(...text.match(/.{1,2}/g)
     .map((e,i) => 
       parseInt(e, 16) ^ key.charCodeAt(i % key.length) % 255)
     )
}
function ImportWLT() {
    var input = document.createElement('input');
    input.type = 'file';
    input.accept = '.wlt';
    input.click();
    input.onchange = function() {
        var file = input.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
            var UsedPassword = "";
            var MyLoop1 = true;
            while (MyLoop1) {
                var DecryptedWlt = decryptTXT(reader.result,UsedPassword);
                var Arr1 = DecryptedWlt.split("_|-|_");
                if (Arr1.length == 1) {
                    var UsedPassword = prompt('Password to Unlock :');
                    if(UsedPassword == "") MyLoop1 = false;
                } else {
                    document.getElementById("EntropyId").value = Arr1[1];
                    document.getElementById("PassPhrase").value = Arr1[2];
                    LoginPaperWallet();
                    MyLoop1 = false;
                }
            console.log(reader.result);
            }
        }
        reader.readAsText(file);
    }
}
function ExportFile() {
    document.getElementById("ModalBackup").style.display = 'none';
    document.getElementById("ExportFile").style.display = 'block';
}
function ExportFile2(wwpass) {
    if(wwpass == 2) {
        var foo = prompt('Password to Restore File:');
} else {
        var foo = "";
}
    var EncryptedWallet = encryptTXT("zero_|-|_" + document.getElementById("EntropyId").value + "_|-|_" + document.getElementById("PassPhrase").value, foo);
    var hiddenElement = document.createElement('a');
    hiddenElement.download = 'ltcchain.wlt';
    var blob = new Blob([EncryptedWallet], {
        type: 'text/plain'
    });
    hiddenElement.href = window.URL.createObjectURL(blob);
    hiddenElement.click();
    document.getElementById("ModalBackup").style.display = 'none';
    document.getElementById("ExportFile").style.display = 'none';
}
function ExportPDF() {
    var pdf = new jsPDF('p', 'pt', 'a4');
    
    pdf.setFontType("bold");
    pdf.text(20, 25, 'Id: ' + document.getElementById("EntropyId").value);
    
    pdf.text(20, 50, 'Password: ' + document.getElementById("PassPhrase").value);
    
    pdf.line(10, 70, 585, 70, "D");
    
    pdf.text(20, 100, 'Paper Wallet');
    pdf.setFontType("normal");
    
    for (var i = 0; i < AddressListNum; i++) {
        var key = "NA";
        key = bip32ExtendedKey.derive(parseInt(i));
        var keyPair = key.keyPair;
        //var address = keyPair.getAddress().toString();
        if(KeyPath == "m/44'/2'/0'/0") { // BIP32
            var address = keyPair.getAddress().toString();
        } else if (KeyPath === "m/49'/2'/0'/0") { // BIP49: Nested SegWit P2SH-P2WPKH
            var pubKeyHash = libs.bitcoin.crypto.hash160(keyPair.getPublicKeyBuffer());
            var redeemScript = libs.bitcoin.script.compile([0x00,pubKeyHash]);
            var scriptHash = libs.bitcoin.crypto.hash160(redeemScript);
            var scriptPubKey = libs.bitcoin.script.compile([0xa9,scriptHash,0x87]);
            var address = libs.bitcoin.address.fromOutputScript(scriptPubKey,libs.bitcoin.networks.ltc);
        } else if (KeyPath === "m/84'/2'/0'/0") { // BIP84: Native SegWit P2WPKH
            var pubKeyHash = libs.bitcoin.crypto.hash160(keyPair.getPublicKeyBuffer());
            var scriptPubKey = libs.bitcoin.script.compile([0x00,pubKeyHash]);
            var address = libs.bitcoin.address.fromOutputScript(scriptPubKey,libs.bitcoin.networks.ltc);
        } else {
            alert("Unsupported Litecoin derivation path: " + KeyPath);
        }
        var privkey = keyPair.toWIF();
        
        pdf.text('Address: ' + address, 20, 130+60*i);
        pdf.text('PK: ' + privkey, 20, 130+20+60*i);
    }
    
    pdf.setTextColor(128, 128, 128);
    for (var i = AddressListNum; i <= 11; i++) {
        var key = "NA";
        key = bip32ExtendedKey.derive(parseInt(i));
        var keyPair = key.keyPair;
        //var address = keyPair.getAddress().toString();
        if(KeyPath == "m/44'/2'/0'/0") { // BIP32
            var address = keyPair.getAddress().toString();
        } else if (KeyPath === "m/49'/2'/0'/0") { // BIP49: Nested SegWit P2SH-P2WPKH
            var pubKeyHash = libs.bitcoin.crypto.hash160(keyPair.getPublicKeyBuffer());
            var redeemScript = libs.bitcoin.script.compile([0x00,pubKeyHash]);
            var scriptHash = libs.bitcoin.crypto.hash160(redeemScript);
            var scriptPubKey = libs.bitcoin.script.compile([0xa9,scriptHash,0x87]);
            
            var address = libs.bitcoin.address.fromOutputScript(scriptPubKey,libs.bitcoin.networks.ltc);
        } else if (KeyPath === "m/84'/2'/0'/0") { // BIP84: Native SegWit P2WPKH
            var pubKeyHash = libs.bitcoin.crypto.hash160(keyPair.getPublicKeyBuffer());
            var scriptPubKey = libs.bitcoin.script.compile([0x00,pubKeyHash]);
            var address = libs.bitcoin.address.fromOutputScript(scriptPubKey,libs.bitcoin.networks.ltc);
        } else {
            alert("Unsupported Litecoin derivation path: " + KeyPath);
        }
        var privkey = keyPair.toWIF();
        
        pdf.text('Address: ' + address, 20, 130+60*i);
        pdf.text('PK: ' + privkey, 20, 130+20+60*i);
    }
    
    pdf.save('backup-ltcchain.pdf');
    
    document.getElementById("ModalBackup").style.display = 'none';
}

function AutoLogin() {
    let AutoLog_ID = localStorage.getItem('Info1');
    if (AutoLog_ID != null) { // null ?
        let AutoLog_Pass = localStorage.getItem('Info2');
        document.getElementById("EntropyId").value = atob(AutoLog_ID);
        document.getElementById("PassPhrase").value = atob(AutoLog_Pass);
        LoginPaperWallet();
    }
}
function SaveAutoLogin() {
    localStorage.setItem('Info1', btoa(document.getElementById("EntropyId").value));
    localStorage.setItem('Info2', btoa(document.getElementById("PassPhrase").value));
}

function RemoveAutoLogin() {
    entropyStr = null;
    entropy = null;
    DOM_phrase = null;
    seed = null;
    bip32RootKey = null;
    bip32ExtendedKey = null;
    localStorage.removeItem('UserID');
    localStorage.removeItem('UserP');
    localStorage.removeItem('Info1');
    localStorage.removeItem('Info2');
    document.getElementById("headw").style.display = "block";
    document.getElementById("headwrefresh").style.display = "none";
    LoggedOut();
}
AutoLogin();

</script>

<? include('footer.php'); ?>

</body></html>