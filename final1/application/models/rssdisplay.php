<?php

class RssDisplay extends Model {

protected $feed_url;
protected $num_items;

    public function __construct($url){
       parent::__construct();
       $this->feed_url =$url;

    }

    public function getFeedItems($num_feed_items) {

      $items = simplexml_load_file($this->feed_url);
      return $items;
    }


    public function getChannelInfo() {
      $channel=$xmlDoc->getElementsByTagName('channel')->item(0);
      $channel_title = $channel->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
      $channel_link = $channel->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
      $channel_desc = $channel->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
    }

}
