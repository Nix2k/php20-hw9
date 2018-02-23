<?php
	class News
	{
		public $title;
		public $text;
		public $date;
		public $img = null;

		public function __construct($title, $text, $date, $img = null){
			$this->title = $title;
			$this->text = $text;
			$this->date = $date;
			$this->img = $img;
		}

		public function getTitle(){
			return $this->title;
		}

		public function getText(){
			return $this->text;
		}

		public function getDate(){
			return $this->date;
		}

		public function getImg(){
			return $this->img;
		}

		public function printThis(){
			echo '<article>';
			echo "<h4>$this->title</h4>";
			echo '<div class="news-body">';
			if (!empty($this->img)) {
				echo "<img src='./img/$this->img' alt='$this->title'>";
			}
			echo "<div class='news-text'>$this->text</div>";
			echo '</div>';
			echo '</article>';
		}

	}
?>
