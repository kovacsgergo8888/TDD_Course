<?php


namespace StackOverflowProvider\Api\Builder;


abstract class Builder
{
    const API_URL_BASE= "https://api.stackexchange.com/2.2/";

    /**
     * @var string
     */
    protected $apiUrlQuery;

    /**
     * @param array $query
     * @return string
     */
    public function build($query)
    {
        $url = self::API_URL_BASE;

        $url .= $this->getApiUrlQuery() . "?";

        $params = [];
        foreach ($query as $param => $value) {
            $params[] = $param . "=" . $value;
        }

        return $url . implode("&", $params);
    }

    /**
     * @return mixed
     */
    public function getApiUrlQuery()
    {
        return $this->apiUrlQuery;
    }
}
