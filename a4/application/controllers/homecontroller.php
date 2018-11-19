<?php

class HomeController extends Controller{


	public function index(){
		 $feed = "http://fox59.com/feed";
		 $rss = new RssDisplay($feed);

        $post = "";

        $feed_data = $rss->getFeedItems(10);
        $channel = $rss->getChannelInfo();

        $feed_title = $channel->title;
        $this->set('title',$feed_title);




        foreach($feed_data as $value) {
            $date = strtotime($value->pubDate);
            $date =  date("l, F j, Y ",$date);
         	$post.= '<h5><a href="'.$value->link.'">'.$value -> title.'</a> <p>('.$date.')</h5><p>'.$value->description.'</p><hr/>';

          }
		$this->set('feed_data',$post);



	}
}


?>
