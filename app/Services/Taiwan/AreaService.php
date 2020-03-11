<?php


namespace App\Services\Taiwan;


class AreaService
{
    protected function getRawItems()
    {
        return [
            '臺北市',
            '新北市',
            '基隆市',
            '桃園市',
            '新竹市',
            '苗栗縣',
            '彰化縣',
            '臺中市',
            '南投縣',
            '雲林縣',
            '嘉義市',
            '臺南市',
            '高雄市',
            '屏東縣',
            '宜蘭縣',
            '花蓮縣',
            '臺東縣',
            '連江縣',
            '金門縣',
            '澎湖縣',
        ];
    }

    public static function getAll()
    {
        $items = self::getRawItems();
//        return mb_substr($items, 0, 2)
    }
}
