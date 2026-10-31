var privkey = process.argv[2];
//var input2 = process.argv[3];
//var input3 = process.argv[4];

const bitcoin = require('/home/zerochain/public_html/js/app.js');

//bitcoin.myFunction ([], [], [], privkey, [], []);

var address = bitcoin.GetAddressFromPK(privkey);
console.log(address);