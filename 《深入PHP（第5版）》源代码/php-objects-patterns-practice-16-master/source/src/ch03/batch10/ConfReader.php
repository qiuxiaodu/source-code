<?php
declare(strict_types=1);
namespace popp\ch03\batch10;

/* listing 03.28 */
class ConfReader
{

    public function getValues(array $default = null)
    {
        $values = [];

        // do something to get values

/* /listing 03.28 */
        $values = ["name" => "mary"];
/* listing 03.28 */
        // merge the provided defaults (it will always be an array)
        $values = array_merge($default, $values);
        return $values;
    }
}
/* /listing 03.28 */
