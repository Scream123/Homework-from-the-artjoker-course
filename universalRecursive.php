<?php
/**
 * Created by PhpStorm.
 * User: Владимир
 * Date: 31.07.2021
 * Time: 14:50
 */
/**
 *
 * Рекурсии
 * Все задачи на циклы которые можно реализовать с помощью рекурсии, переписать с помощью рекурсивных функций
 * Написать рекурсивную функцию которая будет обходить и выводить все значения любого массива и любого уровня вложенности
 */


function translate()
{

    $search = [
        'singular' => 'Manual',
        'plural' => 'Manuals',
        'steps' => [
            'name' => 'steps',
            'singular' => 'Manual step',
            'plural' => 'Manuals steps',
            'global' => 'Global steps',
            'count' => 'Steps count',
            'module_title' => 'Module title',
            'module_type' => 'Module type',
            'content' => 'Content',
            'type' => [
                'safety_notice' => 'Safety notice',
                'installation' => 'Installation',
                'installation_distances' => 'Installation distances',
                'new_step' => 'New step',
                'custom_text' => 'Custom text',
                'technical_specs' => 'Technical specs',
            ],
            'image' => [
                'name' => 'Image',
                'type' => [
                    'left' => 'Image on left, text on right',
                    'right' => 'Image on right, text on left',
                    'top' => 'Image on top, text below',
                    'below' => 'Image below, text on top',
                ]
            ],
        ],
        'cover_pages' => [
            'singular' => 'Cover page',
            'plural' => 'Cover pages',
        ]
    ];
    echo trans('steps.image.type.left', $search);
}

translate();
function trans($findKey, $array)
{

    //проверка на массив
    if (is_array($array)) {

        //разбиваем масссив на точки
        $key_parts = explode('.', $findKey);
        //извлекаем первый элемент массива
        $key = array_shift($key_parts);

        //возврат функции и разбиваем снова на точки
        return trans(implode('.', $key_parts), $array[$key]);
    }
    //возвращаем строку
    return $array;

}
function bulbSort(&$arr, $compare)
{
    for ($i = 0, $count = count($arr); $i < $count; $i++) {
        for ($j = $i + 1; $j < $count; $j++) {
            if ($compare($arr[$i], $arr[$j])) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
}
