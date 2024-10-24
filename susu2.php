<?php
function generateRandomFingerprint() {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $fingerprint = '';
    for ($i = 0; $i < 32; $i++) {
        $fingerprint .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $fingerprint;
}

function cekKoneksi() {
    $connected = @fsockopen("www.google.com", 80);
    if ($connected) {
        fclose($connected);
        return true;
    } else {
        return false;
    }
}

function save($data, $file) {
    if (!file_exists($file)) {
        file_put_contents($file, '');
    }

    $existingData = file_get_contents($file);
    if (strpos($existingData, $data) === false) {
        $handle = fopen($file, 'a+');
        fwrite($handle, $data);
        fclose($handle);
        echo "Data baru telah ditulis ke file.\n";
    } else {
        echo "Data sudah ada di file.\n";
    }
}

function getCurrentIP() {
    $ch = curl_init("https://api.ipify.org");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        curl_close($ch);
        return null;
    }

    curl_close($ch);
    return trim($response) ? trim($response) : null;
}

function enableAirplaneMode() {
    echo "Silahkan ganti IP dengan cara modepesawat atau pindah pindah APN\n";
}

$previousIP = getCurrentIP();

    $currentIP = getCurrentIP();
    
    if ($previousIP !== null && $currentIP === $previousIP) {
        enableAirplaneMode();
        echo "IP sama, menunggu IP baru...\n";
        do {
            echo "IP sama, menunggu IP baru...\n";
            system('clear');
            //sleep(5);
            $currentIP = getCurrentIP();
            echo "IP sebelumnya : $previousIP\n";
            echo "IP baru : $currentIP\n";
            if ($currentIP == null) {
                $currentIP = $previousIP;
            }
        } while ($currentIP === $previousIP);
        echo "IP berubah, melanjutkan eksekusi...\n";
    }

    $previousIP = $currentIP;

    if (cekKoneksi()) {
        echo "Koneksi tersedia, melanjutkan eksekusi...\n";
    } else {
        system('php susu.php');
    }


$ch = curl_init();

$url_1 = "https://indomilk.store/indomilk/";
curl_setopt($ch, CURLOPT_URL, $url_1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2_0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');

$headers_1 = [
    "Host: indomilk.store",
    'sec-ch-ua: "Android WebView";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    "sec-ch-ua-mobile: ?1",
    'sec-ch-ua-platform: "Android"',
    "upgrade-insecure-requests: 1",
    "user-agent: Mozilla/5.0 (Linux; Android 14; M2101K6G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.6778.2 Mobile Safari/537.36",
    "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    "x-requested-with: com.duckduckgo.mobile.android",
    "sec-fetch-site: none",
    "sec-fetch-mode: navigate",
    "sec-fetch-user: ?1",
    "sec-fetch-dest: document",
    "accept-language: en,id-ID;q=0.9,id;q=0.8,en-US;q=0.7",
    "priority: u=0, i"
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers_1);
$response_1 = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Curl error in first request: ' . curl_error($ch);
} else {
    echo "Membuat Kue\n";
}

$url_2 = "https://indomilk.store/cart/";
$headers_2 = [
    "Host: indomilk.store",
    'sec-ch-ua: "Android WebView";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    "sec-ch-ua-mobile: ?1",
    'sec-ch-ua-platform: "Android"',
    "upgrade-insecure-requests: 1",
    "user-agent: Mozilla/5.0 (Linux; Android 14; M2101K6G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.6778.2 Mobile Safari/537.36",
    "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    "x-requested-with: com.duckduckgo.mobile.android",
    "sec-fetch-site: none",
    "sec-fetch-mode: navigate",
    "sec-fetch-user: ?1",
    "sec-fetch-dest: document",
    "referer: https://indomilk.store/cart",
    "accept-language: en,id-ID;q=0.9,id;q=0.8,en-US;q=0.7",
    "priority: u=0, i"
];
curl_setopt($ch, CURLOPT_URL, $url_2);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers_2);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
$response_2 = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Curl error in second request: ' . curl_error($ch);
} else {
    echo "Memasak Kue\n";
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://indomilk.store/wp-admin/admin-ajax.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2_0);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

$headers = [
    "Host: indomilk.store",
    "sec-ch-ua-platform: \"Android\"",
    "x-requested-with: XMLHttpRequest",
    "user-agent: Mozilla/5.0 (Linux; Android 14; M2101K6G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.6778.2 Mobile Safari/537.36",
    "accept: application/json, text/javascript, */*; q=0.01",
    "sec-ch-ua: \"Android WebView\";v=\"131\", \"Chromium\";v=\"131\", \"Not_A Brand\";v=\"24\"",
    "content-type: multipart/form-data; boundary=----WebKitFormBoundary2MpquTn8t1U1P7FV",
    "sec-ch-ua-mobile: ?1",
    "origin: https://indomilk.store",
    "sec-fetch-site: same-origin",
    "sec-fetch-mode: cors",
    "sec-fetch-dest: empty",
    "referer: https://indomilk.store/cart/",
    "accept-language: en,id-ID;q=0.9,id;q=0.8,en-US;q=0.7",
    "cookie: PHPSESSID=d944e42ba517de70d87b35aa06d4b790",
    "priority: u=1, i"
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$EMAIL = 'firman' . rand(1111111, 9999999) . '@gmail.com';
$NOMOR = '08381' . rand(1111111, 9999999);
//$EMAIL = "firmantsani09@gmail.com";
//$NOMOR = "083813256237";

$timestamp = round(microtime(true) * 1000);
$timestamp2 = round(microtime(true) * 1200);

$post_fields = <<<EOD
------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="wpforms[fields][1]"

firman tsani
------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="wpforms[fields][4]"


------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="wpforms[fields][2]"

$EMAIL
------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="wpforms[fields][5]"


------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="wpforms[fields][3]"

$NOMOR
------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="wpforms[id]"

93
------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="page_title"

Cart
------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="page_url"

https://indomilk.store/cart/
------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="page_id"

184
------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="wpforms[post_id]"

184
------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="wpforms[submit]"

wpforms-submit
------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="wpforms[token]"

f42028287c43ebc9b76739b991e2a3c9
------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="action"

wpforms_submit
------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="start_timestamp"

$timestamp
------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="end_timestamp"

$timestamp2
------WebKitFormBoundary2MpquTn8t1U1P7FV--
EOD;

curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    //echo $response;
    echo "icip-icip\n";
}

curl_close($ch);

$headers_4 = [
    "Host: indomilk.store",
    'sec-ch-ua: "Android WebView";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    "sec-ch-ua-mobile: ?1",
    'sec-ch-ua-platform: "Android"',
    "upgrade-insecure-requests: 1",
    "user-agent: Mozilla/5.0 (Linux; Android 14; M2101K6G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.6778.2 Mobile Safari/537.36",
    "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    "x-requested-with: com.duckduckgo.mobile.android",
    "sec-fetch-site: none",
    "sec-fetch-mode: navigate",
    "sec-fetch-user: ?1",
    "sec-fetch-dest: document",
    "referer: https://indomilk.store/thank-you",
    "accept-language: en,id-ID;q=0.9,id;q=0.8,en-US;q=0.7",
    "cookie: PHPSESSID=d944e42ba517de70d87b35aa06d4b790",
    "priority: u=0, i"
];
curl_setopt($ch, CURLOPT_URL, "https://indomilk.store/thank-you");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers_4);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
$response_4 = curl_exec($ch);
//var_dump($$response_4);
//die;
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    echo "Jadi deh\n";
}

curl_close($ch);

$html = $response_4;

$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTML($html);
libxml_clear_errors();

$shortcodeDivs = $dom->getElementsByTagName('div');
foreach ($shortcodeDivs as $div) {
    if ($div->getAttribute('class') === 'elementor-shortcode') {
        $images = $div->getElementsByTagName('img');
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (strpos($src, 'barcode-generator.php') !== false) {
$data = explode('=', $src)[1];
echo "Kode Voucher : ".$data."\n";
save($data."\n","susu.txt");
            }
        }
    }
}
system('rm cookie.txt');
system('php susu.php');
