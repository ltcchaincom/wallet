# LTCchain Wallet & Blockchain Explorer
Offline wallet based on javascript for Litecoin currency

You can run (wallet.html or wallet.php) on your browser to use as a simple Javascript-based Wallet.

or copy the whole project files to PHP server to use the explorer & API functions.

Live version: https://ltcchain.com/


## LTCchain Basic Query API

### address-balance
###### Returns amount ever received minus amount ever sent by a given address.
##### URL
https://ltcchain.com/api/API_Key/addressbalance
##### Example
https://ltcchain.com/api/Z6exHksPXM/balance/La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu


### received-by-address
###### Returns the amount ever received by a given address.
##### URL
https://ltcchain.com/api/API_Key/receivedbyaddress
##### Example
https://ltcchain.com/api/API_Key/receivedbyaddress/La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu


### sent-by-address
###### Returns the amount ever received by a given address.
##### URL
https://ltcchain.com/api/API_Key/sentbyaddress
##### Example
https://ltcchain.com/api/API_Key/sentbyaddress/La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu


### address-info
###### Returns the information for a given address.
##### URL
https://ltcchain.com/api/API_Key/addressinfo
##### Example
https://ltcchain.com/api/API_Key/addressinfo/La2tH4JFA4Lj6E4EsGBBqrdbTnCMurjkDu


### block
###### Returns the latest block in the chain.
##### URL
https://ltcchain.com/api/API_Key/block


### block-info
###### Returns the information for a given block hash.
##### URL
https://ltcchain.com/api/API_Key/blockinfo
##### Example
https://ltcchain.com/api/API_Key/blockinfo/44bf14fb9a3587b60c153965d2770e6c3ae3efeb07a4743870821a2ac9b231cb


### difficulty
###### Returns the last solved block's difficulty.
##### URL
https://ltcchain.com/api/API_Key/difficulty


### price
###### Returns the last trade price.
##### URL
https://ltcchain.com/api/API_Key/price


### Push Raw Transaction
###### Push raw transaction onto network.
##### URL
https://ltcchain.com/api/API_Key/rawtx
##### Example
https://ltcchain.com/api/API_Key/rawtx/xxxxx-raw-data-xxxxx


### Create or Send a Transaction
###### Build raw transaction by a given address key & outputs data.
##### URL
https://ltcchain.com/api/API_Key/rawtxbuild/pkey/toaddress/amount/fees/send
##### Example
https://ltcchain.com/api/Z6exHksPXM/rawtxbuild/T4AYG2T1g3SpyikBhwNDbm2pxv7RaxHGsw3sTk4jhAowLjPeZXQa/LYa4BC1YEkxhVMH4sJhee6FEXevNZ4QjBh/0.001/0.000007/0/For+Testing
