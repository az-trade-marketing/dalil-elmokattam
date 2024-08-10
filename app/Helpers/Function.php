<?php
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
//change language
if (!function_exists('lang')) {
    function lang()
    {
        return  app()->getLocale() ;
        // $lang = session()->get('lang') ?? 'ar';
        // return $lang;
    }
}


if (!function_exists('upload')) {
    function upload($file)
    {
        $imageName = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('images'), $imageName);
        return $imageName;
    }
}

/////////////function to location
function pointStringToCoordinates($pointString)
{
    $coordinates = explode(" ", $pointString);
    return array("x" => $coordinates[0], "y" => $coordinates[1]);
}
function pointOnVertex($point, $vertices)
{
    foreach ($vertices as $vertex) {
        if ($point == $vertex) {
            return true;
        }
    }
}

    function pointInPolygon($point, $polygon)
    {
        // pointOnVertex = true;

        // Transform string coordinates into arrays with x and y values
        $point = pointStringToCoordinates($point);
        $vertices = array();
        foreach ($polygon as $vertex) {
            $vertices[] = pointStringToCoordinates($vertex);
        }

        // Check if the point sits exactly on a vertex
        if (pointOnVertex($point, $vertices) == true) {
            return true;
        }

        // Check if the point is inside the polygon or on the boundary
        $intersections = 0;

        for ($i = 1; $i < count($vertices); $i++) {
            $vertex1 = $vertices[$i - 1];
            $vertex2 = $vertices[$i];
            if ($vertex1['y'] == $vertex2['y'] and $vertex1['y'] == $point['y'] and $point['x'] > min($vertex1['x'], $vertex2['x']) and $point['x'] < max($vertex1['x'], $vertex2['x'])) { // Check if point is on an horizontal polygon boundary
                return true;
            }
            if ($point['y'] > min($vertex1['y'], $vertex2['y']) and $point['y'] <= max($vertex1['y'], $vertex2['y']) and $point['x'] <= max($vertex1['x'], $vertex2['x']) and $vertex1['y'] != $vertex2['y']) {
                $xinters = ($point['y'] - $vertex1['y']) * ($vertex2['x'] - $vertex1['x']) / ($vertex2['y'] - $vertex1['y']) + $vertex1['x'];
                if ($xinters == $point['x']) { // Check if point is on the polygon boundary (other than horizontal)
                    return true;
                }
                if ($vertex1['x'] == $vertex2['x'] || $point['x'] <= $xinters) {
                    $intersections++;
                }
            }
        }
        // If the number of edges we passed through is odd, then it's in the polygon.
        if ($intersections % 2 != 0) {
            return true;
        } else {
            return false;
        }
    }


    if (!function_exists('checkPoints')) {

        function checkPoints($lat, $lon)
        {
            ini_set('memory_limit', -1);
            ini_set('set_time_limit', -1);
            ini_set('max_execution_time', -1);
            ini_set('post_max_size', -1);
            ini_set('upload_max_filesize', -1);

            $point = $lat . " " . $lon;
            $check = false;
            $area_id = 0;
            $areas = \App\Models\Area::all();

            foreach ($areas as $one) {
                $polygon = [];
                $boundaries = json_decode($one->boundaries, true);

                if (is_array($boundaries) && !empty($boundaries)) {
                    foreach ($boundaries as $x) {
                        foreach ($x as $o) {
                            $polygon[] = $o[0] . " " . $o[1];
                        }
                    }

                    if (isset($boundaries[0][0][0])) {
                        $polygon[] = $boundaries[0][0][0] . " " . $boundaries[0][0][1];
                        $check = pointInPolygon($point, $polygon);

                        if ($check) {
                            $area_id = $one->id;
                            break;
                        }
                    }
                }
            }

            if ($check && $area_id > 0) {
                $area = \App\Models\Area::find($area_id);

                if ($area) {
                    return $area->id;
                }
                return -1;
            }
            return -1;
        }
    }
    ///////////////////sendFirbase
    if (!function_exists('sendFirebase')) {
        function sendFirebase(array $tokens, $title = null, $body = null, $clickActionUrl = null, $imageUrl = null)
        {
            $tokens = array_values(array_filter(array_unique($tokens)));

            $notification = [
                'title' => !empty($title) ? $title : config('app.name') . ' Notification',
                'body' => $body,
                'click_action' => $clickActionUrl, // Add click action URL
            ];

            if ($imageUrl) {
                $notification['image'] = $imageUrl; // Add image URL if provided
            }

            try {
                $headers = [
                    'Authorization: key=' . env('API_ACCESS_KEY'),
                    'Content-Type: application/json'
                ];

                $fields = [
                    'registration_ids' => $tokens,
                    'notification' => $notification,
                ];

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                logger(json_encode($fields));
                $result = curl_exec($ch);
                $res = json_decode($result);
                curl_close($ch);

                if ($res && $res->failure) {
                    throw new Exception("\n Notification Error: \n" . json_encode($res) . "\n Tokens: " . json_encode($tokens));
                }

                return $res;
            } catch (Exception $ex) {
                // Handle the exception
            }
        }
    }

