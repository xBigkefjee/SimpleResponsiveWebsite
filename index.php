<!-- live demo can be previewed here: https://www.xbigkefjee.cf/simpleresponsivewebsite -->


<!DOCTYPE html>
<html>
<head>
	<title>Responsive test</title>
	<meta name="viewport" content="width=device-width,, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<style>
		.container {
			width: 960px;
			margin: 0px auto;
			background-color: rgb(255, 0, 255);
		}
		
		.left {
			width: 700px;
			float: left;
			background-color: yellow;
		}
		
		.right {
			width: 260px;
			float: left;
			background: orange;
		}
		
		@media screen and (max-width: 959px) {
		/* if the screen is < 959px (see width set above for .container -1) the mid section will take up 100% of the screen, while the left secion gets 70% of the width of the screen and the right secion gets 30% of the width of the screen resulting in the .container to be placed in the 'first row' and following the .left and .right secions on the 'second row'. */
			.container {
				width: 100%;
			}
			.left {
				width: 70%;
			}
			.right {
				width: 30%;
			}
		}
		
		@media screen and (max-width: 560px) {
		/* if the screen is < 560px the left section will take up 100% of the width and the right secion will take up 100% up the width resulting them to be placed under eachother */
			.left {
				width: 100%;
			}
			.right {
				width: 100%;
			}
		}
		
		@media screen and (max-width: 320px) {
		/* if the screen is < 320px the container will be 320px width, so the user has to scroll to the left / right */
			.container {
				width: 320px;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="center">
		  <p> This lorem ipsum is always in center. <p>
		  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ipsum nisl, vehicula vel est a, egestas vestibulum neque. Quisque euismod, tellus in ornare egestas, nunc nisl ullamcorper neque, in ultricies nisi magna quis tellus. Phasellus imperdiet lorem massa, quis tincidunt metus commodo et. Quisque eu est in erat molestie lacinia eu id dolor. Nullam nisi purus, congue et nibh a, commodo ultrices diam. Maecenas luctus, elit nec accumsan vulputate, turpis nunc lacinia urna, sed scelerisque ante diam sed massa. Mauris et commodo ante, non molestie nisl. In luctus interdum mi, nec pretium augue ornare at. Suspendisse vel sem sodales, interdum massa ut, gravida libero. Praesent auctor a lorem viverra pretium. Aenean ultricies gravida dui ac laoreet. Donec viverra vestibulum semper. Aliquam pulvinar, lectus quis maximus lacinia, nibh enim viverra elit, sit amet placerat dolor augue efficitur orci. Nullam dictum commodo risus, at congue eros lobortis eget. Phasellus nec mauris porttitor, sagittis odio sed, congue quam. In a blandit dui. Phasellus condimentum vitae metus et rhoncus. Donec ut metus nec diam volutpat fringilla euismod nec enim. Vestibulum hendrerit leo ligula, eu mattis neque pretium a. Suspendisse ornare nibh venenatis, vulputate libero ac, convallis orci. Integer pharetra sollicitudin erat quis volutpat. Mauris ex neque, posuere id lobortis eget, pharetra eu orci. </p>
		</div>
		<div class="left">
			<p> This lorem ipsum "p" element below is responsive and will appear on the left on computers and/or large tablets but on smartphones will appear in the center under the first set of lorem ipsum. <p>
		  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ipsum nisl, vehicula vel est a, egestas vestibulum neque. Quisque euismod, tellus in ornare egestas, nunc nisl ullamcorper neque, in ultricies nisi magna quis tellus. Phasellus imperdiet lorem massa, quis tincidunt metus commodo et. Quisque eu est in erat molestie lacinia eu id dolor. Nullam nisi purus, congue et nibh a, commodo ultrices diam. Maecenas luctus, elit nec accumsan vulputate, turpis nunc lacinia urna, sed scelerisque ante diam sed massa. Mauris et commodo ante, non molestie nisl. In luctus interdum mi, nec pretium augue ornare at. Suspendisse vel sem sodales, interdum massa ut, gravida libero. Praesent auctor a lorem viverra pretium. Aenean ultricies gravida dui ac laoreet. Donec viverra vestibulum semper. Aliquam pulvinar, lectus quis maximus lacinia, nibh enim viverra elit, sit amet placerat dolor augue efficitur orci. Nullam dictum commodo risus, at congue eros lobortis eget. Phasellus nec mauris porttitor, sagittis odio sed, congue quam. In a blandit dui. Phasellus condimentum vitae metus et rhoncus. Donec ut metus nec diam volutpat fringilla euismod nec enim. Vestibulum hendrerit leo ligula, eu mattis neque pretium a. Suspendisse ornare nibh venenatis, vulputate libero ac, convallis orci. Integer pharetra sollicitudin erat quis volutpat. Mauris ex neque, posuere id lobortis eget, pharetra eu orci. </p>
		</div>
		<div class="right">
			<p> This lorem ipsum "p" element below is responsive and will appear on the right on computers and/or large tablets but on smartphones will appear in the center under the second set of lorem ipsum. <p>
		  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ipsum nisl, vehicula vel est a, egestas vestibulum neque. Quisque euismod, tellus in ornare egestas, nunc nisl ullamcorper neque, in ultricies nisi magna quis tellus. Phasellus imperdiet lorem massa, quis tincidunt metus commodo et. Quisque eu est in erat molestie lacinia eu id dolor. Nullam nisi purus, congue et nibh a, commodo ultrices diam. Maecenas luctus, elit nec accumsan vulputate, turpis nunc lacinia urna, sed scelerisque ante diam sed massa. Mauris et commodo ante, non molestie nisl. In luctus interdum mi, nec pretium augue ornare at. Suspendisse vel sem sodales, interdum massa ut, gravida libero. Praesent auctor a lorem viverra pretium. Aenean ultricies gravida dui ac laoreet. Donec viverra vestibulum semper. Aliquam pulvinar, lectus quis maximus lacinia, nibh enim viverra elit, sit amet placerat dolor augue efficitur orci. Nullam dictum commodo risus, at congue eros lobortis eget. Phasellus nec mauris porttitor, sagittis odio sed, congue quam. In a blandit dui. Phasellus condimentum vitae metus et rhoncus. Donec ut metus nec diam volutpat fringilla euismod nec enim. Vestibulum hendrerit leo ligula, eu mattis neque pretium a. Suspendisse ornare nibh venenatis, vulputate libero ac, convallis orci. Integer pharetra sollicitudin erat quis volutpat. Mauris ex neque, posuere id lobortis eget, pharetra eu orci. </p>
		</div>
	</div>
</body>
</html>
