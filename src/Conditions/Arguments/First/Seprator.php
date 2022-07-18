<?php

namespace GhaniniaIR\SolarCron\Conditions\Arguments\First;

use GhaniniaIR\SolarCron\Conditions\Contracts\ConditionArgumentContract;

class Seprator extends ConditionArgumentContract
{
    public function passed(): bool
    {
        $currentMinute = $this->jalaliCalender()->getMinute();
        foreach (explode(",", $this->value) as $value) {
            if ($value == $currentMinute) {
                return true;
            }
        }
        return false;
    }
}
