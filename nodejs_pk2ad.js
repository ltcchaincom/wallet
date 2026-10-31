var privkey = process.argv[2];

const bitcoin = require('/home/ltcchain/public_html/js/appltc.js');

var address = bitcoin.GetAddressFromPK(privkey);
console.log(address);