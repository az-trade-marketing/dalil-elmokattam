<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

if (!function_exists('image_path')) {
    function image_path($url = '')
    {
        return url('images/' . $url);
    }
}

if (!function_exists('aurl')) {
    function aurl($url = '')
    {
        return url('admin/' . trim($url, '/'));
    }
}

// تغيير اللغة
if (!function_exists('lang')) {
    function lang()
    {
        return app()->getLocale();
    }
}

if (!function_exists('upload')) {
    function upload($file)
    {
        $imageName = uniqid() . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $imageName);
        return $imageName;
    }
}

// دالة للحصول على Google Access Token
if (!function_exists('getGoogleAccessToken')) {
    function getGoogleAccessToken()
    {
        $credentialsFilePath = base_path('firebase-cloud-messaging.json'); // تأكد من أن المسار صحيح
        $client = new \Google_Client(); // استخدم Google_Client مباشرة بدون use statement
        $client->setAuthConfig($credentialsFilePath);
        $client->addScope('https://www.googleapis.com/auth/firebase.messaging');
        $client->refreshTokenWithAssertion();
        $token = $client->getAccessToken();
        return $token['access_token'];
    }
}

// دالة لإنشاء مجموعة
if (!function_exists('makeGroup')) {
    function makeGroup(array $registrationIds, string $notificationKeyName, $accessToken, string $operation = 'create')
    {
        $url = 'https://fcm.googleapis.com/fcm/notification';
        $projectId = "9209b6225f70c869575649091cb2147557c14f39";

        if (empty($registrationIds)) return;

        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $accessToken,
            'project_id: ' . $projectId,
        ];

        $payload = [
            'operation' => $operation,
            'notification_key_name' => $notificationKeyName,
            'registration_ids' => $registrationIds,
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($httpCode == 200) {
            $response = json_decode($response);
            return $response->notification_key ?? null;
        }

        return null;
    }
}



if (!function_exists('sendFirebase')) {
    function sendFirebase($tokens, $title = null, $body = null, $clickActionUrl = null, $imageUrl = null)
    {
        if (empty($tokens)) {
            return false;
        }

        $apiAccessToken = getGoogleAccessToken();
        $isGroup = false;
        $key = time();

        if (is_string($tokens)) {
            $tokens = [$tokens];
        }

        $tokens = array_values(array_filter(array_unique($tokens)));

        $notification = [
            'title' => $title ?: config('app.name') . ' Notification',
            'body' => $body,
            // 'click_action' => $clickActionUrl,
        ];

        if ($imageUrl) {
            $notification['image'] = $imageUrl;
        }

        if (count($tokens) === 1) {
            $token = $tokens[0];
        } else {
            if ($tokens instanceof \Illuminate\Support\Collection) {
                $tokens = $tokens->toArray();
            }
            $token = makeGroup($tokens, $key, $apiAccessToken);
            $isGroup = true;
        }

        $payload = [
            'token' => $token,
            'notification' => $notification,
        ];

        $headers = [
            'Authorization' => 'Bearer ' . $apiAccessToken,
            'Content-Type' => 'application/json',
        ];

        try {
            // Use GuzzleHttp Client instead of Http facade
            // $client = new \GuzzleHttp\Client(['verify' => false]);
            $client = new \GuzzleHttp\Client([
                'verify' => 'E:/laragon/etc/ssl/cacert.pem',
            ]);

            $response = $client->post('https://fcm.googleapis.com/v1/projects/dalil-almokattam/messages:send', [
                'headers' => $headers,
                'json' => ['message' => $payload],
            ]);

            $result = json_decode($response->getBody()->getContents());

            if (isset($result->error)) {
                throw new \Exception("Notification Error: " . json_encode($result) . " Tokens: " . json_encode($tokens));
            }

            if ($isGroup) {
                makeGroup($tokens, $key, $apiAccessToken, 'remove');
            }

            return $result;
        } catch (\Exception $ex) {
            Log::error('Firebase Notification Error: ' . $ex->getMessage());
            return false;
        }
    }
}

