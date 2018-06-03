<?php

trait FlattenArrayTrait
{
    /**
     * Flatten given array
     *
     * @param array $array
     * @return array
     */
    private function flattenArray($array = [])
    {
        $flatten = [];
        if (!is_array($array)) {
            $array = func_get_args();
        }

        foreach ($array as $key => $subArray) {
            /** Is item an array or a single value */
            if (is_array($subArray)) {
                $flatten = array_merge($flatten, $this->flattenArray($subArray));
            } else {
                $flatten = array_merge($flatten, array($key => $subArray));
            }
        }

        return $flatten;
    }
}