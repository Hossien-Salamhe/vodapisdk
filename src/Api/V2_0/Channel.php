<?php

namespace ZamanTech\Vod\Api\V2_0;

use ZamanTech\Vod\Config\Routes;

final class Channel extends BaseClass
{
    public function showAll(array $options = null)
    {
        $result = $this->createGetRequest(Routes::GET_CHANNELS, $options);

        return $result;
    }

    public function show(string $channelId)
    {
        $result = $this->createGetRequest(Routes::GET_CHANNEL, null, 'channel_id', $channelId);

        return $result;
    }

    public function create(array $channel)
    {
        $result = $this->createPostRequest(
            Routes::CREATE_CHANNEL,
            $channel
        );

        return $result;
    }

    public function update(string $channelId, array $channel)
    {
        $result = $this->createPatchOrDeleteRequest(Routes::UPDATE_CHANNEL, 'channel_id', $channelId, $channel);

        return $result;
    }

    public function delete($channelId)
    {
        $result = $this->createPatchOrDeleteRequest(Routes::DELETE_CHANNEL, 'channel_id', $channelId, null, 'DELETE');

        return $result;
    }
}
