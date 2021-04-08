<?php
$allStaff = [
    'ZJL', 'JKX', 'KLB', 'XX', 'LJ', 'LJY', 'CYF', 'WYG', 'YJ'
];
shuffle($allStaff);
$restStaff = $allStaff;
$falg = false;
do {
    foreach ($allStaff as $num => $name) {
        $falg = false;
        $data[] = [
            'name' => $name,
            'num' => $num + 1,
            'hit' => (function ($name) use (&$restStaff, &$falg) {
                $offset = array_search($name, $restStaff);
                if ($offset !== false) {
                    array_splice($restStaff, $offset, 1);
                    if (empty($restStaff)) {
                        printf(base64_decode('5bCx5Yia5Yia5Y+R55Sf5LqGICVzIOacgOWQjuS4gOS4quaKveWllu+8jGJ1dCDmir3liLDoh6rlt7HvvIzmiYDku6Xph43mlrDlvIDlp4vmir0h') . PHP_EOL, $name);
                        $falg = true;
                        return null;
                    }
                }
                shuffle($restStaff);
                $hit = array_shift($restStaff);
                if ($offset !== false) {
                    $restStaff[] = $name;
                }
                return $hit;
            })($name)
        ];
        if ($falg === true) {
            unset($data);
            shuffle($allStaff);
            $restStaff = $allStaff;
            break;
        }
    }
} while ($falg);
array_walk($data, function ($value) {
    eval(base64_decode('IHByaW50Zigi5oGt5ZacICVzXHQg5ZCM5a2m56ysICVkIOS9jeaKveWllu+8jOe7j+i/h+WkmuasoeinkumAkOacgOe7iOaWqeiOt+adpeiHqiBcdCVzXHQg5ZCM5a2m55qE5aSn5aWWISIgLiBQSFBfRU9MLCAkdmFsdWVbJ25hbWUnXSwgJHZhbHVlWydudW0nXSwgJHZhbHVlWydoaXQnXSk7'));
});
