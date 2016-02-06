<div class="section">
	<div class="container">
		<div class="col span6">
			<button onclick="randomLink();"><p>tell me the truth &rarr;</p></button>

			    <script type="text/javascript">
			
			    var randomLink = function () {
			
			        // first create an array of links
			        var links = [
			            "thetruthaboutyouand.me/1",
			            "thetruthaboutyouand.me/2",
			            "thetruthaboutyouand.me/3",
			            "thetruthaboutyouand.me/4",
			            "thetruthaboutyouand.me/5",
			            "thetruthaboutyouand.me/6",
			            "thetruthaboutyouand.me/7",
			            "thetruthaboutyouand.me/8",
			            "thetruthaboutyouand.me/9",
			            "thetruthaboutyouand.me/10",
			            "thetruthaboutyouand.me/11",
			            "thetruthaboutyouand.me/12",
			            "thetruthaboutyouand.me/13",
			            "thetruthaboutyouand.me/14",
			            "thetruthaboutyouand.me/15",
			            "thetruthaboutyouand.me/16",
			            "thetruthaboutyouand.me/17",
			            "thetruthaboutyouand.me/18",
			            "thetruthaboutyouand.me/19",
			            "thetruthaboutyouand.me/20",
			            "thetruthaboutyouand.me/21",
			            "thetruthaboutyouand.me/22",
			            "thetruthaboutyouand.me/23"
			        ];
			
			        // then work out the maximum random number size
			        // by counting the number of links in the array
			        var max = (links.length)
			
			        // now generate a random number
			        var randomNumber = Math.floor(Math.random()*max);
			
			        // use that random number to retrieve a link from the array
			        var link = links[randomNumber];
			
			        // change the location of the window object
			        window.location = "http://" + link;
			    }
			    </script>
		</div>
	</div>
</div>