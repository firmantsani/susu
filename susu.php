<?php

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
    echo "Response from first request:\n";
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
    echo "\n\nOra iso jowo aku\n";
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

$EMAIL = 'firmant' . rand(111111, 999999) . '@gmail.com';
$NOMOR = '08381' . rand(1111111, 9999999);

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

94acd1f6e665311f8da519a52677da51
------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="action"

wpforms_submit
------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="start_timestamp"

1729573025943
------WebKitFormBoundary2MpquTn8t1U1P7FV
Content-Disposition: form-data; name="end_timestamp"

1729573033305
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
    echo $response;
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
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    echo "\n\nRa iso english:\n";
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
            if (strpos($src, 'indomilk.store/barcode') !== false) {
                echo "Link Gambar: " . $src . PHP_EOL;
                $newString = $src . PHP_EOL;
                $filename = "susu.txt";
                $file = fopen($filename, "a");
                if ($file) {
                    fwrite($file, "\n" . $newString);
                    fclose($file);
                    echo "String berhasil ditambahkan ke dalam file: " . $filename . "\n";
                } else {
                    echo "Terjadi kesalahan saat membuka file.\n";
                }
            }
        }
    }
}
system('rm cookie.txt');
system('php susu.php');