var privkey = process.argv[2];
var txid = process.argv[3];
var txv = process.argv[4];
var txb = process.argv[5];

var sendto = process.argv[6];
var sendam = process.argv[7];

const txid_arr0 = txid.split("_");
const txv_arr0 = txv.split("_");
const txb_arr0 = txb.split("_");
const sendto_arr0 = sendto.split("_");
const sendam_arr0 = sendam.split("_");

var txv_arr = [];
for (var i = 0; i < txv_arr0.length; i++) {
    txv_arr.push ( parseInt(txv_arr0[i]) );
}

var txb_arr = [];
for (var i = 0; i < txb_arr0.length; i++) {
    txb_arr.push ( parseInt(txb_arr0[i]) );
}

var sendam_arr = [];
for (var i = 0; i < sendam_arr0.length; i++) {
    sendam_arr.push ( parseInt(sendam_arr0[i]) );
}

//console.log(txb_arr);

const bitcoin = require('/home/ltcchain/public_html/js/appltc.js');

//console.log(sendam_arr);

var RawTX = bitcoin.myFunction (txid_arr0, txv_arr, txb_arr, privkey, sendto_arr0, sendam_arr);

console.log(RawTX);
