<?php
declare(strict_types=1);

namespace popp\ch04\batch08;

/* listing 04.96 */
class Totalizer2
{
    public static function warnAmount($amt)
    {
        $count=0;
        return function ($product) use ($amt, &$count) {
            $count += $product->price;
            print "   count: $count\n";
            if ($count > $amt) {
                print "   high price reached: {$count}\n";
            }
        };
    }
}
// done
