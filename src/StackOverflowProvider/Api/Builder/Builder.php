<?php


namespace StackOverflowProvider\Api\Builder;


class Builder
{
    const API_URL_BASE= "https://api.stackexchange.com/2.2/";
    const API_URL_FEATURED = "questions/featured";
    const API_URL_ANSWERS = "questions/{ids}/answers";

    public function build($type, $query)
    {
        $url = self::API_URL_BASE;

        switch ($type) {
            case 'Featured':
                $url .= self::API_URL_FEATURED . "?";
        }

        $params = [];
        foreach ($query as $param => $value) {
            $params[] = $param . "=" . $value;
        }

        return $url . implode("&", $params);
    }
}
