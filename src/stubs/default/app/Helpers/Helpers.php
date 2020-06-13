<?php

if (! function_exists('timestamp_utc')) {
    function timestamp_utc()
    {
        return Carbon::now('utc')->toDateTimeString();
    }
}

if (! function_exists('fromUTC')) {
    function fromUTC($utc_timestamp,$tz)
    {
        $timestamp = Carbon::now();
        $timestamp->setTimestamp($utc_timestamp);
        $timestamp->setTimezone($tz);

        return $timestamp;
    }
}


if (! function_exists('generate_timezone_list')) {
    function generate_timezone_list()
    {
        static $regions = [
            DateTimeZone::AFRICA,
            DateTimeZone::AMERICA,
            DateTimeZone::ANTARCTICA,
            DateTimeZone::ASIA,
            DateTimeZone::ATLANTIC,
            DateTimeZone::AUSTRALIA,
            DateTimeZone::EUROPE,
            DateTimeZone::INDIAN,
            DateTimeZone::PACIFIC,
        ];
        $timezones = [];
        foreach ($regions as $region) {
            $timezones = array_merge($timezones, DateTimeZone::listIdentifiers($region));
        }
        $timezone_offsets = array();
        foreach ($timezones as $timezone) {
            $tz = new DateTimeZone($timezone);
            $timezone_offsets[$timezone] = $tz->getOffset(new DateTime());
        }
        // sort timezone by offset
        asort($timezone_offsets);
        $timezone_list = array();
        foreach ($timezone_offsets as $timezone => $offset) {
            $offset_prefix = $offset < 0 ? '-' : '+';
            $offset_formatted = gmdate('H:i', abs($offset));
            $pretty_offset = "UTC${offset_prefix}${offset_formatted}";
            $timezone_list[$timezone] = "(${pretty_offset}) $timezone";
        }
        return $timezone_list;
    }
}