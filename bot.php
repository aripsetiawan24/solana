<?php
echo "\e[32m1.Check Token";
echo "\n2.Hitung Token\e[39m";
echo "\n\e[33mPilih yang ingin di check :\e[39m";
$pilihan = trim(fgets(STDIN));
if ($pilihan == "1"){
    echo "Silahkan Tunggu";
    echo "\n";
    sleep(1);
     goto check;
}
if ($pilihan == "2"){
    echo "Silahkan Tunggu";
    echo "\n";
    sleep(1);
     goto hitung;
}
check:
echo "[+] Solana Wallet List:";
$xyz = trim(fgets(STDIN));
foreach (explode("\n", str_replace("\r", "", file_get_contents($xyz))) as $key => $address) {
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.mainnet-beta.solana.com");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"method":"getTokenAccountsByOwner","jsonrpc":"2.0","params":["'.$address.'",{"programId":"TokenkegQfeZyiNwAJbNbGKPFXCWuBvf9Ss623VQ5DA"},{"encoding":"jsonParsed","commitment":"processed"}],"id":"35f0036a-3801-4485-b573-2bf29a7c77d2"}');
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; rv:78.0) Gecko/20100101 Firefox/78.0");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Referer: https://explorer.solana.com/address/".$address."/tokens",
        "Content-Type: application/json", 
        "Origin: https://explorer.solana.com",
        "Accept: */*"
    ));
    
    $exe = curl_exec($ch);
    $dec = json_decode($exe);
    echo "\e[36;1m[+] Token for Address: ".$address." [+]\n\e[00m";
    sleep(1);
    foreach($dec->result->value as $data){
        
        $balance = ($data->account->data->parsed->info->tokenAmount->uiAmountString != 0) ? "\e[92m".$data->account->data->parsed->info->tokenAmount->uiAmountString." \e[00m" : $data->account->data->parsed->info->tokenAmount->uiAmountString;
        //echo "Mint: ".$data->account->data->parsed->info->mint."|Balance: ".$balance."\n";
        usleep(50000);
        if ($data->account->data->parsed->info->mint == "BLwTnYKqf7u4qjgZrrsKeNs2EzWkMLqVCu6j8iHyrNA3") {
            echo "\e[34;1m[+] BOP : ".$balance."\n";
            $o = fopen("bop.txt", 'a');
            fwrite($o, $address."|".$data->account->data->parsed->info->tokenAmount->uiAmountString."\n");
            fclose($o);
        }
        if ($data->account->data->parsed->info->mint == "4wjPQJ6PrkC4dHhYghwJzGBVP78DkBzA2U3kHoFNBuhj") {
            echo "\e[34;1m[+] LIQ : ".$balance."\n";
            $o = fopen("liq.txt", 'a');
            fwrite($o, $address."|".$data->account->data->parsed->info->tokenAmount->uiAmountString."\n");
            fclose($o);
        }
        if ($data->account->data->parsed->info->mint == "51tMb3zBKDiQhNwGqpgwbavaGH54mk8fXFzxTc1xnasg") {
            echo "\e[34;1m[+] APEX : ".$balance."\n";
            $o = fopen("apex.txt", 'a');
            fwrite($o, $address."|".$data->account->data->parsed->info->tokenAmount->uiAmountString."\n");
            fclose($o);
        }
        if ($data->account->data->parsed->info->mint == "8HGyAAB1yoM1ttS7pXjHMa3dukTFGQggnFFH3hJZgzQh") {
            echo "\e[34;1m[+] COPE : ".$balance."\n";
            $o = fopen("cope.txt", 'a');
            fwrite($o, $address."|".$data->account->data->parsed->info->tokenAmount->uiAmountString."\n");
            fclose($o);
        }
        if ($data->account->data->parsed->info->mint == "guppyrZyEX9iTPSu92pi8T71Zka7xd6PrsTJrXRW6u1") {
            echo "\e[34;1m[+] GUPPY : ".$balance."\n";
            $o = fopen("guppy.txt", 'a');
            fwrite($o, $address."|".$data->account->data->parsed->info->tokenAmount->uiAmountString."\n");
            fclose($o);
        }
        if ($data->account->data->parsed->info->mint == "AMdnw9H5DFtQwZowVFr4kUgSXJzLokKSinvgGiUoLSps") {
            echo "\e[34;1m[+] MOLA : ".$balance."\n";
            $o = fopen("mola.txt", 'a');
            fwrite($o, $address."|".$data->account->data->parsed->info->tokenAmount->uiAmountString."\n");
            fclose($o);
        }
         if ($data->account->data->parsed->info->mint == "8PMHT4swUMtBzgHnh5U564N5sjPSiUz2cjEQzFnnP1Fo") {
            echo "\e[34;1m[+] ROPE : ".$balance."\n";
            $o = fopen("rope.txt", 'a');
            fwrite($o, $address."|".$data->account->data->parsed->info->tokenAmount->uiAmountString."\n");
            fclose($o);
        }
        if ($data->account->data->parsed->info->mint == "7xKXtg2CW87d97TXJSDpbD5jBkheTqA83TZRuJosgAsU") {
            echo "\e[34;1m[+] SAMO : ".$balance."\n";
            $o = fopen("samo.txt", 'a');
            fwrite($o, $address."|".$data->account->data->parsed->info->tokenAmount->uiAmountString."\n");
            fclose($o);
        }
        if ($data->account->data->parsed->info->mint == "GHvFFSZ9BctWsEc5nujR1MTmmJWY7tgQz2AXE6WVFtGN") {
            echo "\e[34;1m[+] SOLAPE : ".$balance."\n";
            $o = fopen("solape.txt", 'a');
            fwrite($o, $address."|".$data->account->data->parsed->info->tokenAmount->uiAmountString."\n");
            fclose($o);
        }
        if ($data->account->data->parsed->info->mint == "6uZ7MRGGf3FJhzk9TUk3QRMR2fz83WY9BEVBukRvMRVX") {
            echo "\e[34;1m[+] NANA : ".$balance."\n";
            $o = fopen("nana.txt", 'a');
            fwrite($o, $address."|".$data->account->data->parsed->info->tokenAmount->uiAmountString."\n");
            fclose($o);
        }
    }
}
echo "[+] File Saved Check Your File".PHP_EOL;
exit();
hitung:
echo "[+] Result List: ex (liq.txt)";
$xyz = trim(fgets(STDIN));
$jumlah = array();//taruh sebelum
foreach (explode("\n", str_replace("\r", "", file_get_contents($xyz))) as $key => $angka) {

$asw = explode("|", $angka);
$asu1 = $asw[0];
$asu2 = $asw[1];
$jumlah[]= $asu2;//taruh di looping
}
$total = array_sum($jumlah); //taruh setelah looping
echo "[+] Total Token kamu : ".$total.PHP_EOL;
exit();
?>
