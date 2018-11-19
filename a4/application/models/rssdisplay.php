<?php
ini_set('display_errors', 1);
class RssDisplay extends Model {

	protected $feed_url;
	protected $num_items;

    public function __construct($url){
		parent::__construct();
		
		$this->feed_url = $url; 
    }
	
	public function getFeedItems($num_feed_items ) {		

		$this->num_feed_items = $num_feed_items;
        $rss = simplexml_load_file($this->feed_url);

        $i = 0;
        $rss_array = array();

        if($this->num_feed_items > 0) {
            foreach($rss->channel->item as $feed_data) {
                $rss_array[] = $feed_data;
                if($i > $num_feed_items ) {
                    break;
                }
                $i++;
            }
			//return feeds 
           return $rss_array;
        }
        
    }

    public function getChannelInfo() {

        $rss = simplexml_load_file($this->feed_url);
        return ($rss->channel);

    }

}

