<?php
class HomePage extends Page {

	public static $db = array(
	
	
	);

	public static $has_one = array(
	'SliderImage1' => 'Image',
	'SliderImage2' => 'Image',
	'SliderImage3' => 'Image',
	'SliderImage4' => 'Image'
	);
	/*
	
	function getCMSFields(){
		$fields = parent::getCMSFields();
		
		$fields->addFieldToTab('Root.Main', new UploadField("SliderImage1", "Slider Image 1"));
		$fields->addFieldToTab('Root.Main', new UploadField("SliderImage2", "Slider Image 2"));
		$fields->addFieldToTab('Root.Main', new UploadField("SliderImage3", "Slider Image 3"));
		$fields->addFieldToTab('Root.Main', new UploadField("SliderImage4", "Slider Image 4"));
		
		return $fields;
		
	}
	*/

}
class HomePage_Controller extends Page_Controller {

	
	public static $allowed_actions = array (
	);
	
		
	public function getNewsItems(){
	
		$news = NewsArticle::get()->limit(3);
		
		/*
		$homepageNews = new ArrayList(); 
		
		
		$IDArray = $news->getIDList();
		
		$newsID1 = $IDArray[1];
		$newsID2 = $IDArray[2];
		$newsID3 = $IDArray[3];
		
		$newsArticle1 = $news->byID($newsID1);
		$newsArticle2 = $news->byID($newsID2);
		$newsArticle3 = $news->byID($newsID3);
		
		$homepageNews->add($newsArticle1);
		$homepageNews->add($newsArticle2);
		$homepageNews->add($newsArticle3);
		*/
	    
	    return $news;
	    	    		
	}
	
		
	public function getHealthItem(){
	
		$healthanswer = HealthAnswer::get()->limit(1);
			    
	    return $healthanswer;
	    	    		
	}
	
	public function getSliderItems(){
		$slideritems = SliderItem::get();
		
		return $slideritems;
		
	}
	
	



}